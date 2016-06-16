<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Categorias'), ['controller' => 'TblCategorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Categoria'), ['controller' => 'TblCategorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Imageofertas'), ['controller' => 'TblImageofertas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Imageoferta'), ['controller' => 'TblImageofertas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tbl Sucursales'), ['controller' => 'TblSucursales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tbl Sucursale'), ['controller' => 'TblSucursales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tblOfertas index large-9 medium-8 columns content">
    <h3><?= __('Tbl Ofertas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('descripcion') ?></th>
                <th><?= $this->Paginator->sort('nombre_imagen') ?></th>
                <th><?= $this->Paginator->sort('fecha_creacion') ?></th>
                <th><?= $this->Paginator->sort('estado_activa') ?></th>
                <th><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th><?= $this->Paginator->sort('duracion_dias') ?></th>
                <th><?= $this->Paginator->sort('nombre_encargado') ?></th>
                <th><?= $this->Paginator->sort('telefono_encargado') ?></th>
                <th><?= $this->Paginator->sort('email_encargado') ?></th>
                <th><?= $this->Paginator->sort('tbl_categoria_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tblOfertas as $tblOferta): ?>
            <tr>
                <td><?= $this->Number->format($tblOferta->id) ?></td>
                <td><?= h($tblOferta->nombre) ?></td>
                <td><?= h($tblOferta->descripcion) ?></td>
                <td><?= h($tblOferta->nombre_imagen) ?></td>
                <td><?= h($tblOferta->fecha_creacion) ?></td>
                <td><?= h($tblOferta->estado_activa) ?></td>
                <td><?= h($tblOferta->fecha_inicio) ?></td>
                <td><?= h($tblOferta->fecha_fin) ?></td>
                <td><?= $this->Number->format($tblOferta->duracion_dias) ?></td>
                <td><?= h($tblOferta->nombre_encargado) ?></td>
                <td><?= $this->Number->format($tblOferta->telefono_encargado) ?></td>
                <td><?= h($tblOferta->email_encargado) ?></td>
                <td><?= $tblOferta->has('tbl_categoria') ? $this->Html->link($tblOferta->tbl_categoria->id, ['controller' => 'TblCategorias', 'action' => 'view', $tblOferta->tbl_categoria->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tblOferta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblOferta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblOferta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblOferta->id)]) ?>
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
