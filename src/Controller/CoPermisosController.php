<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoPermisos Controller
 *
 * @property \App\Model\Table\CoPermisosTable $CoPermisos
 * @method \App\Model\Entity\CoPermiso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoPermisosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $coPermisos = $this->paginate($this->CoPermisos);

        $this->set(compact('coPermisos'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Permiso id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coPermiso = $this->CoPermisos->get($id, [
            'contain' => ['CoGrupos'],
        ]);

        $this->set(compact('coPermiso'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coPermiso = $this->CoPermisos->newEmptyEntity();
        if ($this->request->is('post')) {
            $coPermiso = $this->CoPermisos->patchEntity($coPermiso, $this->request->getData());
            if ($this->CoPermisos->save($coPermiso)) {
                $this->Flash->success(__('The co permiso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co permiso could not be saved. Please, try again.'));
        }
        $coGrupos = $this->CoPermisos->CoGrupos->find('list', ['limit' => 200]);
        $this->set(compact('coPermiso', 'coGrupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Permiso id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coPermiso = $this->CoPermisos->get($id, [
            'contain' => ['CoGrupos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coPermiso = $this->CoPermisos->patchEntity($coPermiso, $this->request->getData());
            if ($this->CoPermisos->save($coPermiso)) {
                $this->Flash->success(__('The co permiso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co permiso could not be saved. Please, try again.'));
        }
        $coGrupos = $this->CoPermisos->CoGrupos->find('list', ['limit' => 200]);
        $this->set(compact('coPermiso', 'coGrupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Permiso id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coPermiso = $this->CoPermisos->get($id);
        if ($this->CoPermisos->delete($coPermiso)) {
            $this->Flash->success(__('The co permiso has been deleted.'));
        } else {
            $this->Flash->error(__('The co permiso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
