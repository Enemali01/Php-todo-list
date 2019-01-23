<?php
session_start();
if (!empty($_GET['id'])){
    $id = $_GET['id'];
    unset($_SESSION['name'][$id - 1]);
    header('location: index.php');

}else{
    echo "Task deleted from list";
}