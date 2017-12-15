<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\prtm\search\PengumumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar pengumuman';
?>
<div class="container">


    <div class="row">
        <div class="col-md-9">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <div class="col-md-3" align="right">
            <br/>
            <?= Html::a('Tambah pengumuman', ['create'], ['class' => 'create-button']) ?>
        </div>
    </div>

    <br/>
    <?= $this->render('_search', [
        'model' => $searchModel,
    ]) ?>

    <div class="row">
        <div class="container-fluid">
            <div class="box box-default">
                <div class="box-heading">Judul Pengumuman</div>
                <div class="box-body">
                    <div class="row">
                        <?php
                        foreach ($dataProvider->models as $dataPengumuman) {
                            echo '<div class="row-fluid">'
                                . '<div class="col-md-5">'
                                . '<strong>' . Html::a($dataPengumuman->judul, ['pengumuman/view', 'id' => $dataPengumuman->pengumuman_id]) . '</strong>'
                                . '</div>'
                                . '<div class="col-md-5">'
                                . '<strong style="color: #2b669a">' . \frontend\controllers\SiteController::convertToDisplayDate($dataPengumuman->created_at) . '</strong>'
                                . '</div>'
                                . '<div class="col-md-2">'
                                . Html::a('Ubah', ['update', 'id' => $dataPengumuman->pengumuman_id], ['class' => 'cari-button'])
                                . '&nbsp;'
                                . Html::a('Hapus', ['delete', 'id' => $dataPengumuman->pengumuman_id], [
                                    'class' => 'delete-button',
                                    'data' => [
                                        'confirm' => 'Apakah anda yakin ingin menghapus?',
                                        'method' => 'post',
                                    ]
                                ])
                                . '</div>'
                                . '</div>'
                                . '<br/>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
