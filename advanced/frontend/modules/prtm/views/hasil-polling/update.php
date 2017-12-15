<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\HasilPolling */

$this->title = 'Update Hasil polling: ' . $model->id_hasil_polling;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_hasil_polling, 'url' => ['view', 'id' => $model->id_hasil_polling]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-polling-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
