<?php include "include/bd.php" ?>

<?php

$query = "SELECT * FROM Posts";
$select_post = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_post)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_tag = $row['post_tag'];
    $post_content = $row['post_content'];
    $post_date = $row['post_date'];

    $query = "SELECT * FROM Categorias WHERE cat_id = {$post_category_id} ";
    $select_cat_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_cat_id)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
    }

    echo "<div class='col-md-6'>
        <div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>

            <div class='col p-4 d-flex flex-column position-static'>
                <strong class='d-inline-block'>" .  $cat_title . "</strong>
                <h3 class='mb-0'>" . $post_title . "</h3>
                <div class='mb-4 text-muted'>" . $post_date . "</div>
                <a href='post.php?p_id=" . $post_id . "' class='stretched-link'>Receita Completa</a>
            </div>

            <div class='col-auto d-none d-lg-block'>
                <img class='bd-placeholder-img' width='200' height='200' focusable='false' src='" . $post_image . "'>
            </div>
        </div>
    </div>";
} ?>