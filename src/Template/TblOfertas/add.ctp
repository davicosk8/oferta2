<?php echo $this->Html->css('ImageUpload'); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
<fieldset>
    <?= $this->Form->create($tblOferta, ['type'=>'file']) ?>
    <div class="row">
        <div class="small-6 columns">
            <legend><?= __('Add Tbl Oferta') ?></legend>
        </div>
        <div class="small-3 columns">
            <label class="texto" for="imagen" id="image-label">Seleccione Imagen</label>
        </div>
        <div class="small-3 columns">
            <input class="meter" type="file" name="imagen" id="imagen" />
            <div id="image-preview">
            </div>
        </div>
    </div>
        <?php
        echo $this->Form->input('nombre');
        echo $this->Form->input('descripcion');
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
<?php echo $this->Html->script('jquery-3.0.0.min'); ?>
<?php echo $this->Html->script('jquery.uploadPreview.min'); ?>
<?php echo $this->Html->script('PreviewImages'); ?>