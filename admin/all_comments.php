<?php include "include/bd.php" ?>

<?php

if (isset($_POST['delete'])) {
    $commvalue_id = $_POST['comm_id'];
    $query = "DELETE FROM Comentarios WHERE comm_id = {$commvalue_id} ";
    $update_to_delete = mysqli_query($connection, $query);
}

if (isset($_GET['source'])) {
    $source = $_GET['source'];
} else {
    $source = 'empty';
}

?>

<?php include "include/admin_head.php" ?>
<?php include "include/header.php" ?>

<div class="container-fluid">
    <div class="row">

        <?php include "include/side_bar.php" ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">

            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Todas os Comentários</h1>
            </div>

            <div class="row">
                <div class="table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Post Relacionado</th>
                                <th>Data</th>
                                <th>Autor</th>
                                <th>Email</th>
                                <th>Conteúdo</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php include "include/preenche_tabela_all_comments.php" ?>
                        </tbody>

                    </table>

                </div>
            </div>

            <?php include "include/admin_footer.php" ?>

        </main>
    </div>
</div>

<?php include "include/js.php"; ?>