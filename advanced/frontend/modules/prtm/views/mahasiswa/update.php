<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Mahasiswa */

$this->title = 'Update mahasiswa: ' . $model->id_mahasiswa;
?>
<div class="content-background">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
