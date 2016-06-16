<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <hr>
        <li><?= $this->Html->link(__('Editar Empresa'), ['action' => 'edit', $tblEmpresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Empresa'), ['action' => 'delete', $tblEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblEmpresa->id)]) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('Lista de Empresas'), ['action' => 'index']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('Añadir Sucursal'), ['controller' => 'TblSucursales', 'action' => 'addWithEmpresa',$tblEmpresa->id]) ?> </li>
        <hr>
    </ul>
</nav>
<div class="tblEmpresas view large-9 medium-8 columns content">
    <h3><?= h($tblEmpresa->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($tblEmpresa->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($tblEmpresa->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tblEmpresa->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Creacion') ?></th>
            <td><?= h($tblEmpresa->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Activa') ?></th>
            <td><?= $tblEmpresa->estado_activa ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Sucursales') ?></h4>
        <?php if (!empty($tblEmpresa->tbl_sucursales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Direccion') ?></th>
                <th><?= __('Telefono1') ?></th>
                <th><?= __('Telefono2') ?></th>
                <th><?= __('Fecha Creacion') ?></th>
                <th><?= __('Estado Activa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tblEmpresa->tbl_sucursales as $tblSucursales): ?>
            <tr>
                <td><?= h($tblSucursales->id) ?></td>
                <td><?= h($tblSucursales->nombre) ?></td>
                <td><?= h($tblSucursales->direccion) ?></td>
                <td><?= h($tblSucursales->telefono1) ?></td>
                <td><?= h($tblSucursales->telefono2) ?></td>
                <td><?= h($tblSucursales->fecha_creacion) ?></td>
                <td><?= h($tblSucursales->estado_activa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TblSucursales', 'action' => 'edit', $tblSucursales->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
