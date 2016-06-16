<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tbl Categorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblCategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($tblCategoria) ?>
    <fieldset>
        <legend><?= __('Add Tbl Categoria') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('fecha_creacion');
            echo $this->Form->input('estado_activa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
