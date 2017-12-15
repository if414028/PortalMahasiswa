<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\KandidatPolling */

$this->title = 'Update Kandidat polling: ' . $model->id_kandidat_polling;
$this->params['breadcrumbs'][] = ['label' => 'Kandidat Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kandidat_polling, 'url' => ['view', 'id' => $model->id_kandidat_polling]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kandidat-polling-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
