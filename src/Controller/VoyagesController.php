<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Voyages Controller
 *
 * @property \App\Model\Table\VoyagesTable $Voyages
 */
class VoyagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $voyages = $this->paginate($this->Voyages);

        $this->set(compact('voyages'));
        $this->set('_serialize', ['voyages']);
    }

    /**
     * View method
     *
     * @param string|null $id Voyage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voyage = $this->Voyages->get($id, [
            'contain' => []
        ]);
        $this->set('voyage', $voyage);
        $this->set('_serialize', ['voyage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $voyage = $this->Voyages->newEntity();
        if ($this->request->is('post')) {
            $voyage = $this->Voyages->patchEntity($voyage, $this->request->data);
            if ($this->Voyages->save($voyage)) {
                $this->Flash->success(__('The voyage has been saved.'));
                return $this->redirect(['controller' => 'Clientfacts','action' => 'add']);
            } else {
                $this->Flash->error(__('The voyage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('voyage'));
        $this->set('_serialize', ['voyage']);
		$voyages = $this->paginate($this->Voyages);
		$voyagese = $this->Voyages->find()->select('num')->order(['modified'=>'desc'])->limit(1);
        $this->set(compact('voyages','voyagese'));
        $this->set('_serialize', ['voyages','voyagese']);	
    }

    /**
     * Edit method
     *
     * @param string|null $id Voyage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voyage = $this->Voyages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voyage = $this->Voyages->patchEntity($voyage, $this->request->data);
            if ($this->Voyages->save($voyage)) {
                $this->Flash->success(__('The voyage has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The voyage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('voyage'));
        $this->set('_serialize', ['voyage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Voyage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voyage = $this->Voyages->get($id);
        if ($this->Voyages->delete($voyage)) {
            $this->Flash->success(__('The voyage has been deleted.'));
        } else {
            $this->Flash->error(__('The voyage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
