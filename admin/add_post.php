<?php
include "include/bd.php";
include "include/admin_head.php";
include "include/header.php";

if (isset($_POST['create_post'])) {

  $post_title = $_POST['title'];
  $post_author = $_POST['post_author'];
  $post_category_id = $_POST['post_category_id'];
  $post_status = $_POST['post_status'];

  // tipos de extensão aceitas
  $accept = ["jpg", "jpeg", "png", "gif", "webp"];

  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];

  // aqui pegamos a extensão do arquivo que foi uplodeado
  $ext = strtolower(pathinfo($post_image, PATHINFO_EXTENSION));

  $post_tag = $_POST['post_tag'];
  $post_content = $_POST['post_content'];
  $post_date = date('d-m-y');

  // se a exntesão é permitida fazemos upload senão damos erro
  if (in_array($ext, $accept)) {
    move_uploaded_file($post_image_temp, "images/$post_image");
  } else {
    echo "PERMISSÃO NEGADA!";
    die();
  }

  $query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
  $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'admin/images/{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

  $create_post_query = mysqli_query($connection, $query);

  $the_post_id = mysqli_insert_id($connection);
  echo "<div class='alert alert-success' role='alert'>Post Criado com Sucesso!: " . " " . "<a href='../post.php?p_id={$the_post_id}'> Ver Post</a></div>";
}

?>

<div class="container-fluid">
  <div class="row">

    <?php include "include/side_bar.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">

      <!-- Título da Página -->
      <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Adicionar Um Post</h1>
      </div>

      <div class="row">

        <!-- Formulario -->

        <form action="" method="post" enctype="multipart/form-data" class="row">

          <div class="form-group col-12">
            <label class="pt-1 pb-2" for="title">Título do post</label>
            <input type="text" class="form-control" name="title" required>
          </div>

          <!-- Categoria -->
          <div class="form-group col-4">
            <label class="pt-3 pb-2" for="category">Categoria</label>
            <select name="post_category_id" id="post_category" class="form-control" required>
              <option>Selecione...</option>
              <?php

              $query = "SELECT * FROM Categorias";
              $select_categories = mysqli_query($connection, $query);

              while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];

                echo "<option value='{$cat_id}'>{$cat_title}</option>";
              }

              ?>
            </select>
          </div>

          <!-- Usuario -->
          <div class="form-group col-4">
            <label class="pt-3 pb-2" for="users">Usuário</label>
            <select name="post_author" id="post_category" class="form-control" required>
              <option>Selecione...</option>
              <?php

              $query = "SELECT * FROM Usuarios";
              $select_users = mysqli_query($connection, $query);

              while ($row = mysqli_fetch_assoc($select_users)) {
                $user_id = $row['user_id'];
                $username = $row['username'];

                echo "<option value='{$username}'>{$username}</option>";
              }

              ?>
            </select>
          </div>

          <!-- Status -->
          <div class="form-group col-4">
            <label class="pt-3 pb-2" for="users">Status</label>
            <select name="post_status" id="" class="form-control" required>
              <option>Selecione...</option>
              <option value="published">Publicar</option>
            </select>
          </div>

          <!-- Imagem -->

          <div class="form-group">
            <label class="pt-3 pb-2" for="post_image">Imagem do post</label>
            <input type="file" name="image" class="form-control" required>
          </div>
          
          <!-- Tags -->
          <div class="form-group">
            <label class="pt-3 pb-2" for="post_tag">Tags do post</label>
            <input type="text" class="form-control" name="post_tag" required>
          </div>

          <!-- Conteúdo -->
          <div class="form-group">
            <label class="pt-3 pb-2" for="post_content">Conteudo do Post</label>
            <textarea class="form-control" name="post_content" id="summernote" cols="30" rows="10" required> </textarea>
          </div>

          <!-- Botão de Enviar -->
          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
          </div>


        </form>
      </div>
      <?php include "include/admin_footer.php" ?>
    </main>
  </div>
</div>

<?php include "include/js.php" ?>