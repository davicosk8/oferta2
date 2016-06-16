<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tbl Imageoferta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblImageofertas index large-9 medium-8 columns content">
    <h3><?= __('Tbl Imageofertas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('dir') ?></th>
                <th><?= $this->Paginator->sort('descripcion_imagen') ?></th>
                <th><?= $this->Paginator->sort('tbl_oferta_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tblImageofertas as $tblImageoferta): ?>
            <tr>
                <td><?= $this->Number->format($tblImageoferta->id) ?></td>
                <td><?= h($tblImageoferta->dir) ?></td>
                <td><?= h($tblImageoferta->descripcion_imagen) ?></td>
                <td><?= $tblImageoferta->has('tbl_oferta') ? $this->Html->link($tblImageoferta->tbl_oferta->id, ['controller' => 'TblOfertas', 'action' => 'view', $tblImageoferta->tbl_oferta->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tblImageoferta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblImageoferta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblImageoferta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblImageoferta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
