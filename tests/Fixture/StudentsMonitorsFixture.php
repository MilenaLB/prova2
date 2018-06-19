<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsMonitorsFixture
 *
 */
class StudentsMonitorsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'student_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monitor_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'role' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'feedback' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_time_start' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'date_time_fin' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'student_id' => ['type' => 'index', 'columns' => ['student_id'], 'length' => []],
            'monitor_id' => ['type' => 'index', 'columns' => ['monitor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'date_time_start' => ['type' => 'unique', 'columns' => ['date_time_start'], 'length' => []],
            'date_time_fin' => ['type' => 'unique', 'columns' => ['date_time_fin'], 'length' => []],
            'students_monitors_ibfk_1' => ['type' => 'foreign', 'columns' => ['student_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'students_monitors_ibfk_2' => ['type' => 'foreign', 'columns' => ['monitor_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'student_id' => 1,
                'monitor_id' => 1,
                'role' => 'Lorem ipsum dolor ',
                'created' => '2018-06-19 12:47:07',
                'modified' => '2018-06-19 12:47:07',
                'feedback' => 'Lorem ipsum dolor sit amet',
                'date_time_start' => '2018-06-19 12:47:07',
                'date_time_fin' => '2018-06-19 12:47:07'
            ],
        ];
        parent::init();
    }
}
