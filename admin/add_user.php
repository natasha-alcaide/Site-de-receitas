<?php include "include/bd.php" ?>
<?php
if (isset($_POST['create_user'])) {

  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $user_pwd = $_POST['user_pwd'];
  $user_role = $_POST['user_role'];

  $query = "INSERT INTO Usuarios (username, firstname, lastname, email, user_pwd,user_role, reg_date)";
  $query .= "VALUES('{$username}','{$firstname}','{$lastname}','{$email}','{$user_pwd}','{$user_role}', current_timestamp())";

  $create_user_query = mysqli_query($connection, $query);

  echo "<div class='alert alert-success' role='alert'>Usuário Criado com Sucesso!: " . " " . "<a href='all_users.php'>Ver Todos os Usuários</a></div>";
}

?>

<?php include "include/admin_head.php" ?>
<?php include "include/header.php" ?>

<div class="container-fluid">
  <div class="row">

    <?php include "include/side_bar.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">

      <!-- Título da Página -->
      <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Adicionar Um Usuário</h1>
      </div>

      <div class="row">

        <!-- Formulario -->
        <form action="" method="post" class="row">

          <!-- Username -->
          <div class="form-group col-6">
            <label class="pt-1 pb-2" for="username">Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>

          <!-- Função -->
          <div class="form-group col-6">
            <label class="pt-1 pb-2" for="lastname">Função</label>
            <select name="user_role" id="" class="form-control" required>
              <option>Selecione...</option>
              <option value="admin">Admin</option>
              <option value="subscriber">Subscriber</option>
            </select>
          </div>

          <!-- Primeiro Nome -->
          <div class="form-group col-4">
            <label class="pt-1 pb-2" for="firstname">Primeiro nome</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>

          <!-- Sobrenome -->
          <div class="form-group col-8">
            <label class="pt-1 pb-2" for="lastname">Ultimo nome</label>
            <input type="text" class="form-control" name="lastname" required>
          </div>

          <!-- Email -->
          <div class="form-group col-9">
            <label class="pt-1 pb-2" for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <!-- Senha -->
          <div class="form-group col-3">
            <label class="pt-1 pb-2" for="user_pwd">Senha</label>
            <input type="password" class="form-control" name="user_pwd" required>
          </div>

          <!-- Botão Enviar -->
          <div class="form-group pt-3 pb-2">
            <input class="btn btn-primary" type="submit" name="create_user" value="Adicionar Usuário">
          </div>

        </form>
      </div>
      <?php include "include/admin_footer.php" ?>
    </main>
  </div>
</div>

<?php include "include/js.php" ?>