<?php
include("CONEXaO.PHP");

$Nome = $_POST["Nome"];
$Sobrenome = $_POST ["Sobrenome"];
$Birthday = $_POST ["Birthday"];
$Email = $_POST["Email"];
$Username = $_POST["Username"];
$Senha = $_POST["Password"];
$Equipe = $_POST["Team"];

$sql = "INSERT INTO connectesports ( Name, Surname, Birthday, Email, Username, Password, Team) VALUES ('$Nome', '$Sobrenome', 
'$Birthday', '$Email', '$Username', '$Senha', '$Equipe')";

if($conn -> query($sql) === TRUE){
   echo "Seu usuário foi registrado com sucesso!";
}else{
    echo "Erro :/ Usuário não registrado" . $sql . "<br>" . $conn->error;
};


$conn->close();
?>