<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = $model->idCliente;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>        
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idCliente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idCliente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idCliente',
            'nomeCliente',
            'sobrenomeCliente',
            'emailCliente:email',
            'telefoneCliente',
            'cpfCliente',
            'rgCliente',
            'dataNascimento',
            'idEndereco',
            'idUsuario',
        ],
    ]) ?>

</div>
