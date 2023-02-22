<div class="ms-0">
    <header class="header-fixed-top ms-0">
        <div class="header">
            <div class="col-8 text-start px-3">
                <a href="index.php">
                    <img src="img\logo_muitogostoso.png" alt="MuitoGostoso" width=289,6px height=40px>
                </a>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <?php
                if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == "admin") {
                    echo "<a class='btn btn-sm btn-outline-light' href='admin/index.php'>Área Admin</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='btn btn-sm btn-outline-light' href='admin/logout.php'>Logout</a>";
                } elseif (isset($_SESSION['user_role']) && $_SESSION['user_role'] == "subscriber") {
                    echo "<a class='btn btn-sm btn-outline-light' href='subscriber/index.php?user_id=" . $_SESSION['user_id'] . "'>Área Editor</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='btn btn-sm btn-outline-light' href='admin/logout.php'>Logout</a>";
                } else {
                    echo "<a class='btn btn-sm btn-outline-light' href='admin/login.php'>Login</a>";
                }
                ?>
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