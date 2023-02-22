<?php
$query = "SELECT * FROM Usuarios";
$select_users = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_users)) {
    $user_id = $row['user_id'];
    $username = $row['username'];
    $user_pwd = $row['user_pwd'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $user_role = $row['user_role'];


    echo "<tr>";

    echo "<td>$user_id</td>";
    echo "<td>$username</td>";
    echo "<td>$firstname</td>";
    echo "<td>$lastname</td>";
    echo "<td>$email</td>";
    echo "<td>$user_role</td>";

    // Botões EDITAR e EXCLUIR
    echo "<td><a class='btn btn-primary' href='all_users.php?source=edit_user&user_id={$user_id}'>Editar</a></td>"; ?>
    <form method="post">

        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
        <?php
        echo '<td><input class="btn btn-danger" type="submit" name="delete" value="Excluir"></td>';
        ?>

    </form>

<?php echo "</tr>";
    // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?')\" class='btn btn-danger'data-toggle='confirmation' href='all_users.php?source=delete_user&user_id={$user_id}'>Excluir</a></td>";
} ?>