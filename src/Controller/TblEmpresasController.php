<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TblEmpresas Controller
 *
 * @property \App\Model\Table\TblEmpresasTable $TblEmpresas
 */
class TblEmpresasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tblEmpresas = $this->paginate($this->TblEmpresas);

        $this->set(compact('tblEmpresas'));
        $this->set('_serialize', ['tblEmpresas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tbl Empresa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tblEmpresa = $this->TblEmpresas->get($id, [
            'contain' => ['TblSucursales']
        ]);

        $this->set('tblEmpresa', $tblEmpresa);
        $this->set('_serialize', ['tblEmpresa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tblEmpresa = $this->TblEmpresas->newEntity();
        if ($this->request->is('post')) {
            $tblEmpresa = $this->TblEmpresas->patchEntity($tblEmpresa, $this->request->data);
            if ($this->TblEmpresas->save($tblEmpresa)) {
                $this->Flash->success(__('La empresa se ha Añadido, por favor agrega Sucursales'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl empresa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tblEmpresa'));
        $this->set('_serialize', ['tblEmpresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tbl Empresa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tblEmpresa = $this->TblEmpresas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tblEmpresa = $this->TblEmpresas->patchEntity($tblEmpresa, $this->request->data);
            if ($this->TblEmpresas->save($tblEmpresa)) {
                $this->Flash->success(__('The tbl empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl empresa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tblEmpresa'));
        $this->set('_serialize', ['tblEmpresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tbl Empresa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tblEmpresa = $this->TblEmpresas->get($id);
        if ($this->TblEmpresas->delete($tblEmpresa)) {
            $this->Flash->success(__('The tbl empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The tbl empresa could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
