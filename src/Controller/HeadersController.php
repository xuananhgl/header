<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class HeadersController extends AppController
{   public function add()
        {
                $header = $this->Headers->newEntity($this->request->getData());
                if ($this->request->is('post')) 
                {
                    $translations = [
                        'fr' => ['about' => $this->request->getData('_translations.en_US.about')],
                        'es' => ['about' => $this->request->getData('_translations.es.about')], 
                        'vi' => ['about' => $this->request->getData('_translations.vn.about')], 

                        'fr' => ['title' => $this->request->getData('_translations.en_US.title')],
                        'es' => ['title' => $this->request->getData('_translations.es.title')], 
                        'vi' => ['title' => $this->request->getData('_translations.vn.title')]
                    ];
                    
                    
                    foreach ($translations as $lang => $data) {
                        $header->translation($lang)->set($data, ['guard' => false]);
                    }

              
                $header->user_id = $this->Auth->user('id');
                
                if ($this->Headers->save($header)) {
                    $this->Flash->success(__('Your article has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your article.'));
                }
                $this->set('header', $header);




        }

    
    
    public function index()
        {           
                    if($this->request->is('post')) {}
                    $locale = $this->request->getData('locale');
                
                
                    I18n::setLocale($locale);
                    $this->loadModel('Headers');
                    $headers= $this->Headers->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                    );
                    $this->set(compact('headers'));
                    
                    I18n::setLocale($locale);
                    $result = $this->loadModel('Pres');
                    $data=$result->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                    );
                    $this->set('datas',$data);
                    I18n::setLocale($locale);
                    $this->loadModel('Pours');
                    $pours= $this->Pours->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                    );
                    $this->set(compact('pours'));
            
        }
 
    public function list()
    
        {
                    $this->loadComponent('Paginator');
                    $headers = $this->Paginator->paginate($this->Headers->find());
                    $this->set(compact('headers'));
        }
    public function view($id= null)
        {
                    $header = $this->Headers->get($id);
                        
                        $this->set('header', $header);
        }
    public function edit($id = null)
        {
            $header = $this->Headers->get($id);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $header = $this->Pres->patchEntity($header, $this->request->getData());
                if ($this->Headers->save($header)) {
                    $this->Flash->success(__('The user has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('header'));
        }
    
    public function delete($id)
                {
                        $this->request->allowMethod(['post', 'delete']);

                        $header = $this->Headers->get($id);
                        if ($this->Headers->delete($header)) {
                            $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
                            return $this->redirect(['action' => 'index']);
                        }
                }

}