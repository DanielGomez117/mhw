<?php
session_start();

$_SESSION['nickOrEmail']=$_REQUEST['nickOrEmail'];
$_SESSION['clave']=md5($_REQUEST['clave']);
?>

<?php 
    $servername = "localhost";
    $username = "u529558136_formu";
    $password = "trebujena";
    $dbname = "u529558136_formu";
    $conn = mysqli_connect($servername,$username,$password,$dbname) or die("Problemas con la conexión");
	
    if(!empty($_POST["nickOrEmail"])) {
        $result = mysqli_query($conn,"SELECT * FROM usuarios WHERE Usuario_nick='" . $_POST["nickOrEmail"] . "' and Usuario_clave = '". md5($_POST["clave"])."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            //$_SESSION["user_id"] = $row['user_id'];
            echo "Te has conectado correctamente. Redireccionando...";
            echo "<html><META HTTP-EQUIV='refresh' 
            content='5;URL=principal.php'></html>";
            //header("Location: panelUsuario.php");
	    } else {
            echo "El usuario o la contraseña es incorrecta. Redireccionando...";
            echo "<html><META HTTP-EQUIV='refresh' 
            content='5;URL=login.php'></html>";
            //header("Location: login.php");
        }
    } else {
        echo "Error";
    }
    mysqli_close($conn);

?>