<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">

        <h4 class="px-3 pb-2">Receitas</h4>

        <ul class="nav flex-column">

            <!-- POST -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#colapse_post" role="button" aria-expanded="false" aria-controls="colapse_post">
                    Meus Posts
                </a>
                <div id="colapse_post" class="collapse" aria-controls="colapse_post">
                    <div class="bg-white py-2 rounded">
                        <a class="d-block py-2 px-4" href=<?php echo "'index.php?user_id=" . $_SESSION["user_id"] . "'" ?>>Ver Todos</a>
                        <a class="d-block  py-2 px-4" href=<?php echo "'add_post.php?user_id=" . $_SESSION["user_id"] . "'" ?>>Adicionar Novo</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>