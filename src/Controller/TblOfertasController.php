<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TblOfertas Controller
 *
 * @property \App\Model\Table\TblOfertasTable $TblOfertas
 */
class TblOfertasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TblCategorias']
        ];
        $tblOfertas = $this->paginate($this->TblOfertas);

        $this->set(compact('tblOfertas'));
        $this->set('_serialize', ['tblOfertas']);
    }


    public function IndexLandPAge()
    {
        $this->loadModel('TblCategorias');
        //$tblCategorias=$this->paginate($this->TblCategorias);

        $this->paginate = [
            'contain' => ['TblCategorias']
        ];
        $tblOfertas = $this->paginate($this->TblOfertas);

        $this->set(compact('tblCategorias'));
        $this->set(compact('tblOfertas'));
        $this->set('_serialize', ['tblOfertas']);
    }
                  

    /**
     * View method
     *
     * @param string|null $id Tbl Oferta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tblOferta = $this->TblOfertas->get($id, [
            'contain' => ['TblCategorias', 'TblSucursales', 'TblImageofertas']
        ]);

        $this->set('tblOferta', $tblOferta);
        $this->set('_serialize', ['tblOferta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tblOferta = $this->TblOfertas->newEntity();
        if ($this->request->is('post')) {
            $tblOferta = $this->TblOfertas->patchEntity($tblOferta, $this->request->data);
            if ($this->TblOfertas->save($tblOferta)) {
                $this->Flash->success(__('The tbl oferta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl oferta could not be saved. Please, try again.'));
            }
        }
        $tblCategorias = $this->TblOfertas->TblCategorias->find('list', ['limit' => 200]);
        $tblSucursales = $this->TblOfertas->TblSucursales->find('list', ['limit' => 200]);
        $this->set(compact('tblOferta', 'tblCategorias', 'tblSucursales'));
        $this->set('_serialize', ['tblOferta']);
    }

    public function addOfertaConImagenes(){
        //cargamos el modelo de las imagenes que pertenecen a una oferta
        $this->loadModel('TblImageofertas');

        $tblOferta = $this->TblOfertas->newEntity();
        if ($this->request->is('post')) {
            $tblOferta = $this->TblOfertas->patchEntity($tblOferta, $this->request->data);
            //guardamos la oferta, (solo datos de la oferta)
                $result = $this->TblOfertas->save($tblOferta);
                //preguntamos si se pudo gurdar la oferta
                if ($result) {
                    //recorremos los 4 input de images para insertarlos en la bd
                    for ($i=0; $i < 4; $i++) {
                        //preguntamos si es la primera ves que se carga la pagina (todo vacio) 
                        if ($this->request->data != null) {
                            //preguntamos por los input que no subieron imagen (input vacios)
                            if ($this->request->data[$i]['dir']['type'] != null) {
                                //creamos el nuevo objeto
                                $images=$this->TblImageofertas->newEntity();
                                //pegamos lo traido del request en el nuevo modelo
                                $images=$this->TblImageofertas->patchEntity($images,$this->request->data[$i]);
                                //metemos el id de la oferta insertada y la descripcion de la imagen
                                $images['tbl_oferta_id']=$result['id'];
                                $images['descripcion_imagen']=$this->request->data[$i]['dir']['name'];
                                //guardamos cada uno de los objetos traidos
                                if ($this->TblImageofertas->save($images)) {
                                    $this->Flash->success(__('Se guardo la imagen de la oferta'));
                                } else {
                                    $this->Flash->error(__('No se pudo guardar una de las imagenes, por favor verifique.'));
                                }
                            }                 
                        }
                    } 
                } else {
                    $this->Flash->error(__('No se pudo guardar la oferta, por favor intente de nuevo y contacte al Administrador'));
                }
        }
        $tblCategorias = $this->TblOfertas->TblCategorias->find('list', ['limit' => 200]);
        $tblSucursales = $this->TblOfertas->TblSucursales->find('list', ['limit' => 200]);
        $this->set(compact('tblOferta', 'tblCategorias', 'tblSucursales'));
        $this->set('_serialize', ['tblOferta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tbl Oferta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tblOferta = $this->TblOfertas->get($id, [
            'contain' => ['TblSucursales']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tblOferta = $this->TblOfertas->patchEntity($tblOferta, $this->request->data);
            if ($this->TblOfertas->save($tblOferta)) {
                $this->Flash->success(__('The tbl oferta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tbl oferta could not be saved. Please, try again.'));
            }
        }
        $tblCategorias = $this->TblOfertas->TblCategorias->find('list', ['limit' => 200]);
        $tblSucursales = $this->TblOfertas->TblSucursales->find('list', ['limit' => 200]);
        $this->set(compact('tblOferta', 'tblCategorias', 'tblSucursales'));
        $this->set('_serialize', ['tblOferta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tbl Oferta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tblOferta = $this->TblOfertas->get($id);
        if ($this->TblOfertas->delete($tblOferta)) {
            $this->Flash->success(__('The tbl oferta has been deleted.'));
        } else {
            $this->Flash->error(__('The tbl oferta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
