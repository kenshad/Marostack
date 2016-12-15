<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = "L'entreprise - Nos Engagments";
$this->params['breadcrumbs'][] = "L'entreprise";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="background-image: url('imgs/engagements-bg.jpg'); background-size:100% auto; background-repeat: no-repeat;">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-12">
            <p class="lead text-justify">
                Nous nous somme aligner avec la strategie du developpement durable du Maroc, qui favorise l'équilibre entre les dimensions environnementales, économiques et sociales, avec pour objectifs l'amélioration du cadre de vie des citoyens, le renforcement de la gestion durable des ressources naturelles et la promotion des activités économiques respectueuses de l'environnement.
                </br ></br >
                C’est ainsi, Marostack s’engage dans une strategies sociale visant à participer à ce développement, en offrant de la formation gratuite pour les associations de la société civile.
            </p>
            <p class="lead text-justify">
                En termes de qualité, Marostack a défini plusieurs axes, éléments clé pour tout projet à réaliser par nos équipes.
                <br />
            </p>
        </div>
        <div class="col-md-6 col-xs-12">
            <ul class="lead text-justify list-group">
                <li class="list-group-item" style="background-color:transparent;">Une plateforme spécialisé pour la communication et la coordination entre le client et le chef projet, avec un système de tickets inclus pour mieux gérer les différents fils de discussion, favorisent ainsi la traçabilité et la capitalisation de l'expérience.</li>
                <li class="list-group-item" style="background-color:transparent;">Gestion des versions de deliverable avec un système d'entrepôt de code source très avancée, à disposition du client.</li>
                <li class="list-group-item" style="background-color:transparent;">Adaptation du principe de développement en modèle spirale et/ou cascade, incluants les tests (Test-driven development  - TDD).</li>
                <li class="list-group-item" style="background-color:transparent;">Gestion de la documentation, en version, multilingue et une panoplis de critères de suivi et de notifications.</li>
                <li class="list-group-item" style="background-color:transparent;">Plan de formation permanent pour nos équipes, pour assurer un maximum de performance et de pertinence lors de tout les missions.</li>
            </ul>
        </div>
        <div class="col-md-6 col-xs-12">
            <?php
            echo Html::img("imgs/engagements.png", ["class" => "img-responsive text-center"]);
            ?>
        </div>
    </div>
</div>