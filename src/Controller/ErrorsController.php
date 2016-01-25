<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Errors Controller
 *
 * @property \App\Model\Table\ErrorsTable $Errors
 */
class ErrorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [];
        $this->set('errors', $this->paginate($this->Errors));
        $this->set('_serialize', ['errors']);
    }

    /**
     * View method
     *
     * @param string|null $id Error id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $error = $this->Errors->get($id);
        $this->set('error', $error);
        $this->set('_serialize', ['error']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $error = $this->Errors->newEntity();
        if ($this->request->is('post')) {
            $data = (array) $this->request->input('json_decode');
            $data['project_id'] = $id;
            $data['request'] = json_encode($data['request']);
            $data['exception'] = json_encode($data['exception']);
            $data['extra'] = json_encode($data['extra']);
            $error = $this->Errors->patchEntity($error, $data);
            if ($this->Errors->save($error)) {
                // $this->Flash->success(__('The error has been saved.'));
                $this->response->header('Access-Control-Allow-Origin', '*');
            } else {
                $this->Flash->error(__('The error could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('error'));
        $this->set('_serialize', ['error']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Error id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $error = $this->Errors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $error = $this->Errors->patchEntity($error, $this->request->data);
            if ($this->Errors->save($error)) {
                $this->Flash->success(__('The error has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The error could not be saved. Please, try again.'));
            }
        }
        $events = $this->Errors->Events->find('list', ['limit' => 200]);
        $projects = $this->Errors->Projects->find('list', ['limit' => 200]);
        $this->set(compact('error', 'events', 'projects'));
        $this->set('_serialize', ['error']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Error id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $error = $this->Errors->get($id);
        if ($this->Errors->delete($error)) {
            $this->Flash->success(__('The error has been deleted.'));
        } else {
            $this->Flash->error(__('The error could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
