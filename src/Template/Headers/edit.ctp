
<h1>Edit Header</h1>
<?php
     echo $this->Form->create($header);
     echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
     echo $this->Form->control('slug');
     echo $this->Form->control('my_img');
     echo $this->Form->control('my_color');
     echo $this->Form->control('my_about');
     echo $this->Form->control('my_title');
     echo $this->Form->control('my_background');
     echo $this->Form->button(__('Save header'));
     echo $this->Form->end();
?>