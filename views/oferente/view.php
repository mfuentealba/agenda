<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblOferente */

$this->title = $model->user;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Oferentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-oferente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
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


    
</div>
