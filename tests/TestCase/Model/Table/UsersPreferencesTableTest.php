<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersPreferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersPreferencesTable Test Case
 */
class UsersPreferencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersPreferencesTable
     */
    public $UsersPreferences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UsersPreferences',
        'app.Users',
        'app.Preferences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UsersPreferences') ? [] : ['className' => UsersPreferencesTable::class];
        $this->UsersPreferences = TableRegistry::getTableLocator()->get('UsersPreferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersPreferences);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
