<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\search\PengumumanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <div class="col-md-10">
        <?= $form->field($model, 'judul')->textInput()->input('text'); ?>
    </div>

    <div class="col-md-2" align="right">
        <br/>
        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'cari-button']) ?>
        </div>
    </div>

    <?php // echo $form->field($model, 'id_akun_admin') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'deleted') ?>



    <?php ActiveForm::end(); ?>

</div>
