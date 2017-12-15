<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\KategoriPolling */

$this->title = 'Update Kategori polling: ' . $model->id_kategori_polling;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pollings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori_polling, 'url' => ['view', 'id' => $model->id_kategori_polling]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-polling-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
