<?php include("CONEXaO.PHP");

if(!isset($_SESSION)){
    session_start();
};

$Nome = $_POST["Nome"];
$Sobrenome = $_POST["Sobrenome"];
$Birthday = $_POST["Birthday"];
$Email = $_POST["Email"];
$Username = $_POST["Username"];
$Senha = $_POST["Password"];
$Equipe = $_POST["Team"];

$Nome = $_SESSION["Username"];
$id = $_SESSION["id"];

$sql = "UPDATE connectesports SET  Name = '$Nome', Surname = '$Sobrenome', Birthday = '$Birthday', Email = '$Email', Username = '$Username', Password = '$Senha', Team = '$Equipe' WHERE id";
if ($conn->query($sql) === TRUE) {
    echo "Seu usuário foi atualizado com sucesso!";
} else {
    echo "Erro :/ Usuário não atualizado" . $conn->error;
};

$conn->close();
