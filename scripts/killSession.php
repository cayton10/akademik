<?
    session_start();
    //remove cookie
    setcookie('gpa','', time() - 60*60*24*365, '/');
    session_destroy();
    
    
    header("location:../index.php");
    ?>