<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <hr>
        <li><?= $this->Html->link(__('Editar Sucursal'), ['action' => 'edit', $tblSucursale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Sucursal'), ['action' => 'delete', $tblSucursale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblSucursale->id)]) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('Volver'), ['controller'=>'TblEmpresas','action' => 'view',$tblSucursale->tbl_empresa_id]) ?> </li>
        <hr>
    </ul>
</nav>
<div class="tblSucursales view large-9 medium-8 columns content">
    <h3> Sucursal:  <?= h($tblSucursale->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($tblSucursale->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($tblSucursale->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Tbl Empresa') ?></th>
            <td><?= $tblSucursale->has('tbl_empresa') ? $this->Html->link($tblSucursale->tbl_empresa->id, ['controller' => 'TblEmpresas', 'action' => 'view', $tblSucursale->tbl_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tblSucursale->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono1') ?></th>
            <td><?= $this->Number->format($tblSucursale->telefono1) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono2') ?></th>
            <td><?= $this->Number->format($tblSucursale->telefono2) ?></td>
        </tr>
        <tr>
            <th><?= __('PosX') ?></th>
            <td><?= $this->Number->format($tblSucursale->posX) ?></td>
        </tr>
        <tr>
            <th><?= __('PosY') ?></th>
            <td><?= $this->Number->format($tblSucursale->posY) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Creacion') ?></th>
            <td><?= h($tblSucursale->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Activa') ?></th>
            <td><?= $tblSucursale->estado_activa ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Ofertas') ?></h4>
        <?php if (!empty($tblSucursale->tbl_ofertas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Nombre Imagen') ?></th>
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
            <?php foreach ($tblSucursale->tbl_ofertas as $tblOfertas): ?>
            <tr>
                <td><?= h($tblOfertas->id) ?></td>
                <td><?= h($tblOfertas->nombre) ?></td>
                <td><?= h($tblOfertas->descripcion) ?></td>
                <td><?= h($tblOfertas->nombre_imagen) ?></td>
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