<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoMenus Controller
 *
 * @property \App\Model\Table\CoMenusTable $CoMenus
 * @method \App\Model\Entity\CoMenu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoMenusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $coMenus = $this->paginate($this->CoMenus);

        $this->set(compact('coMenus'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Menu id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coMenu = $this->CoMenus->get($id, [
            'contain' => ['CoGrupos', 'CoMenus'],
        ]);

        $this->set(compact('coMenu'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coMenu = $this->CoMenus->newEmptyEntity();
        if ($this->request->is('post')) {
            $coMenu = $this->CoMenus->patchEntity($coMenu, $this->request->getData());
            if ($this->CoMenus->save($coMenu)) {
                $this->Flash->success(__('The co menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co menu could not be saved. Please, try again.'));
        }
        $coGrupos = $this->CoMenus->CoGrupos->find('list', ['limit' => 200]);
        $this->set(compact('coMenu', 'coGrupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Menu id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coMenu = $this->CoMenus->get($id, [
            'contain' => ['CoGrupos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coMenu = $this->CoMenus->patchEntity($coMenu, $this->request->getData());
            if ($this->CoMenus->save($coMenu)) {
                $this->Flash->success(__('The co menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co menu could not be saved. Please, try again.'));
        }
        $coGrupos = $this->CoMenus->CoGrupos->find('list', ['limit' => 200]);
        $this->set(compact('coMenu', 'coGrupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Menu id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coMenu = $this->CoMenus->get($id);
        if ($this->CoMenus->delete($coMenu)) {
            $this->Flash->success(__('The co menu has been deleted.'));
        } else {
            $this->Flash->error(__('The co menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
