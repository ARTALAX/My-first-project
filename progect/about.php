<?php
require "blocs/heater.php";
?>
<div class="container mt-5 black">
  <form action="check.php" method="post">
    <h3>Здесь вы можете отправить свои идеи нам</h3>
    <input type="email" placeholder="Введите email" name="email" class="form-control"><br>
    <textarea type="text" placeholder="Введите сообщение" name="message" class="form-control"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
  </form>
</div>
<?php
require "blocs/footer.php";
?>