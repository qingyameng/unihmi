<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","left_header"); ?>

<?php include template("content","left"); ?>


		<!--main start-->
		<div class="main">

			<!--content start-->
			<div class="content">
			<div class="maincontent clearfix">
			<?php echo $content;?>
            </div>

			</div>
			<!--content end-->

		</div>
		<!--main end-->



<?php include template("content","left_footer"); ?>

<?php include template("content","footer"); ?>