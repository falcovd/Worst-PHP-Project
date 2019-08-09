<?php

$action = $_REQUEST['action'];

$config = include('config/config.php');

if(isset($action)){
    foreach($config["modules"] as $module){
        if($action == $module){
            include("modules/" . $module . "/start.php");
        }
    }
}