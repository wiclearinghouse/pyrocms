<section class="title">
	<h4>Comments</h4>
</section>

<section class="item">
		
	<?php echo $this->load->view('admin/partials/filters'); ?>

		<?php echo form_open('admin/comments/action');?>
		
			<?php echo form_hidden('redirect', uri_string()); ?>
		
			<div id="filter-stage">
			
				<?php echo $this->load->view('admin/tables/comments'); ?>
			
			</div>

			<div class="buttons align-right padding-top">
		
				<?php if (Settings::get('moderate_comments')): ?>
					<?php if ( ! $comments_active): ?>
						<?php $this->load->view('admin/partials/buttons', array('buttons' => array('approve','delete'))); ?>
					<?php else: ?>
						<?php $this->load->view('admin/partials/buttons', array('buttons' => array('unapprove','delete'))); ?>
					<?php endif; ?>
				<?php else: ?>
					<?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))); ?>
				<?php endif; ?>
			</div>

			<?php echo form_close();?>

</section>