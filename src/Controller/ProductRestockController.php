<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductRestock Controller
 *
 * @property \App\Model\Table\ProductRestockTable $ProductRestock
 * @method \App\Model\Entity\ProductRestock[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductRestockController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'RestockingOrders'],
        ];
        $productRestock = $this->paginate($this->ProductRestock);

        $this->set(compact('productRestock'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Restock id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productRestock = $this->ProductRestock->get($id, [
            'contain' => ['Products', 'RestockingOrders'],
        ]);

        $this->set(compact('productRestock'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productRestock = $this->ProductRestock->newEmptyEntity();
        if ($this->request->is('post')) {
            $productRestock = $this->ProductRestock->patchEntity($productRestock, $this->request->getData());
            if ($this->ProductRestock->save($productRestock)) {
                $this->Flash->success(__('The product restock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product restock could not be saved. Please, try again.'));
        }
        $products = $this->ProductRestock->Products->find('list', ['limit' => 200])->all();
        $restockingOrders = $this->ProductRestock->RestockingOrders->find('list', ['limit' => 200])->all();
        $this->set(compact('productRestock', 'products', 'restockingOrders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Restock id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productRestock = $this->ProductRestock->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productRestock = $this->ProductRestock->patchEntity($productRestock, $this->request->getData());
            if ($this->ProductRestock->save($productRestock)) {
                $this->Flash->success(__('The product restock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product restock could not be saved. Please, try again.'));
        }
        $products = $this->ProductRestock->Products->find('list', ['limit' => 200])->all();
        $restockingOrders = $this->ProductRestock->RestockingOrders->find('list', ['limit' => 200])->all();
        $this->set(compact('productRestock', 'products', 'restockingOrders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Restock id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productRestock = $this->ProductRestock->get($id);
        if ($this->ProductRestock->delete($productRestock)) {
            $this->Flash->success(__('The product restock has been deleted.'));
        } else {
            $this->Flash->error(__('The product restock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
