<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BonLivraisons Controller
 *
 * @property \App\Model\Table\BonLivraisonsTable $BonLivraisons
 */
class BonLivraisonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Marchandises', 'Voyages', 'Categories']
        ];
        $bonLivraisons = $this->paginate($this->BonLivraisons);

        $this->set(compact('bonLivraisons'));
        $this->set('_serialize', ['bonLivraisons']);
    }

    /**
     * View method
     *
     * @param string|null $id Bon Livraison id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bonLivraison = $this->BonLivraisons->get($id, [
            'contain' => ['Clients', 'Marchandises', 'Voyages', 'Categories']
        ]);

        $this->set('bonLivraison', $bonLivraison);
        $this->set('_serialize', ['bonLivraison']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bonLivraison = $this->BonLivraisons->newEntity();
        if ($this->request->is('post')) {
            $bonLivraison = $this->BonLivraisons->patchEntity($bonLivraison, $this->request->data);
            if ($this->BonLivraisons->save($bonLivraison)) {
                $this->Flash->success(__('The bon livraison has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bon livraison could not be saved. Please, try again.'));
            }
        }
        $clients = $this->BonLivraisons->Clients->find('list', ['limit' => 200]);
        $marchandises = $this->BonLivraisons->Marchandises->find('list', ['limit' => 200]);
        $voyages = $this->BonLivraisons->Voyages->find('list', ['limit' => 200]);
        $categories = $this->BonLivraisons->Categories->find('list', ['limit' => 200]);
        $this->set(compact('bonLivraison', 'clients', 'marchandises', 'voyages', 'categories'));
        $this->set('_serialize', ['bonLivraison']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bon Livraison id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bonLivraison = $this->BonLivraisons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bonLivraison = $this->BonLivraisons->patchEntity($bonLivraison, $this->request->data);
            if ($this->BonLivraisons->save($bonLivraison)) {
                $this->Flash->success(__('The bon livraison has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bon livraison could not be saved. Please, try again.'));
            }
        }
        $clients = $this->BonLivraisons->Clients->find('list', ['limit' => 200]);
        $marchandises = $this->BonLivraisons->Marchandises->find('list', ['limit' => 200]);
        $voyages = $this->BonLivraisons->Voyages->find('list', ['limit' => 200]);
        $categories = $this->BonLivraisons->Categories->find('list', ['limit' => 200]);
        $this->set(compact('bonLivraison', 'clients', 'marchandises', 'voyages', 'categories'));
        $this->set('_serialize', ['bonLivraison']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bon Livraison id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bonLivraison = $this->BonLivraisons->get($id);
        if ($this->BonLivraisons->delete($bonLivraison)) {
            $this->Flash->success(__('The bon livraison has been deleted.'));
        } else {
            $this->Flash->error(__('The bon livraison could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
