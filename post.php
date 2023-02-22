<?php
session_start();
include "include/bd.php";
include "include/head.php";
include "include/navbar.php";

if (isset($_GET['p_id'])) {

    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM Posts WHERE post_id=$the_post_id";
    $select_post = mysqli_query($connection, $query);

    if ($select_post->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($select_post)) {
            $post_id = $row['post_id'];
            $post_author = $row['post_author'];
            $post_title = $row['post_title'];
            $post_category_id = $row['post_category_id'];
            $post_status = $row['post_status'];
            $post_image = ($row['post_image'] == '') ? 'no_image.png' : $row['post_image'];
            $post_tag = $row['post_tag'];
            $post_content = $row['post_content'];
            $post_date = $row['post_date'];

            $query = "SELECT * FROM Categorias WHERE cat_id = {$post_category_id} ";
            $select_cat_id = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_cat_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
            }

            if (isset($_POST['comment-submit'])) {

                $comm_post_id = $the_post_id;
                $comm_author = $_POST['comment-author'];
                $comm_email = $_POST['comment-email'];
                $comm_content = $_POST['comment-content'];
                $comm_status = 'publicado';

                $query = "INSERT INTO Comentarios (comm_post_id, comm_author, comm_email, comm_status,comm_date, comm_content)";
                $query .= "VALUES('{$comm_post_id}','{$comm_author}','{$comm_email}','{$comm_status}', current_timestamp(), '{$comm_content}')";

                $create_comment = mysqli_query($connection, $query);

                echo "<div class='alert alert-success' role='alert'>Comentário Publicado com Sucesso!</div>";
            }
        }

?>

        <div class="container">
            <div class="row g-5 pt-4">
                <div class="col-md-8">
                    <article>
                        <h1 class="mb-1 text-capitalize"><?php echo $post_title ?></h1>
                        <p class="text-capitalize"><?php echo $post_date ?> | por <?php echo $post_author ?></br><strong>Categoria:</strong> <?php echo $cat_title ?></p>
                        <hr>
                        <img src=<?= "'" . $post_image . "'" ?> class="img-fluid mb-4" alt="...">
                        <div>
                            <?php echo $post_content ?>
                        </div>
                </div>

                <!-- Formulario Comentários -->
                <div class="col-8">
                    <h4>Deixe um comentário:</h4>
                    <form action=<?php echo "'" . $_SERVER['PHP_SELF'] . "?p_id={$the_post_id}'"; ?> method="post" role="form">
                        <div class="form-group mb-3">

                            <label for="comment-author">Autor</label>
                            <input required type="text" class="form-control" name="comment-author" id="comment-author" />
                            <span role="alert" id="comment-author-error" aria-hidden="true"></span>
                        </div>

                        <div class="form-group mb-3">
                            <label for="comment-email">Email</label>
                            <input required type="email" class="form-control" name="comment-email" id="comment-email" />
                            <span role="alert" id="comment-email-error" aria-hidden="true"></span>
                        </div>

                        <div class="form-group mb-3">
                            <label for="comment-content">Comentário</label>
                            <textarea required class="form-control" name="comment-content" id="comment-content" rows="3"></textarea>
                            <span role="alert" id="comment-content-error" aria-hidden="true"></span>
                        </div>

                        <button type="submit" name="comment-submit" class="btn btn-primary" id="comment-submit">
                            Publicar
                        </button>

                    </form>
                </div>

                <div class="row mb-2 mt-5">
                    <div class="p-3">
                        <h2 class="pb-2">Comentários</h2>

                        <?php

                        $query = "SELECT * FROM Comentarios WHERE comm_post_id = $the_post_id";
                        $list_comment_query = mysqli_query($connection, $query);

                        if ($list_comment_query->num_rows > 0) {

                            while ($row = mysqli_fetch_assoc($list_comment_query)) {
                                $list_comm_author = $row['comm_author'];
                                $list_comm_email = $row['comm_email'];
                                $list_comm_content = $row['comm_content'];
                        ?>

                                <div class="card my-3">
                                    <div class="card-header">
                                        <?php echo $list_comm_author; ?> | <?php echo $list_comm_email; ?>
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p><?php echo $list_comm_content; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                        <?php
                            }
                        } else {
                            echo "Post não tem nenhum comentário. Seja o primeiro a comentar!";
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>

<?php

        // aqui é se a query nao retornou nada
    } else {

        echo "<div class='container'><div class='row g-5 pt-4'><div class='col-md-8'>Post não existe.</div></div></div>";
    }

    // aqui é se não tem p_id na URL
} else {

    echo "<div class='container'><div class='row g-5 pt-4'><div class='col-md-8'>Post não existe.</div></div></div>";
}
include "include/footer.php";
include "include/post-js.php";
