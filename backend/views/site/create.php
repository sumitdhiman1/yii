<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\countries;


?>
<div class="site-contact">
  

    <p>
        Create your account
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['placeholder' => "Enter your name"]) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => "Enter Your Email"]) ?>

            <?= $form->field($model, 'password')->textInput(['placeholder' => "Enter Your password"]) ?>

            <?= $form->field($model, 'gender')->radioList(array('1'=>'male',2=>'female')); ?>

            <?php echo $form->field($model, 'Hobbies[]')->checkboxList( ['a' => 'Cricket','b' => 'Hockey','d' => 'Football', 'c' => 'kabaddi']
   );
?>
        <?php $items = ['india'=>'india','australia'=>'australia','England'=>'England',] ?>

         <?= $form->field($model, 'country')->dropDownList($items,['prompt' => "select your country"]) ?>
    
            <?= $form->field($model, 'Address')->textArea(['rows' => "6"]) ?>

            <?= $form->field($model, 'uploadFile')->fileInput() ?>

             

              

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
