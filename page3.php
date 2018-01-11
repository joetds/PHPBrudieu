<?php include("./buttons.php") ?>
<html>

  <h1> Page 3 </h1>
  <body>
      <p> <?   echo $a //modificar el fitxer php.ini dins la carpeta php de la stack bsucar shot_open_tag i posar "on"    ?> </p>
      <? if($mostra):?>

        <h1> Sense bucle </h1>

          <p> <?echo index?> </p>
          <p> <?echo page2?> </p>
          <p> <?echo page3?> </p>

        <h1> Amb bucle </h1>

          <?
            for ($i=0; $i < sizeOf($buttons); $i++) {
              echo $buttons[$i];
            }
          ?>

      <? else: ?>
          <p> no existeix </p>
      <? endif; ?>

<!--mètode GET-->

  <form action="#" method="get">
    <input type="text" name="name"></input> <br>
    <br>
    <input type="text" name="email"></input> <br>
    <input type="submit" name="submit" value="envia"></input>
  </form>

  <?

      echo "el teu nom és:" . $_GET["name"];

  ?>







  </body>

</html>
