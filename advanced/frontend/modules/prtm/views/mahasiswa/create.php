<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Mahasiswa */

$this->title = 'Create mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
