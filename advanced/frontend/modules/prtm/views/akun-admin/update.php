<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\AkunAdmin */

$this->title = 'Update Akun Admin: ' . $model->akun_id;
$this->params['breadcrumbs'][] = ['label' => 'Akun Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->akun_id, 'url' => ['view', 'id' => $model->akun_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
