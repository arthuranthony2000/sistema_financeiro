<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidoproduto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidoproduto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'preco')->textInput() ?>

    <?= $form->field($model, 'qtdProduto')->textInput() ?>

    <?= $form->field($model, 'idPedido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idProduto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
