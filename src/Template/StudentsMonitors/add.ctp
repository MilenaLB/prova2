<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentsMonitor $studentsMonitor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Students Monitors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentsMonitors form large-9 medium-8 columns content">
    <?= $this->Form->create($studentsMonitor) ?>
    <fieldset>
        <legend><?= __('Add Students Monitor') ?></legend>
        <?php
            echo $this->Form->control('student_id');
            echo $this->Form->control('monitor_id', ['options' => $monitors, 'empty' => true]);
            echo $this->Form->control('date_time_start');
            echo $this->Form->control('date_time_fin');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>