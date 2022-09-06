<h1 style="text-align:center;margin-top: 50px">Register a new account</h1>

<?php $form = app\core\form\Form::begin('/register', "post") ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email')->emailField() ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>

<button type="submit" class="btn btn-primary">Sign up</button>
<?php app\core\form\Form::end() ?>
