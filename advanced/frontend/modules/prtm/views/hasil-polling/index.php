<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\prtm\search\HasilPollingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hasil Pollings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-polling-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hasil polling', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_hasil_polling',
            'id_kandidat_polling',
            'id_mahasiswa',
            'id_polling',
            'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
