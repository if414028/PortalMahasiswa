<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\KandidatPolling */

$this->title = 'Tambah Kandidat Polling';
?>
<div class="content-background">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
