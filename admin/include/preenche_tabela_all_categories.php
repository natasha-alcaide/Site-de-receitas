<?php
$query = "SELECT * FROM Categorias ORDER BY cat_id";
$select_cat = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_cat)) {
    $cat_id = $row['cat_id'];
    $cat_name = $row['cat_title'];
?>

    <?php
    echo "<tr>";
    echo "<td>$cat_id</td>";
    echo "<td>$cat_name</td>";
    echo "<td><a class='btn btn-primary' href='all_categories.php?source=edit_cat&cat_id={$cat_id}'>Editar</a></td>";
    ?>
    <form method="post">
        <input type="hidden" name="cat_id" value="<?php echo $cat_id ?>">
        <?php
        echo '<td><input class="btn btn-danger" type="submit" name="delete" value="Excluir"></td>';
        ?>

    </form>

<?php
    echo "</tr>";
}
?>