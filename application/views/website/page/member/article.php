<div class="col-lg-12">
    <h3>
        Article
        <a href="/member/aedit/" class="btn btn-primary">Create</a>
    </h3>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Views</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($article_list as $article) {?>
                <tr>
                    <th><?php echo $article->title; ?></th>
                    <td><?php echo $article->nickname; ?></td>
                    <td>
                        <?php echo $article->views; ?>
                    </td>
                    <td>
                        <div>
                            <div class="font-weight-bold">Published</div>
                            <?php echo $article->release_date_time; ?>
                        </div>
                        <div>
                            <div class="font-weight-bold">Updated</div>
                            <?php echo $article->updated_date_time; ?>
                        </div>
                    </td>
                    <td>
                        <a href="/member/aedit/<?php echo $article->idx; ?>">Edit</a>
                        &#183;
                        <a href="/member/adelete/<?php echo $article->idx; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Views</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
    </table>
</div>
