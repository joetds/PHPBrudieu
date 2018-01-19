

<?
//host, usuari, contrasenya, nom BD
//$connexio = mysqli_connect('localhost','root','alumne','exemple');ex

//if(!$connexio){die("ERROR" . mysqli_connect_error());}
require_once('SQL/conn.php');
$queryCreateTable = "CREATE TABLE `mmo` (`id` INT NOT NULL AUTO_INCREMENT ,
        `joc` VARCHAR(255) NOT NULL ,
        `nivell` INT(3) NOT NULL ,
        PRIMARY KEY (`id`)) ENGINE = InnoDB;";

mysqli_query($connexio,$queryCreateTable);

$queryInsert = "INSERT INTO `mmo` (`joc`, `nivell`) VALUE ('joc1', '4');";

mysqli_query($connexio,$queryInsert);

$queryInsert = "INSERT INTO `mmo` (`joc`, `nivell`) VALUE ('joc2', '15');";

mysqli_query($connexio,$queryInsert);

$querySelect = "SELECT * FROM `mmo`;";
$result = mysqli_query($connexio,$querySelect);
while($row = mysqli_fetch_assoc($result) ){
  echo "id: " . $row["id"] . " joc: " . $row["joc"] . " nivell: " . $row["nivell"] . "<br>";
}
mysqli_close($connexio);
?>
