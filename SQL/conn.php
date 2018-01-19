<?
require_once('settings.php');//demanem 1 cop ta la informació dels settings
#$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS);// en cas que la BD no existeixi
$connexio = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$connexio){die("ERROR" . mysqli_connect_error();)} //comprovem que ens hem connectat correctament
?>
