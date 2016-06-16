<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TblSucursales Controller
 *
 * @property \App\Model\Table\TblSucursalesTable $TblSucursales
 */
class TblSucursalesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
         $this->paginate = [
            'contain' => ['TblEmpresas']
        ];
        $tblSucursales = $this->paginate($this->TblSucursales);

        $this->set(compact('tblSucursales'));
        $this->set('_serialize', ['tblSucursales']);
    }

    /**
     * View method
     *
     * @param string|null $id Tbl Sucursale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tblSucursale = $this->TblSucursales->get($id, [
            'contain' => ['TblEmpresas', 'TblOfertas']
        ]);

        $this->set('tblSucursale', $tblSucursale);
        $this->set('_serialize', ['tblSucursale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tblSucursale = $this->TblSucursales->newEntity();
        if ($this->request->is('post')) {
            $tblSucursale = $this->TblSucursales->patchEntity($tblSucursale, $this->request->data);
            if ($this->TblSucursales->save($tblSucursale)) {
                $this->Flash->success(__('The tbl sucursale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl sucursale could not be saved. Please, try again.'));
            }
        }
        $tblEmpresas = $this->TblSucursales->TblEmpresas->find('list', ['limit' => 200]);
        $tblOfertas = $this->TblSucursales->TblOfertas->find('list', ['limit' => 200]);
        $this->set(compact('tblSucursale', 'tblEmpresas', 'tblOfertas'));
        $this->set('_serialize', ['tblSucursale']);
    }

    /**
     * Add method for an tbl_empresa
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function addWithEmpresa($ide=null)
    {
        $tblSucursale = $this->TblSucursales->newEntity();
        if ($this->request->is('post')) {
            $tblSucursale = $this->TblSucursales->patchEntity($tblSucursale, $this->request->data);
            if ($this->TblSucursales->save($tblSucursale)) {
                $this->Flash->success(__('The tbl sucursale has been saved.'));
                return $this->redirect(['controller' => 'TblEmpresas', 'action' => 'view',$ide]);
            } else {
                $this->Flash->error(__('The tbl sucursale could not be saved. Please, try again.'));
            }
        }

        $this->set(['ide'=>$ide]);
        $this->set(compact('tblSucursale'));
        $this->set('_serialize', ['tblSucursale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tbl Sucursale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tblSucursale = $this->TblSucursales->get($id, [
            'contain' => ['TblOfertas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tblSucursale = $this->TblSucursales->patchEntity($tblSucursale, $this->request->data);
            if ($this->TblSucursales->save($tblSucursale)) {
                $this->Flash->success(__('La Sucursal ha sido modificada'));
                return $this->redirect(['controller'=>'TblEmpresas','action' => 'view',$tblSucursale->tbl_empresa_id]);
            } else {
                $this->Flash->error(__('The tbl sucursale could not be saved. Please, try again.'));
            }
        }
        //$tblEmpresas = $this->TblSucursales->TblEmpresas->find('list', ['limit' => 200]);
        //$tblOfertas = $this->TblSucursales->TblOfertas->find('list', ['limit' => 200]);
        $this->set(compact('tblSucursale', 'tblEmpresas', 'tblOfertas'));
        $this->set('_serialize', ['tblSucursale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tbl Sucursale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tblSucursale = $this->TblSucursales->get($id);
        if ($this->TblSucursales->delete($tblSucursale)) {
            $this->Flash->success(__('The tbl sucursale has been deleted.'));
        } else {
            $this->Flash->error(__('The tbl sucursale could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
