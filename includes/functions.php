<?php 
session_start();
ob_start();
require('includes/conect.php');
// fuction redirect 

function query($sql){
    global $con;
    return mysqli_query($con,$sql);
}
function redirect($page){
    header('location:'.$page);
}
function logout(){
    $_SESSION['log'] =false;
    session_destroy();
    redirect('index.php');
}