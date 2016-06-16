<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tbl Categoria'), ['action' => 'edit', $tblCategoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tbl Categoria'), ['action' => 'delete', $tblCategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblCategoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['controller' => 'TblOfertas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['controller' => 'TblOfertas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tblCategorias view large-9 medium-8 columns content">
    <h3><?= h($tblCategoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($tblCategoria->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tblCategoria->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Creacion') ?></th>
            <td><?= h($tblCategoria->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Activa') ?></th>
            <td><?= $tblCategoria->estado_activa ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tbl Ofertas') ?></h4>
        <?php if (!empty($tblCategoria->tbl_ofertas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Imagen') ?></th>
                <th><?= __('Fecha Creacion') ?></th>
                <th><?= __('Estado Activa') ?></th>
                <th><?= __('Fecha Inicio') ?></th>
                <th><?= __('Fecha Fin') ?></th>
                <th><?= __('Duracion Dias') ?></th>
                <th><?= __('Nombre Encargado') ?></th>
                <th><?= __('Telefono Encargado') ?></th>
                <th><?= __('Email Encargado') ?></th>
                <th><?= __('Tbl Categoria Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tblCategoria->tbl_ofertas as $tblOfertas): ?>
            <tr>
                <td><?= h($tblOfertas->id) ?></td>
                <td><?= h($tblOfertas->nombre) ?></td>
                <td><?= h($tblOfertas->descripcion) ?></td>
                <td><?= h($tblOfertas->imagen) ?></td>
                <td><?= h($tblOfertas->fecha_creacion) ?></td>
                <td><?= h($tblOfertas->estado_activa) ?></td>
                <td><?= h($tblOfertas->fecha_inicio) ?></td>
                <td><?= h($tblOfertas->fecha_fin) ?></td>
                <td><?= h($tblOfertas->duracion_dias) ?></td>
                <td><?= h($tblOfertas->nombre_encargado) ?></td>
                <td><?= h($tblOfertas->telefono_encargado) ?></td>
                <td><?= h($tblOfertas->email_encargado) ?></td>
                <td><?= h($tblOfertas->tbl_categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TblOfertas', 'action' => 'view', $tblOfertas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TblOfertas', 'action' => 'edit', $tblOfertas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TblOfertas', 'action' => 'delete', $tblOfertas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblOfertas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
