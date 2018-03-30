<?php
    session_start();
?>
<?php 
        $servername = "localhost";
        $username = "u529558136_formu";
        $password = "trebujena";
        $dbname = "u529558136_formu";
        
       // $servername = "localhost";
        //$username = "root";
        //$password = "";
       // $dbname = "login";
        

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 

$sqlSelect="SELECT * FROM usuarios where Usuario_bloqueado=0 and Usuario_clave='$_GET[codigoVerificacion]'";

if ($conn->query($sqlSelect) === TRUE) {
    echo "Su cuenta ya ha sido desbloqueada o no existe";
    echo "<html><META HTTP-EQUIV='refresh' 
            content='5;URL=login.php'></html>";
} else {
    

$sql = "UPDATE usuarios SET Usuario_bloqueado=0, Usuario_token_aleatorio='$_GET[codigoVerificacion]' where Usuario_clave='$_GET[codigoVerificacion]'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //    echo "Nombre: " . $row["Usuario_nick"]. ", Contrasena: " . $row["Usuario_clave"]. "<br>";
    //}
    echo "Su cuenta ha sido verificada correctamente";
    echo "<html><META HTTP-EQUIV='refresh' 
            content='5;URL=login.php'></html>";
} else {
    echo "Su cuenta no ha podido ser verificada";
    echo "<html><META HTTP-EQUIV='refresh' 
            content='5;URL=login.php'></html>";
}
}

$conn->close();

?>