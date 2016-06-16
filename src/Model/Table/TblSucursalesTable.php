<?php
namespace App\Model\Table;

use App\Model\Entity\TblSucursale;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblSucursales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TblEmpresas
 * @property \Cake\ORM\Association\BelongsToMany $TblOfertas
 */
class TblSucursalesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tbl_sucursales');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('TblEmpresas', [
            'foreignKey' => 'tbl_empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('TblOfertas', [
            'foreignKey' => 'tbl_sucursale_id',
            'targetForeignKey' => 'tbl_oferta_id',
            'joinTable' => 'tbl_ofertas_tbl_sucursales'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->integer('telefono1')
            ->requirePresence('telefono1', 'create')
            ->notEmpty('telefono1');

        $validator
            ->integer('telefono2')
            ->requirePresence('telefono2', 'create')
            ->notEmpty('telefono2');

        $validator
            ->numeric('posX')
            ->requirePresence('posX', 'create')
            ->notEmpty('posX');

        $validator
            ->numeric('posY')
            ->requirePresence('posY', 'create')
            ->notEmpty('posY');

        $validator
            ->date('fecha_creacion')
            ->requirePresence('fecha_creacion', 'create')
            ->notEmpty('fecha_creacion');

        $validator
            ->boolean('estado_activa')
            ->requirePresence('estado_activa', 'create')
            ->notEmpty('estado_activa');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tbl_empresa_id'], 'TblEmpresas'));
        return $rules;
    }
}
