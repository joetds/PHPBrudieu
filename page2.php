<?php include("./buttons.php") ?>
<html>

  <h1> Page 2 </h1>
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
  </body>

</html>
