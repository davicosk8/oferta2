<?php
namespace App\Model\Table;

use App\Model\Entity\TblImageoferta;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblImageofertas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TblOfertas
 */
class TblImageofertasTable extends Table
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

        $this->table('tbl_imageofertas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('TblOfertas', [
            'foreignKey' => 'tbl_oferta_id',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
        // You can configure as many upload fields as possible,
        // where the pattern is `field` => `config`
        //
        // Keep in mind that while this plugin does not have any limits in terms of
        // number of files uploaded per request, you should keep this down in order
        // to decrease the ability of your users to block other requests.
        'dir' => []
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
            ->allowEmpty('dir');

        $validator
            ->allowEmpty('descripcion_imagen');

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
        $rules->add($rules->existsIn(['tbl_oferta_id'], 'TblOfertas'));
        return $rules;
    }
}
