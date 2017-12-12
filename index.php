<?php
  print("hello world<br>"); //comenari de línea
  echo "hello world";/*diferents linees*/
  print "Hello World<br><br>";#comentari de línea
  echo "Hola" . "Món" . "<br>";
  $salt = "<br>";
  $num = 5;
  $num .= 5;//=num=num+5
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

 ?>
