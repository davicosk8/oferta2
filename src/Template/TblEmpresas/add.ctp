<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <hr>
        <li><?= $this->Html->link(__('Lista de Empresas'), ['action' => 'index']) ?></li>
        <hr>
    </ul>
</nav>
<div class="tblEmpresas form large-9 medium-8 columns content">
    <?= $this->Form->create($tblEmpresa) ?>
    <fieldset>
        <legend><?= __('Añadir Empresa') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('fecha_creacion');
            echo $this->Form->input('estado_activa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
