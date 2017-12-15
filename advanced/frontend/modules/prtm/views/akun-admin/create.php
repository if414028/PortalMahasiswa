<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\AkunAdmin */

$this->title = 'Create Akun Admin';
$this->params['breadcrumbs'][] = ['label' => 'Akun Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
