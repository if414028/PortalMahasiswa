<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Polling */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="polling-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_polling')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'waktu_mulai')->textInput() ?>

    <?= $form->field($model, 'waktu_selesai')->textInput() ?>

    <?= $form->field($model, 'id_kategori_polling')->textInput() ?>

    <?= $form->field($model, 'jumlah_pemenang_wanita')->textInput() ?>

    <?= $form->field($model, 'jumlah_pemenang_pria')->textInput() ?>

    <?= $form->field($model, 'id_akun_admin')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
