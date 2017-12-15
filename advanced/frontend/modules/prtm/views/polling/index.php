<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\prtm\search\PollingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Polling';
?>
<div class="polling-index">

    <center><h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <br/>
    <br/>
    <br/>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="box box-pca">
                <div class="box-body" style="min-height:200px ;max-height: 200px;">
                    <p align="right">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <?= Html::a('Polling Panitia PCA', ['view', 'id' => 1], ['class' => 'create-button'])?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-natal">
                <div class="box-body" style="min-height:200px ;max-height: 200px;">
                    <p align="right">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <?= Html::a('Polling Panitia Natal', ['view', 'id' => 2], ['class' => 'create-button'])?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
