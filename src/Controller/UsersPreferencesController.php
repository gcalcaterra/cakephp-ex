<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersPreferences Controller
 *
 * @property \App\Model\Table\UsersPreferencesTable $UsersPreferences
 *
 * @method \App\Model\Entity\UsersPreference[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersPreferencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Preferences']
        ];
        $usersPreferences = $this->paginate($this->UsersPreferences);

        $this->set(compact('usersPreferences'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Preference id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersPreference = $this->UsersPreferences->get($id, [
            'contain' => ['Users', 'Preferences']
        ]);

        $this->set('usersPreference', $usersPreference);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersPreference = $this->UsersPreferences->newEntity();
        if ($this->request->is('post')) {
            $usersPreference = $this->UsersPreferences->patchEntity($usersPreference, $this->request->getData());
            if ($this->UsersPreferences->save($usersPreference)) {
                $this->Flash->success(__('The users preference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users preference could not be saved. Please, try again.'));
        }
        $users = $this->UsersPreferences->Users->find('list', ['limit' => 200]);
        $preferences = $this->UsersPreferences->Preferences->find('list', ['limit' => 200]);
        $this->set(compact('usersPreference', 'users', 'preferences'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Preference id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersPreference = $this->UsersPreferences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersPreference = $this->UsersPreferences->patchEntity($usersPreference, $this->request->getData());
            if ($this->UsersPreferences->save($usersPreference)) {
                $this->Flash->success(__('The users preference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users preference could not be saved. Please, try again.'));
        }
        $users = $this->UsersPreferences->Users->find('list', ['limit' => 200]);
        $preferences = $this->UsersPreferences->Preferences->find('list', ['limit' => 200]);
        $this->set(compact('usersPreference', 'users', 'preferences'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Preference id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersPreference = $this->UsersPreferences->get($id);
        if ($this->UsersPreferences->delete($usersPreference)) {
            $this->Flash->success(__('The users preference has been deleted.'));
        } else {
            $this->Flash->error(__('The users preference could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
