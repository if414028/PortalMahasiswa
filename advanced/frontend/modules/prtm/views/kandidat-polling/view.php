<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\KandidatPolling */

$this->title = $model->id_kandidat_polling;
$this->params['breadcrumbs'][] = ['label' => 'Kandidat Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kandidat-polling-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kandidat_polling], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kandidat_polling], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kandidat_polling',
            'motivasi',
            'foto_kandidat_polling',
            'id_mahasiswa',
            'id_polling',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'deleted',
        ],
    ]) ?>

</div>
