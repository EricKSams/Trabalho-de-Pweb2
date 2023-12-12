<?php include("CONEXaO.PHP");

$Nome = $_POST["Nome"];
$Sobrenome = $_POST ["Sobrenome"];
$Birthday = $_POST ["Birthday"];
$Email = $_POST["Email"];
$Username = $_POST["Username"];
$Senha = $_POST["Password"];
$Equipe = $_POST["Team"];

$sql = "DELETE FROM connectesports WHERE ";
if($conn -> query($sql) === TRUE){
   echo "Seu usuário foi deletado com sucesso!";
}else{
    echo "Erro :/ Usuário não deletado" . $conn->error;
};

$conn->close();
?>
