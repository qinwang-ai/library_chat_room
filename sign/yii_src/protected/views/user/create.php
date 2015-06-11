<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
?>

<!-- MOST IMPORTANT -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

<link rel="stylesheet" href="idealf/css/jquery.idealforms.css">
<meta charset=utf-8 />
<title>车协会员注册</title>
<style>

body {
	max-width:800px;
	margin: 2em auto;
	color: #FFF;
	overflow-y: scroll;
	background:url("images/back.jpg");
	background-size:cover;
	font-family:"microsoft yahei";
}

.submit{
	cursor:pointer;
}
.footer{
	background: rgba(255, 255, 255, 0.74);
	margin: 0 30px;
	padding:20px;
	margin-top:100px;
	border-radius:2px;
}
.support{
	width:170px;
	margin:0 auto;
	margin-bottom:10px;
}

.content {
	margin: 0 30px;
	padding:15px;
	background:rgba(0, 0, 0, 0.58);
}

.field.buttons button {
	margin-right: .5em;
}

#invalid {
	display: none;
	float: left;
	width: 290px;
	margin-left: 120px;
	margin-top: .5em;
	color: #CC2A18;
	font-size: 130%;
	font-weight: bold;
}

.idealforms.adaptive #invalid {
	margin-left: 0 !important;
}

.idealforms.adaptive .field.buttons label {
	height: 0;
}
</style>
</head>
<body>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'htmlOptions'=>array('class'=>'idealforms'),
	'enableAjaxValidation'=>false,
)); ?>
			<div class="field">
			<?php echo $form->errorSummary($model); ?>
			</div>

			<div class="field">
			<?php echo $form->labelEx($model,'name',array( 'class'=>'main')); ?>
			<?php echo $form->textField($model,'name',array('size'=>32,'maxlength'=>32)); ?>
			</div>

			<div class="field">
			<?php echo $form->labelEx($model,'level',array( 'class'=>'main')); ?>
			<?php echo $form->textField($model,'level',array('size'=>40,'maxlength'=>40)); ?>
			</div>

			<div class="field">
			<?php echo $form->labelEx($model,'school',array( 'class'=>'main')); ?>
			<?php echo $form->textField($model,'school',array('size'=>60,'maxlength'=>64)); ?>
			</div>

			<div class="field">
			<?php echo $form->labelEx($model,'phone',array( 'class'=>'main')); ?>
			<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>64)); ?>
			</div>

			<div class="field">
				<?php echo $form->labelEx($model,'qq',array( 'class'=>'main')); ?>
				<?php echo $form->textField($model,'qq',array('size'=>60,'maxlength'=>64)); ?>
			</div>

		<div class="field buttons">
            <label class="main">&nbsp;</label>
			<?php echo CHtml::submitButton($model->isNewRecord ? '提交' : '保存',array('class'=>'submit')); ?>
		</div>


		<span id="invalid"></span>

<?php $this->endWidget(); ?>



</div>
<div class = "footer" style = "color:#000">
		<div class = "support">
			<div style = "float:left;margin:-2px 3px;">
				<img src="images/ico.png">
			</div>
			<div style = "float:left">
				<small>
					<a href = "http://www.scientist2031.com/?page_id=5443" style = "color:#f16e50">红伞工作室技术支持</a>
				</small>
			</div>
		</div>
</div>

<script src="idealf/js/out/jquery.idealforms.min.js"></script>
<script>

	$('form.idealforms').idealforms({

	silentLoad: false,

	rules: {
		'username': 'required name',
//		'num': 'required num',
		'level': 'required level',
		'school': 'required school',
		'phone': 'required phone',
		'qq': 'required qq',
	},

	// 	'username': {
	// 	ajaxError: 'Username not available'
	// 	}
	});

$('form').idealforms({
  onSubmit: function(invalid, e) {
    e.preventDefault();

    if (invalid) {
      alert(invalid +' fields!');
    } else {
      $.post('save.php', this.$form.serialize(), function(response) {
        // do something with response
      }, 'json');
    }
  }
});

</script>
</body>
</html>
