<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <base href="/">
    <title>Single</title>
    <link href="/assets/styles/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="public/style.css" rel="stylesheet">

</head>

<body>

    <?php
        include("components/navbar.php");
        include("components/scrolling.php");
    ?>

        <div id="barba-wrapper">
            <div class="barba-container">

                <section class="section-fullscreen one">
                    <div class="transition transition-left transition-over transition-primary"></div>
                    <div class="container painting-wrapper">
                        <img class="transition-image painting " src="/assets/images/homescreen.png" />
                    </div>
                    <div class="container-table">
                        <div class="container-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-center above-transition js-quote-animate">
                                        <blockquote class="blockquote  blockquote-primary ">
                                            <p class="display-4 text-center">La sensibilité de chacun, c'est son génie.</p>
                                            <footer class="blockquote-footer ">
                                                Beaudelaire <cite class="blockquote-author" title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <button class="btn btn-reverse btn-next" (click)="clicked()">
                                            Découvrer-nous
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section push-top" id="section-one">
                    <div class="transition transition-out transition-fixed transition-primary"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="panel panel-editorial panel-align-left js-panel-animate">
                                    <div class="panel-header text-left">
                                        Manifeste les nouveaux héritiers
                                    </div>
                                    <div class="panel-content">
                                        <h1 class="panel-title title-line">
                                            Pour accompagner les changements qui s'oppère
                                        </h1>
                                        <p>
                                            La valeur d'un candidat dépend de se que son entreprise lui permet d'acomplir. Notre processus de recrutement sur mesure
                                            vous permetra de trouver un job à votre hauteur lequel vous pourrez vous épanouir
                                            pleinement.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="block-img">
                                    <div class="block-letter letter-right hidden-md-down">M</div>
                                    <div class="block-content ">
                                        <img class="img-fluid" src="/assets/images/thibault-copleux-251672.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section" id="section-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-md">
                                <div class="block-break js-block-animate">
                                    <p class="block-text">
                                        Dans une époque où la nouvelle génération boulverse les facons de penser et de travailler, le métier des ressouces humaines
                                        doit se réinventer. Nous nous positionnons comme véritable partenaires de carriere,
                                        nous vous accompagnons sur la durée de facon attentive et personnalisée.
                                    </p>
                                    <hr class="block-separator" />
                                    <h1 class="block-title">
                                        Votre singularité fait notre passion
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section" id="section-three">
                    <div class="transition transition-out transition-fixed transition-primary"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-right">
                                <div class="block-shift js-block-animate">
                                    <div class="block-letter letter-left hidden-md-down">N</div>
                                    <div class="block-content">
                                        <ul class="list-unstyled list-italics list-xl">
                                            <li>Recrutement</li>
                                            <li>Intérim</li>
                                            <li>Executive Search</li>
                                            <li>Formation</li>
                                            <li>Epérience collaborative</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-editorial panel-align-right js-panel-animate">
                                    <div class="panel-header text-left">
                                        Pour vous, nous changeons
                                    </div>
                                    <div class="panel-content">
                                        <h1 class="panel-title title-line" id="change-one">
                                            Nouvelle identité et nouvelle ambition
                                        </h1>
                                        <p>
                                            Dans une époque où la nouvelle génération boulverse les facons de penser et de travailler, le métier des ressouces humaines
                                            doit se réinventer. Nous nous positionnons comme véritable partenaires de carriere,
                                            nous vous accompagnons sur la durée de facon attentive et personnalisée.
                                        </p>
                                    </div>
                                    <div class="panel-footer">
                                        <a class="js-transition-active" href="/post.php">Découvrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-fullscreen section-overflow" id="section-four">
                    <div class="transition transition-right transition-primary" style="top: initial;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-left col-fullscreen">
                                <div class="container-table">
                                    <div class="container-cell">
                                        <div class="panel panel-editorial panel-align-left squiz-left">
                                            <div class="panel-content">
                                                <h1 class="panel-title title-line">
                                                    Ecrivons l'histoire avec un grand RH
                                                </h1>
                                                <form class="content-crushed">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Prénom">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mail">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <select class="form-control" id="exampleSelect2">
                                                                        <option>Fonction</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                    </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Portable">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary btn-block">Valider &rarr;</button>
                                                </form>
                                            </div>
                                            <div class="panel-footer">
                                                <a class="js-transition-active" href="/post.php">Découvrir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container-table">
                                    <div class="container-cell">
                                        <blockquote class="blockquote  blockquote-primary above-transition">
                                            <p class="display-4 text-center">La sensibilité de chacun, c'est son génie.</p>
                                            <footer class="blockquote-footer ">
                                                Beaudelaire <cite class="blockquote-author" title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

        </div>
        </div>

        <?php
            include("components/footer.php");
        ?>

</body>

</html>