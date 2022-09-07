<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;
class HeadersTable extends Table
{
    public function initialize(array $config)
    {   
        $this->addBehavior('Translate', ['fields' => ['about', 'title'], 
        'allowEmptyTranslations' => false
         ]);
        $this->setPrimaryKey('id');
    }
}
       