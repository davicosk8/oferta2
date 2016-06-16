<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tbl Sucursale'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Empresas'), ['controller' => 'TblEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Empresa'), ['controller' => 'TblEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblSucursales index large-9 medium-8 columns content">
    <h3><?= __('Tbl Sucursales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('telefono1') ?></th>
                <th><?= $this->Paginator->sort('telefono2') ?></th>
                <th><?= $this->Paginator->sort('posX') ?></th>
                <th><?= $this->Paginator->sort('posY') ?></th>
                <th><?= $this->Paginator->sort('fecha_creacion') ?></th>
                <th><?= $this->Paginator->sort('estado_activa') ?></th>
                <th><?= $this->Paginator->sort('tbl_empresa_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tblSucursales as $tblSucursale): ?>
            <tr>
                <td><?= $this->Number->format($tblSucursale->id) ?></td>
                <td><?= h($tblSucursale->nombre) ?></td>
                <td><?= h($tblSucursale->direccion) ?></td>
                <td><?= $this->Number->format($tblSucursale->telefono1) ?></td>
                <td><?= $this->Number->format($tblSucursale->telefono2) ?></td>
                <td><?= $this->Number->format($tblSucursale->posX) ?></td>
                <td><?= $this->Number->format($tblSucursale->posY) ?></td>
                <td><?= h($tblSucursale->fecha_creacion) ?></td>
                <td><?= h($tblSucursale->estado_activa) ?></td>
                <td><?= $tblSucursale->has('tbl_empresa') ? $this->Html->link($tblSucursale->tbl_empresa->id, ['controller' => 'TblEmpresas', 'action' => 'view', $tblSucursale->tbl_empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tblSucursale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblSucursale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblSucursale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblSucursale->id)]) ?>
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
