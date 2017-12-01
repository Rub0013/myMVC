<?php
    class models_database
    {
        public $db;
        public  function __construct($host,$user,$pass,$db)
        {
            $this->db=mysqli_connect($host,$user,$pass,$db);
            if(!$this->db)
            {
                exit('Connection error');
            }
            mysqli_set_charset($this->db,"utf8");
            return $this->db;
        }
        public  function get_all_db($table)
        {
            $sql = "SELECT * FROM $table";
            $res = mysqli_query($this->db,$sql);
            if(!$res)
            {
                return false;
            }
            for($i=0;$i<mysqli_num_rows($res);$i++)
            {
                $row[] = mysqli_fetch_array($res,MYSQLI_ASSOC);
            }
            return $row;
        }
    }
