
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    </li>
         <li class="heading"><h3><?= $this->Html->link(__('Z0graviry'), ['controller' => 'Headers', 'action' => 'index']) ?></h3></li>
          <li class="heading"><h6><?= __('HEADERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Header'), ['controller' => 'Headers', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('list Headers'), ['controller' => 'Headers', 'action' => 'list']) ?></li><li class="heading"><h6><?= __('PRESSE') ?></h6></li>
        <li><?= $this->Html->link(__('New Presses'), ['controller' => 'Pres', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Presses'), ['controller' => 'Pres', 'action' => 'index']) ?></li>
         <li class="heading"><h6><?= __('POURS') ?></h6></li>
        <li ><?= $this->Html->link(__('New Pours'), ['controller' => 'Pours', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></li>
         
         <li class="heading"><h6><?= __('USERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Users'), ['controller' => 'Users', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('LOGIN'), ['controller' => 'Users', 'action' => 'login']) ?></li>
          <li><?= $this->Html->link(__('LOGOUT'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($pre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($pre->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($pre->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= h($pre->author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('About', ['rows' => '3']) ?></th>
            <td><?= h($pre->about) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dress') ?></th>
            <td><?= h($pre->dress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($pre->link) ?></td>
        </tr>
    </table>
                    <?= $this->Html->link(__('View'), ['controller' => 'Pres', 'action' => 'view', $pre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pres', 'action' => 'edit', $pre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pres', 'action' => 'delete', $pre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pre->id)]) ?>
                </td>
            </tr>
          
        </table>
       
    </div>
</div>
