<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Références';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p class="lead text-justify">
        Marostack a l'expérience de collaborer et participer à la réussite de projets de mise en place et de mise a niveau des systèmes d'informations d’entreprises.
        <br />Nos clients variés et de secteur d’activité distinct (Industries, Loi, Finance, Technologies, BTP...) nous ont permis d’apprendre de leurs expertise, et de capitalisé une expérience d’interventions sur différents niveaux - de l'étude de faisabilité technique et financière au testes poste projet et recette - du projet pour vous offrir toujours le service de qualité optimale que vous méritez.
    </p>
    <br />
    <table class="table table-striped table-bordered table-responsive" style="min-width: 500px">
        <tr class="warning">
            <th>Entreprise</th>
            <th style="width:15%">Secteur d'activité</th>
            <th style="width:50%">Description Projet</th>
            <th style="width:10%">Type</th>
            <!--<th class="text-center">Fiche de Référence</th>-->
        </tr>
        <tr>
            <td><strong>Fadico structures</strong></td>
            <td>Bâtiment et travaux publics</td>
            <td>Mise en place du systéme d'information de base :
                <ul>
                    <li>Logistique et Achats</li>
                    <li>Ressources, plannings et reportings chantier</li>
                    <li>Pointage et rondement journalier</li>
                    <li>Plateform de partage et d'archivage de documents et PVs</li>
                </ul>
            </td>
            <td>Contrat-cadre</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
        <tr>
            <td><strong>Bernoussi Legal Help</strong></td>
            <td>Services Juridique</td>
            <td>Portail pour Cabinet Juridique</td>
            <td>Ponctuel</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
        <tr>
            <td><strong>Fluidex Construction</strong></td>
            <td>Industrie - Tuyauterie</td>
            <td>Mise en place et suivi d'Intranet :<br />
                <ul>
                    <li>Partage de ressouces bureautique</li>
                    <li>Email et Communication interne</li>
                    <li>Partage et gestion des documents électronique</li>
                    <li>Téléphonie interEntreprise</li>
                    <li>Sécurisation et accées à distance</li>
                </ul>		
            </td>
            <td>Contrat-cadre</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
        <tr>
            <td><strong>GMT Maroc</strong></td>
            <td>Industrie - Electricité</td>
            <td>Développement de plateform de Suivi des Missions d'Intervention des Équipes (SIME) :<br />
                <ul>
                    <li>Logistique : Transport, nuitées, ...</li>
                    <li>Entrepos Matériels</li>
                    <li>Plannings des travaux</li>
                    <li>Reporting decisionnel</li>
                    <li>Achat : TCOs, Base fournisseurs et Contrats-cadre</li>
                </ul>
            </td>
            <td>Ponctuel</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
        <!--<tr>
            <td><strong>Civilia</strong></td>
            <td>Bâtiment et travaux publics</td>
            <td>*</td>
            <td>Contrat-cadre</td>
            <td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>
        </tr>-->
        <tr>
            <td><strong>Longometal Armatures</strong></td>
            <td>Industrie - Armatures pour Bétôn Armés</td>
            <td>Mise en place du systéme d'information de base :
                <ul>
                    <li>Integration du ERP SAP avec le Pont a Bascule (Web service SOAP / PI) </li>
                    <li>Gestion de la Logistique et des Achats</li>
                    <li>Planning d'execution et suivi de chantier</li>
                    <li>Reporting Financier (Revision prix, Valorisation stock,...) </li>
                    <li>Reporting Commmercial (Contrats, Prospects, Client...)</li>
                    <li>Reporting Production (Performance Usine, Produit Fini, ...)</li>
                </ul>
            </td>
            <td>Contrat-cadre</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
        
        <!--<tr>
            <td><strong>STPAR</strong></td>
            <td>Bâtiment et travaux publics</td>
            <td>Systéme d'Information Chantier</td>
            <td>Ponctuel</td>
            <td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>
        </tr>-->
        <tr>
            <td><strong>DAO Cloud</strong></td>
            <td>Social Network for Wellness</td>
            <td>Mise en place d'APIs pour les clients mobile Android<sup>&reg;</sup> & Apple IOS<sup>&reg;</sup></td>
            <td>Ponctuel</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
        <!--<tr>
            <td><strong>iConnex</strong></td>
            <td>Services d'expertise Comptable & Financier</td>
            <td>*</td>
            <td>Ponctuel</td>
            <td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>
        </tr>-->
        <tr>
            <td><strong>Windwalker Media</strong></td>
            <td>Librairie privé</td>
            <td>Audit et Optimisation d'infrastructure Cloud
            <ul>
                    <li>Cluster Infrastructure Services</li>
                    <li>Cluster Resource Manager </li>
                    <li>Optimisation des coût de l'infrastructure Cloud</li>
                    <li>Audit des performances de la scalabilité</li>
                </ul>
            </td>
            <td>Contrat-cadre</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
        <tr>
            <td><strong>Qton Solutions</strong></td>
            <td>Informatique spécialisé - Énergie</td>
            <td>Systèmes de suivi des installations de comptage de gaz et d'électricité pour fournisseurs d'énergie</td>
            <td>Ponctuel</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>-->
        </tr>
<!--        <tr>
            <td><strong>Maison Mousse</strong></td>
            <td>Industriel - Mousse Polyuréthane</td>
            <td>*</td>
            <td>Ponctuel</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>
        </tr>
        <tr>
            <td><strong>Gastromix</strong></td>
            <td>Industrie - Agroalimentaire</td>
            <td>Système de Reporting de la chaine post production et preservation fromagerie</td>
            <td>Ponctuel</td>
            <!--<td class="text-center"><a class="btn btn-default btn-sm" href="#">Télécharger<a/></td>
        </tr>-->
    </table>
</div>