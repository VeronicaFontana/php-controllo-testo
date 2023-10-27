<?php

  include __DIR__ . "/partials/fuctions.php";

  $error_msg = "";

  if(isset($_POST["text"])){
    if(checktext($_POST["text"])){
      session_start();
      $_SESSION["sended_text"] = $_POST["text"];
      header("Location: ./arrival.php");
    }else{
      $error_msg = "Il testo deve avere più di 3 caratteri e meno di 255";
    }
  }

  include __DIR__ . "/partials/head.php";
?>

<body>
  <div class="container">
    <form action="index.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <p class="text-danger"><?php echo $error_msg ?></p>

      <button type="submit" class="btn btn-primary ">Invio</button>
    </form>
  </div>
</body>
</html>