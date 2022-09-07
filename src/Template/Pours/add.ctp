<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
    </li>
         <li class="heading"><h3><?= $this->Html->link(__('Z0graviry'), ['controller' => 'Headers', 'action' => 'index']) ?></h3></li>
          <li class="heading"><h6><?= __('PRESSE') ?></h6></li>
        <li><?= $this->Html->link(__('New Presses'), ['controller' => 'Pres', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Presses'), ['controller' => 'Pres', 'action' => 'index']) ?></li>
         <li class="heading"><h6><?= __('POURS') ?></h6></li>
        <li ><?= $this->Html->link(__('New Pours'), ['controller' => 'Pours', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></li>
         <li class="heading"><h6><?= __('HEADERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Header'), ['controller' => 'Headers', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('New Headers'), ['controller' => 'Headers', 'action' => 'list']) ?></li>
         <li class="heading"><h6><?= __('USERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Users'), ['controller' => 'Users', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('LOGIN'), ['controller' => 'Users', 'action' => 'login']) ?></li>
          <li><?= $this->Html->link(__('LOGOUT'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
  <?= $this->Form->create($pour) ?>
  <fieldset>
    <legend><?= __('Add New pours') ?></legend>
    <?php
     echo $this->Form->create($pour);
     echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
     echo $this->Form->control('title');
     echo $this->Form->control('logo');
      echo $this->Form->control('layout_img');
     echo $this->Form->control('Notre_engagement');
      echo $this->Form->control('about_notre', ['rows' => '3']);
     echo $this->Form->control('note');
     echo $this->Form->control('link');
      echo $this->Form->control('title2');
      echo $this->Form->input('about2', ['rows' => '3']);
      echo $this->Form->input('bnt');
      echo $this->Form->input('about', ['rows' => '3']);
      echo $this->Form->input('french', ['rows' => '3']);
      echo $this->Form->input('spanish', ['rows' => '3']);
      echo $this->Form->input('vietnam', ['rows' => '3']);
    ?>
  </fieldset>
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>