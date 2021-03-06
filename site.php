<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test_boostarp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/tuto.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/jquery1.12.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <header class="row col-sm-12">
            <div class="page-header">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Livres</a>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#">Classes
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Sixième</a>
                                </li>
                                <li>
                                    <a href="#">cuinquième</a>
                                </li>
                                <li>
                                    <a href="#">Quatrième</a>
                                </li>
                                <li>
                                    <a href="#">Troisième</a>
                                </li>
                                <li>
                                    <a href="#">Seconde</a>
                                </li>
                                <li>
                                    <a href="#">Première</a>
                                </li>
                                <li>
                                    <a href="#" style="color=blue;">Terminale</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">Autres info</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">A propos</a>
                        </li>
                    </ul>
                    <form class="navbar-form pull-right">
                        <input type="text" style="width:150px" class="input-sm form-control" placeholder="Recherche">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                    </form>
                </nav>

            </div>
        </header>
        <div class="row">
            <article class="col-lg-12">
                <div class="carousel-inner thumbnail">
                    <div class="item active">
                        <img alt="" src="images/t1.jpg">
                    </div>
                    <div class="item">
                        <img alt="" src="images/t2.jpg">
                    </div>
                    <div class="item">
                        <img alt="" src="images/t4.jpg">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel" dataslide="next">
                    <span class="icon-next"></span>
                </a>

            </article>
        </div>
        <div class="row col-sm-12">
            <nav class="col-sm-2">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="#" id="pop" class="btn btn-info" data-toggle="popover" data-content="C'est tout simple à faire !" title="Classes disponible">
                            <span class="glyphicon glyphicon-home"></span> Classes </a>
                    </li>
                    <li>
                        <a href="?classe=6">
                            <span class="glyphicon glyphiconbook"></span> Sixième</a>
                    </li>
                    <li>
                        <a href="?classe=5">
                            <span class="glyphicon glyphiconbook"></span> Cinquième</a>
                    </li>
                    <li>
                        <a href="?classe=4">
                            <span class="glyphicon glyphiconfacetime-video"></span> Quatrième</a>
                    </li>
                    <li>
                        <a href="?classe=3">
                            <span class="glyphicon glyphiconheadphones"></span> Troisième </a>
                    </li>
                    <li>
                        <a href="?classe=2nd">
                            <span class="glyphicon glyphiconheadphones"></span> Seconde</a>
                    </li>
                    <li>
                        <a href="?classe=1er">
                            <span class="glyphicon glyphiconheadphones"></span> Première</a>
                    </li>
                    <li>
                        <a href="?classe=tle">
                            <span class="glyphicon glyphiconheadphones"></span> Terminale </a>
                    </li>
                </ul>
            </nav>
            <section class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Manuels Scolaire!</h3>
                    </div>
                    <div class="panel-body">
                        <div>
                            <?php
    if( isset($_GET['classe'])) {
        $classe = $_GET['classe'];
        $num = $classe[0];
        if($num == '2')
            echo "<h1>Livres de ".$num."nd</h1>";
        else if($num == '1')
            echo "<h1>Livres de ".$num."er</h1>";
        else if($num == 't')
            echo "<h1>Livres de ".$num."le</h1>";
        else
            echo "<h1>Livres de ".$num."eme</h1>";
    }
    
    ?>
                                <table border=1 class="table table-bordered table-striped table-condensed">
                                    <tr class="danger">
										<th>N°</th>
                                        <th> CLASSE</th>
                                        <th> MATIERES</th>
                                        <th> TITRES</th>
                                        <th> AUTEUR</th>
                                        <th> EDITEURS</th>
                                        <th> PRIX</th>
                                    </tr>
                                    <?php 
        $bdd = new PDO('mysql:host=localhost;dbname=kougoue','root','');//pour connecter mon php a la bd
        try{
            $bdd = new PDO( 'mysql:host=localhost;dbname=kougoue','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));   }
        catch(exception $p){
            die('erreur:'.$p->getmessage());
        }
        $classe=$_GET['classe'];
       
        $num = $classe[0];
        if($num == '2')
            $requete = "SELECT * FROM livres WHERE classe='".$num."nd'";
        else if($num == '1')
            $requete = "SELECT * FROM livres WHERE classe='".$num."er'";
        else if($num == 't')
            $requete = "SELECT * FROM livres WHERE classe='".$num."le'";
        else
            $requete = "SELECT * FROM livres WHERE classe='".$num."ème'";
        $reponse=$bdd->query($requete);
        while ($donnees = $reponse->fetch())
        {
    ?>

                                    <tr>
                                        <td class="success">
                                            <?php echo $donnees ["CLASSE"];?>
                                        </td>
                                        <td class="danger">
                                            <?php echo $donnees['MATIERES'];?>
                                        </td>
                                        <td class="warning">
                                            <?php echo $donnees["TITRES"];?>
                                        </td>
                                        <td class="active">
                                            <?php echo $donnees['AUTEURS'];?>
                                        </td>
                                        <td class="danger">
                                            <?php echo $donnees['EDITEURS'];?>
                                        </td>
                                        <td class="success">
                                            <?php echo $donnees['PRIX'];?>
                                        </td>
                                    </tr>
                                    <?php    
        }
        $reponse->closecursor();
    ?>
                                </table>

                                <br>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="row col-sm-12">
            <div class="panel panel-body">
                <div class="row">
                    <div class="col-lg-2 col-lg-push-8">
                        <a href=""></a>
                    </div>
                    <div class="col-lg-2 col-lg-push-3">Colonne 2</div>
                    <div class="col-lg-2 col-lg-pull-2">Colonne 3</div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>