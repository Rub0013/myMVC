<?php
    $email = htmlspecialchars ($_POST["email"]);
    $pass = htmlspecialchars ($_POST["pass"]);
    class controller_reg
    {
        public static function rrr($mail,$password)
        {
            if($_POST['q']=='registrate')
            {
                if($mail+$password>0)
                {
                    return 'registered';
                }
            }  
        }    
    }
    echo controller_reg::rrr($email,$pass);