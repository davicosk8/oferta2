<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tbl Sucursales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Empresas'), ['controller' => 'TblEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Empresa'), ['controller' => 'TblEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?></li>
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
        echo $this->Form->input('tbl_empresa_id', ['options' => $tblEmpresas]);
        echo $this->Form->input('tbl_ofertas._ids', ['options' => $tblOfertas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>