<?php
namespace App\Model\Table;

use App\Model\Entity\TblCategoria;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblCategorias Model
 *
 * @property \Cake\ORM\Association\HasMany $TblOfertas
 */
class TblCategoriasTable extends Table
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

        $this->table('tbl_categorias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('TblOfertas', [
            'foreignKey' => 'tbl_categoria_id'
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
            ->date('fecha_creacion')
            ->requirePresence('fecha_creacion', 'create')
            ->notEmpty('fecha_creacion');

        $validator
            ->boolean('estado_activa')
            ->requirePresence('estado_activa', 'create')
            ->notEmpty('estado_activa');

        return $validator;
    }
}
