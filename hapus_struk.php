<?php
    $connect = mysqli_connect('localhost', 'root', '', 'sepatu_online');

    $query = mysqli_query($connect, "DELETE FROM struk");
        header('Location: home.php');
    
    
?>