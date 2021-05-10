<h1>Inicio de Sesión</h1>
<?= $this->Form->create()?>
<?= $this->Flash->render() ?>
<?= $this->Form->text('login', ['id' =>'login', 'autocomplete' => 'off', 'placeholder' => 'Usuario']) ?>
<?= $this->Form->password('password', ['id' => 'password', 'placeholder' => 'Contraseña']) ?>
<?= $this->Form->button(__('Acceder'), ['type' => 'submit', 'id' => 'acceder']) ?>
<?= $this->Form->end()?>