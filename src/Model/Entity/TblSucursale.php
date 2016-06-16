<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblSucursale Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $direccion
 * @property int $telefono1
 * @property int $telefono2
 * @property float $posX
 * @property float $posY
 * @property \Cake\I18n\Time $fecha_creacion
 * @property bool $estado_activa
 * @property int $tbl_empresa_id
 * @property \App\Model\Entity\TblEmpresa $tbl_empresa
 * @property \App\Model\Entity\TblOferta[] $tbl_ofertas
 */
class TblSucursale extends Entity
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
