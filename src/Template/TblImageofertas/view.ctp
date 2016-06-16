<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tbl Imageoferta'), ['action' => 'edit', $tblImageoferta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tbl Imageoferta'), ['action' => 'delete', $tblImageoferta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblImageoferta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Imageofertas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Imageoferta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tblImageofertas view large-9 medium-8 columns content">
    <h3><?= h($tblImageoferta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Dir') ?></th>
            <td><?= h($tblImageoferta->dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion Imagen') ?></th>
            <td><?= h($tblImageoferta->descripcion_imagen) ?></td>
        </tr>
        <tr>
            <th><?= __('Tbl Oferta') ?></th>
            <td><?= $tblImageoferta->has('tbl_oferta') ? $this->Html->link($tblImageoferta->tbl_oferta->id, ['controller' => 'TblOfertas', 'action' => 'view', $tblImageoferta->tbl_oferta->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tblImageoferta->id) ?></td>
        </tr>
    </table>
</div>
