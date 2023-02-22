<?php include "include/bd.php" ?>
<?php

if (isset($_GET['user_id'])) {

    $the_user_id = $_GET['user_id'];
}

$query = "SELECT * FROM Usuarios WHERE user_id = $the_user_id";
$select_users_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_users_by_id)) {
    $user_id = $row['user_id'];
    $username = $row['username'];
    $user_pwd = $row['user_pwd'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $user_role = $row['user_role'];
}

if (isset($_POST['update_user'])) {

    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $user_pwd = $_POST['user_pwd'];
    $user_role = $_POST['user_role'];

    $query = "UPDATE Usuarios SET  ";
    $query .= "username = '{$username}', ";
    $query .= "firstname = '{$firstname}', ";
    $query .= "lastname = '{$lastname}', ";
    $query .= "email = '{$email}', ";
    $query .= "user_pwd = '{$user_pwd}' , ";
    $query .= "user_role = '{$user_role}'";
    $query .= "WHERE user_id = $the_user_id ";

    $update_user = mysqli_query($connection, $query);

    echo "<p class='alert alert-success' role='alert'>Usuário editado com sucesso! <a href='all_users.php'> Ver todos os usuários </a></p>";
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
                <h1 class="h2">Editar Usuário</h1>
            </div>

            <div class="row">

                <!-- Formulario -->
                <form action="" method="post" class="row">

                    <!-- Username -->
                    <div class="form-group col-6">
                        <label class="pt-1 pb-2" for="username">Username</label>
                        <input type="text" class="form-control" name="username" value=<?php echo $username; ?> required>
                    </div>

                    <!-- Função -->
                    <div class="form-group col-6">
                        <label class="pt-1 pb-2" for="lastname">Função</label>
                        <select name="user_role" id="" class="form-control" required>
                            <option disabled selected><?php echo $user_role ?></option>
                            <option value="admin">Admin</option>
                            <option value="subscriber">Subscriber</option>
                        </select>
                    </div>

                    <!-- Primeiro Nome -->
                    <div class="form-group col-4">
                        <label class="pt-1 pb-2" for="firstname">Primeiro nome</label>
                        <input type="text" class="form-control" name="firstname" value=<?php echo $firstname; ?> required>
                    </div>

                    <!-- Sobrenome -->
                    <div class="form-group col-8">
                        <label class="pt-1 pb-2" for="lastname">Ultimo nome</label>
                        <input type="text" class="form-control" name="lastname" value=<?php echo $lastname; ?> required>
                    </div>

                    <!-- Email -->
                    <div class="form-group col-9">
                        <label class="pt-1 pb-2" for="email">Email</label>
                        <input type="email" class="form-control" name="email" value=<?php echo $email; ?> required>
                    </div>

                    <!-- Senha -->
                    <div class="form-group col-3">
                        <label class="pt-1 pb-2" for="user_pwd">Senha</label>
                        <input type="password" class="form-control" name="user_pwd" value=<?php echo $user_pwd; ?> required>
                    </div>

                    <!-- Botão Enviar -->
                    <div class="form-group pt-3 pb-2">
                        <input class="btn btn-primary" type="submit" name="update_user" value="Editar Usuário">
                    </div>

                </form>
            </div>
            <?php include "include/admin_footer.php" ?>
        </main>
    </div>
</div>

<?php include "include/js.php" ?>