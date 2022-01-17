<?php
    session_start();
    require_once('dbconfig.php');
    $error = false;
if(isset($_POST['action']) && $_POST['action'] == 'storelogin'){
    // $email = strip_tags(htmlspecialchars($_POST['mEmail']));
    // $password = strip_tags(htmlspecialchars($_POST['sPassword']));
    $email = filter_input(INPUT_POST,'mEmail', FILTER_SANITIZE_EMAIL);
    if(false == $email){
        $error =  true;
        echo json_encode( ["status" => 0, "msg" => "Enter valid Email"] );
        exit;
    }
    $password = filter_input(INPUT_POST,'sPassword', FILTER_SANITIZE_STRING);
    if(false == $password){
        $error =  true;
        echo json_encode( ["status" => 0, "msg" => "Enter valid Password"] );
        exit;
    }
    $rememberMe = isset($_POST['remember'])? 1:0;

    if(!$error){
        $dbpassword = md5($password);
        $stmt = $con->prepare("SELECT * from store where mEmail = '$email' AND password = '$dbpassword'");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $row = $stmt->fetch();
        if($stmt->rowCount() > 0){
            if($row['activated'] == 1){
                if($rememberMe == 1){
                setcookie('mEmail', $email);
                setcookie('password', base64_encode($password));
                }
                $_SESSION['allowed'] = session_id();
                $_SESSION['id'] = $row['store_id'];
                $_SESSION['bName'] = $row['brand_name'];
                $_SESSION['sName'] = $row['store_name'];
                $_SESSION['logo'] = $row['brand_logo'];
                echo json_encode( ["status" => 1, "msg" => "Login Successful"] );
                // echo "success";
            }else{
                echo json_encode( ["status" => 0, "msg" => "Please check your mail to activate your Store"] );
                // echo "activate";
            }
        }else{
            echo json_encode( ["status" => 0, "msg" => "Invalid Email or Password"] );
            // echo "incorrect";
        }
    }
}
?>