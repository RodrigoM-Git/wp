<?php 
 include_once('tools.php'); 

if(empty($_SESSION['cart'])){
    header('Location: index.php');
}else{
    
}
    showPostDetails();
    showSessionDetails();
?>
<html>
    <form action = "index.php" method = "post">
    <input type = "submit" name = "clear-session" value = "clear session">
    </form>
</html>
<?php
    printMyCode();
?>