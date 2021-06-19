<?php

use humhub\modules\onlyoffice\Module;
use yii\helpers\Url;
use humhub\widgets\ActiveForm;
use humhub\libs\Html;

\humhub\modules\onlyoffice\assets\Assets::register($this);

$modal = \humhub\widgets\ModalDialog::begin([
            'header' => Yii::t('OnlyofficeModule.base', '<strong>Create</strong> document')
        ])
?>

<?php $form = ActiveForm::begin(); ?>

<div class="modal-body">
    <?= $form->field($model, 'fileName', ['template' => '{label}<div class="input-group">{input}<div class="input-group-addon">' . $ext . '</div></div>{hint}{error}']); ?>
    <?= $form->field($model, 'openFlag')->checkbox(); ?>
</div>

<div class="modal-footer">
    <?= Html::submitButton('Save', ['data-action-click' => 'onlyoffice.createSubmit', 'data-ui-loader' => '', 'class' => 'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>

<?php \humhub\widgets\ModalDialog::end(); ?>
