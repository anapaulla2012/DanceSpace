<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Professores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <h3><center>Professores de Jazz</center></h3>
    </div>
    <!-- GRUPO 1 - JAZZ -->
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/prof1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Jhonatas Andrade</h5>
                <p class="card-text">Professor a 5 anos, se apresentou em diversos festivais e foi premiado no Festival
                    Norte Dança em 2015</p>
                <button type="button" class="btn btn-outline-primary "><a href="index.php?r=site%2Flogin">Conheça mais
                        sobre</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/prof2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nathasha Ribeiro</h5>
                <p class="card-text">Professora da Escola de Danças de Maranhão a 9 anos.</p>
                <button type="button" class="btn btn-outline-primary "><a href="index.php?r=site%2Flogin">Conheça mais
                        sobre</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/prof3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Luiza Clara Santos </h5>
                <p class="card-text">Premiada no Dança São Paulo em 1° lugar, começou a profisão de professora a 2 anos.
                </p>
                <button type="button" class="btn btn-outline-primary "><a href="index.php?r=site%2Flogin">Conheça mais
                        sobre</button></a>
            </div>
        </div>
    </div>

    <!-- GRUPO 2 - BALLET -->
    <br><br><br><br>
    <h3><center>Professores de Balé</center></h3>

    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/prof1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Jhonatas Andrade</h5>
                <p class="card-text">Professor a 5 anos, se apresentou em diversos festivais e foi premiado no Festival
                    Norte Dança em 2015</p>
                <button type="button" class="btn btn-outline-primary "><a href="index.php?r=site%2Flogin">Conheça mais
                        sobre</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/prof2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nathasha Ribeiro</h5>
                <p class="card-text">Professora da Escola de Danças de Maranhão a 9 anos.</p>
                <button type="button" class="btn btn-outline-primary "><a href="index.php?r=site%2Flogin">Conheça mais
                        sobre</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/prof3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Luiza Clara Santos </h5>
                <p class="card-text">Premiada no Dança São Paulo em 1° lugar, começou a profisão de professora a 2 anos.
                </p>
                <button type="button" class="btn btn-outline-primary "><a href="index.php?r=site%2Flogin">Conheça mais
                        sobre</button></a>
            </div>
        </div>
    </div>
    

    <code><?= __FILE__ ?></code>
</div>