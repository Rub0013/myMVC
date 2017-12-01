<?php
  class route
  {
      public function __construct()
      {
          if(isset($_GET['url']))
          {
              $url=$_GET['url'];
          }
          else
          {
              $url=null;
          }
          $url = rtrim($url,'/');
          $url = explode('/',$url);
          if(empty($url[0]))
          {
              include 'controllers/home.php';
              $main=new home();
              return false;
          }
          $file='controllers/'.$url[0].'.php';
          if(file_exists($file))
          {
            include $file;
          }
          else
          {
            include "controllers/error_page.php";
            $error=new error_page();
            return false;
          }
          $controller= new $url[0];
          if(isset($url[1]))
          {
            if(method_exists($controller,$url[1]))
            {
               $controller->{$url[1]}();  
            }
            else
            {
                include "controllers/error_page.php";
                $error=new error_page();
                return false;
            }
          }
      }
  }