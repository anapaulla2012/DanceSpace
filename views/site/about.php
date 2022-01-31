<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Chorando pois n consigo acessar os arquivos pelo xampp:
    </p>

    <code><?= __FILE__ ?></code>
</div>
