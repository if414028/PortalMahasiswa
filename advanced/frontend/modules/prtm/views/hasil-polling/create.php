<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\HasilPolling */

$this->title = 'Create Hasil polling';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-polling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
