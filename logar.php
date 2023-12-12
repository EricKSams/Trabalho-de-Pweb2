<?php include("CONEXaO.PHP");

$Username = $_POST["Username"];
$Senha = $_POST["Password"];


$sql = "SELECT * FROM connectesports WHERE Username = '$Username' and Password = '$Senha'";

$result=$conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION["id"] = $row['id'];
    $_SESSION["Username"] = "$Username";
    $_SESSION["Password"] = "$Password";
    header("Location: Welcome.php");    
}else{
    echo "Erro :/ Usuário não encontrado";
};


?>