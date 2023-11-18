<?php

if(isset($_POST['uname']) && isset($_POST['passsword'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index2.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index2.php?error=Password is required");
        exit();
    }else{
        echo "Valid input";
    }

}else{
    header("Location: index2.php");
    exit();
}
?>