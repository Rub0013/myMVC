<?php
    include 'controller.php';
    class home extends controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->view->render('section_main');
            $this->view->render('footer');
        }
        public function page()
        {
            echo 'ok';
        }
    }
?>