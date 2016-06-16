<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Volver'), ['controller' => 'TblEmpresas', 'action' => 'view',$ide]) ?></li>
    </ul>
</nav>
<div class="tblSucursales form large-9 medium-8 columns content">
    <?= $this->Form->create($tblSucursale) ?>
    <fieldset>
        <legend><?= __('Add Tbl Sucursale') ?></legend>
        <?php
        echo $this->Form->input('nombre');
        echo $this->Form->input('direccion');
        echo $this->Form->input('telefono1');
        echo $this->Form->input('telefono2');
        echo $this->Form->input('posX');
        echo $this->Form->input('posY');
        echo $this->Form->input('fecha_creacion');
        echo $this->Form->input('estado_activa');
        echo $this->Form->text('tbl_empresa_id',['value'=>$ide, 'type'=>'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>