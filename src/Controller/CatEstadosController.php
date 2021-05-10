<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CatEstados Controller
 *
 * @property \App\Model\Table\CatEstadosTable $CatEstados
 * @method \App\Model\Entity\CatEstado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatEstadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $catEstados = $this->paginate($this->CatEstados);

        $this->set(compact('catEstados'));
    }

    /**
     * View method
     *
     * @param string|null $id Cat Estado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catEstado = $this->CatEstados->get($id, [
            'contain' => ['CatMunicipios'],
        ]);

        $this->set(compact('catEstado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catEstado = $this->CatEstados->newEmptyEntity();
        if ($this->request->is('post')) {
            $catEstado = $this->CatEstados->patchEntity($catEstado, $this->request->getData());
            if ($this->CatEstados->save($catEstado)) {
                $this->Flash->success(__('The cat estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cat estado could not be saved. Please, try again.'));
        }
        $this->set(compact('catEstado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cat Estado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catEstado = $this->CatEstados->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catEstado = $this->CatEstados->patchEntity($catEstado, $this->request->getData());
            if ($this->CatEstados->save($catEstado)) {
                $this->Flash->success(__('The cat estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cat estado could not be saved. Please, try again.'));
        }
        $this->set(compact('catEstado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cat Estado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catEstado = $this->CatEstados->get($id);
        if ($this->CatEstados->delete($catEstado)) {
            $this->Flash->success(__('The cat estado has been deleted.'));
        } else {
            $this->Flash->error(__('The cat estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
