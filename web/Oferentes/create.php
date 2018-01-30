<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblOferente */

$this->title = 'Create Tbl Oferente';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Oferentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-oferente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
