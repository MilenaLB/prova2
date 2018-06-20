<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentsMonitor[]|\Cake\Collection\CollectionInterface $studentsMonitors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Agedamentos'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentsMonitors index large-9 medium-8 columns content">
    <h3><?= __('Students Monitors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!--  <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monitor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feedback') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_time_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_time_fin') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studentsMonitors as $studentsMonitor): ?>
            <tr>
              <!--   <td><?= $this->Number->format($studentsMonitor->id) ?></td> -->
                <td><?= $this->Number->format($studentsMonitor->student_id) ?></td>
                <td><?= $studentsMonitor->has('user') ? $this->Html->link($studentsMonitor->user->name, ['controller' => 'Users', 'action' => 'view', $studentsMonitor->user->id]) : '' ?></td>
                <td><?= h($studentsMonitor->role) ?></td>
                <td><?= h($studentsMonitor->created) ?></td>
                <td><?= h($studentsMonitor->modified) ?></td>
                <td><?= h($studentsMonitor->feedback) ?></td>
                <td><?= h($studentsMonitor->date_time_start) ?></td>
                <td><?= h($studentsMonitor->date_time_fin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $studentsMonitor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentsMonitor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentsMonitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsMonitor->id)]) ?>
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
