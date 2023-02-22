<?php include "include/bd.php" ?>
<?php
if (isset($_GET['p_id'])) {

  $the_post_id = $_GET['p_id'];
}

$query = "SELECT * FROM Posts WHERE post_id = $the_post_id";
$select_post_by_id = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_post_by_id)) {
  $post_id = $row['post_id'];
  $post_author = $row['post_author'];
  $post_title = $row['post_title'];
  $post_category_id = $row['post_category_id'];
  $post_status = $row['post_status'];
  $post_tag = $row['post_tag'];
  $post_content = $row['post_content'];
  $post_date = $row['post_date'];
}

if (isset($_POST['update_post'])) {

  $post_title = $_POST['title'];
  $post_author = $_POST['post_author'];
  $post_category_id = $_POST['post_category_id'];
  $post_status = $_POST['post_status'];
  $post_tag = $_POST['post_tag'];
  $post_content = $_POST['post_content'];


  $query = "UPDATE posts SET  ";
  $query .= "post_title = '{$post_title}', ";
  $query .= "post_author = '{$post_author}', ";
  $query .= "post_category_id = '{$post_category_id}', ";
  $query .= "post_status = '{$post_status}', ";
  $query .= "post_date = now() , ";
  $query .= "post_tag = '{$post_tag}', ";
  $query .= "post_content = '{$post_content}' ";
  $query .= "WHERE post_id = $the_post_id ";

  $update_post = mysqli_query($connection, $query);

  echo "<p class='alert alert-success' role='alert'>Post editado com sucesso! <a href='../post.php?p_id={$the_post_id}'> View Post </a></p>";
}
?>

<?php include "include/subs_head.php" ?>
<?php include "include/header.php" ?>

<div class="container-fluid">
  <div class="row">

    <?php include "include/side_bar.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">

      <!-- Título da Página -->
      <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar</h1>
      </div>

      <div class="row">

        <!-- Formulario -->
        <form action="" method="post" enctype="multipart/form-data" class="row">

          <!-- Título do Post -->
          <div class="form-group col-12">
            <label class="pt-1 pb-2" for="title">Título do post</label>
            <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="title" required>
          </div>

          <!-- Categoria -->
          <div class="form-group col-4">
            <label class="pt-3 pb-2" for="category">Categoria</label>
            <select required name="post_category_id" id="post_category" class="form-control">
              <?php
              $query = "SELECT * FROM Categorias";
              $select_categories = mysqli_query($connection, $query);

              while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];

                if ($cat_id == $post_category_id) {
                  echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
                } else {
                  echo "<option> value='{$cat_id}'>{$cat_title}</option>";
                }
              }
              ?>
            </select>
          </div>

          <!-- Usuarios -->
          <div class="form-group col-4">
            <label class="pt-3 pb-2" for="users">Autor</label>
            <select required name="post_author" id="post_category" class="form-control">
              <?php echo "<option value='{$post_author}'>{$post_author}</option>";
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
            <select required name="post_status" id="" class="form-control">
              <option value="<?php echo $post_status  ?>"> <?php echo $post_status; ?> </option>
              <?php
              if ($post_status == 'published') {

                echo "<option value='draft'>Draft</option>";
              } else {
                echo "<option value='published'>Publish</option>";
              }
              ?>
            </select>
          </div>

          <!-- Tags -->
          <div class="form-group">
            <label class="pt-3 pb-2" for="post_tag">Tags do post</label>
            <input required value="<?php echo $post_tag; ?>" type="text" class="form-control" name="post_tag">
          </div>

          <!-- Conteúdo -->
          <div class="form-group">
            <label class="pt-3 pb-2" for="post_content">Conteudo do Post</label>
            <textarea required class="form-control" name="post_content" id="summernote" cols="30" rows="10"><?php echo $post_content; ?> </textarea>
          </div>

          <!-- Botão de Enviar -->
          <div class="form-group pt-3 pb-2">
            <input class="btn btn-primary" type="submit" name="update_post" value="Atualizar Post">
          </div>

        </form>
      </div>
      <?php include "include/subs_footer.php" ?>
    </main>
  </div>
</div>
<?php include "include/js.php" ?>