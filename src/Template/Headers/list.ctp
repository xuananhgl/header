<!-- File: src/Template/Articles/index.ctp -->

<h1>Headers</h1>
<table>
    <?= $this->Html->link('Add Header new', ['action' => 'add']) ?>
    <tr>
        <th>style-header</th>
        <th></th>
    </tr>

    <?php foreach ($headers as $header): ?>
    <tr>
        <td>
            <?= $this->Html->link($header->slug, ['action' => 'view', $header->slug]) ?>
        </td>
        <td>
            <?= $this->Html->link('View', ['action' => 'view', $header->slug]) ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $header->slug]) ?>
                <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $header->slug],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>