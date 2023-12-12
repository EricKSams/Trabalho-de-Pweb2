<?php
include("CONEXaO.PHP");

if(!isset($_SESSION)){
    session_start();
};

$Destiny = $_POST["destiny"];
$Mensage = $_POST["message"];
$SendDate = $_POST["SendDate"];

$Sender = $_SESSION["Username"];
$id = $_SESSION["id"];

$sql = "INSERT INTO mensagecard (remetente, destinatario, content, datesend) VALUES ('$Sender', '$Destiny', '$Mensage', '$SendDate')";
if($conn -> query($sql) === TRUE){
    echo "Sua mensagem foi enviada com sucesso!";
 }else{
     echo "Erro :/ Mensagem não enviada " . $sql . "<br>" . $conn->error;
 }

 $conn->close();
?>