<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentsMonitorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentsMonitorsTable Test Case
 */
class StudentsMonitorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentsMonitorsTable
     */
    public $StudentsMonitors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.students_monitors',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StudentsMonitors') ? [] : ['className' => StudentsMonitorsTable::class];
        $this->StudentsMonitors = TableRegistry::getTableLocator()->get('StudentsMonitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StudentsMonitors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
