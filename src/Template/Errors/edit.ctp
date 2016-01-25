<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $error->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $error->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Errors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="errors form large-9 medium-8 columns content">
    <?= $this->Form->create($error) ?>
    <fieldset>
        <legend><?= __('Edit Error') ?></legend>
        <?php
            echo $this->Form->input('event_id');
            echo $this->Form->input('project_id');
            echo $this->Form->input('message');
            echo $this->Form->input('culprit');
            echo $this->Form->input('request');
            echo $this->Form->input('exception');
            echo $this->Form->input('logger');
            echo $this->Form->input('platform');
            echo $this->Form->input('extra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
