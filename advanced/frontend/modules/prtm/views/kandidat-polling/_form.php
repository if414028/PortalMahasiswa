<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\KandidatPolling */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kandidat-polling-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mahasiswa')->textInput() ?>

    <?= $form->field($model, 'motivasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto_kandidat_polling')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_polling')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\frontend\modules\prtm\models\Polling::find()->all(),'id_polling','judul_polling'),
        'language' => 'en',
        'options' => ['placeholder' => 'Pilih Polling'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
