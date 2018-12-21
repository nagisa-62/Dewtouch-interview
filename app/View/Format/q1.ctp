
<div id="message1">


<?php echo $this->Form->create('Type',array('id'=>'form_type','type'=>'file','url'=>array('controller'=>'Format','action'=>'q1_result'),'class'=>'','method'=>'POST','autocomplete'=>'off','inputDefaults'=>array(
				
				'label'=>false,'div'=>false,'type'=>'text','required'=>false)))?>
	
<?php echo __("Hi, please choose a type below:")?>
<br><br>

<?php $options_new = array(
		'Type1' => __('<span id="dialog_1" class="custom-tip" style="color:blue" data-html="true" data-placement="right" 
			title="<ul><li>Description .......</li><li>Description 2</li></ul>">Type1</span>'),
		'Type2' => __('<span id="dialog_2" class="custom-tip" style="color:blue" data-html="true" data-placement="right" 
			title="<ul><li>Desc 1 .....</li><li>Desc 2...</li></ul>">Type2</span>'),
		'Type3' => __('<span id="dialog_3" class="custom-tip" style="color:blue" data-html="true" data-placement="right" 
			title="<ul><li>Test Desc...</li></ul>">Type3</span>')
		);?>

<?php echo $this->Form->input('type', array('legend'=>false, 'type' => 'radio', 'options'=>$options_new,'before'=>'<label class="radio line notcheck">','after'=>'</label>' ,'separator'=>'</label><label class="radio line notcheck">'));?>


<?php echo $this->Form->end('Save');?>
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

.ui-tooltip-test {background:red;color:white;}

.wrap {
	white-space: pre-wrap;
}

.custom-tip + .tooltip .tooltip-inner {
	background-color: #EEEEEE;
	color: black;
}

.custom-tip + .tooltip.right .tooltip-arrow {
  border-right-color: #EEEEEE;
}

</style>

<?php $this->start('script_own')?>
<script>

$(document).ready(function(){
	$("#dialog_1").tooltip();
	$("#dialog_2").tooltip();
	$("#dialog_3").tooltip();
})


</script>
<?php $this->end()?>