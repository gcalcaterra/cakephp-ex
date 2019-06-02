<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersPreference[]|\Cake\Collection\CollectionInterface $usersPreferences
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Preference'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Preferences'), ['controller' => 'Preferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Preference'), ['controller' => 'Preferences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersPreferences index large-9 medium-8 columns content">
    <h3><?= __('Users Preferences') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preference_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersPreferences as $usersPreference): ?>
            <tr>
                <td><?= $usersPreference->has('user') ? $this->Html->link($usersPreference->user->name, ['controller' => 'Users', 'action' => 'view', $usersPreference->user->id]) : '' ?></td>
                <td><?= $usersPreference->has('preference') ? $this->Html->link($usersPreference->preference->name, ['controller' => 'Preferences', 'action' => 'view', $usersPreference->preference->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersPreference->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersPreference->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersPreference->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersPreference->user_id)]) ?>
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
