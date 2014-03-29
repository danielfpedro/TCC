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
		echo $this->Html->css('Documentation/style.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

<div class="container" style="min-height: 900px;">
	<?php echo $this->element('Admin/navbar'); ?>
	<br>
	<div class="row">
		<div class="col-lg-3">
			<?php echo $this->element('Documentation/side_menu'); ?>
		</div>
		<div class="col-lg-9">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</div>

<div class="footer">
	<div class="container-fluid">
		<p>Webservice para teste do Aplicativo para TCC.</p>
	</div>
</div> <!-- /.footer -->

</body>
</html>
