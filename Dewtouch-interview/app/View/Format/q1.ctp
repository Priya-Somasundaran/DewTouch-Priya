
<div id="message1">
<?php echo $this->Form->create('Type',array('id'=>'form_type','type'=>'submit','class'=>'','method'=>'POST','autocomplete'=>'off','inputDefaults'=>array(				
				'label'=>false,'div'=>false,'type'=>'text','required'=>false)))

				
				
?>
	
<?php echo __("Hi, please choose a type below:")?>
<br><br>

<?php $options_new = array(
 		'Type1' => __('<span class="showDialog" data-id="dialog_1" style="color:blue">Type1</span><div id="dialog_1" class="hide dialog" title="Type 1">
 				<span style="display:inline-block"><ul><li>Description .......</li>
 				<li>Description 2</li></ul>
				
				 
 				</div>'),
		'Type2' => __('<span class="showDialog" data-id="dialog_2" style="color:blue">Type2</span><div id="dialog_2" class="hide dialog" title="Type 2">
 				<span style="display:inline-block"><ul><li>Desc 1 .....</li>
 				<li>Desc 2...</li></ul>
				
	
 				</div>')
		);?>

<?php echo $this->Form->input('test', array('type' => 'hidden', 'class' => 'form-control', 'label' => false,  'name' => 'choice', 'value' => 1)); ?>
<?php echo $this->Form->input('type', array('legend'=>false, 'type' => 'radio', 'options'=>$options_new,'before'=>'<label class="radio line notcheck">','after'=>'</label>' ,'separator'=>'</label><label class="radio line notcheck">'));?>
<?php echo $this->Form->submit('Show Your Choice');?>

<?php echo $this->Form->end();?>

</div>

<style>
.showDialog:hover{
	text-decoration: underline;
}

#message1 .radio{
	vertical-align: top;
	font-size: 13px;
}

.control-label{
	font-weight: bold;
}

.wrap {
	white-space: pre-wrap;
}

</style>

<?php $this->start('script_own')?>
<script>

$(document).ready(function(){
	$(".dialog").dialog({
		autoOpen: false,
		width: '500px',
		modal: true,
		dialogClass: 'ui-dialog-blue'
	});

	$(".showDialog").on('hover mouseover',function(){ var id = $(this).data('id'); $("#"+id).dialog('open');
		var selection=$(this).html();
		$('input[name="choice"]').val(selection);
	 }
	
	
	);
})


</script>
<?php $this->end()?>