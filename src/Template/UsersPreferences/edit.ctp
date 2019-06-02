<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersPreference $usersPreference
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersPreference->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersPreference->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Preferences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Preferences'), ['controller' => 'Preferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Preference'), ['controller' => 'Preferences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersPreferences form large-9 medium-8 columns content">
    <?= $this->Form->create($usersPreference) ?>
    <fieldset>
        <legend><?= __('Edit Users Preference') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
