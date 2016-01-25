<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Error'), ['action' => 'edit', $error->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Error'), ['action' => 'delete', $error->id], ['confirm' => __('Are you sure you want to delete # {0}?', $error->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Errors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Error'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="errors view large-9 medium-8 columns content">
    <h3><?= h($error->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Event Id') ?></th>
            <td><?= h($error->event_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Culprit') ?></th>
            <td><?= h($error->culprit) ?></td>
        </tr>
        <tr>
            <th><?= __('Logger') ?></th>
            <td><?= h($error->logger) ?></td>
        </tr>
        <tr>
            <th><?= __('Platform') ?></th>
            <td><?= h($error->platform) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($error->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Project Id') ?></th>
            <td><?= $this->Number->format($error->project_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($error->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($error->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($error->message)); ?>
    </div>
    <div class="row">
        <h4><?= __('Request') ?></h4>
        <?= $error->request ?>
    </div>
    <div class="row">
        <h4><?= __('Exception') ?></h4>
        <?= $error->exception ?>
    </div>
    <div class="row">
        <h4><?= __('Extra') ?></h4>
        <?= $error->extra ?>
    </div>
</div>
