
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

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($pour->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($pour->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($pour->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notre_engagement') ?></th>
            <td><?= h($pour->Notre_engagement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('About') ?></th>
            <td><?= h($pour->about) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('about_notre') ?></th>
            <td><?= h($pour->about_notre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('layout_img') ?></th>
            <td><?= h($pour->layout_img) ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('note') ?></th>
            <td><?= h($pour->note) ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('link') ?></th>
            <td><?= h($pour->link) ?></td>
        </tr>
    </table>
                    <?= $this->Html->link(__('View'), ['controller' => 'Pours', 'action' => 'view', $pour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pours', 'action' => 'edit', $pour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pours', 'action' => 'delete', $pour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pour->id)]) ?>
                </td>
            </tr>
          
        </table>
       
    </div>
</div>
