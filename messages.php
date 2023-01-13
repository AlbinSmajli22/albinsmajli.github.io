<?php

include_once "config.php";

if (isset($_POST['submit'])) {

    $emri = $_POST ['emri'];
    $mbiemri = $_POST ['mbiemri'];
    $email = $_POST ['email'];
    $comment = $_POST ['comment'];

    $sql="INSERT INTO messages (emri, mbiemri, email, comment) VALUES(:emri, :mbiemri, :email, :comment)";

    $prep= $con->prepare($sql);


    $prep->bindParam(':emri',$emri);
    $prep->bindParam(':mbiemri',$mbiemri);
    $prep->bindParam(':email',$email);
    $prep->bindParam(':comment',$comment);

    $prep->execute();

    header('Location:./index.php');
}

?>