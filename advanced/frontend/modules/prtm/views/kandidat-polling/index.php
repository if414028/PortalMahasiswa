<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\prtm\search\KandidatPollingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kandidat Polling';
?>
<div class="content-background">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Kandidat Polling', ['create'], ['class' => 'create-button']) ?>
    </p>
    <br/>
    <br/>
    <br/>

    <div class="container">

        <div class="col-md-2"></div>

        <div class="col-md-8">
            <?php
            foreach ($dataProvider->models as $dp)
            {
                echo '<div class="col-md-4">'
                    .'<div class="box box-default">'
                    .'<div class="box-body">'
                    .'<div class="row">'
                    .'<center>'
                    .'<img src="'
                    .'uploads/' . $dp->foto_kandidat_polling
                    .'" class="img-thumbnail" width="100px">'
                    .'</center>'
                    .'<div class="row">'
                    .'<center>'
                    .'<h4>'
                    .Html::a($dp->idMahasiswa->username, ['view', 'id'=>$dp->id_kandidat_polling])
                    .'</h4>'
                    .'<p>'
                    .'<b>Motivasi:</b> '
                    .Html::decode($dp->motivasi)
                    .'</p>'
                    .'</div>'
                    .'</div>'
                    .'</div>'
                    .'</div>'
                    .'</div>';
            }
            ?>
            <div class="col-md-4">

            </div>
            <div class="col-md-8">

            </div>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>
