<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoUsuarios Controller
 *
 * @property \App\Model\Table\CoUsuariosTable $CoUsuarios
 * @method \App\Model\Entity\CoUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoUsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CoGrupos'],
        ];
        $coUsuarios = $this->paginate($this->CoUsuarios);

        $this->set(compact('coUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coUsuario = $this->CoUsuarios->get($id, [
            'contain' => ['CoGrupos'],
        ]);

        $this->set(compact('coUsuario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coUsuario = $this->CoUsuarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $coUsuario = $this->CoUsuarios->patchEntity($coUsuario, $this->request->getData());
            if ($this->CoUsuarios->save($coUsuario)) {
                $this->Flash->success(__('The co usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co usuario could not be saved. Please, try again.'));
        }
        $coGrupos = $this->CoUsuarios->CoGrupos->find('list', ['limit' => 200]);
        $this->set(compact('coUsuario', 'coGrupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coUsuario = $this->CoUsuarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coUsuario = $this->CoUsuarios->patchEntity($coUsuario, $this->request->getData());
            if ($this->CoUsuarios->save($coUsuario)) {
                $this->Flash->success(__('The co usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co usuario could not be saved. Please, try again.'));
        }
        $coGrupos = $this->CoUsuarios->CoGrupos->find('list', ['limit' => 200]);
        $this->set(compact('coUsuario', 'coGrupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coUsuario = $this->CoUsuarios->get($id);
        if ($this->CoUsuarios->delete($coUsuario)) {
            $this->Flash->success(__('The co usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The co usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $user['co_grupo'] = $this->CoUsuarios->CoGrupos->get($user['co_grupo_id']);
                $this->Auth->setUser($user);
                if ($this->request->getSession()->read('Auth.User.activo') == 1) {
                    return $this->redirect(
                        ['controller' => 'CatLicitaciones', 'action' => 'index']);
                }
            }
            $this->Flash->error('Nombre de usuario o contraseña incorrectas.');
        }
        $this->viewBuilder()->setLayout('login');
    }

    public function logout()
    {
        $this->request->getSession()->destroy();
        return $this->redirect($this->Auth->logout());
    }
}
