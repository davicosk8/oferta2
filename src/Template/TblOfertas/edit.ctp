<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tblOferta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tblOferta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Categorias'), ['controller' => 'TblCategorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Categoria'), ['controller' => 'TblCategorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Imageofertas'), ['controller' => 'TblImageofertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Imageoferta'), ['controller' => 'TblImageofertas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Sucursales'), ['controller' => 'TblSucursales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Sucursale'), ['controller' => 'TblSucursales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblOfertas form large-9 medium-8 columns content">
    <?= $this->Form->create($tblOferta) ?>
    <fieldset>
        <legend><?= __('Edit Tbl Oferta') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('nombre_imagen');
            echo $this->Form->input('fecha_creacion');
            echo $this->Form->input('estado_activa');
            echo $this->Form->input('fecha_inicio');
            echo $this->Form->input('fecha_fin');
            echo $this->Form->input('duracion_dias');
            echo $this->Form->input('nombre_encargado');
            echo $this->Form->input('telefono_encargado');
            echo $this->Form->input('email_encargado');
            echo $this->Form->input('tbl_categoria_id', ['options' => $tblCategorias]);
            echo $this->Form->input('tbl_sucursales._ids', ['options' => $tblSucursales]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
