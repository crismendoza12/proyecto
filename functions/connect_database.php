<?php 
/*develop*/
$user = "root";
$host = "localhost";
$pass = "";
$base = "store";
$this->conectar = mysql_connect($host,$user,$pass);
mysql_select_db($base,$this->conectar);

/*server*/
/*$user = "carloslo_pablo";
$host = "desarrollodsistemas.com.mx";
$pass = "`pablo_alboran_353`";
$base = "carloslo_pablo_alboran_353";
$conectar = mysql_connect($host,$user,$pass);
mysql_select_db($conectar);*/
?>