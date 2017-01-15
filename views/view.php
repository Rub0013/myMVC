<?php
    class view
    {
        public function render($name)
        {
            include $name.'.php';
        }
    }
?>