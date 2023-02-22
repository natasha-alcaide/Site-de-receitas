<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">

        <h4 class="px-3 pb-2">Receitas</h4>

        <ul class="nav flex-column">

            <!-- DASHBOARD -->
            <li class="nav-item active border-top border-bottom">
                <a class="nav-link" href="index.php">Dashboard</a>
            </li>

            <!-- POST -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#colapse_post" role="button" aria-expanded="false" aria-controls="colapse_post">
                    Posts
                </a>
                <div id="colapse_post" class="collapse" aria-controls="colapse_post">
                    <div class="bg-white py-2 rounded">
                        <a class="d-block py-2 px-4" href="all_posts.php">Ver Todos</a>
                        <a class="d-block  py-2 px-4" href="add_post.php">Adicionar Novo</a>
                    </div>
                </div>
            </li>

            <!-- CATEGORIAS -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#colapse_categorias" role="button" aria-expanded="false" aria-controls="colapse_categorias">
                    Categorias
                </a>
                <div id="colapse_categorias" class="collapse" aria-controls="colapse_categorias">
                    <div class="bg-white py-2 rounded">
                        <a class="d-block py-2 px-4" href="all_categories.php">Ver Todas</a>
                        <a class="d-block  py-2 px-4" href="add_category.php">Adicionar Nova</a>
                    </div>
                </div>
            </li>

            <!-- COMENTÁRIOS -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#colapse_comentarios" role="button" aria-expanded="false" aria-controls="colapse_comentarios">
                    Comentários
                </a>
                <div id="colapse_comentarios" class="collapse" aria-controls="colapse_comentarios">
                    <div class="bg-white py-2 rounded">
                        <a class="d-block py-2 px-4" href="all_comments.php">Ver Todos</a>
                    </div>
                </div>
            </li>

            <!-- USUÁRIO -->
            <li class="nav-item border-bottom">
                <a class="nav-link" data-bs-toggle="collapse" href="#colapse_usuario" role="button" aria-expanded="false" aria-controls="colapse_usuario">
                    Usuários
                </a>
                <div id="colapse_usuario" class="collapse" aria-controls="colapse_usuario">
                    <div class="bg-white py-2 rounded">
                        <a class="d-block py-2 px-4" href="all_users.php">Ver Todos</a>
                        <a class="d-block  py-2 px-4" href="add_user.php">Adicionar Novo</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>