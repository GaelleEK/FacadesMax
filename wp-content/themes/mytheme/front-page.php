<?php get_header() ?>
<div class="container pt-5">
    <div class="row m-auto p-4 text-center">
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
                s'appuie sur son savoir-faire pour vous conseiller.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Voir les chantiers réalisés &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <img class="rounded-circle"
                 src="http://localhost/wordpress/wp-content/uploads/2021/02/pexels-max-vakhtbovych-6032418-scaled.jpg"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>Multiservice</h2>
            <p>Fort d'une expérience dans le bâtiment très diversifié, nous étudions toutes vos demandes qu'elles
                quelle soient. N'hésitez pas à demander un devis.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Voir plus &raquo;</a></p>
        </div>
    </div>
</div>
<div class="container">

<hr class="featurette-divider">

<div class="row featurette px-5">
            <div class="col-md-7">
                <h2 class="featurette-heading pb-5">Spécialiste façadier <span class="custom">/</span><span
                            class="text-muted"> ancien ou neuf</span>
                </h2>
                <p class="lead text-justify">Artisan façadier depuis plus de 10 ans, Vladimir et son équipe s'occupe de
                    tous.
                    De la préparation des supports au nettoyage du chantier, FaçadesMax vous propose un service complet.
                    Nous utilisons des matériaux professionnels pour un résultat impeccable et perrène.
                </p>
                <p class="lead text-justify">Réalisation d'enduits pour permettre l'étanchéité des murs, projection de
                    crépi, réalisations de finitions propres et soignés selon votre choix.
                    Pose de peintures minérales de qualité pour garder vos façades éclatantes.
                </p>
            </div>
            <div class="col-md-5 my-auto">
                <img class="featurette-image img-fluid mx-auto"
                     src="<?= get_template_directory_uri() . '/images/facades.jpg' ?>"
                     alt="">
            </div>
        </div>
    <hr class="featurette-divider">

    <div class="row featurette px-5">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading pb-5">Multiservice <span class="custom">/</span> <span class="text-muted">tous chantiers acceptés</span>
                    </h2>
                    <p class="lead text-justify">Grâce à une longue expérience dans le bâtiment, Vladimir vous conseille et
                        vous
                        propose la meilleure solution pour vos travaux qu'ils soient intérieurs ou extérieurs, de confort ou
                        d'embellissement.</p>
                    <!--        <p class="lead text-justify"> </p>-->

                </div>
                <div class="col-md-5 order-md-1 my-auto">
                    <img class="featurette-image img-fluid mx-auto"
                         src="<?= get_template_directory_uri() . '/images/bardage.jpg' ?>"
                         alt="">
                </div>
            </div>

    <hr class="featurette-divider">

    <div class="row featurette px-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading pb-5">Zone d'intervention <span class="custom">/</span> <span
                                class="text-muted">Franche Comté et plus</span></h2>
                    <p class="lead text-justify">Nous intervenons dans toute la Franche Comté et étudions toute proposition.
                        Les
                        devis sont gratuits n'hésitez pas à nous contactez.</p>
                </div>
                <div class="col-md-5 my-auto">
                    <img class="featurette-image img-fluid mx-auto"
                         src="<?= get_template_directory_uri() . '/images/finition-pierre-taille.jpg' ?>"
                         alt="">
                </div>
            </div>

    <hr class="featurette-divider">
</div>
<?php get_footer() ?>
