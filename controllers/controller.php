<?php
    include 'views/view.php';
    class controller
    {
        public function __construct()
        {
            $this->view=new view();
            $this->view->render('header');
        }
    }
?>