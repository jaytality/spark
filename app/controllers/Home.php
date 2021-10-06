<?php

// Controller: Home

namespace Controllers;

use Core\Controller as Controller;
use Models\User as User;
use Models\Role as Role;

use \R as R;

class Home extends Controller
{
    public function getRequest()
    {
        $this->viewOpts['page']['content'] = 'home/index';
        $this->view->load($this->viewOpts, $this->viewData);
        return;
    }

    public function postRequest()
    {
        if (empty($_POST)) {
            echo "no data!";
            return;
        } else {
            echo '<h1>POST request received!</h1>';
            echo '<p>here is the data you sent:</p>';
            echo '<pre>';
            echo print_r($_POST, true);
            echo '</pre>';
        }
    }

    public function apiGetRequest()
    {
        // assign $data to the incoming POST data
        $data = [
            "hello" => "world!"
        ];

        echo 'GET REQUEST: ' . '<pre>' . print_r($data, true);
        return;
    }

    public function apiPostRequest()
    {
        // assign $data to the incoming POST data
        $data = json_decode(file_get_contents('php://input'), true);

        echo 'RECEIVED: ' . '<pre>' . print_r($data, true);
        return;
    }
}
