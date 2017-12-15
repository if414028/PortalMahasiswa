<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\KategoriPengumuman */

$this->title = 'Update Kategori pengumuman: ' . $model->id_kategori_pengumuman;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori_pengumuman, 'url' => ['view', 'id' => $model->id_kategori_pengumuman]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-pengumuman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
