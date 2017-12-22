<?php

use yii\bootstrap\Button;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\prtm\search\PollingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Polling';
?>
<div class="polling-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <br/>
    <br/>


    <div class="col-md-8">

        <?php
        foreach ($dataProvider->models as $dp) {
            echo '<div class="box box-default">'
                . '<div class="box-body">'
                . '<div class="row">'
                . '<div class="col-md-8">'
                . '<h3>'
                . '<p style="color: #2e3436">' .Html::encode($dp->judul_polling) .'</p>'
                . '<h5 style="color: #2e3436">' . Html::encode($dp->deskripsi) . '</h5>'
                . '</h3>'
                . '</div>'
                . '<div class="col-md-4">'
                . '<div class="col-md-12" align="right">'
                . '<br/>'
                . Html::a('Rincian', ['kandidat-polling/index', 'id_polling' => $dp->id_polling], ['class' => 'cari-button'])
                . '</div>'
                . '<br/>'
                . '</div>'
                . '</div>'
                . '</div>'
                . '</div>';
        }
        ?>
    </div>

    <br/>


</div>
