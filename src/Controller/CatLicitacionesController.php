<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CatLicitaciones Controller
 *
 * @property \App\Model\Table\CatLicitacionesTable $CatLicitaciones
 * @method \App\Model\Entity\CatLicitacione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatLicitacionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CatMunicipios'],
        ];
        $catLicitaciones = $this->paginate($this->CatLicitaciones);

        $this->set(compact('catLicitaciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Cat Licitacione id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catLicitacione = $this->CatLicitaciones->get($id, [
            'contain' => ['CatMunicipios'],
        ]);

        $this->set(compact('catLicitacione'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catLicitacione = $this->CatLicitaciones->newEmptyEntity();
        if ($this->request->is('post')) {
            $catLicitacione = $this->CatLicitaciones->patchEntity($catLicitacione, $this->request->getData());
            if ($this->CatLicitaciones->save($catLicitacione)) {
                $this->Flash->success(__('El registro fue guardado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'));
        }
        $catMunicipios = $this->CatLicitaciones->CatMunicipios->find('list', ['limit' => 200]);
        $this->set(compact('catLicitacione', 'catMunicipios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cat Licitacione id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catLicitacione = $this->CatLicitaciones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catLicitacione = $this->CatLicitaciones->patchEntity($catLicitacione, $this->request->getData());
            if ($this->CatLicitaciones->save($catLicitacione)) {
                $this->Flash->success(__('El registro fue actualizado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'));
        }
        $catMunicipios = $this->CatLicitaciones->CatMunicipios->find('list', ['limit' => 200]);
        $this->set(compact('catLicitacione', 'catMunicipios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cat Licitacione id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catLicitacione = $this->CatLicitaciones->get($id);
        if ($this->CatLicitaciones->delete($catLicitacione)) {
            $this->Flash->success(__('El registro fue eliminado.'));
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
