<?php include("templates/header.php");?>
<div class="mt-3 container">
	<?php echo form_dropdown('pulldown',$list) ?>
	<!-- <?php
	echo('<pre>');
	var_dump($list);
	echo('</pre>');?> -->
	<div id="add">
	</div>
	<div class="mt-3 container">
		<button id="change" type="button" class="ms-1 btn btn-primary">書き換え</button>
	</div>
	<div class="mt-3 container">
		<span>
			<!-- <?php "$test";?> -->
				<?php
				// echo('<pre>');
				var_dump($from);
				// echo('</pre>');?>
		</span>
	</div>
</div>
<?php include("templates/footer.php"); ?>

<script >

	$('#change').click(function() {
		$('[name = "pulldown"]').empty();
		// $('[name = "pulldown"]').append(list);
		$('#add').html(list);
		console.log(list);
	})

</script>

