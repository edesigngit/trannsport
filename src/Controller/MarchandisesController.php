<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Marchandises Controller
 *
 * @property \App\Model\Table\MarchandisesTable $Marchandises
 */
class MarchandisesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $marchandises = $this->paginate($this->Marchandises);

        $this->set(compact('marchandises'));
        $this->set('_serialize', ['marchandises']);
    }

    /**
     * View method
     *
     * @param string|null $id Marchandise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marchandise = $this->Marchandises->get($id, [
            'contain' => ['Categories', 'BonLivraisons', 'Factures']
        ]);

        $this->set('marchandise', $marchandise);
        $this->set('_serialize', ['marchandise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marchandise = $this->Marchandises->newEntity();
        if ($this->request->is('post')) {
            $marchandise = $this->Marchandises->patchEntity($marchandise, $this->request->data);
            if ($this->Marchandises->save($marchandise)) {
                $this->Flash->success(__('The marchandise has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marchandise could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Marchandises->Categories->find('list', ['limit' => 200]);
        $this->set(compact('marchandise', 'categories'));
        $this->set('_serialize', ['marchandise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Marchandise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marchandise = $this->Marchandises->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marchandise = $this->Marchandises->patchEntity($marchandise, $this->request->data);
            if ($this->Marchandises->save($marchandise)) {
                $this->Flash->success(__('The marchandise has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marchandise could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Marchandises->Categories->find('list', ['limit' => 200]);
        $this->set(compact('marchandise', 'categories'));
        $this->set('_serialize', ['marchandise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Marchandise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marchandise = $this->Marchandises->get($id);
        if ($this->Marchandises->delete($marchandise)) {
            $this->Flash->success(__('The marchandise has been deleted.'));
        } else {
            $this->Flash->error(__('The marchandise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
