<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Polling */

$this->title = $model->id_polling;
$this->params['breadcrumbs'][] = ['label' => 'Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polling-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_polling], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_polling], [
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
            'id_polling',
            'judul_polling',
            'deskripsi',
            'status',
            'waktu_mulai',
            'waktu_selesai',
            'id_kategori_polling',
            'jumlah_pemenang_wanita',
            'jumlah_pemenang_pria',
            'id_akun_admin',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'deleted',
        ],
    ]) ?>

</div>
