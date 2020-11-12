<?php get_header(); ?>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid min-vh-100">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--div class="blog-masthead fixed-top page-header d-flex align-items-end">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="<?php echo get_bloginfo('wpurl');?>">Home</a>
                <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
        </div>
    </div -->
    <section class="blog">
        <div class="container">
            <!-- <div class="blog-header">
            <h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <p class="lead blog-description"><?php echo get_bloginfo('description') ?></p>
        </div> -->
            <div class="row">
                <div class="col-lg-8 blog-main">
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;
                    ?>
                    <?php
                    if ( $link = get_next_posts_link() || $link = get_previous_posts_link() ) {
                        echo '<nav>';
                            echo '<ul class = "pager">';
                                if ( $link = get_next_posts_link( 'Next' ) ) {
                                    echo '<li>'.$link.'</li>';
                                };
                                if ( $link = get_previous_posts_link( 'Previous' ) ) {
                                    echo '<li>'.$link.'</li>';
                                };
                                echo '</ul>';
                                echo '</nav>';
                    }
                    ?>
                    <?php endif; ?>
                </div> <!-- /.blog-main -->
                <?php get_sidebar(); ?>
            </div> <!-- /.row -->
        </div>
        <?php get_footer(); ?>