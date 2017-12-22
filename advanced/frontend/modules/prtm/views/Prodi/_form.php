<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Prodi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'create-button' : 'cari-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
