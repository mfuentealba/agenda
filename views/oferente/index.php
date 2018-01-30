<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblOferenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oferentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-oferente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Oferente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'rut',
            'nombres',
            'ap_paterno',
            'ap_materno',
            //'mail',
            //'user',
            //'pass',
            //'fecha_ingreso',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
