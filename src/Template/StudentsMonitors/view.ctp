<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentsMonitor $studentsMonitor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Students Monitor'), ['action' => 'edit', $studentsMonitor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Students Monitor'), ['action' => 'delete', $studentsMonitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsMonitor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students Monitors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Students Monitor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="studentsMonitors view large-9 medium-8 columns content">
    <h3><?= h($studentsMonitor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $studentsMonitor->has('user') ? $this->Html->link($studentsMonitor->user->name, ['controller' => 'Users', 'action' => 'view', $studentsMonitor->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($studentsMonitor->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($studentsMonitor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student Id') ?></th>
            <td><?= $this->Number->format($studentsMonitor->student_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time Start') ?></th>
            <td><?= h($studentsMonitor->date_time_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time Fin') ?></th>
            <td><?= h($studentsMonitor->date_time_fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($studentsMonitor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($studentsMonitor->modified) ?></td>
        </tr>
    </table>
</div>
