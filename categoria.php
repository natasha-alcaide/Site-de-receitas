<?php
session_start();
include "include/bd.php";
include "include/head.php";
include "include/navbar.php";

$query_one_category = "SELECT * FROM Categorias where cat_id = " . $_GET["cat_id"];
$select_one_category = mysqli_query($connection, $query_one_category);

$category = $select_one_category->fetch_assoc();


if ($category) {

?>

    <main class="container">
        <div class="p-3">
            <h2><?= $category['cat_title'] ?></h2>
        </div>
        <?php

        $query_all_from_category = "SELECT * from Posts WHERE post_category_id = " . $_GET["cat_id"];

        $select_all_posts_from_cat = mysqli_query($connection, $query_all_from_category);

        if ($select_all_posts_from_cat->num_rows > 0) {

            while ($row = mysqli_fetch_assoc($select_all_posts_from_cat)) {

                $card_post_title = $row['post_title'];
                $card_post_date = $row['post_date'];
                $card_post_content = $row['post_content'];
                $card_post_id = $row['post_id'];
                $card_post_image = ($row['post_image'] == '') ? 'no_image.png' : $row['post_image'];

                include "include/card-linha.php";
            }
        } else {
            echo "<div>Nenhum post nesta categoria</div>";
        }

        ?>
    </main>

<?php


    // if ($category) {
} else {
?>
    <main class="container">
        <div class="p-3">
            <h2>Categoria inexistente</h2>
        </div>
    </main>
<?php
}

include "include/footer.php" ?>