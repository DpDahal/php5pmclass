<?php

require_once('connection.php');

if (!empty($_POST) && !empty($_FILES) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $country = $_POST['country'];
    $gender = isset($_POST['gender']);
    $language = $_POST['language'];
    $description = $_POST['description'];

    $ext = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
    $imageName = md5(microtime()) . '.' . $ext;
    $tmpName = $_FILES['upload']['tmp_name'];
    $error = $_FILES['upload']['error'];
    if (!file_exists('userimages')) {
        mkdir('userimages');
    }

    $uploadPath = 'userimages/';

    if ($error !=0) {
        $_SESSION['error'] = "There was a problems";
        header('Location:index.php');
        exit();

    }else{
        if (move_uploaded_file($tmpName, $uploadPath . $imageName)) {
            $image = $imageName;

        }
    }

    $query = "INSERT INTO tbl_students(name,email,password,gender,language,country,image,description)
          VALUES('$name','$email','$password','$gender','$language','$country','$image','$description')";
    $result = mysqli_query($conn, $query);
    if($result==true){
        $_SESSION['success'] = "Data was inserted";
        header('Location:users.php');
        exit();
    }else{
        $_SESSION['error'] = "data not inserted";
        header('Location:index.php');
        exit();
    }


} else {
    $_SESSION['error'] = "invalid access";
    header('Location:index.php');
    exit();
}

