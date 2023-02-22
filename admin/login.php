<?php
session_start();

require "include/bd.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["email"]) && isset($_POST["user_pwd"])) {

    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $user_pwd = mysqli_real_escape_string($connection, $_POST["user_pwd"]);

    $sql = "SELECT * FROM Usuarios
            WHERE email = '$email';";

    $result = mysqli_query($connection, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user["user_pwd"] == $user_pwd) {

          $_SESSION["user_id"] = $user["user_id"];
          $_SESSION["user_name"] = $user["username"];
          $_SESSION["user_email"] = $user["email"];
          $_SESSION["user_role"] = $user["user_role"];

          // echo $_SESSION["user_role"]; exit;

          if ($_SESSION["user_role"] == "admin") {
            header("Location: index.php");
            exit();
          } elseif ($_SESSION["user_role"] == "subscriber") {
            header("Location: ../subscriber/index.php?user_id=" . $_SESSION["user_id"]);
            exit();
          } else {
            header("Location: index.php");
            exit();
          }
        } else {
          $error_msg = "Senha incorreta";
          $error = true;
        }
      } else {
        $error_msg = "Usuário não encontrado";
        $error = true;
      }
    } else {
      $error_msg = "Por favor, preencha todos os dados.";
      $error_msg = mysqli_error($connection);
      $error = true;
    }
  } else {
    $error_msg = "Por favor, preencha todos os dados.";
    $error = true;
  }
}

include "../include/head.php";

?>

<!-- Formulario de Login -->
<div class="container-fluid">
  <div class="row">
    <div class="card border-0 shadow-lg my-5 d-flex align-items-center">
      <div class="col-lg-5">
        <div class="p-5 text-center">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Login</h1>
          </div>
          <form method="POST" action="login.php" class="text-center h-100 d-flex flex-column justify-content-center align-items-center">
            <?php if (isset($error_msg) && $error_msg != '') {
              echo "<div class='alert alert-danger' role='alert'>Erro: " . $error_msg . "</div>";
            }
            ?>
            <div class="mb-2 text-start">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 text-start">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input required type="password" name="user_pwd" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Entrar</button>
            <div><a href="./registrar.php">Registrar-se</a></div>
          </form>

        </div>
      </div>
    </div>
  </div>