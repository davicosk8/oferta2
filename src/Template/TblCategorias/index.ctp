<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tbl Categoria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblCategorias index large-9 medium-8 columns content">
    <h3><?= __('Tbl Categorias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('fecha_creacion') ?></th>
                <th><?= $this->Paginator->sort('estado_activa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tblCategorias as $tblCategoria): ?>
            <tr>
                <td><?= $this->Number->format($tblCategoria->id) ?></td>
                <td><?= h($tblCategoria->nombre) ?></td>
                <td><?= h($tblCategoria->fecha_creacion) ?></td>
                <td><?= h($tblCategoria->estado_activa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tblCategoria->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblCategoria->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblCategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblCategoria->id)]) ?>
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
