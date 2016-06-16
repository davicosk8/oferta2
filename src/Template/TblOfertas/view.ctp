<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tbl Oferta'), ['action' => 'edit', $tblOferta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tbl Oferta'), ['action' => 'delete', $tblOferta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblOferta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Ofertas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Oferta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Categorias'), ['controller' => 'TblCategorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Categoria'), ['controller' => 'TblCategorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Imageofertas'), ['controller' => 'TblImageofertas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Imageoferta'), ['controller' => 'TblImageofertas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tbl Sucursales'), ['controller' => 'TblSucursales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tbl Sucursale'), ['controller' => 'TblSucursales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tblOfertas view large-9 medium-8 columns content">
    <h3><?= h($tblOferta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($tblOferta->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($tblOferta->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre Imagen') ?></th>
            <td><?= h($tblOferta->nombre_imagen) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre Encargado') ?></th>
            <td><?= h($tblOferta->nombre_encargado) ?></td>
        </tr>
        <tr>
            <th><?= __('Email Encargado') ?></th>
            <td><?= h($tblOferta->email_encargado) ?></td>
        </tr>
        <tr>
            <th><?= __('Tbl Categoria') ?></th>
            <td><?= $tblOferta->has('tbl_categoria') ? $this->Html->link($tblOferta->tbl_categoria->id, ['controller' => 'TblCategorias', 'action' => 'view', $tblOferta->tbl_categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tblOferta->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Duracion Dias') ?></th>
            <td><?= $this->Number->format($tblOferta->duracion_dias) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono Encargado') ?></th>
            <td><?= $this->Number->format($tblOferta->telefono_encargado) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Creacion') ?></th>
            <td><?= h($tblOferta->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Inicio') ?></th>
            <td><?= h($tblOferta->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Fin') ?></th>
            <td><?= h($tblOferta->fecha_fin) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Activa') ?></th>
            <td><?= $tblOferta->estado_activa ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tbl Imageofertas') ?></h4>
        <?php if (!empty($tblOferta->tbl_imageofertas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Dir') ?></th>
                <th><?= __('Descripcion Imagen') ?></th>
                <th><?= __('Tbl Oferta Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tblOferta->tbl_imageofertas as $tblImageofertas): ?>
            <tr>
                <td><?= h($tblImageofertas->id) ?></td>
                <td><?= h($tblImageofertas->dir) ?></td>
                <td><?= h($tblImageofertas->descripcion_imagen) ?></td>
                <td><?= h($tblImageofertas->tbl_oferta_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TblImageofertas', 'action' => 'view', $tblImageofertas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TblImageofertas', 'action' => 'edit', $tblImageofertas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TblImageofertas', 'action' => 'delete', $tblImageofertas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblImageofertas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tbl Sucursales') ?></h4>
        <?php if (!empty($tblOferta->tbl_sucursales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Direccion') ?></th>
                <th><?= __('Telefono1') ?></th>
                <th><?= __('Telefono2') ?></th>
                <th><?= __('PosX') ?></th>
                <th><?= __('PosY') ?></th>
                <th><?= __('Fecha Creacion') ?></th>
                <th><?= __('Estado Activa') ?></th>
                <th><?= __('Tbl Empresa Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tblOferta->tbl_sucursales as $tblSucursales): ?>
            <tr>
                <td><?= h($tblSucursales->id) ?></td>
                <td><?= h($tblSucursales->nombre) ?></td>
                <td><?= h($tblSucursales->direccion) ?></td>
                <td><?= h($tblSucursales->telefono1) ?></td>
                <td><?= h($tblSucursales->telefono2) ?></td>
                <td><?= h($tblSucursales->posX) ?></td>
                <td><?= h($tblSucursales->posY) ?></td>
                <td><?= h($tblSucursales->fecha_creacion) ?></td>
                <td><?= h($tblSucursales->estado_activa) ?></td>
                <td><?= h($tblSucursales->tbl_empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TblSucursales', 'action' => 'view', $tblSucursales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TblSucursales', 'action' => 'edit', $tblSucursales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TblSucursales', 'action' => 'delete', $tblSucursales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblSucursales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
