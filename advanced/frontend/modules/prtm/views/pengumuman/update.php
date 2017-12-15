<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Pengumuman */

$this->title = 'Update pengumuman: ' . $model->pengumuman_id;
$this->params['breadcrumbs'][] = ['label' => 'pengumuman', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pengumuman_id, 'url' => ['view', 'id' => $model->pengumuman_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengumuman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
