<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('Documentation/style');

		echo $this->Html->script('Jquery/jquery-2.0.2.min');
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>

<div class="page-wrap">

	<?php echo $this->Session->flash(); ?>
	<div class="container">
		<?php echo $this->element('Admin/navbar'); ?>
		<div class="row">
			<div class="col-lg-3">
				<?php echo $this->element('Admin/side_menu'); ?>
			</div>
			<div class="col-lg-9">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</div>
</div>
<?php echo $this->element('footer'); ?>

<?php //echo $this->element('sql_dump'); ?>

</body>
</html>
