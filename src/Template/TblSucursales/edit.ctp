<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

        <hr>
        <li><?= $this->Html->link(__('Volver'), ['controller'=>'TblEmpresas','action' => 'view',$tblSucursale->tbl_empresa_id]) ?></li>
        <hr>
    </ul>
</nav>
<div class="tblSucursales form large-9 medium-8 columns content">
    <?= $this->Form->create($tblSucursale) ?>
    <fieldset>
        <legend><?= __('Editar Sucursal') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('direccion');
            echo $this->Form->input('telefono1');
            echo $this->Form->input('telefono2');
            echo $this->Form->input('posX');
            echo $this->Form->input('posY');
            echo $this->Form->input('fecha_creacion');
            echo $this->Form->input('estado_activa');
          //  echo $this->Form->input('tbl_empresa_id', ['options' => $tblEmpresas]);
          //  echo $this->Form->input('tbl_ofertas._ids', ['options' => $tblOfertas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
