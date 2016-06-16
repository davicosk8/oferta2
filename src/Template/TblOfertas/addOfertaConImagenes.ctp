<?php echo $this->Html->css('ImageUpload'); ?>
<?php echo $this->Html->css('SubmitButtton'); ?>
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
        <?php echo $this->Form->input('imagen',['type'=>'file']) ?>
        <div class="image-preview">
            <img id="blah" />
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
    <div class="row">
        <div class="small-3 columns">
            <?php echo $this->Form->input('0.dir',['type'=>'file','id'=>'imagen2']) ?>
            <div class="image-preview">
                <img id="blah2" />
            </div>
        </div>
        <div class="small-3 columns">
            <?php echo $this->Form->input('1.dir',['type'=>'file','id'=>'imagen3','required' => false]) ?>
            <div class="image-preview">
                <img id="blah3" />
            </div>
        </div>
        <div class="small-3 columns">
            <?php echo $this->Form->input('2.dir',['type'=>'file','id'=>'imagen4','required' => false]) ?>
            <div class="image-preview">
                <img id="blah4" />
            </div>
        </div>
        <div class="small-3 columns">
            <?php echo $this->Form->input('3.dir',['type'=>'file','id'=>'imagen5','required' => false]) ?>
            <div class="image-preview">
                <img id="blah5" />
            </div>
        </div>
    </div>
    <div class="submit">
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
    
</div>
<?php echo $this->Html->script('jquery-3.0.0.min'); ?>
<?php echo $this->Html->script('PreviewImages'); ?>