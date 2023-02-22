<div class="col-md-12">

    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0"><?= $card_post_title ?></h3>
            <div class="mb-4 text-muted"><?= $card_post_date ?></div>
            <a href="post.php?p_id=<?= $card_post_id ?>" class="stretched-link">Receita Completa</a>
        </div>

        <div class="col-auto d-none d-lg-block">
            <img src=<?=$card_post_image ?> style="width: 300px; height: 200px">
        </div>

    </div>

</div>