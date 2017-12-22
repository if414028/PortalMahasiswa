<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Mahasiswa */

$this->title = $model->id_mahasiswa;
?>
<div class="content-background">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_mahasiswa], ['class' => 'cari-button']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_mahasiswa], [
            'class' => 'delete-button',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_mahasiswa',
            [
                'attribute' => 'id_prodi',
                'label' => 'Prodi',
                'value' => function($model){
                    return $model->idProdi->nama_prodi;
                }
            ],
            'alamat',
            'bio',
            'nama_cantik',
            'username',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'deleted',
        ],
    ]) ?>

</div>
