<?
    session_start();
    
    
        setcookie('gpa', $_SESSION['gpa'], time() + 60 * 60 * 3);
        if (isset($_COOKIE['gpa'])) {
            echo $_COOKIE['gpa'];
        } else {
            echo "YOU SUCK";
        }
        header('location:../index.php');
    
?>