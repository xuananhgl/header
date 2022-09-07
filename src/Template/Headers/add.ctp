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
  <?= $this->Form->create($header) ?>
  <fieldset>
    <legend><?= __('Add New header') ?></legend>
    
    <?=  $this->Form->create($header);?>
     <?=  $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
              <legend>Display</legend>
     <?= $this->Form->control('munber_style');?>
     <?=  $this->Form->control('img');?>
     <?= $this->Form->control('color');?>
     <?=   $this->Form->control('background');?>
      <?=  $this->Form->control('bnt');?>
     <?=  $this->Form->control('bnt_video');?>
             <legend>Dynamic-content</legend>
     <?=  $this->Form->control('title', ['rows' => '1']);?>
     <?=  $this->Form->input('about', ['rows' => '1']);?>
      
       
               <legend class="English">English</legend>
      <?= $this->Form->control('_translations.en_US.about', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.en_US.title', ['rows' => '1']); ?>
                      <legend>Spanish</legend>
      <?= $this->Form->control('_translations.es.about', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.es.title', ['rows' => '1']); ?>

                <legend legend>Tieng-VIet</legend>
      <?= $this->Form->control('_translations.vi.about', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.vi.title', ['rows' => '1']); ?>
    
</fieldset>

      
   
  
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>