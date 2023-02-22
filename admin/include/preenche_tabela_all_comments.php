<?php
$query = "SELECT * FROM Comentarios ORDER BY comm_id";
$select_cat = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_cat)) {
    $comm_id = $row['comm_id'];
    $comm_post_id = $row['comm_post_id'];
    $comm_date = $row['comm_date'];
    $comm_author = $row['comm_author'];
    $comm_email = $row['comm_email'];
    $comm_content = $row['comm_content'];
?>

    <?php
    echo "<tr>";
    echo "<td>$comm_id</td>";

    $query_name_post = "SELECT post_title FROM Posts WHERE post_id=$comm_post_id";
    $select_name_post = mysqli_query($connection, $query_name_post);
    while ($row = mysqli_fetch_assoc($select_name_post)) {
        $post_title = $row['post_title'];
        echo "<td>{$post_title}</td>";
    }

    echo "<td>$comm_date</td>";
    echo "<td>$comm_author</td>";
    echo "<td>$comm_email</td>";
    echo "<td>$comm_content</td>";
    ?>

    <form method="post">

        <input type="hidden" name="comm_id" value="<?php echo $comm_id ?>">
        <?php
        echo '<td><input class="btn btn-danger" type="submit" name="delete" value="Excluir"></td>';
        ?>
    </form>

<?php
    echo "</tr>";
}
?>