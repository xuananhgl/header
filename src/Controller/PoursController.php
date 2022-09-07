<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class PoursController extends AppController
        {   public function add(){
            $pour = $this->Pours->newEntity($this->request->getData());
            if ($this->request->is('post')) 
            {
                $translations = [
                    'fr' => ['about' => $this->request->getData('_translations.en_US.about')],
                    'es' => ['about' => $this->request->getData('_translations.es.about')], 
                    'vi' => ['about' => $this->request->getData('_translations.vn.about')]
                ];
                
                
                foreach ($translations as $lang => $data) {
                    $pre->translation($lang)->set($data, ['guard' => false]);
                } 
             
            $pour->user_id = $this->Auth->user('id');
            
            if ($this->Pours->save($pour)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
            }
            $this->set('pour', $pour);




        }
        public function index()
        {
            $this->loadComponent('Paginator');
            $pours = $this->Paginator->paginate($this->Pours->find());
            $this->set(compact('pours'));
        }
    public function delete($id)
    {
    $this->request->allowMethod(['post', 'delete']);

    $pour = $this->Pours->get($id);
    if ($this->Pours->delete($pour)) {
        $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
    }
public function view($id= null)
        {
        $pour = $this->Pours->get($id);
            
        $this->set('pour', $pour);
        }

        public function edit($id = null)
        {
            // $this->Pours->setLocale('vi');           
            $pour = $this->Pours->get($id);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $pre = $this->Pours->patchEntity($pour, $this->request->getData());
                if ($this->Pours->save($pour)) {
                    $this->Flash->success(__('The user has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('pour'));
        }
public function isAuthorized($user)
{
    $action = $this->request->getParam('action');
    // The add and tags actions are always allowed to logged in users.
    if (in_array($action, ['add', 'tags', 'delete'])) {
        return true;
    }

    // All other actions require a slug.
    $id = $this->request->getParam('pass.0');
    if (!$id) {
        return false;
    }

    // Check that the article belongs to the current user.
    $pour = $this->Pours->get($id)->first();

    return $pre->user_id === $user['id'];
}

    }