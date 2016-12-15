<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Marostack';
?>
<div class="site-index" style="background-image: url('imgs/index-bottom.jpg'); background-size:100% auto; background-repeat: no-repeat; background-position: center bottom;">

    <div style="text-align:left; padding:10px 50px 5px 15px; border-left:10px solid red; margin-bottom: 10px; background-color: #fdffe7">
        <div class="row">
            <div class="col-md-12">
                <span style="padding-top: 25px; text-align: center;">
                    <?php
                    echo Html::img("imgs/logo_marostack_com_.png", ["class" => "img-responsive pull-right"]);
                    ?>
                </span>
                <p class="lead">
                    Spécialisé dans les domaines d'informatique et d'industrie, <span class="text-danger">Marostack</span>  est une entreprise dont le métier est l'utilisation combinée de moyens informatiques, électroniques et 
                    de procédés de télécommunication, dans une vision de mise en place et d'amélioration des systèmes 
                    d'information.
                    <br />
                    Que ce soit la création de logiciels sur mesure, la mise en place de progiciels et la modification des fichiers de
                    configuration en fonction des besoins, des opérations de réglage, d'expertise et de surveillance du
                    système informatique, votre besoin sera traiter avec le niveau le plus optimale en terme de coût et de technologie.
                </p>

                <p class="text-right"><a class="btn btn-default btn-sm" href="/index.php?r=site/apropos">Plus &raquo;</a></p>
            </div>

        </div>
    </div>

    <div class="body-content">


        <div class="content-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header" style="margin-top:0px;">
                        <h1>Vous etês meilleurs ! <small> Avec un système d'information qui accompagne votre developpment.</small></h1>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <?php echo Html::img("imgs/slide/01.jpeg", ["class" => "img-responsive"]); ?>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <?php echo Html::img("imgs/slide/07.jpeg", ["class" => "img-responsive"]); ?>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <?php echo Html::img("imgs/slide/03.jpeg", ["class" => "img-responsive"]); ?>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <?php echo Html::img("imgs/slide/04.jpeg", ["class" => "img-responsive"]); ?>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <?php echo Html::img("imgs/slide/05.jpeg", ["class" => "img-responsive"]); ?>
                                <!--                                <div class="carousel-caption">
                                                                    ...
                                                                </div>-->
                            </div>
                            <div class="item">
                                <?php echo Html::img("imgs/slide/06.jpeg", ["class" => "img-responsive"]); ?>
                            </div>
                            <div class="item">
                                <?php echo Html::img("imgs/slide/02.jpeg", ["class" => "img-responsive"]); ?>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />


    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title lead" style="color:#fff; font-weight: 500">EXPERTISES</h1>
                </div>
                <div class="panel-body" style="min-height: 300px">

                    <p class="text-justify" style="line-height:160%">L'éxpertise de nos collaborateurs nous permet d'intervenir au profit de nos clients à tous les stades du projet : 
                        étude d'opportunité, veille technologique, cahier des charges, assistance à maîtrise d'ouvrage, maîtrise 
                        d'ouvrage déléguée, recette, déploiement, formation des utilisateurs, conduite de changement, évaluation 
                        en plus des missions post-projet de retour et capitalisation d'experience.</p>
                    <p><a class="btn btn-sm btn-default pull-right" href="/index.php?r=site/expertises">Plus &raquo;</a></p>
                </div>
            </div>


        </div>
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title lead" style="color:#fff; font-weight: 500">SOLUTIONS</h1>
                </div>
                <div class="panel-body" style="min-height: 300px">

                    <p class="text-justify" style="line-height:160%">Marostack mis a votre disposition une large panoplie de solution système logiciel et/ou materiel dédié 
                        aux differentes situation de gestion des ressources informationnelles de votre entreprise, adapté aux scénarios métiers les plus repondus, 
                        avec un niveau de paramétrage et de configuration autand flexible et extensible qu'il est necessaire pour vous assurez un résultat optimale.</p>

                    <p><a class="btn  btn-sm btn-default pull-right" href="/index.php?r=site/solutions">Plus &raquo;</a></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title lead" style="color:#fff; font-weight: 500">FORMATIONS</h1>
                </div>
                <div class="panel-body" style="min-height: 300px">

                    <p class="text-justify" style="line-height:160%">
                        la formation professionnelle participe étroitement à la création des identités professionnelles, c'est pourquoi nous avons adapter nos méthodes suivant 
                        les lignes de votre strategie de developpement interne, en vous proposent un process d'apprentissage sur mesure, qui permetra a vos equipe d'améliorer et
                        d'acuerir des complements “savoir et savoir-faire” a leurs compétances métier.
                    </p>

                    <p><a class="btn  btn-sm btn-default pull-right" href="/index.php?r=site/formations">Plus &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <?php // echo Html::img("imgs/slide/06.jpeg", ["class" => "img-responsive"]); ?>

        <div class="col-md-12">
            <div class="well  well-lg " style="margin-bottom: 0px; ">
                <p class="text-center lead" style="margin-bottom: 0px;">
                    <i style="font-weight: 400">"Certains déclarent que le succès ne peut naître que de l'exploitation de circonstances favorables. il faut donc, d'abord, les provoquer."</i> - Charles de Gaulle
                </p>
            </div>
        </div>
    </div>
    <br />
    <div class="content-fluid">
        <div class="row">
            <!--            <div class="col-md-1">
                            <div class="panel panel-warning">
                                <div class="panel-heading text-center"><h3>Ebauche d'activités</h3></div>
                                <div class="panel-body">
                                    <div class="page-header" style="margin-top:0px">
                                        <h4>Projet de Mise en place du systéme d'information de base de Longometal Armatures</h4>
                                    </div>
                                    <p class="small">
                                        Le système d’information est un facteur essentiel de toute entité entreprise, son niveau d'habilitée de commutation et de contrôle des flux détermine les capacités d’efficacité d’une bonne partie si ce n’est pas l’ensemble des segments de l’activité.
                                        <br /><br />
                                        Dans le cadre de sont évolution et d’alignement avec le groupe SONASID et ArcelorMittal, Longometal Armatures a adopter un nouveau système de gestion d’entreprise, connu pour être le leader dans son domaine, et qui est au nom de SAP. Comme tout système de gestion, l’interaction avec les éléments spécifiques de l’activité de chaque entreprise et les autres systèmes existant devient un besoin claire, voir être la clé de sa réussite.
                                        <br /><br />
                                        Le pont a bascule représente un point de contrôle élémentaire dans la chaîne du système d’information interne de Longometal armatures, c’est ainsi que par récurrence, assurer la communication du pont a bascule, l’unique point d’entrée et sortie marchandise et matière première avec les modules de fonctions du système de gestion a fait l’objet d’un projet dont l’objectif été la mise en place d’une solution fiable qui assure l’automatisation et la fiabilité des informations issues de ce poste d’activité.<br /><br />
                                        Cet article a pour objectif d’exposer le retour expérience du projet qui permet d’assurer la communication entre le pont a bascule Longometal Armatures - site Berrechid, Maroc -, et le système de gestion d’entreprise SAP sur l’infrastructure Cloud Data Center privé de ArcellorMittal à Luxembourg.<br />
            
                                    <p class="text-right"><a class="btn btn-default btn-sm" href="/articles">Plus &raquo;</a></p>
                                    </p>
                                </div>
                            </div>
                        </div>-->
            <div class="col-md-6 col-md-offset-6" style=" background-color: transparent;">
                <div class="panel panel-warning" style=" background-color: transparent;">
                    <div class="panel-heading text-center"><h3>Activités à la Une</h3></div>
                    <div class="panel-body" style="padding-bottom: 0px; background-color: transparent;  max-height: 330px; overflow-y: scroll;">

                        <div class="well well-sm">
                            <strong>07/11/2016</strong> : La 22ème session de la Conférence des Parties de la Convention-Cadre des Nations Unies sur les changements climatiques (COP22) se tiendra à Marrakech du 7 au 18 novembre 2016, Marostack en participe a travers deux tables rondes au sujet "Green Energy toward a Green Technology".
                        </div>

                        <div class="well well-sm">
                            <strong>05/09/2016</strong> : Participation au « Country Seminar on Turkish Public Private Partnership Experiences » organisé par le Conseil d’Affaires Internationales de Consultation Technique et la Fédération des Consultants des Pays Islamiques (FCIC).
                        </div>

                        <div class="well well-sm">
                            <strong>23/06/2016</strong> : Ftour-Debat sous le théme <i>"La protection de l'Envirenement : des enjeux sociaux et de management des entreprises"</i> organiser en partenariat entre l'Institut Marocain de l'Audit Social -IMAS- et l'Association de Qualité et Management -AQM-.
                        </div>

                        <div class="well well-sm">
                            <strong>11/04/2016</strong> : La Commission R&D et Relation avec l’Université organise en partenariat avec Maroc Numeric Cluster, l’Académie Hassan II des sciences et Techniques et le Service de la coopération et d’action Culturelle auprès de l’Ambassade de France, une rencontre sur le <i>"BIG DATA : BUSINESS ET INDUSTRIE"</i>.
                        </div>

                        <div class="well well-sm">
                            <strong>14/12/2015</strong> : Rencontre d’une délégation d’opérateurs économiques saoudiens à la CGEM, composée des membres du Conseil d’Affaires Maroco-Saoudien, événement de la CGEM.
                        </div>
                        <!--<p class="text-right"><a class="btn btn-default btn-sm" href="/articles">Plus &raquo;</a></p>-->

                        <!--                        <div class="well well-sm">
                                                    <strong>18/02/2015</strong> : Progrès Economique et Social, rendez-vous de la Commission Emploi et Relations Sociales, au sujet <i>"Quel Modèle Social pour une compétitivité durable et un travail décent ?"</i> organiser par la CGEM.
                                                </div>-->
                    </div>
                </div>
            </div>
        </div>
        <!--<hr />-->

        <!--        <div class="row">
                    <div class="col-md-2 col-xs-4">
        <?php
//                echo Html::img("imgs/logo_marostack_com_.png", ["class" => "img-responsive text-center"]);
        ?>
                    </div>
                    <div class="col-md-2 col-xs-4">
        <?php
//                echo Html::img("imgs/logo_maghribup_com_.png", ["class" => "img-responsive text-center"]);
        ?>
                    </div>
        
                    <div class="col-md-2 col-xs-4">
        <?php
//                echo Html::img("imgs/samsdaba_logo_mini.png", ["class" => "img-responsive text-center"]);
        ?>
                    </div>
        
                    <div class="col-md-2 col-xs-4">
        <?php
//                echo Html::img("imgs/marohelp_logo_mini.png", ["class" => "img-responsive text-center"]);
        ?>
                    </div>
        
                    <div class="col-md-2 col-xs-4">
        <?php
//                echo Html::img("imgs/angsite_logo_mini.png", ["class" => "img-responsive text-center"]);
        ?>
                    </div>
        
                    <div class="col-md-2 col-xs-4">
        <?php
//                echo Html::img("imgs/nasna_logo_mini.png", ["class" => "img-responsive text-center"]);
        ?>
                    </div>
                </div>-->
    </div>
</div>