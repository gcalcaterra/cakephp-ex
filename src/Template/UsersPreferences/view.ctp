<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersPreference $usersPreference
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Preference'), ['action' => 'edit', $usersPreference->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Preference'), ['action' => 'delete', $usersPreference->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersPreference->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Preferences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Preference'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Preferences'), ['controller' => 'Preferences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preference'), ['controller' => 'Preferences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersPreferences view large-9 medium-8 columns content">
    <h3><?= h($usersPreference->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersPreference->has('user') ? $this->Html->link($usersPreference->user->name, ['controller' => 'Users', 'action' => 'view', $usersPreference->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preference') ?></th>
            <td><?= $usersPreference->has('preference') ? $this->Html->link($usersPreference->preference->name, ['controller' => 'Preferences', 'action' => 'view', $usersPreference->preference->id]) : '' ?></td>
        </tr>
    </table>
</div>
