<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RestockingOrders Controller
 *
 * @property \App\Model\Table\RestockingOrdersTable $RestockingOrders
 * @method \App\Model\Entity\RestockingOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RestockingOrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $restockingOrders = $this->RestockingOrders->find()->contain(['Suppliers']);

        $this->set(compact('restockingOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Restocking Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $restockingOrder = $this->RestockingOrders->get($id, [
            'contain' => ['Suppliers'],
        ]);

        $this->set(compact('restockingOrder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $restockingOrder = $this->RestockingOrders->newEmptyEntity();
        if ($this->request->is('post')) {
            $restockingOrder = $this->RestockingOrders->patchEntity($restockingOrder, $this->request->getData());
            if ($this->RestockingOrders->save($restockingOrder)) {
                $this->Flash->success(__('The restocking order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restocking order could not be saved. Please, try again.'));
        }
        $suppliers = $this->RestockingOrders->Suppliers->find('list', ['limit' => 200])->all();
        $this->set(compact('restockingOrder', 'suppliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Restocking Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $restockingOrder = $this->RestockingOrders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $restockingOrder = $this->RestockingOrders->patchEntity($restockingOrder, $this->request->getData());
            if ($this->RestockingOrders->save($restockingOrder)) {
                $this->Flash->success(__('The restocking order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restocking order could not be saved. Please, try again.'));
        }
        $suppliers = $this->RestockingOrders->Suppliers->find('list', ['limit' => 200])->all();
        $this->set(compact('restockingOrder', 'suppliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Restocking Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $restockingOrder = $this->RestockingOrders->get($id);
        if ($this->RestockingOrders->delete($restockingOrder)) {
            $this->Flash->success(__('The restocking order has been deleted.'));
        } else {
            $this->Flash->error(__('The restocking order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
