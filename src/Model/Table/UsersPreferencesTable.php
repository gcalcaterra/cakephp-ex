<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersPreferences Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PreferencesTable|\Cake\ORM\Association\BelongsTo $Preferences
 *
 * @method \App\Model\Entity\UsersPreference get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersPreference newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersPreference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersPreference|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersPreference saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersPreference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersPreference[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersPreference findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersPreferencesTable extends Table
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

        $this->setTable('users_preferences');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey(['user_id', 'preference_id']);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Preferences', [
            'foreignKey' => 'preference_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['preference_id'], 'Preferences'));

        return $rules;
    }
}
