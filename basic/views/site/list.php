<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model,'data')->textInput(['placeholder'=>'Пример (Ваша запись,Ваша запись,Ваша запись, и т.д.)']);?>
<hr>
<?= $form->field($model,'background')->textInput(['placeholder'=>'Пример (Ссылка на картинку или запись RGB)']);?>
<?= $form->field($model,'depth')->textInput(['placeholder'=>'Пример (От 1 до максимального количество записей)']);?>

<?=Html::submitButton('Сохранить',['class'=>'btn btn-primary']);?>

<?php ActiveForm::end();?>
<style>

</style>