<div class="row">
    <div class="col-md-8 blog-main">
        <?php foreach($article_list as $article) { ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $article->title; ?></h2>
                <p class="blog-post-meta"><?php echo $article->updated_date_time; ?> by <a href="#"><?php echo $article->nickname; ?></a></p>

                <?php echo $article->content; ?>
            </div>
        <?php } ?>
    </div>
