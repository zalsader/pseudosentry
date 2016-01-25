<?php
namespace App\Model\Table;

use App\Model\Entity\Error;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Errors Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 * @property \Cake\ORM\Association\BelongsTo $Projects
 */
class ErrorsTable extends Table
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

        $this->table('errors');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        // $this->belongsTo('Events', [
        //     'foreignKey' => 'event_id'
        // ]);
        // $this->belongsTo('Projects', [
        //     'foreignKey' => 'project_id'
        // ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('message');

        $validator
            ->allowEmpty('culprit');

        $validator
            ->allowEmpty('request');

        $validator
            ->allowEmpty('exception');

        $validator
            ->allowEmpty('logger');

        $validator
            ->allowEmpty('platform');

        $validator
            ->allowEmpty('extra');

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
        // $rules->add($rules->existsIn(['event_id'], 'Events'));
        // $rules->add($rules->existsIn(['project_id'], 'Projects'));
        return $rules;
    }
}
