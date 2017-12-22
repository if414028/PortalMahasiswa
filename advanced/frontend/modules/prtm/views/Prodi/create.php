<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\prtm\models\Prodi */

$this->title = 'Tambah Prodi';
?>
<div class="content-background">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
