<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
<nav class="navbar navbar-expand-lg" >
    <a class="navbar-brand" href="#">
        <?php
        if (function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        } else {
        bloginfo();
        }
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--        NAVBAR          -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto ml-4'
        ]) ?>
        <?= get_search_form() ?>
    </div>
</nav>
<!--        END NAVBAR          -->

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="<?= get_template_directory_uri() . '/images/slide/slide001.jpg' ?>" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1> Façades neuves ou à rénover </h1>
<!--                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
                        <p><a class="btn btn-dark mt-2" href="#" role="button">Demandez un devis</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="<?= get_template_directory_uri() . '/images/slide/slide002.jpg' ?>" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1> Isolation par l'extérieur ou l'intérieur </h1>
<!--                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
                        <p><a class="btn btn-dark mt-2" href="#" role="button">Demandez un devis</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="<?= get_template_directory_uri() . '/images/slide/slide003.jpg' ?>" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1> Demandez un devis gratuit </h1>
<!--                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
                        <p><a class="btn btn-dark mt-2" href="#" role="button">Passer à l'action</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>
