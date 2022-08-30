<h1><?= h($header->slug) ?></h1>
<p><?= h($header->my_img) ?></p>
<p><?= h($header->my_background) ?></p>
<p><?= h($header->my_color) ?></p>
<p><?= h($header->my_title) ?></p>
<p><?= h($header->my_icon) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $header->slug]) ?></p>