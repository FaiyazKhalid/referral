<?php  if (count($errors) > 0) : ?>
	
	<div class="alert alert-danger" role="alert">
                                    
                                    
		<?php foreach ($errors as $error) : ?>
			<h4><?php echo $error ?></h4><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
		<?php endforeach ?>

                                    
                                </div>
<?php  endif ?>
