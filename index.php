<?php
/*  print("hello world<br>"); //comenari de línea
  echo "hello world";/*diferents linees
  print "Hello World<br><br>";#comentari de línea
  echo "Hola" . "Món" . "<br>";
  $salt = "<br>";
  $num = 5;
  $num += 5;//=num=num+5
  echo "Hello World" . $salt . "HE SALTAT!";
  echo "$num" . $salt;
  echo '$num' . $salt;

  $myArray = array("Hola", 5, true);
  echo $myArray[0] . $salt;
  echo $myArray[1] . $salt;
  echo $myArray[2] . $salt;

  for ($i = 0 ; $i < 3; $i++){
    echo $myArray[$i] . $salt;
  }

 print_r($myArray);
 $a = 0;//iniciem variable per al while i do-while
 while ($a <= 2) {
    echo $myArray[$a] . $salt;
    $a++;
  }
 $a = 0;

 do {
    echo $myArray[$a] . $salt;
    $a++;
 } while ($a <= 2);

 $b = 10;

 if($b > 5){
   echo "més petit que 5 ";
 }elseif($b == 5){
   //codi
 }else{
   echo "més gran que 5 ";
 }

 $switch_var = "three";

 switch($switch_var){
   case "one":
      echo $switch_var;
      break;
   case "two":
      echo $switch_var;
      break;
   case "three":
      echo $switch_var;
      break;
   default:
      echo "res";
      break;
 }

 //funcions

$b = primeraFuncio(15);
echo $b;

 function primeraFuncio ($a = 5){
   global $salt;
   echo $a . $salt;
   return ($a + $a) . $salt;
 }
*/
define("myLink","botó: <a href='./index.php'>Link</a>");
include("./buttons.php");
echo myLink . $salt;
 ?>

<html>

  <h1> Index </h1>
  <body>
      <p> <?   echo $a //modificar el fitxer php.ini dins la carpeta php de la stack bsucar shot_open_tag i posar "on"    ?> </p>
      <? if($mostra):?>

      <h1> amb bucle </h1>

      <?
        for ($i=0; $i < sizeOf($buttons); $i++) {
          echo $buttons[$i];
        }
      ?>

      <h1> sense bucle </h1>
          <p> <?echo index?> </p>
          <p> <?echo page2?> </p>
          <p> <?echo page3?> </p>

      <? else: ?>
          <p> no existeix </p>
      <? endif; ?>

  </body>

</html>
