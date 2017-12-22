<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_prodi')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\frontend\modules\prtm\models\Prodi::find()->all(),'id_prodi','nama_prodi'),
        'language' => 'en',
        'options' => ['placeholder' => 'Pilih Prodi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_cantik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'create-button' : 'cari-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
