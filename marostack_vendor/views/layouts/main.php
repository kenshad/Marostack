<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php
$this->beginPage();
if (Yii::$app->language == "AR") {
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar" dir="rtl">
        <?php
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="<?= Yii::$app->language ?>">
            <?php
        }
        ?>
        <head>
            <meta charset="<?= Yii::$app->charset ?>">

                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <?= Html::csrfMetaTags() ?>
                    <title><?= Html::encode($this->title) ?></title>
                    <?php $this->head() ?>
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></link>
                    </head>
                    <body>
                        <?php $this->beginBody() ?>

                        <div class="wrap">
                            <?php
                            NavBar::begin([
                                'brandLabel' => "Société <b>MAROSTACK</b>",
                                'brandUrl' => Yii::$app->homeUrl,
                                'options' => [
                                    'class' => 'navbar-inverse navbar-fixed-top',
                                ],
                            ]);
                            echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => [
                                        ['label' => 'Accueil', 'url' => ['/site/index']],
                                        ['label' => 'L\'Entreprise', 'items' => [
                                            "<li class='dropdown-header'>Présentation</li>",
                                                ['label' => "Mot de la Direction", 'url' => '/index.php?r=site/dg'],
                                                ['label' => "Activités Marostack", 'url' => '/index.php?r=site/apropos'],
                                                ['label' => "Nos Engagments", 'url' => '/index.php?r=site/engagements'],
//                "<li class='divider'></li>",
//                "<li class='dropdown-header'>Ressources</li>",
//                ['label' => "Publications et Media", 'url' => '/site/articles'],
//                ['label' => "Logos et Marques", 'url' => '/logos'],
                                        ],],
                                        ['label' => 'Expertises', 'url' => ['/site/expertises']],
                                        ['label' => 'Solutions', 'url' => ['/site/solutions']],
//                                        ['label' => 'Expertises', 'items' => [
//                                            "<li class='dropdown-header'>Système d'Information</li>",
//                                                ['label' => "Étude et Analyse de Faisabilité", 'url' => '/etudeanalyse'],
//                                                ['label' => "Migration et Reprise de Données", 'url' => '#'],
//                                                ['label' => "Cartographie des Processus", 'url' => '#'],
//                                                ['label' => "Cartographie des Risques", 'url' => '#'],
//                                                ['label' => "Maintenance et Évolution Applicative", 'url' => '#'],
//                                            "<li class='divider'></li>",
//                                            "<li class='dropdown-header'>Assistance Technique</li>",
//                                                ['label' => "Administration d'infrastructure", 'url' => '#'],
//                                                ['label' => "Support utilisateur - Helpdesk", 'url' => '#'],
//                                                ['label' => "Accompagnement Contrôle Interne", 'url' => '#'],
//                                                ['label' => "Etude d'Informatisation", 'url' => '#'],
//                                            "<li class='divider'></li>",
//                                            "<li class='dropdown-header'>Audit d'Infrastructure</li>",
//                                                ['label' => "Audit de vulnerabilité d'Information", 'url' => '#'],
//                                                ['label' => "Audit du parc Logiciel et Materiel", 'url' => '#'],
//                                                ['label' => "Audit Réseaux et Sécurité d'Accées", 'url' => '#'],
//                                        ],
//                                    ],
//                                        ['label' => 'Solutions', 'items' => [
//                                            '<li class="dropdown-header">Edition de programme</li>',
//                                                ['label' => 'Application SaaS', 'url' => '#'],
//                                                ['label' => 'Embarquée - Android/IOS', 'url' => '#'],
//                                                ['label' => 'Web service / API', 'url' => '#'],
//                                                ['label' => "Controle avancée - Myo", 'url' => '#'],
//                                                ['label' => "Prototypage - Arduino", 'url' => '#'],
//                                            '<li class="divider"></li>',
//                                            '<li class="dropdown-header">Réseaux et Sécurité</li>',
//                                                ['label' => 'Accées distant / VPN SSL', 'url' => '#'],
//                                                ['label' => "Stockage de données", 'url' => '#'],
//                                                ['label' => "Chiffrage de données", 'url' => '#'],
//                                                ['label' => 'Téléphonie Locale', 'url' => '#'],
//                                                ['label' => 'Internet et Wifi', 'url' => '#'],
//                                                ['label' => 'Integration et géstion de logs', 'url' => '#'],
//                                            '<li class="divider"></li>',
//                                            '<li class="dropdown-header">Progiciels</li>',
//                                                ['label' => 'Gestion de Stocke', 'url' => '#'],
//                                                ['label' => "Gestion de la Force de Vente", 'url' => '#'],
//                                                ['label' => "Gestion des Entrepôts", 'url' => '#'],
//                                                ['label' => "Gestion de la Facturation", 'url' => '#'],
//                                                ['label' => "Gestion de la Paie", 'url' => '#'],
//                                        ],
//                                    ],
                                    ['label' => 'Formations', 'url' => ['site/formations']],
                                    /* ['label' => 'Formations',
                                      'items' => [
                                      '<li class="dropdown-header">Droit informatique</li>',
                                      ['label' => 'Droit du commerce électronique','url' => '#'],
                                      ['label' => 'Droit de la communication numérique','url' => '#'],
                                      ['label' => 'Droit de la propriété intellectuelle','url' => '#'],
                                      ['label' => 'Droit de protection des données personnelles','url' => '#'],
                                      '<li class="divider"></li>',
                                      '<li class="dropdown-header">Veille technologique</li>',
                                      ['label' => 'Risque informatique', 'url' => '#'],
                                      ['label' => 'Collaboration interEntrerise', 'url' => '#'],
                                      ['label' => 'Urbanisation des SI', 'url' => '#'],
                                      ['label' => "Email et Bureautique", 'url' => '#'],
                                      ['label' => 'Rationalisation des coûts', 'url' => '#'],
                                      '<li class="divider"></li>',
                                      '<li class="dropdown-header">GNU/Linux OS</li>',
                                      ['label' => 'Linux Daily uses', 'url' => '#'],
                                      ['label' => 'Linux Devs & Servers', 'url' => '#'],
                                      ['label' => 'Linux Security & Network', 'url' => '#'],
                                      ],
                                      ], */
                                        ['label' => 'Marques',
                                        'items' => [
                                            '<li class="dropdown-header">Hébérgement, Nom de domaine et SSL</li>',
                                                ['label' => 'MaghribUp', 'url' => '/index.php?r=site/maghribup'],
//                                            '<li class="divider"></li>',
//                                            '<li class="dropdown-header">Site vitrine rapide</li>',
//                                                ['label' => 'AngSite', 'url' => '/angsite'],
//                                            '<li class="divider"></li>',
////            '<li class="dropdown-header">Tableurs de Gestion sur Mesure</li>',            
////            ['label' => 'PMEStarter', 'url' => '/pmestarter'],
////            '<li class="divider"></li>',
//                                            '<li class="dropdown-header">Solution SMS intégrale pour votre SI</li>',
//                                                ['label' => 'SmsDaba', 'url' => '/site/smsdaba'],
//                                            '<li class="divider"></li>',
//                                            '<li class="dropdown-header">Boutique informatique</li>',
//                                                ['label' => 'Maroware', 'url' => '#'],
//                                            '<li class="divider"></li>',
//                                            "<li class='dropdown-header'>Plateforme d'Assistance Technique</li>",
//                                                ['label' => 'MaroHelp', 'url' => '/maronethelp'],
                                            '<li class="divider"></li>',
                                            '<li class="dropdown-header">Portail des Idols Marocains</li>',
                                                ['label' => 'Nasna', 'url' => '/index.php?r=site/nasna', 'options' => ['style' => 'margin-bottom:5px;']],
                                        ],
                                    ],
                                    //['label' => 'Technologies', 'url' => ['/site/technologies']],
                                    //['label' => 'Partenaires', 'url' => ['/site/partener']],
                                    ['label' => 'Références', 'url' => ['site/references']],
                                    //['label' => 'Evenement', 'url' => ['#']],
                                    ['label' => 'Contact', 'url' => ['site/contact']],
                                // Yii::$app->user->isGuest ?
                                //     ['label' => 'Login', 'url' => ['/site/login']] :
                                //     [
                                //         'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                //         'url' => ['/site/logout'],
                                //         'linkOptions' => ['data-method' => 'post']
                                //     ],
                                ],
                            ]);
                            NavBar::end();
                            ?>

                            <div class="container">

                                <div>

                                    <?=
                                    Breadcrumbs::widget([
                                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    ])
                                    ?>

                                    <?= $content ?>
                                </div>
                            </div>

                            <footer class="footer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <p class="pull-right">
                                                <div  id="language-selector" class="pull-left" >
                                                    <!-- <?= \app\components\widgets\LanguageSelector::widget(); ?> -->
                                                </div>
                                            </p>
                                        </div>
                                        <div class="col-md-11 text-center">
                                            <p class="text-muted" style="font-size: 14px">&copy; Marostack <?= date('Y') ?>, Tout droits réservé.</p>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                            
<script src="https://use.fontawesome.com/1a238517ce.js"></script>

                            <script type="text/javascript">
                                $('.carousel').carousel();
                            </script>
                            <?php $this->endBody() ?>
                    </body>
                    </html>
                    <?php $this->endPage() ?>
