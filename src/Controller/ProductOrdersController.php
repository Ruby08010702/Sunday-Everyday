<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductOrders Controller
 *
 * @property \App\Model\Table\ProductOrdersTable $ProductOrders
 * @method \App\Model\Entity\ProductOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductOrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Orders'],
        ];
        $productOrders = $this->paginate($this->ProductOrders);

        $this->set(compact('productOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productOrder = $this->ProductOrders->get($id, [
            'contain' => ['Products', 'Orders'],
        ]);

        $this->set(compact('productOrder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productOrder = $this->ProductOrders->newEmptyEntity();
        if ($this->request->is('post')) {
            $productOrder = $this->ProductOrders->patchEntity($productOrder, $this->request->getData());
            if ($this->ProductOrders->save($productOrder)) {
                $this->Flash->success(__('The product order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product order could not be saved. Please, try again.'));
        }
        $products = $this->ProductOrders->Products->find('list', ['limit' => 200])->all();
        $orders = $this->ProductOrders->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('productOrder', 'products', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productOrder = $this->ProductOrders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productOrder = $this->ProductOrders->patchEntity($productOrder, $this->request->getData());
            if ($this->ProductOrders->save($productOrder)) {
                $this->Flash->success(__('The product order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product order could not be saved. Please, try again.'));
        }
        $products = $this->ProductOrders->Products->find('list', ['limit' => 200])->all();
        $orders = $this->ProductOrders->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('productOrder', 'products', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productOrder = $this->ProductOrders->get($id);
        if ($this->ProductOrders->delete($productOrder)) {
            $this->Flash->success(__('The product order has been deleted.'));
        } else {
            $this->Flash->error(__('The product order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
