<?php
namespace App\Controller;
use App\Controller\AppController;
/**
 * Factures Controller
 *
 * @property \App\Model\Table\FacturesTable $Factures
 */
class FacturesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = ['contain' => ['Clientfacts', 'Categories', 'Voyages']];
        $factures = $this->paginate($this->Factures);
        $this->set(compact('factures'));
        $this->set('_serialize', ['factures']);
    }

    /**
     * View method
     *
     * @param string|null $id Facture id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      //===========EN TETE FACTURE ===========================
        $facture = $this->Factures->get($id, [
            'contain' => ['Clientfacts', 'Categories', 'Voyages','Clients']
        ]);
        $this->set('facture', $facture);
        $this->set('_serialize', ['facture']);
// ================CONTENUS FACTURE ==========================
		$factures= $this->Factures->find (all, ['contain' => ['Clientfacts', 'Categories', 'Voyages']
        ]);
        //$factures = $this->paginate(factures);
        $this->set(compact('factures'));
        $this->set('_serialize', ['factures']);
             }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $facture = $this->Factures->newEntity();
        if ($this->request->is('post')) {
            $facture = $this->Factures->patchEntity($facture, $this->request->data);
            if ($this->Factures->save($facture)) {
                $this->Flash->success(__('The facture has been saved.'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('The facture could not be saved. Please, try again.'));
            }
        }
        $clientfacts = $this->Factures->Clientfacts->find('list')->order(['modified'=>'Desc']) ->limit(1);
        $clientnums = $this->Factures->Clientfacts->find()->select('client_id')->order(['modified'=>'Desc'])->limit(1);
        $categories = $this->Factures->Categories->find('list', ['limit' => 200]);
        $voyages = $this->Factures->Voyages->find('list')->order(['modified'=>'Desc']) ->limit(1);
        $clientf = $this->Factures->Clientfacts->find()->select('clfact')->order(['modified'=>'desc'])->limit(1);
        $clientbl = $this->Factures->Clientfacts->find()->select('id')->order(['modified'=>'desc'])->limit(1);
        $fact = $this->Factures->find()->select('id')->order(['modified'=>'desc'])->limit(1);
        $this->set(compact('facture', 'clientfacts', 'categories', 'voyages','clientnums','clientf','fact', 'clientbl'));
        $this->set('_serialize', ['facture']);

		//======================Pour le vue ==========================================
		/*$this->paginate = [
            'contain' => ['Clientfacts', 'Categories', 'Voyages']
        ];*/
        $factures= $this->Factures->find(all, ['contain' => ['Clientfacts', 'Categories', 'Voyages']]);

        $this->set(compact('factures'));
        $this->set('_serialize', ['factures']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Facture id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $facture = $this->Factures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $facture = $this->Factures->patchEntity($facture, $this->request->data);
            if ($this->Factures->save($facture)) {
                $this->Flash->success(__('The facture has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The facture could not be saved. Please, try again.'));
            }
        }
        $clientfacts = $this->Factures->Clientfacts->find('list', ['limit' => 200]);
        $categories = $this->Factures->Categories->find('list', ['limit' => 200]);
        $voyages = $this->Factures->Voyages->find('list', ['limit' => 200]);
        $this->set(compact('facture', 'clientfacts', 'categories', 'voyages'));
        $this->set('_serialize', ['facture']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Facture id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $facture = $this->Factures->get($id);
        if ($this->Factures->delete($facture)) {
            $this->Flash->success(__('The facture has been deleted.'));
        } else {
            $this->Flash->error(__('The facture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
