<?php

require "connection.php";
require "blocs/heater.php";
if ($query = $pdo->query('SELECT * FROM dishes')) {
  $info = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
  print_r($pdo->errorInfo());
}
?>
<?php foreach ($info as $data): ?>
  <section class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <img class="card-img-top" alt="Изображение продукта"
            src=" data:image/jpeg;base64,<?= base64_encode($data['image']); ?>" />
        </div>
        <div class="col-lg-4">
          <?php echo $data['title'] ?>
        </div>
        <div class="col-lg-4">
          <?php echo $data['tags']; ?>
          <div class="col-lg-4">
            <a href="#" class="btn btn-primary">посмотреть рецепт</a>
          </div>
        </div>












      <?php endforeach; ?>
      <?php
      require "blocs/footer.php"
        ?>