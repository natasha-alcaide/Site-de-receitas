<?php session_start(); ?>
<?php include "include/bd.php" ?>
<?php include "include/head.php" ?>
<?php include "include/navbar.php" ?>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark" id="capa">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Bem-vindo ao nosso site de receitas!</h1>
      <p class="lead my-3">Aqui você encontrará uma variedade de pratos deliciosos e fáceis de preparar para sua próxima refeição. De sobremesas a pratos principais saudáveis, nossas receitas são variadas para agradar a todos os paladares. Navegue pelo nosso site e experimente algo novo hoje mesmo!</p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="p-3">
      <h2>Destaques</h2>
    </div>
    <?php include "include/card.php"; ?>
  </div>
</main>

<?php include "include/footer.php" ?>