<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoGrupos Controller
 *
 * @property \App\Model\Table\CoGruposTable $CoGrupos
 * @method \App\Model\Entity\CoGrupo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoGruposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $coGrupos = $this->paginate($this->CoGrupos);

        $this->set(compact('coGrupos'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Grupo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coGrupo = $this->CoGrupos->get($id, [
            'contain' => ['CoMenus', 'CoPermisos', 'CoUsuarios'],
        ]);

        $this->set(compact('coGrupo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coGrupo = $this->CoGrupos->newEmptyEntity();
        if ($this->request->is('post')) {
            $coGrupo = $this->CoGrupos->patchEntity($coGrupo, $this->request->getData());
            if ($this->CoGrupos->save($coGrupo)) {
                $this->Flash->success(__('The co grupo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co grupo could not be saved. Please, try again.'));
        }
        $coMenus = $this->CoGrupos->CoMenus->find('list', ['limit' => 200]);
        $coPermisos = $this->CoGrupos->CoPermisos->find('list', ['limit' => 200]);
        $this->set(compact('coGrupo', 'coMenus', 'coPermisos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Grupo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coGrupo = $this->CoGrupos->get($id, [
            'contain' => ['CoMenus', 'CoPermisos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coGrupo = $this->CoGrupos->patchEntity($coGrupo, $this->request->getData());
            if ($this->CoGrupos->save($coGrupo)) {
                $this->Flash->success(__('The co grupo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co grupo could not be saved. Please, try again.'));
        }
        $coMenus = $this->CoGrupos->CoMenus->find('list', ['limit' => 200]);
        $coPermisos = $this->CoGrupos->CoPermisos->find('list', ['limit' => 200]);
        $this->set(compact('coGrupo', 'coMenus', 'coPermisos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Grupo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coGrupo = $this->CoGrupos->get($id);
        if ($this->CoGrupos->delete($coGrupo)) {
            $this->Flash->success(__('The co grupo has been deleted.'));
        } else {
            $this->Flash->error(__('The co grupo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
