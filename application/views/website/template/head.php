<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Phil Goo Kang</title>

        <!-- Bootstrap core CSS -->
        <link href="/res/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet"/>
        <link href="/res/css/bootstrap.blog.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="text-muted" href="#">Subscribe</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="/home/">Phil Goo Kang</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="text-muted" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                        </a>
                        <a class="btn btn-sm btn-outline-secondary" href="/login/">Login</a>
                    </div>
                </div>
            </header>
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex"> <?php /* justify-content-between */ ?>
                    <?php
                        $category_list = CategoryM::new()->getList();
                    ?>
                    <?php foreach($category_list as $category) { ?>
                        <a class="p-2 text-muted" href="/category/<?php echo $category->getName(); ?>"><?php echo ucfirst($category->getName()); ?></a>
                    <?php } ?>
                </nav>
            </div>
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
        </div>
        <main role="main" class="container">
