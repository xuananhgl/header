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
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Pours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('about') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Notre_engagement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('about_notre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layout_img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('about2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('about2') ?></th>
            
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pours as $pour): ?>
            <tr>
                <td><?= $this->Number->format($pour->id) ?></td>
                <td><?= h($pour->title) ?></td>
                <td><?= h($pour->logo) ?></td>
                <td><?= h($pour->about) ?></td>
                <td><?= h($pour->Notre_engagement) ?></td>
                <td><?= h($pour->about_notre) ?></td>
                <td><?= h($pour->layout_img) ?></td>
                <td><?= h($pour->note) ?></td>
                <td><?= h($pour->link) ?></td>
                <td><?= h($pour->title2) ?></td>
                 <td><?= h($pour->note) ?></td>
                <td><?= h($pour->link) ?></td>
                <td><?= h($pour->title2) ?></td>
                
                 
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pour->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>