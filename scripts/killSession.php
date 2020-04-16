<?
    session_start();
    //remove cookie
    setcookie('gpa','', time()-3600, '/');
    session_destroy();
    
    header("location:../index.php");
    ?>