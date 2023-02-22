<?php include "include/bd.php" ?>
<?php

if (isset($_GET['user_id'])) {

    $the_user_id = $_GET['user_id'];
}

if (isset($_POST['delete'])) {
    $postvalue_id = $_POST['post_id'];
    $query = "DELETE FROM Posts WHERE post_id = {$postvalue_id} ";
    $update_to_delete = mysqli_query($connection, $query);
}

if (isset($_GET['source'])) {
    $source = $_GET['source'];
} else {
    $source = 'empty';
}

switch ($source) {
    case 'add_post';
        include "add_post.php";
        break;
    case 'edit_post';
        include "edit_post.php";
        break;
    default:

?>
        <?php include "include/subs_head.php" ?>
        <?php include "include/header.php" ?>

        <div class="container-fluid">
            <div class="row">

                <?php include "include/side_bar.php" ?>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">

                    <div class="pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Todos os Posts</h1>
                    </div>

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Usuário</th>
                                    <th>Título</th>
                                    <th>Categoria</th>
                                    <th>Status</th>
                                    <th>Imagem</th>
                                    <th>Tags</th>
                                    <th>Data</th>
                                    <th>Ver Post</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php include "include/preenche_tabela_all_post.php" ?>
                            </tbody>

                        </table>

                    </div>  

                </main>
            </div>
        </div>

<?php include "include/js.php";
} ?>