<?php include "include/bd.php" ?>

<?php

if (isset($_POST['delete'])) {
    $catvalue_id = $_POST['cat_id'];
    $query = "DELETE FROM Categorias WHERE cat_id = {$catvalue_id} ";
    $update_to_delete = mysqli_query($connection, $query);
}

if (isset($_GET['source'])) {
    $source = $_GET['source'];
} else {
    $source = 'empty';
}

switch ($source) {
    case 'add_cat';
        include "add_category.php";
        break;
    case 'edit_cat';
        include "edit_category.php";
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
                        <h1 class="h2">Todas as Categorias</h1>
                    </div>

                    <div class="row">
                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categoria</th>
                                        <th>Editar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php include "include/preenche_tabela_all_categories.php" ?>
                                </tbody>

                            </table>

                        </div>
                    </div>

                    <?php include "include/admin_footer.php" ?>

                </main>
            </div>
        </div>

<?php include "include/js.php";
}; ?>