<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #DDD;
            padding-top: 10px;
        }

        [class*="col-"] {
            margin-bottom: 20px;
        }

        img {
            width: 100%;
        }

        .well {
            background-color: #CCC;
            padding: 20px;
        }

        a:active,
        a:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" datatoggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Les Tigres</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Accueil</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Témoignages
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Dompteurs</a>
                            </li>
                            <li>
                                <a href="#">Zoos</a>
                            </li>
                            <li>
                                <a href="#">Chasseurs</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Autres témoignages</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Liens</a>
                    </li>
                    <li>
                        <a href="#">Références</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="input-group">
                        <input type="text" style="width:150px" class="input-sm form-control" placeholder="Recherche">
                        <span class="input-group-btn">

                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btnsm">
                                    <span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                            </span>
                    </div>
                </form>
            </div>
        </nav>
        <header class="row">
            <div class="col-lg-12">
                <h1>Mon amour pour les tigres</h1>
            </div>
        </header>
        <section class="row">
            <div class="col-lg-12">
                <p> Je suis passionné par les
                    <strong>tigres</strong> depuis très longtemps. Ce site a été construit en
                    <em>hommage à ces merveilleux félins...</em>
                    <br> Je fais partie de la
                    <abbr title="Société des Amoureux des Tigres">SAT</abbr> qui a pour but de faire connaître ces splendides animaux. </p>
                <p>Voici ce qu'en dit le wikipedia :</p>
                <blockquote> Le Tigre (Panthera tigris) est un
                    <a datatoggle="tooltip" href="#" title="Classe de vertébrés">mammifère</a> carnivore de la famille des félidés (Felidae) du genre Panthera. Aisément reconnaissable
                    à sa fourrure rousse rayée de noir, il est le plus grand félin sauvage et l'un des plus grands
                    <a data-toggle="tooltip"
                        href="#" title='Synonyme de "carnassier"'>carnivores </a>du monde. L'espèce est divisée en neuf sous-espèces possédant des différences mineures
                    en termes de taille ou de comportement. Superprédateur, il chasse principalement les cerfs et les sangliers,
                    bien qu'il puisse s'attaquer à des proies de taille plus importante comme les buffles. Jusqu'au XIXe
                    siècle, le Tigre était réputé mangeur d'homme. La structure sociale des tigres en fait un animal solitaire
                    ; le mâle possède un territoire qui englobe les domaines de plusieurs femelles et ne participe pas à
                    l'éducation des petits.
                    <br>
                    <small class="pull-right">Wikipedia</small>
                    <br> </blockquote>
            </div>
        </section>
        <section class="row">
            <div class="media col-lg-12">
                <div class="pull-right">
                    <iframe width="420" height="320" src="http://www.youtube.com/embed/VmnIeLmjuHA" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="media-body pull-right">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio">Vidéo 1 </label>
                        <label class="btn btn-primary">
                            <input type="radio">Vidéo 2 </label>
                        <label class="btn btn-primary">
                            <input type="radio">Vidéo 3 </label>
                    </div>
                </div> Partie 3 : Mise en forme avancée 153/252 www.openclassrooms.com
            </div>
        </section>
        <section class="row">
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t1.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t2.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t3.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t4.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t5.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t6.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t7.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t8.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t9.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t10.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 ">
                <a href="#" class="thumbnail">
                    <img src="images/t11.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 "> Partie 3 : Mise en forme avancée 154/252 www.openclassrooms.com
                <a href="#" class="thumbnail">
                    <img src="images/t12.jpg" alt="Tigre" class="imgrounded"> </a>
            </div>
        </section>
        <div class="row">
            <section class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Les sous-espèces des tigres :</h3>
                    </div>
                    <div class="list-group">
                        <a href="#infos" class="list-group-item" datatoggle="modal"> Tigre de Sibérie
                            <span class="badge">120</span>
                        </a>
                        <div class="modal fade" id="infos" role="dialog" arialabelledby="modalTitre" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" datadismiss="modal" aria-hidden="true">x</button>
                                        <h4 id="modalTitre" class="modal-title">Plus d'informations sur le tigre de Sibérie</h4>
                                    </div>
                                    <div class="modal-body">
                                        <blockquote> Les tigres de Sibérie pèsent de 180 à 350 kg pour les mâles et de 100 à 200 kg pour
                                            les femelles. Le plus gros tigre de Sibérie, tué en 1950, atteignait les 384
                                            kg. Le Tigre de Sibérie est le troisième plus gros prédateur terrestre derrière
                                            l'ours kodiak et l'ours polaire. La longueur totale du corps avec la queue est
                                            comprise entre 2,7 et 3,8 m pour les mâles et entre 2,4 et 2,75 m pour les femelles.
                                            La longueur du crâne est de 341 à 383 mm pour les mâles et 279 à 318 mm pour
                                            les femelles.
                                            <hr>
                                            <small class="pull-right">Wikipedia</small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="list-group-item"> Tigre de Chine méridionale
                            <span class="badge">540</span>
                        </a>
                        <a href="#" class="list-group-item"> Tigre de Bali
                            <span class="badge">230</span>
                        </a>
                        <a href="#" class="list-group-item"> Tigre de d'Indochine
                            <span class="badge">240</span>
                        </a>
                        <a href="#" class="list-group-item"> Tigre de Malaisie
                            <span class="badge">1200</span>
                        </a>
                        <a href="#" class="list-group-item"> Tigre de Java
                            <span class="badge">710</span>
                        </a>
                        <a href="#" class="list-group-item"> Tigre de Sumatra Partie 3 : Mise en forme avancée 155/252 www.openclassrooms.com
                            <span class="badge">20</span>
                        </a>
                        <a href="#" class="list-group-item"> Tigre du Bengale
                            <span class="badge">40</span>
                        </a>
                        <a href="#" class="list-group-item"> Tigre de la Caspienne
                            <span class="badge">200</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class="col-sm-8">
                <div id="carousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="Tigre" src="images/photo-tigre.jpg">
                        </div>
                        <div class="item">
                            <img alt="Tigre" src="images/phototigre1.jpg">
                        </div>
                        <div class="item">
                            <img alt="Tigre" src="images/phototigre2.jpg">
                        </div>
                        <div class="item">
                            <img alt="Tigre" src="images/phototigre3.jpg">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <section class="col-sm-12">
                <div class="panel panel-primary">
                    <table class="table table-striped table-condensed">
                        <div class="panel-heading">
                            <h3 class="panel-title">Les menaces pour les tigres</h3>
                        </div>
                        <thead>
                            <tr>
                                <th>Lieu</th>
                                <th>Menace</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Grand Mekong</td>
                                <td>Demande croissante de certaines parties de l’animal pour la médecine chinoise traditionnelle
                                    et fragmentation des habitats du fait du développement non durable d’infrastructures</td>
                            </tr>
                            <tr>
                                <td>Île de Sumatra</td>
                                <td>Production d’huile de palme et de pâtes à papiers</td>
                            </tr>
                            <tr>
                                <td>Indonésie et Malaisie</td>
                                <td>Pâte à papier, l’huile de palme et le caoutchouc</td>
                            </tr>
                            <tr>
                                <td>États-Unis</td>
                                <td>Les tigres captifs représentent un danger pour Partie 3 : Mise en forme avancée 156/252 www.openclassrooms.com
                                    les tigres sauvages</td>
                            </tr>
                            <tr>
                                <td>Europe</td>
                                <td>Gros appétit pour l’huile de palme</td>
                            </tr>
                            <tr>
                                <td>Népal</td>
                                <td>Commerce illégal de produits dérivés de tigres</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="row">
            <section class="col-sm-8">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="#contact" datatoggle="tab">Contact</a>
                    </li>
                    <li>
                        <a href="#informations" datatoggle="tab">Informations pratiques</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="contact">
                        <form class="well">
                            <h4>
                                <span class="label label-default">Si vous voulez me laisser un message</span>
                            </h4>
                            <h4>Comment m'avez-vous trouvé ?</h4>
                            <fieldset>
                                <label for="ami" class="radio">
                                    <input type="radio" name="origine" value="ami" id="ami"> Par un ami </label>
                                <label for="web" class="radio">
                                    <input type="radio" name="origine" value="web" id="web"> Sur le web </label>
                                <label for="hasard" class="radio">
                                    <input type="radio" name="origine" value="hasard" id="hasard"> Par hasard </label>
                                <label for="autre" class="radio">
                                    <input type="radio" name="origine" value="autre" id="autre"> Autre... </label>
                                <label for="textarea">Votre message :</label>
                                <textarea id="textarea" rows="4" class="formcontrol"></textarea>
                                <p class="help-block">Vous pouvez agrandir la fenêtre</p>
                                <button class="btn btn-primary" type="submit">
                                    <span class="glyphicon glyphicon-ok-sign"></span> Envoyer</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="informations">
                        <div class="well">
                            <h2>Informations pratiques</h2>
                            <p>Si vous êtes intéressés par la protection des tigres et si vous désirez prendre part aux actions
                                menées... blablabla...</p>
                        </div>
                    </div> Partie 3 : Mise en forme avancée 157/252 www.openclassrooms.com
                    <div class="tab-content">
            </section>
            <section class="col-sm-4">
                <address class="thumbnail">
                    <p>Vous pouvez me contacter à cette adresse :</p>
                    <strong>Tigrou Alfred</strong>
                    <br> Allée des fauves
                    <br> 28645 Félins-sur-Loire
                    <br> </address>
            </section>
            </div>
            </div>
            <script src="assets/js/jquery.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script>
                $(function () {
                    $('.carousel').carousel();
                    $('blockquote a').tooltip();
                    $('.btn-group .btn:nth-child(1)').click(function () {
                        $('iframe').attr('src', 'http://www.youtube.com/embed/VmnIeLmjuHA');
                    }) $('.btn-group .btn:nth-child(2)').click(function () {
                        $('iframe').attr('src', 'http://www.youtube.com/embed/HQU2ZFnMbJg');
                    }) $('.btn-group .btn:nth-child(3)').click(function () {
                        $('iframe').attr('src', 'http://www.youtube.com/embed/qDBKzdNpiy0');
                    })
                });
            </script>
</body>

</html>