<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblOferente */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Oferentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-oferente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['Modificar', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'rut',
            'nombres',
            'ap_paterno',
            'ap_materno',
            'mail',
            'user',
            'pass',
            'fecha_ingreso',
        ],
    ]) ; $model->nombres = "gggffffgg";?>

<?=print_r($model) ?>
    
</div>
