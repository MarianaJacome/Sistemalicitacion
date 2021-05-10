<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CatMunicipios Controller
 *
 * @property \App\Model\Table\CatMunicipiosTable $CatMunicipios
 * @method \App\Model\Entity\CatMunicipio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatMunicipiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CatEstados'],
        ];
        $catMunicipios = $this->paginate($this->CatMunicipios);

        $this->set(compact('catMunicipios'));
    }

    /**
     * View method
     *
     * @param string|null $id Cat Municipio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catMunicipio = $this->CatMunicipios->get($id, [
            'contain' => ['CatEstados', 'CatLicitaciones'],
        ]);

        $this->set(compact('catMunicipio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catMunicipio = $this->CatMunicipios->newEmptyEntity();
        if ($this->request->is('post')) {
            $catMunicipio = $this->CatMunicipios->patchEntity($catMunicipio, $this->request->getData());
            if ($this->CatMunicipios->save($catMunicipio)) {
                $this->Flash->success(__('The cat municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cat municipio could not be saved. Please, try again.'));
        }
        $catEstados = $this->CatMunicipios->CatEstados->find('list', ['limit' => 200]);
        $this->set(compact('catMunicipio', 'catEstados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cat Municipio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catMunicipio = $this->CatMunicipios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catMunicipio = $this->CatMunicipios->patchEntity($catMunicipio, $this->request->getData());
            if ($this->CatMunicipios->save($catMunicipio)) {
                $this->Flash->success(__('The cat municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cat municipio could not be saved. Please, try again.'));
        }
        $catEstados = $this->CatMunicipios->CatEstados->find('list', ['limit' => 200]);
        $this->set(compact('catMunicipio', 'catEstados'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cat Municipio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catMunicipio = $this->CatMunicipios->get($id);
        if ($this->CatMunicipios->delete($catMunicipio)) {
            $this->Flash->success(__('The cat municipio has been deleted.'));
        } else {
            $this->Flash->error(__('The cat municipio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
