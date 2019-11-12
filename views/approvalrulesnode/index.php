<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApprovalrulesnodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approval Rules Nodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approval-rules-node-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Approval Rules Node', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'instansi_id',
            'jabatan_id',
            'bisa_menandatangani',
            'bisa_atas_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
