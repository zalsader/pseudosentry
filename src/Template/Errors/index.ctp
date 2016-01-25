<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Error'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="errors index large-9 medium-8 columns content">
    <h3><?= __('Errors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('project_id') ?></th>
                <th><?= $this->Paginator->sort('culprit') ?></th>
                <th><?= $this->Paginator->sort('logger') ?></th>
                <th><?= $this->Paginator->sort('platform') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($errors as $error): ?>
            <tr>
                <td><?= $this->Number->format($error->id) ?></td>
                <td><?= h($error->event_id) ?></td>
                <td><?= $this->Number->format($error->project_id) ?></td>
                <td><?= h($error->culprit) ?></td>
                <td><?= h($error->logger) ?></td>
                <td><?= h($error->platform) ?></td>
                <td><?= h($error->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $error->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $error->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $error->id], ['confirm' => __('Are you sure you want to delete # {0}?', $error->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
