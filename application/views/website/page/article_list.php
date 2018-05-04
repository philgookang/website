<div class="row">
    <div class="col-md-8 blog-main">

        <?php if (isset($search) && $search) { ?>
            <form method="GET" action="/search/">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Search</h3>
                    </div>
                </div>
                <!--/.row-->
                <div class="row">
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="search_text" value="<?php echo $this->input->get('search_text'); ?>" />
                    </div>
                    <!--/.col-lg-9-->
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-block btn-primary" value="Search" />
                    </div>
                    <!--/.col-lg-3-->
                </div>
                <!--/.row-->
            </form>

            <br /><hr></hr><br />
        <?php } ?>

        <?php if (count($article_list) <= 0) { ?>
            <div class="blog-post">
                <p>No Search Results</p>
            </div>
        <?php } ?>

        <?php foreach($article_list as $article) { ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $article->title; ?></h2>
                <p class="blog-post-meta"><?php echo $article->updated_date_time; ?> by <a href="#"><?php echo $article->nickname; ?></a></p>

                <?php echo $article->content; ?>
            </div>
        <?php } ?>
    </div>
