<?php require_once 'config.php'; ?>
<div class="container text-center">
			
	<div class="col-md-12 col-sm-12 text-left">
		<ul>
			<?php include TEMPLATE_FRONT . DS . 'cart' . DS . 'product_list.php' ; ?>
		</ul>
	</div>

</div>		
<!-- The popover content -->

<div id="popover" style="display: none">
	<a class='add-quantity' href="#0"><span class="glyphicon glyphicon-plus"></span></a>
	<a class='remove' href="#""><span class="glyphicon glyphicon-remove"></span></a>
</div>
