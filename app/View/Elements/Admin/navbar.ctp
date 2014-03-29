<nav class="navbar navbar-default" role="navigation" style="margin-top: 20px;">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php echo $this->Html->link('Webservice', array('action'=> 'index'), array('class'=> 'navbar-brand')); ?>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="<?php echo ($this->params['controller'] == 'documentation') ? 'active' : ''; ?>">
				<?php
					echo $this->Html->link('Documentação',array('controller'=> 'documentation', 'admin'=> false));
				?>
			</li>
			<li class="<?php echo ($this->params['prefix'] == 'admin') ? 'active' : ''; ?>">
				<?php
					echo $this->Html->link('Administração dos dados',array('controller'=> 'alunos', 'admin'=> true));
				?>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>