<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TblImageofertas Controller
 *
 * @property \App\Model\Table\TblImageofertasTable $TblImageofertas
 */
class TblImageofertasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TblOfertas']
        ];
        $tblImageofertas = $this->paginate($this->TblImageofertas);

        $this->set(compact('tblImageofertas'));
        $this->set('_serialize', ['tblImageofertas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tbl Imageoferta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tblImageoferta = $this->TblImageofertas->get($id, [
            'contain' => ['TblOfertas']
        ]);

        $this->set('tblImageoferta', $tblImageoferta);
        $this->set('_serialize', ['tblImageoferta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tblImageoferta = $this->TblImageofertas->newEntity();
        debug($tblImageoferta);
        if ($this->request->is('post')) {
            debug($this->request->data);
            $tblImageoferta = $this->TblImageofertas->patchEntity($tblImageoferta, $this->request->data);
            debug($tblImageoferta);
          /*  if ($this->TblImageofertas->save($tblImageoferta)) {
                $this->Flash->success(__('The tbl imageoferta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl imageoferta could not be saved. Please, try again.'));
            }*/
        }
        $tblOfertas = $this->TblImageofertas->TblOfertas->find('list', ['limit' => 200]);
        $this->set(compact('tblImageoferta', 'tblOfertas'));
        $this->set('_serialize', ['tblImageoferta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tbl Imageoferta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tblImageoferta = $this->TblImageofertas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tblImageoferta = $this->TblImageofertas->patchEntity($tblImageoferta, $this->request->data);
            if ($this->TblImageofertas->save($tblImageoferta)) {
                $this->Flash->success(__('The tbl imageoferta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl imageoferta could not be saved. Please, try again.'));
            }
        }
        $tblOfertas = $this->TblImageofertas->TblOfertas->find('list', ['limit' => 200]);
        $this->set(compact('tblImageoferta', 'tblOfertas'));
        $this->set('_serialize', ['tblImageoferta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tbl Imageoferta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tblImageoferta = $this->TblImageofertas->get($id);
        if ($this->TblImageofertas->delete($tblImageoferta)) {
            $this->Flash->success(__('The tbl imageoferta has been deleted.'));
        } else {
            $this->Flash->error(__('The tbl imageoferta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
