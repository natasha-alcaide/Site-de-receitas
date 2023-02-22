<?php include "include/bd.php" ?>
<?php

if (isset($_GET['cat_id'])) {

    $the_cat_id = $_GET['cat_id'];
}

$query = "SELECT * FROM Categorias WHERE cat_id = $the_cat_id";
$select_post_by_id = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_post_by_id)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
}

if (isset($_POST['update_cat'])) {

    $cat_new_title = $_POST['name'];

    $query =  "UPDATE Categorias SET ";
    $query .= "cat_title = '{$cat_new_title} '";
    $query .= "WHERE cat_id = $the_cat_id";

    $update_cat = mysqli_query($connection, $query);

    echo "<p class='alert alert-success' role='alert'>Categoria editada com sucesso! <a href='all_categories.php'>Ver todas as Categorias</a></p>";
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
                <h1 class="h2">Adicionar Um Post</h1>
            </div>

            <div class="row">

                <!-- Formulario -->
                <form action="" method="post" class="row">

                    <!-- Título do Post -->
                    <div class="form-group col-12">
                        <label class="pt-1 pb-2" for="title">Nome Categoria</label>
                        <input required type="text" class="form-control" name="name" value='<?php echo $cat_title; ?>'>
                    </div>

                    <!-- Botão de Enviar -->
                    <div class="form-group pt-3 pb-2">
                        <input class="btn btn-primary" type="submit" name="update_cat" value="Editar">
                    </div>

                </form>
            </div>
            <?php include "include/admin_footer.php" ?>
        </main>
    </div>
</div>

<?php include "include/js.php" ?>