<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
<fieldset>
<legend><?= __('Por favor entre com seu usuário e senha:') ?></legend>
<?= $this->Form->control('username') ?>
<?= $this->Form->control('password') ?>
</fieldset>
<?= $this->Form->button(__('Login')); ?>
<td class="action">
		        <a href="add" > Ou Cadastre-se</a>
		    </td>
<?= $this->Form->end() ?>
</div>
