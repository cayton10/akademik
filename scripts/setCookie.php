<?
    session_start();
    
        setcookie('gpa', $_SESSION['gpa'], time() + 60 * 60 * 3);
        header('location:../index.php');
    
?>