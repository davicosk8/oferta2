<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nueva Empresa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblEmpresas index large-9 medium-8 columns content">
    <h3><?= __('Empresas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('descripcion') ?></th>
                <th><?= $this->Paginator->sort('fecha_creacion') ?></th>
                <th><?= $this->Paginator->sort('estado_activa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tblEmpresas as $tblEmpresa): ?>
            <tr>
                <td><?= $this->Number->format($tblEmpresa->id) ?></td>
                <td><?= h($tblEmpresa->nombre) ?></td>
                <td><?= h($tblEmpresa->descripcion) ?></td>
                <td><?= h($tblEmpresa->fecha_creacion) ?></td>
                <td><?= h($tblEmpresa->estado_activa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tblEmpresa->id]) ?>
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
