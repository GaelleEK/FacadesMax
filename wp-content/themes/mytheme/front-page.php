<?php get_header() ?>
<?php //custom_banners_register_required_plugins() ?>

<div class="row">
    <div class="col-md-8 py-4"
    <div class="container marketing">
        <div class="row m-auto text-center">
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="http://localhost/wordpress/wp-content/uploads/2021/02/pexels-expect-best-323776-scaled.jpg"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>FaçadesMax</h2>
                <p>Un artisan qualifié et professionnel à votre service.</p>
                <p>
                    <a class="btn btn-secondary" href="https://www.youtube.com/watch?v=rGhUo2Q4Pjs" role="button">Découvrez
                        en vidéo &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="http://localhost/wordpress/wp-content/uploads/2021/02/pexels-max-vakhtbovych-5997993-scaled.jpg"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Création ou rénovation</h2>
                <p>Tout est possible pour vos façades. Du crépi projeté à la rénovation de vieilles pierres, Vladimir
                    s'appuis sur son savoir-faire pour vous conseiller.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Voir les chantiers réalisés &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="http://localhost/wordpress/wp-content/uploads/2021/02/pexels-max-vakhtbovych-6032418-scaled.jpg"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Multiservice</h2>
                <p>Fort d'une expérience dans le bâtiment très diversifié, nous etudions toutes vos demandes qu'elles
                    quelle soient. N'hésitez pas à demander un devis.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Voir plus &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
    <aside class="col-md-4 blog-sidebar">
        <?= get_sidebar('homepage'); ?>
    </aside>
</div>

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span>
        </h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
             alt="Generic placeholder image">
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
             alt="Generic placeholder image">
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
             alt="Generic placeholder image">
    </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->
<?php get_footer() ?>
