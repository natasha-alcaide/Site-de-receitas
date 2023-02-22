<?php

session_start();

require "include/bd.php";

$error = false;
$success = false;
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["user_pwd"]) && isset($_POST["confirm_password"])) {

        $name = mysqli_real_escape_string($connection, $_POST["username"]);
        $firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);
        $lastname = mysqli_real_escape_string($connection, $_POST["lastname"]);
        $email = mysqli_real_escape_string($connection, $_POST["email"]);
        $password = mysqli_real_escape_string($connection, $_POST["user_pwd"]);
        $confirm_password = mysqli_real_escape_string($connection, $_POST["confirm_password"]);

        if ($password == $confirm_password) {
            $sql = "INSERT INTO Usuarios
              (username, firstname, lastname, email, user_pwd, user_role) VALUES
              ('$name', '$firstname', '$lastname', '$email', '$password', 'subscriber');";

            if (mysqli_query($connection, $sql)) {
                $success = true;
            } else {
                $error_msg = mysqli_error($connection);
                $error = true;
            }
        }
    }
}

?>

<?php include "../include/head.php";

if ($success) {
    echo "<div class='alert alert-success' role='alert'>Usuario criado com sucesso! Seguir para <a href='login.php'>Login</a></div>";
} ?>

<?php if ($error) {
    echo "<div class='alert alert-danger' role='alert'>Erro: " . $error_msg . "</div>";
} ?>

<div class="container-fluid">
    <div class="row">
        <div class="card border-0 shadow-lg my-5 d-flex align-items-center">
            <div class="col-lg-5">
                <div class="p-5 text-center">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Crie uma Conta!</h1>
                    </div>

                    <form class="user" method="POST" action="registrar.php">
                        <div class="form-group">
                            <input required type="username" name="username" class="form-control form-control-user" placeholder="Username" id="admin-register-username" />
                            <span role="alert" id="admin-register-username-error" aria-hidden="true"></span>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0 my-3">
                                <input required type="text" name="firstname" class="form-control form-control-user" placeholder="Primeiro Nome" id="admin-register-firstname" />
                                <span role="alert" id="admin-register-firstname-error" aria-hidden="true"></span>
                            </div>

                            <div class="col-sm-6 my-3">
                                <input required type="text" name="lastname" class="form-control form-control-user" placeholder="Sobrenome" id="admin-register-lastname" />
                                <span role="alert" id="admin-register-lastname-error" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <input required type="email" name="email" class="form-control form-control-user" placeholder="Email" id="admin-register-email" />
                            <span role="alert" id="admin-register-email-error" aria-hidden="true"></span>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0 my-3">
                                <input required type="password" name="user_pwd" class="form-control form-control-user" placeholder="Senha" id="admin-register-password" />
                                <span role="alert" id="admin-register-password-error" aria-hidden="true"></span>
                            </div>

                            <div class="col-sm-6 my-3">
                                <input required type="password" name="confirm_password" class="form-control form-control-user" placeholder="Confirmação de Senha" id="admin-register-confirm-password" />
                                <span role="alert" id="admin-register-confirm-password-error" aria-hidden="true"></span>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-user btn-block" type="submit" id="admin-register-submit">
                            Registrar
                        </button>
                    </form>

                    <hr>
                    <div class="text-center">
                        <a class="small" href="login.php">Já possuí conta? Faça seu login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "include/js.php" ?>
<?php include "include/register-js.php" ?>