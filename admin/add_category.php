<?php include "include/bd.php" ?>
<?php

if (isset($_POST['create_cat'])) {

    $cat_name = $_POST['name'];
    $query = "INSERT INTO Categorias (cat_title) VALUES ('{$cat_name}')";

    $create_category_query = mysqli_query($connection, $query);
    $the_post_id = mysqli_insert_id($connection);
    echo "<div class='alert alert-success' role='alert'>Categoria Criada com Sucesso!: " . " " . "<a href='all_categories.php'>Ver Todas as Categorias</a></div>";
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
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <!-- Botão de Enviar -->
                    <div class="form-group pt-3 pb-2">
                        <input class="btn btn-primary" type="submit" name="create_cat" value="Adicionar">
                    </div>

                </form>
            </div>
            <?php include "include/admin_footer.php" ?>
        </main>
    </div>
</div>

<?php include "include/js.php" ?>