<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tiny_mce/tiny_mce.js"></script>
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'product-template-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">
        <?php echo $form->textFieldRow($model,'name',array('maxlength'=>200,)); ?>

        <?php echo $form->dropDownListRow($model,'id_tag',$model->getTagOptions(),array('empty'=>array(''=>'Select a Type'))); ?>
     
	<?php echo $form->dropDownListRow($model,'id_supplier',$model->getSupplierOptions(),array('empty'=>array(''=>'Select a Supplier'))); ?>
     
        <?php echo $form->dropDownListRow($model,'id_brand',$model->getBrandOptions(),array('empty'=>array(''=>'Select a Brand'))); ?>
 
        <?php echo $form->dropDownListRow($model,'logo_choice',$model->getLogoChoiceOptions()); ?>
        
        <?php echo $form->dropDownListRow($model,'id_category',$model->getCategoryOptions(),array('empty'=>array(''=>'Select a Category'))); ?>
        
        <?php echo $form->dropDownListRow($model,'is_return_gift',$model->getReturnIsGiftOptions()); ?>

     
 
        <?php echo $form->textFieldRow($model,'event',array('maxlength'=>100,'value'=>'Happy birth day')); ?>

        <?php echo $form->textFieldRow($model,'user_validity',array('maxlength'=>'3')); ?>

        <?php echo $form->textFieldRow($model,'sender_limit',array('maxlength'=>'3')); ?>
  
        <?php echo $form->textFieldRow($model,'receiver_limit',array('maxlength'=>'3')); ?>
   
        <?php echo $form->textFieldRow($model,'redirection_url',array('maxlength'=>'500')); ?>

       
         <?php echo $form->fileFieldRow($model,'image'); ?>

         <?php echo $form->fileFieldRow($model,'image2'); ?>
 
           <?php echo $form->textAreaRow($model,'description',array('size'=>'500')); ?>
        
           <?php echo $form->textAreaRow($model,'features',array('size'=>'500')); ?>


           <?php echo $form->textAreaRow($model,'tips',array()); ?>
        
           <?php echo $form->textAreaRow($model,'terms',array()); ?>

                        </div>   
  </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>
<script>

$(document).ready(function(){

tinyMCE.init({
               mode : "exact",
               elements : "ProductTemplate_features,ProductTemplate_tips,ProductTemplate_terms",
            //elements : "MessageForm_message",
               //oninit :  "myCustomInitInstance",
             //  setupcontent_callback : "myCustomInitInstance", 
              // init_instance_callback : "myCustomInitInstance",
              //handle_event_callback : "myHandleEvent",
              
		theme : "advanced",
              //   blur:"editMessage",
                  theme_advanced_disable : "",
                          

                /* onchange_callback : "messageUpdated",
                 //onblur_callback : "editMessage", 
                /*theme_advanced_layout_manager:"SimpleLayout",
                theme_advanced_buttons1_add_before : "separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor",
                theme_advanced_resizing : true,
                theme_advanced_source_editor_width : 100,
                theme_advanced_resizing_max_width : 320,
                theme_advanced_resizing_max_height :400,
 
                theme_advanced_containers_default_align : "left",
                    

                 width : "240",
                 height : "280" 
                  */

	         });


});
 
</script>
