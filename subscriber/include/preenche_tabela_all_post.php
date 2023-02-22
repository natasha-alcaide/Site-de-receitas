<?php

$query = "SELECT * FROM Usuarios WHERE user_id = $the_user_id";
$select_user = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_user)) {
  $the_user_name = $row['username'];
}

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
  if ($post_author == $the_user_name) {
    echo "<tr>";
?>

    <?php
    echo "<td>$post_id</td>";

    echo "<td>$post_author</td>";

    echo "<td>$post_title</td>";

    $query = "SELECT * FROM Categorias WHERE cat_id = {$post_category_id} ";
    $select_cat_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_cat_id)) {
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];


      echo "<td>{$cat_title}</td>";
    }

    echo "<td>$post_status</td>";
    echo "<td><img width='100' src='../" . $post_image . "' alt='image'></td>";
    echo "<td>$post_tag</td>";

    $query = "SELECT * FROM comentarios WHERE comm_post_id = $post_id ";
    $send_comment_query = mysqli_query($connection, $query);

    echo "<td>$post_date</td>";
    echo "<td><a href='../post.php?p_id={$post_id}'>Ver Post</a></td>";
    echo "<td><a class='btn btn-primary' href='all_posts.php?source=edit_post&p_id={$post_id}'>Editar</a></td>";
    ?>
    <form method="post">

      <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
      <?php
      echo '<td><input class="btn btn-danger" type="submit" name="delete" value="Excluir"></td>';
      ?>

    </form>

<?php
  }
}
?>