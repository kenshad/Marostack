<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = "Mot de la direction";
$this->params['breadcrumbs'][] = "L'entreprise";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="background-image: url('imgs/dg-bg.jpg'); background-size:100% auto; background-repeat: no-repeat;">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <p class="lead text-justify">
                La création de Marostack vient pour répondre aux besoins du marché national marocain, 
                notamment au niveau des projets qui font appel aux technologies de l’information dans 
                les différents industries, et donc de participer au développement notable que vit le Maroc.
            </p>
            <p class="lead text-justify">
                Pour faire, nous avons mis en place une stratégie visant à concentrer l’ensemble des ressources
                de l’entreprise pour assurer et améliorer notre expertise d’avantage dans les domaines d’ingénierie
                informatique et industriel, ceci formaliser ainsi sur trois axes :
            </p>
            <ul class="lead text-justify">
                <li>Plan de formations continue pour nos salariés</li>
                <li>Accords signé avec nos partenaires stratégique</li>
                <li>Concordat qualités et développement durable</li>
            </ul>
            <p class="lead text-justify">
                Notre politique d’entreprise est ainsi a pour objectif de réussir nos missions d’interconnexion
                entre les solutions systèmes d’informations et les spécification métiers du clients, en se
                basant sur notre capitale RH et en suivant les consignes optimale et d’état d’art.
            </p>
            <p class="lead text-right">La Direction.</p>
        </div>
<!--        <div class="col-md-4 col-xs-12 text-center">
            <?php
//            echo Html::img("imgs/dg_mehdi_bamou.png", ["class" => "img-responsive", "style" => "margin: 0 auto;"]);
            ?>
            <div class="clearfix"></div>
            <p class="small text-center" style="padding: 5px 15px;">
                <i>M.Mehdi Bamou, Directeur Général de Marostack</i><br />
                
            </p>
        </div>-->
    </div>
</div>