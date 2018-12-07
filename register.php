<?php 
include 'config.php';

$id_user = $_POST['id_user']; 
$noktp = $_POST['noktp'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
 
 $sql = "INSERT INTO users (id_user,noktp,fullname, username, email,gender,password) 
            VALUES (:id_user,:noktp,:fullname, :username, :email,:gender, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
    	":id_user" => $id_user,
        ":noktp" => $noktp,
        ":fullname" => $fullname,
        ":username" => $username,
        ":email" => $email,
        ":gender" => $gender,
        ":password" => $password
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
    if($saved){
    header("Location: index.html");
}
?>