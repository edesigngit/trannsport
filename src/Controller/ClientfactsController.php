<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientfacts Controller
 *
 * @property \App\Model\Table\ClientfactsTable $Clientfacts
 */
class ClientfactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $clientfacts = $this->paginate($this->Clientfacts);

        $this->set(compact('clientfacts'));
        $this->set('_serialize', ['clientfacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Clientfact id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientfact = $this->Clientfacts->get($id, [
            'contain' => ['Clients', 'Factures']
        ]);

        $this->set('clientfact', $clientfact);
        $this->set('_serialize', ['clientfact']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientfact = $this->Clientfacts->newEntity();
        if ($this->request->is('post')) {
            $clientfact = $this->Clientfacts->patchEntity($clientfact, $this->request->data);
            if ($this->Clientfacts->save($clientfact)) {
                $this->Flash->success(__('The clientfact has been saved.'));
                return $this->redirect(['controller'=>'Factures','action' => 'add']);
            } else {
                $this->Flash->error(__('The clientfact could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Clientfacts->Clients->find('list', ['limit' => 200]);
		    $clientf = $this->Clientfacts->find()->select('clfact')->order(['modified'=>'desc'])->limit(1);
        $this->set(compact('clientfact', 'clients', 'clientf'));
        $this->set('_serialize', ['clientfact','clientf']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientfact id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientfact = $this->Clientfacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientfact = $this->Clientfacts->patchEntity($clientfact, $this->request->data);
            if ($this->Clientfacts->save($clientfact)) {
                $this->Flash->success(__('The clientfact has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clientfact could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Clientfacts->Clients->find('list', ['limit' => 200]);
        $this->set(compact('clientfact', 'clients'));
        $this->set('_serialize', ['clientfact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientfact id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientfact = $this->Clientfacts->get($id);
        if ($this->Clientfacts->delete($clientfact)) {
            $this->Flash->success(__('The clientfact has been deleted.'));
        } else {
            $this->Flash->error(__('The clientfact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
