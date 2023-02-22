<div class="ms-0">
    <header class="header-fixed-top ms-0">
        <div class="header">
            <div class="col-8 text-start px-3">
                <a href="index.php">
                    <img src="img\logo_muitogostoso.png" alt="MuitoGostoso" width=289,6px height=40px>
                </a>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-light" href="admin/login.php">Login</a>
            </div>
        </div>
    </header>

    <!-- Categorias -->
    <div class="categorias">
        <nav class="nav d-flex justify-content-between">
            <?php

            $query = "SELECT * FROM Categorias";
            $select_all_cat_query = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_all_cat_query)) {
                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_id'];
                echo "<li><a href='categoria.php?cat_id={$cat_id}'>{$cat_title}</a></li>";
            }
            ?>

        </nav>
    </div>
</div>