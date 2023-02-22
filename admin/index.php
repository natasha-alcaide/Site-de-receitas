<?php include "include/bd.php" ?>
<?php include "include/admin_head.php" ?>
<?php include "include/header.php" ?>

<div class="container-fluid">
    <div class="row">

        <?php include "include/side_bar.php" ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="row">

                <!-- Posts cards -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                   
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Posts</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                         <?php
                                    $query = "SELECT * FROM Posts";
                                    $select_all_posts = mysqli_query($connection, $query);
                                    $post_counts = mysqli_num_rows($select_all_posts);

                                    echo " <p>{$post_counts}</p>";
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comentarios card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Comentários</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $query = "SELECT * FROM Comentarios";
                                    $select_all_comm = mysqli_query($connection, $query);
                                    $comm_counts = mysqli_num_rows($select_all_comm);

                                    echo " <p>{$comm_counts}</p>";
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- usuários -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Usuários
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?php
                                    $query = "SELECT * FROM Usuarios";
                                    $select_all_users = mysqli_query($connection, $query);
                                    $users_counts = mysqli_num_rows($select_all_users);

                                    echo " <p>{$users_counts}</p>";
                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Categoria cards -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Categorias</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                    $query = "SELECT * FROM Categorias";
                                    $select_all_cat = mysqli_query($connection, $query);
                                    $cat_counts = mysqli_num_rows($select_all_cat);

                                    echo " <p>{$cat_counts}</p>";
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include "include/admin_footer.php" ?>
        </main>
    </div>
</div>

<?php include "include/js.php" ?>