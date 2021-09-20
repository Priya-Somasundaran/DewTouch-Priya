<div class="alert  ">
<button class="close" data-dismiss="alert"></button>
Question: Advanced Input Field</div>

<p>
1. Make the Description, Quantity, Unit price field as text at first. When user clicks the text, it changes to input field for use to edit. Refer to the following video.

</p>


<p>
2. When user clicks the add button at left top of table, it wil auto insert a new row into the table with empty value. Pay attention to the input field name. For example the quantity field

<?php echo htmlentities('<input name="data[1][quantity]" class="">')?> ,  you have to change the data[1][quantity] to other name such as data[2][quantity] or data["any other not used number"][quantity]

</p>



<div class="alert alert-success">
<button class="close" data-dismiss="alert"></button>
The table you start with</div>

<table id="test" class="table table-striped table-bordered table-hover">

<thead>
<th><span id="add_item_button" class="btn mini green addbutton" onclick="addToObj=false">
											<i class="icon-plus"></i></span></th>
<th>Description</th>
<th>Quantity</th>
<th>Unit Price</th>
</thead>
<tbody id="myDiv">	
</tbody>
</table>
<div id="myDiv1">
<?php $this->start('script_own');?>
<script>
$(document).ready(function(){
	var i=1;
	
	$("#add_item_button").click(function(){
		var html = '';
		html +=	'<tr>';
		html +=	'<td></td>';
		html +=	'<td><input type="text" name='+'"data['+i+']description" + id='+'"data['+i+']description"'+' ></td>';
		html +=	'<td><input type="text" name='+'"data['+i+']quantity" + id='+'"data['+i+']quantity"'+' ></td>';
		html +=	'<td><input type="text" name='+'"data['+i+']unitprice" + id='+'"data['+i+']unitprice"'+' ></td>';
		
		html +=	'</tr>';
		$("#myDiv").append(html);		
		i=i+1;	
		if (i == 2) {
			html1 =	'<button type="submit" id="btnSubmit" onclick="getdata()">Show Items</button>';
			$("#myDiv1").append(html1);
            }
	});
				
	$("body").on("click", "#btnSubmit", function(){
		var cnt=1;var values = "";
		for (cnt = 1; cnt < i; cnt++) {
			var html = '';
			html +=	'<tr>';
			html +=	'<td></td>';
			var desc=document.getElementById("data["+cnt+"]description").value;
			html +=	'<td>'+desc+'</td>';
			var quant=document.getElementById("data["+cnt+"]quantity").value;
			html +=	'<td>'+quant+'</td>';
			var up=document.getElementById("data["+cnt+"]unitprice").value;
			html +=	'<td>'+up+'</td>';
			html +=	'</tr>';
			$("#myDiv").append(html);	
        }
		
	});

});

</script>
<?php $this->end();?>

