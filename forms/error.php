
<?php if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
		


			<div class="alert alert-danger" role="alert"><strong>
				<?php echo $error ?>
			</strong></div>



		<?php endforeach ?>
	</div>
<?php endif ?>
