<?php
session_start();

$_SESSION['nickOrEmail']=$_REQUEST['nickOrEmail'];
$_SESSION['clave']=md5($_REQUEST['clave']);
?>

<?php 
    $servername = "sql201.phpzilla.net";
    $username = "phpz_22038491";
   $password = "1d2a3n4y";
    $dbname = "phpz_22038491_formu";
    $conn = mysqli_connect($servername,$username,$password,$dbname) or die("Problemas con la conexión");
	
    if(!empty($_POST["nickOrEmail"])) {
        $result = mysqli_query($conn,"SELECT * FROM usuarios WHERE Usuario_bloqueado=0 and Usuario_nick='" . $_POST["nickOrEmail"] . "' and Usuario_clave = '". md5($_POST["clave"])."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            //$_SESSION["user_id"] = $row['user_id'];
            echo "Te has conectado correctamente. Redireccionando...";
            echo "<html><META HTTP-EQUIV='refresh' 
            content='3;URL=principal.php'></html>";
            //header("Location: panelUsuario.php");
	    } else {
            echo "El usuario o la contraseña es incorrecta. Redireccionando...";
            echo "<br>Por favor asegurese que ha validado la cuenta. Gracias.";
            echo "<html><META HTTP-EQUIV='refresh' 
            content='3;URL=login.php'></html>";
            //header("Location: login.php");
        }
    } else {
        echo "Error";
    }
    mysqli_close($conn);

?>