
        <?php
          "sql201.phpzilla.net"
          $username = "phpz_22038491";
         $password = "1d2a3n4y";
          $dbname = "phpz_22038491_formu";
        
        //$servername = "localhost";
        //$username = "root";
        //$password = "";
        //$dbname = "login";
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        } 
        
        $password = md5($_POST["clave"]);
        $email = $_POST["email"];

        $sql = "INSERT INTO usuarios (Usuario_nick, Usuario_email, Usuario_clave, Usuario_bloqueado)
        VALUES ('$_POST[nickOrEmail]','$email','$password',1)";

        if ($conn->query($sql) === TRUE) {
            echo "<html>
            <body style=background-color:#e2dedb>
            <center>Usuario registrado. Revise su email para verificar su cuenta.</center>
            </html>";
            $mensaje = "
            <html>
            <head><title>Verificación de cuenta</title></head>
            <style>
            a.button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;
            
                text-decoration: none;
                color: initial;
            }
            </style>
            <body>
            Pulse en el siguiente botón para verificar su cuenta y acceder a nuestra web
            <hr>
            <a href='http://danielgomezferrer.hol.es/MHW/verificarCuenta.php?codigoVerificacion=$password' class='button'>Verificar</a>
            </body>
            </html>";
            $mensaje = wordwrap($mensaje, 70, "\r\n");
            //$cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras = 'Content-type: text/html; charset=utf-8' . "\r\n";
            mail($email, 'Verificación de cuenta', $mensaje, $cabeceras);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        ?>
