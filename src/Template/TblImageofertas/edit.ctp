<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tblImageoferta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tblImageoferta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tbl Imageofertas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblImageofertas form large-9 medium-8 columns content">
    <?= $this->Form->create($tblImageoferta) ?>
    <fieldset>
        <legend><?= __('Edit Tbl Imageoferta') ?></legend>
        <?php
            echo $this->Form->input('dir');
            echo $this->Form->input('descripcion_imagen');
            echo $this->Form->input('tbl_oferta_id', ['options' => $tblOfertas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
