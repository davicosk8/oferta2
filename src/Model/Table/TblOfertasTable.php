<?php
namespace App\Model\Table;

use App\Model\Entity\TblOferta;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblOfertas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TblCategorias
 * @property \Cake\ORM\Association\HasMany $TblImageofertas
 * @property \Cake\ORM\Association\BelongsToMany $TblSucursales
 */
class TblOfertasTable extends Table
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

        $this->table('tbl_ofertas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('TblCategorias', [
            'foreignKey' => 'tbl_categoria_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('TblImageofertas', [
            'foreignKey' => 'tbl_oferta_id'
        ]);
        $this->belongsToMany('TblSucursales', [
            'foreignKey' => 'tbl_oferta_id',
            'targetForeignKey' => 'tbl_sucursale_id',
            'joinTable' => 'tbl_ofertas_tbl_sucursales'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
        // You can configure as many upload fields as possible,
        // where the pattern is `field` => `config`
        //
        // Keep in mind that while this plugin does not have any limits in terms of
        // number of files uploaded per request, you should keep this down in order
        // to decrease the ability of your users to block other requests.
        'imagen' => []
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
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->requirePresence('imagen', 'create')
            ->notEmpty('imagen');

        $validator
            ->date('fecha_creacion')
            ->requirePresence('fecha_creacion', 'create')
            ->notEmpty('fecha_creacion');

        $validator
            ->boolean('estado_activa')
            ->requirePresence('estado_activa', 'create')
            ->notEmpty('estado_activa');

        $validator
            ->date('fecha_inicio')
            ->requirePresence('fecha_inicio', 'create')
            ->notEmpty('fecha_inicio');

        $validator
            ->date('fecha_fin')
            ->requirePresence('fecha_fin', 'create')
            ->notEmpty('fecha_fin');

        $validator
            ->integer('duracion_dias')
            ->requirePresence('duracion_dias', 'create')
            ->notEmpty('duracion_dias');

        $validator
            ->requirePresence('nombre_encargado', 'create')
            ->notEmpty('nombre_encargado');

        $validator
            ->integer('telefono_encargado')
            ->requirePresence('telefono_encargado', 'create')
            ->notEmpty('telefono_encargado');

        $validator
            ->requirePresence('email_encargado', 'create')
            ->notEmpty('email_encargado');

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
        $rules->add($rules->existsIn(['tbl_categoria_id'], 'TblCategorias'));
        return $rules;
    }
}
