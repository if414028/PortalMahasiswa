<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\search\PollingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polling-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_polling') ?>

    <?= $form->field($model, 'judul_polling') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'waktu_mulai') ?>

    <?php // echo $form->field($model, 'waktu_selesai') ?>

    <?php // echo $form->field($model, 'id_kategori_polling') ?>

    <?php // echo $form->field($model, 'jumlah_pemenang_wanita') ?>

    <?php // echo $form->field($model, 'jumlah_pemenang_pria') ?>

    <?php // echo $form->field($model, 'id_akun_admin') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
