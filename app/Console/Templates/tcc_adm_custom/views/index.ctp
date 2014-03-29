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
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="<?php echo $pluralVar; ?> index">

	<?php
		$btn_novo = "<?php\n";
		$btn_novo .= "\t\$label = 'Adicionar " .ucfirst(Inflector::singularize($pluralVar)). "';\n";
		$btn_novo .= "\t\$path = array('controller'=> '" .$pluralVar. "', 'action'=> 'add');\n";
		$btn_novo .= "\t\$options = array('class'=> 'btn btn-success pull-right');\n";

		$btn_novo .= "\techo \$this->Html->link(\$label, \$path, \$options);\n";
		$btn_novo .= "?>\n";

		echo $btn_novo;
	?>

	<h2><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions text-center" style="width: 140px;"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
	</tr>
	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions text-center\">\n";
			$icon_ver = "<span class=\'glyphicon glyphicon-eye-open\'></span>";
			$icon_edit = "<span class=\'glyphicon glyphicon-pencil\'></span>";
			$icon_delete = "<span class=\'glyphicon glyphicon-remove\'></span>";
			echo "\t\t\t<?php echo \$this->Html->link('".$icon_ver."', array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=> 'btn btn-sm btn-primary', 'title'=> 'Ver', 'escape'=> false)); ?>\n";

			echo "\t\t\t<?php echo \$this->Html->link('".$icon_edit."', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=> 'btn btn-sm btn-default', 'title'=> 'Editar', 'escape'=> false)); ?>\n";

			echo "\t\t\t<?php echo \$this->Form->postLink('".$icon_delete."', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=> 'btn btn-sm btn-danger', 'title'=> 'Deletar', 'escape'=> false), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>
	<p>
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registro(s) de um total de {:count}')));
	?>"; ?>
	</p>
	<div class="pagination">
	<?php
		echo "<?php\n";
			echo "\t\techo \$this->Paginator->prev('<span class=\'glyphicon glyphicon-chevron-left\'></span>', array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a', 'escape'=> false));\n";
			echo "\t\techo \$this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));";
			echo "\t\techo \$this->Paginator->next('<span class=\'glyphicon glyphicon-chevron-right\'></span>', array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a', 'escape'=> false));";	
		echo "\t?>\n";
	?>
	</div>
</div>
