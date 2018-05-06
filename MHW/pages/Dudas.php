<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>MHW | Sugerencias</title>
<link rel="shortcut icon" href="../favicon.png">
<meta charset="UTF-8">
<head>
  <style>
   body {
     background-color: #91ced4;
     margin-top:150px;
  }
  body * {
    box-sizing: border-box;
    
  }
  
  .header {
    background-color: #327a81;
    color: white;
    font-size: 1.5em;
    padding: 1rem;
    text-align: center;
    text-transform: uppercase;
  }
  
  img {
    border-radius: 50%;
    height: 60px;
    width: 60px;
  }
  
  .table-users {
    border: 1px solid #327a81;
    border-radius: 10px;
    box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
    max-width: calc(100% - 2em);
    margin: 1em auto;
    overflow: hidden;
    width: 1000px;
  }
  
  table {
    width: 100%;
  }
  table td,
  table th {
    color: #2b686e;
    padding: 10px;
  }
  table td {
    text-align: center;
    vertical-align: middle;
  }
  table td:last-child {
    font-size: 0.95em;
    line-height: 1.4;
    text-align: left;
  }
  table th {
    background-color: #daeff1;
    font-weight: 300;
    text-align:center;
  }
  table tr:nth-child(2n) {
    background-color: white;
  }
  table tr:nth-child(2n + 1) {
    background-color: #edf7f8;
  }
  
  @media screen and (max-width: 700px) {
    table,tr,td {
      display: block;
    }
  
    td:first-child {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      width: 100px;
      
    }
    td:not(:first-child) {
      clear: both;
      margin-left: 100px;
      padding: 4px 20px 4px 90px;
      position: relative;
      text-align: left;
    
    }
    td:not(:first-child):before {
      color: #91ced4;
      content: "";
      display: block;
      left: 0;
      position: absolute;
      
    }
    td:nth-child(2):before {
      content: "Nombre:";

    }
    td:nth-child(3):before {
      content: "Email:";
    }
    td:nth-child(4):before {
      content: "Pregunta:";
    }
    td:nth-child(5):before {
      content: "Fecha:";
    }
  
    tr {
      padding: 10px 0;
      position: relative;
      
    }
    tr:first-child {
      display: none;
      margin-left:1em;
    }
    
  }
  @media screen and (max-width: 500px) {
    .header {
      background-color: transparent;
      color: black;
      font-size: 2em;
      font-weight: 700;
      padding: 0;
      text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
    }
  
    img {
      border: 3px solid;
      border-color: #daeff1;
      height: 100px;
      margin: 0.5rem 0;
      width: 100px;
    }
  
    td:first-child {
      background-color: #c8e7ea;
      border-bottom: 1px solid #91ced4;
      border-radius: 10px 10px 0 0;
      position: relative;
      top: 0;
      -webkit-transform: translateY(0);
              transform: translateY(0);
      width: 100%;
    }
    td:not(:first-child) {
      margin: 0;
      padding: 5px 1em;
      width: 100%;
    }
    td:not(:first-child):before {
      font-size: 0.8em;
      padding-top: 0.3em;
      position: relative;
    }
    td:last-child {
      padding-bottom: 1rem !important;
    }
  
    tr {
      background-color: white !important;
      border: 1px solid #6cbec6;
      border-radius: 10px;
      box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
      margin: 0.5rem 0;
      padding: 0;
    }
  
    .table-users {
      border: none;
      box-shadow: none;
      overflow: visible;
    }
  }
  
  </style>
</head>

<body style="background-image:url('../images/fondo.png');">

<div class="table-users">
<div class="header">Sugerencias</div>

<table cellspacing="0">
  
<tr>
<th scope="col">#</th>
<th scope="col">Nombre</th>
<th scope="col">Email</th>
<th scope="col">Mensaje</th>
<th scope="col" style="width:100px;">Fecha envío</th>
</tr>

<?php
$tamanopagina=5;

if(isset($_REQUEST['pagina'])){
  $pagina=$_REQUEST['pagina'];
  
}else{
  $inicio = 0;
  $pagina=1;
}
$inicio = ($pagina - 1) * $tamanopagina;

if(isset($_REQUEST['delete'])){
  $delete=$_REQUEST['delete'];
}else{
  $delete=0;
}
?>

<?php
$servername = "sql201.phpzilla.net";
$username = "phpz_22038491";
$password = "1d2a3n4y";
$dbname = "phpz_22038491_dudas";


// Create connection
$conexion = mysqli_connect($servername, $username, $password, $dbname) or
die("Problemas con la conexión");

$registros=mysqli_query($conexion,"SELECT * from dudas") or
die("Problemas en el select:".mysqli_error($conexion));

$num_total_registros =mysqli_num_rows($registros);
$total_paginas = ceil($num_total_registros / $tamanopagina);



$sql="SELECT email,fecha,mensaje,nombre from dudas ORDER BY Fecha DESC limit ".$inicio.",".$tamanopagina;
$rs=mysqli_query($conexion,$sql);

?>

<?php
$x=1;
while ($reg=mysqli_fetch_array($rs))
{
  ?><tr><td><img src="https://i.imgur.com/vjwq3eY.jpg" alt="" /></td><?php
  echo "<th scope=\"row\">".$reg['nombre']."</th>";
  echo "<td>".$reg['email']."</td>";
  echo "<td>".$reg['mensaje']."</td>";
  echo "<td>".$reg['fecha']."</td>";
  echo "</tr>";
  $x=$x+1;
}
?>
</form>
</table>
<center style="background-color: #91ced4;">

<?php 

if ($total_paginas > 1) {
if ($pagina != 1){
   echo '<a href="Dudas.php?pagina='.($pagina-1).'">&laquo;Anterior</a>';
}else{ echo'&laquo;Anterior ';}
   for ($i=1;$i<=$total_paginas;$i++) {
      if ($pagina == $i){
         //si muestro el índice de la página actual, no coloco enlace
         echo $pagina ;
      }else{
         //si el índice no corresponde con la página mostrada actualmente,
         //coloco el enlace para ir a esa página
         
         echo '  <a href="Dudas.php?pagina='.$i.'">'.$i.'</a>  ';
      }
   }
   if ($pagina != $total_paginas)
      echo '<a href="Dudas.php?pagina='.($pagina+1).'">Siguiente&raquo;</a>';
      else echo' Siguiente&raquo;';
}

mysqli_close($conexion);
?>
</center>
</div>

</body>
  
</html>