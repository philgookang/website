<div class="row">
    <div class="col-lg-12">
        <h3>Article</h3>
        <br />
    </div>
</div>
<!--/.row-->

<form method="POST" action="/action/member/asave/">
    <input type="hidden" name="idx" value="<?php echo $article->getIdx(); ?>" />
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <label for="article-title">Title</label>
                <input type="text" class="form-control" name="title" id="article-title" value="<?php echo $article->getTitle(True); ?>"/>
            </div>
            <!--/.form-group-->

            <div class="form-group">
                <label for="article-content">Content</label>
                <textarea class="form-control" name="content" id="article-content" rows="20"><?php echo $article->getContent(True); ?></textarea>
            </div>
            <!--/.form-group-->
        </div>
        <!--/.col-lg-8-->
        <div class="col-lg-4">
            <h5>Publish</h5>
            <div class="form-group">
                <label for="article-release-date-time">Relase Date Time</label>
                <input type="text" class="form-control" name="release_date_time" id="article-release-date-time" value="<?php echo $article->getReleaseDateTime(); ?>"/>
            </div>
            <!--/.form-group-->
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <!--/.form-group-->

            <h5>Format</h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                Default radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Second default radio
                </label>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
            </div>
        </div>
        <!--/.col-lg-4-->
    </div>
    <!--/.row-->
</form>

<br /><br />
