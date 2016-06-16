<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblOferta Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $nombre_imagen
 * @property \Cake\I18n\Time $fecha_creacion
 * @property bool $estado_activa
 * @property \Cake\I18n\Time $fecha_inicio
 * @property \Cake\I18n\Time $fecha_fin
 * @property int $duracion_dias
 * @property string $nombre_encargado
 * @property int $telefono_encargado
 * @property string $email_encargado
 * @property int $tbl_categoria_id
 * @property \App\Model\Entity\TblCategoria $tbl_categoria
 * @property \App\Model\Entity\TblImageoferta[] $tbl_imageofertas
 * @property \App\Model\Entity\TblSucursale[] $tbl_sucursales
 */
class TblOferta extends Entity
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
        'imagen_field' => true,
    ];
}
