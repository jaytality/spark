<?php

// Controller: Home

namespace spark\Controllers;

use \spark\Core\Controller as Controller;

use \R as R;

class Home extends Controller
{
    function index($data = [])
    {
		$this->viewOpts['page']['content'] = 'home/index';
        $this->view->load($this->viewOpts, $this->viewData);
    }
}

