<?php include "include/bd.php" ?>

<?php

if (isset($_POST['delete'])) {
  $uservalue_id = $_POST['user_id'];
  $query = "DELETE FROM Usuarios WHERE user_id = {$uservalue_id} ";
  $update_to_delete = mysqli_query($connection, $query);
}

if (isset($_GET['source'])) {
  $source = $_GET['source'];
} else {
  $source = 'empty';
}

switch ($source) {
  case 'add_user';
    include "add_user.php";
    break;
  case 'edit_user';
    include "edit_user.php";
    break;
  default:

?>

    <?php include "include/admin_head.php" ?>
    <?php include "include/header.php" ?>

    <div class="container-fluid">
      <div class="row">

        <?php include "include/side_bar.php" ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">

          <div class="pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Todos os Usuários</h1>
          </div>

          <div class="row">
            <div class="table-responsive">

              <table class="table table-bordered table-hover">

                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Primeiro Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Função</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                  </tr>
                </thead>

                <tbody>
                  <?php include "include/preenche_tabela_all_users.php" ?>
                </tbody>

              </table>

              <?php

              if (isset($_GET['change_to_admin'])) {

                $the_user_id = $_GET['change_to_admin'];

                $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id";
                $change_admin_query = mysqli_query($connection, $query);
                header("location: users.php");
              }

              if (isset($_GET['change_to_sub'])) {

                $the_user_id = $_GET['change_to_sub'];

                $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id";
                $change_sub_query = mysqli_query($connection, $query);
                header("location: users.php");
              }

              if (isset($_GET['delete'])) {

                $the_user_id = $_GET['delete'];

                $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
                $delete_users_query = mysqli_query($connection, $query);
                header("location: users.php");
              }
              ?>

            </div>
          </div>

          <?php include "include/admin_footer.php" ?>

        </main>
      </div>
    </div>

<?php include "include/js.php";
} ?>