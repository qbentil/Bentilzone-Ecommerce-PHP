<?php 
    function logout(){
        if(isset($_GET['logout'])){
            session_start();
            ob_start();
            session_unset();
            session_destroy();
            header('location: ../home/login.php');
        }
    }
    if(isset($_GET['storelogin'])){
        header('location: ../home/store_login.php');
    }

    // function display($table, $content){
    //     require "./includes/dbconfig.php";
    //     $stmt = $con->prepare("SELECT * FROM $table order by $content ASC");
    //     $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    //     $stmt->execute();
    //     while($row = $stmt->fetch()){
    //         echo "<li><a href='#' class='dropdown-item'>";
    //         echo $row[$content]; 
    //         echo "</a></li>";
    //     }
    // }
?>