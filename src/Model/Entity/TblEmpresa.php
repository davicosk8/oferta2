<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblEmpresa Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property \Cake\I18n\Time $fecha_creacion
 * @property bool $estado_activa
 * @property \App\Model\Entity\TblSucursale[] $tbl_sucursales
 */
class TblEmpresa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
