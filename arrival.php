<?php
  session_start();

  if(isset($_SESSION["sended_text"])){
    $text = $_SESSION["sended_text"];
  }else{
    header("Location: ./index.php");
  }


  include __DIR__ . "/partials/head.php";
?>

<body>
  <div class="container">
    <p>Il testo inserito è corretto</p>
    <p><strong><?php echo $text ?></strong></p>

    <a href="index.php">Torna indietro</a>
  </div>
</body>
</html>