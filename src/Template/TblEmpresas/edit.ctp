<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <hr>
        <li><?= $this->Html->link(__('Volver'), ['action' => 'view',$tblEmpresa->id]) ?></li>
        <hr>
    </ul>
</nav>
<div class="tblEmpresas form large-9 medium-8 columns content">
    <?= $this->Form->create($tblEmpresa) ?>
    <fieldset>
        <legend><?= __('Editar Empresa') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('estado_activa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
