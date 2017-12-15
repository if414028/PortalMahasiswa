<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Polling */

$this->title = 'Update polling: ' . $model->id_polling;
$this->params['breadcrumbs'][] = ['label' => 'Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_polling, 'url' => ['view', 'id' => $model->id_polling]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="polling-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
