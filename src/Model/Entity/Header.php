<?php
namespace App\Model\Entity;
use Cake\Collection\Collection;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\ORM\Entity;
class Header extends Entity
{
  use TranslateTrait;
   protected $_accessible = [
        '*' => true,
        'id' => false,
        
        
    ];
}
?>