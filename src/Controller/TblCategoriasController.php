<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TblCategorias Controller
 *
 * @property \App\Model\Table\TblCategoriasTable $TblCategorias
 */
class TblCategoriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tblCategorias = $this->paginate($this->TblCategorias);

        $this->set(compact('tblCategorias'));
        $this->set('_serialize', ['tblCategorias']);
    }

    /**
     * View method
     *
     * @param string|null $id Tbl Categoria id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tblCategoria = $this->TblCategorias->get($id, [
            'contain' => ['TblOfertas']
        ]);

        $this->set('tblCategoria', $tblCategoria);
        $this->set('_serialize', ['tblCategoria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tblCategoria = $this->TblCategorias->newEntity();
        if ($this->request->is('post')) {
            $tblCategoria = $this->TblCategorias->patchEntity($tblCategoria, $this->request->data);
            if ($this->TblCategorias->save($tblCategoria)) {
                $this->Flash->success(__('The tbl categoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tblCategoria'));
        $this->set('_serialize', ['tblCategoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tbl Categoria id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tblCategoria = $this->TblCategorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tblCategoria = $this->TblCategorias->patchEntity($tblCategoria, $this->request->data);
            if ($this->TblCategorias->save($tblCategoria)) {
                $this->Flash->success(__('The tbl categoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tblCategoria'));
        $this->set('_serialize', ['tblCategoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tbl Categoria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tblCategoria = $this->TblCategorias->get($id);
        if ($this->TblCategorias->delete($tblCategoria)) {
            $this->Flash->success(__('The tbl categoria has been deleted.'));
        } else {
            $this->Flash->error(__('The tbl categoria could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
