<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php wp_title('|' , 'true' , 'right') ?>
        <?php bloginfo('name') ?>
    </title>

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

    <header>

        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo get_site_url(); ?>">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php bootstrap_menu(); ?>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control search-inp mr-sm-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn" type="submit"><i class="fas fa-search fa-icon"></i></button>
                    </form>
                </div>
            </nav>



            <div class="row">
                <div class="col-sm-12">

                    <div class="slider-div">

                        <?php if(is_front_page() || is_home() ) { ?>
                        <?php if ( get_header_image() ) {?>
                        <img src="<?php echo get_header_image();?>" class="img-fluid main-img">
                        <?php } else { ?>
                        <img src="http://placehold.it/1200x500/300" class="img-fluid main-header" />
                        <?php } } ?>


                    </div>

                </div>
            </div>

        </div>



    </header>