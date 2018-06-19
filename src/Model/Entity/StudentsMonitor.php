<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StudentsMonitor Entity
 *
 * @property int $id
 * @property int $student_id
 * @property int $monitor_id
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $feedback
 * @property \Cake\I18n\FrozenTime $date_time_start
 * @property \Cake\I18n\FrozenTime $date_time_fin
 *
 * @property \App\Model\Entity\User $user
 */
class StudentsMonitor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'student_id' => true,
        'monitor_id' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'feedback' => true,
        'date_time_start' => true,
        'date_time_fin' => true,
        'user' => true
    ];
}
