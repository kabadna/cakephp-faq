<?php
declare(strict_types=1);

namespace Faq\Controller\Admin;

use Faq\Controller\AppController;

/**
 * FaqCategories Controller
 *
 * @property \Faq\Model\Table\FaqCategoriesTable $FaqCategories
 * @method \Faq\Model\Entity\FaqCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FaqCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $faqCategories = $this->paginate($this->FaqCategories);

        $this->set(compact('faqCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Faq Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $faqCategory = $this->FaqCategories->get($id, [
            'contain' => ['Faqs'],
        ]);

        $this->set(compact('faqCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $faqCategory = $this->FaqCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $faqCategory = $this->FaqCategories->patchEntity($faqCategory, $this->request->getData());
            if ($this->FaqCategories->save($faqCategory)) {
                $this->Flash->success(__('The faq category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faq category could not be saved. Please, try again.'));
        }
        $this->set(compact('faqCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Faq Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $faqCategory = $this->FaqCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $faqCategory = $this->FaqCategories->patchEntity($faqCategory, $this->request->getData());
            if ($this->FaqCategories->save($faqCategory)) {
                $this->Flash->success(__('The faq category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faq category could not be saved. Please, try again.'));
        }
        $this->set(compact('faqCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Faq Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $faqCategory = $this->FaqCategories->get($id);
        if ($this->FaqCategories->delete($faqCategory)) {
            $this->Flash->success(__('The faq category has been deleted.'));
        } else {
            $this->Flash->error(__('The faq category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
