<?php

// check if cookie exists with a matching session
if (isset($_COOKIE['sarahtiong'])) {
    $cookie = explode(':', $_COOKIE['sarahtiong']);
    if (!empty($cookie)) {
        $session = R::load('users_sessions', $cookie[1]);
        if ($session->id != 0) {
            $user = R::load('users', $session['user']);

            $_SESSION = [
                'auth' => true,
                'user' => [
                    'id'    => $user->id,
                    'name'  => $user->username,
                    'email' => $user->email
                ]
            ];

            $_SESSION['owner'] = ($user->email == ADMINUSER) ? true : false;

            // we also re-set the cookie!
            setcookie('sarahtiong', session_id().':'.$session->id, time() + (3600 * 24 * 365 * 1000), "/");    // cookie is set for 1000 years!
        }
    }
}

// create a root superuser if none exists
$superuser = R::findOne('users', ' email = ?', [ ADMINUSER ]);
if($superuser == null) {
    echo '<pre>';
    echo 'searching for superuser account...' . PHP_EOL;
    echo 'none found, creating superuser...' . PHP_EOL;
    $superuser = R::dispense('users');
    $superuser['created']  = time();
    $superuser['updated']  = null;
    $superuser['username'] = 'admin';
    $superuser['email']    = ADMINUSER;
    $superuser['password'] = password_hash(ADMINPW, PASSWORD_BCRYPT);
    $superuser['enabled']  = 1;
    R::store($superuser);
    echo 'superuser created!' . PHP_EOL;
    echo '</pre>';
}
