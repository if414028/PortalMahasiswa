<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Pengumuman */

$this->title = $model->judul;
?>
<div class="content-background">

    <h1><center><?= Html::encode($this->title) ?></center></h1>

    <br/>

    <p><?= Html::decode($model->konten) ?></p>



</div>
