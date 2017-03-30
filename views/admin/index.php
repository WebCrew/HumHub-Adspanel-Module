<?php

use yii\bootstrap\ActiveForm;
use yii\helper\Html;
use humhub\models\Setting;
use humhub\modules\adspanel\controllers\AdminController;
?>
<div class="panel panel-default">
	<div class="panel-heading"><?= Yii::t('AdspanelModule.base', '<strong>Adspanel</strong>'); ?></div>
	<div class="panel-body">
		<?php $form = ActiveForm::begin(['id' => 'adspanel-settings-form']); ?>
			<?= $form->errorSummary($model); ?>
			<p class="help-block"><?= Yii::t('AdspanelModule.base', 'eg:  "99999999"'); ?></p>
			<div class="form-group">
				<?= $form->labelEx($model, 'sort'); ?>
				<?= $form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'adspanel')]); ?>
			</div>
			<p class="help-block"><?= Yii::t('AdspanelModule.base', 'Widget positioning.'); ?></p>
			<?= Html::submitButton(Yii::t('AdspanelModule.base', 'save'), ['class' => 'btn btn-primary']); ?>
			<?= \humhub\widgets\DataSaved::widget(); ?>
		<?php ActiveForm::end(); ?>
	</div>
</div>
