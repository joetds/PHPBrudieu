<?php include("./buttons.php") ?>
<html>

  <h1> Page 2 </h1>
  <body>
      <p> <?   echo $a //modificar el fitxer php.ini dins la carpeta php de la stack bsucar shot_open_tag i posar "on"    ?> </p>
      <? if($mostra):?>
          <p> <?echo index?> </p>
          <p> <?echo page2?> </p>
          <p> <?echo page3?> </p>

      <? else: ?>
          <p> no existeix </p>
      <? endif; ?>
  </body>

</html>
