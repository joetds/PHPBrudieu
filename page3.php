<?php include("./buttons.php") ?>
<html>

  <h1> Page 3 </h1>
  <body>
      <p> <?   //echo $a //modificar el fitxer php.ini dins la carpeta php de la stack bsucar shot_open_tag i posar "on"    ?> </p>
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

  <form method="get">
    <input type="text" name="user"></input> <br>
    <br>
    <input type="password" name="pass"></input> <br>
    <input type="submit" name="submit" value="envia"></input>
  </form>

    <?
    if(isset($_GET["submit"])){
      if($_GET["user"] == "joel" && $_GET["pass"] == "joel"){
          echo "cert!";
          header('Location: ./page2.php');
        } else {
          echo "el teu nom és: " . $_GET["user"] . " i la pass: " . $_GET["pass"];
        }
    }
    ?>
<!--mètode POST-->

  <form method="post">
    <input type="text" name="user"></input> <br>
    <br>
    <input type="password" name="pass"></input> <br>
    <input type="submit" name="submit" value="envia"></input>
  </form>

    <?
    if(isset($_POST["submit"])){
      if($_POST["user"] == "joel" && $_POST["pass"] == "joel"){
          echo "cert!";
          header('Location: ./page2.php');
        } else {
          echo "el teu nom és: " . $_POST["user"] . " i la pass: " . $_POST["pass"];
        }
    }
    ?>

<!-- Anar a la carpeta php i entrem al fitxer php.ini. Allí cerqueu "display_errors" el qual estarà a Off (línea 477), poseu On i us mostarà els errors que tingueu  -->





  </body>

</html>
