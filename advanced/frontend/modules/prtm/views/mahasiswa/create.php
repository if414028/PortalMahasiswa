<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Mahasiswa */

$this->title = 'Tambah Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-background">

    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
