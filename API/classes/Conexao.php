<?php
    include '../API/constants.php';

    class Conexao{
        public $con;
        public function __construct() {
            $this->con = new PDO('mysql: host='.NAME_SERVER.'; dbname='.NAME_DB.';',USER_DB,PWD_DB);
        }
    }