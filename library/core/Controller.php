<?php
/**
 * class: Controller
 *
 * Controller handling class
 *
 * @author Johnathan Tiong <johnathan.tiong@gmail.com>
 * @since v1.0.2014.09.01
 * @version v1.1.2025.06.21
 */
namespace spark\Core;

class Controller
{
    protected $viewOpts = [];
    protected $viewData = [];
    protected $view;

    function __construct()
    {
        // default View Options
        $this->viewOpts['page']['layout']  = 'default';     // page layout template to use (empty to make a landing page)
        $this->viewOpts['page']['content'] = 'home/index';  // page's content php file location
        $this->viewOpts['page']['title']   = 'Default';     // browser title for the page

        $this->viewOpts['menu']['enabled'] = true;
        $this->viewOpts['menu']['content'] = 'main';
        $this->viewOpts['menu']['section'] = [];
        $this->viewOpts['menu']['style']   = 'solid';

        $this->viewOpts['sidebar']['enabled'] = false;
        $this->viewOpts['sidebar']['name']    = '';
        $this->viewOpts['sidebar']['content'] = '';
        $this->viewOpts['sidebar']['section'] = [];

        $this->viewOpts['breadcrumbs'] = [];

        $this->viewData = [];
        $this->view = new View();
    }
}
