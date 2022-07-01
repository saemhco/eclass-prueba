<?= $this->Html->css('login') ?>

<div class="container">

	<div class="row" style="margin-top:20px">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<?= $this->Flash->render('auth') ?>
			<?= $this->Form->create() ?>
			<fieldset>
				<br>
				<h2>Iniciar sesión</h2>
				<hr>
				<p>Ingrese su usuario y contraseña</p>
				<div class="form-group border">
					<?= $this->Form->input('email', ['class' => 'form-control input-lg', 'placeholder' => 'Correo electrónico', 'label' => false, 'required', 'value' => 'admin@eclass.com']) ?>
				</div>
				<div class="form-group">
					<?= $this->Form->input('password', ['class' => 'form-control input-lg', 'placeholder' => 'Contraseña', 'label' => false, 'value' => 'password', 'required']) ?>
				</div>

				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<?= $this->Form->button('Acceder', ['class' => 'btn btn-md btn-success btn-block']) ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-md btn-danger btn-block']) ?>
					</div>
				</div>
				<hr>
			</fieldset>
			<?= $this->Form->end() ?>
		</div>
	</div>

</div>