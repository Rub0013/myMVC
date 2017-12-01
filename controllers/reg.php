<?php
    include 'controller.php';
    class reg extends controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->view->render('reg');
        }
    }