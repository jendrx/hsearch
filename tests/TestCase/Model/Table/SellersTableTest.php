<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SellersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SellersTable Test Case
 */
class SellersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SellersTable
     */
    public $Sellers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sellers',
        'app.users',
        'app.buyers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sellers') ? [] : ['className' => SellersTable::class];
        $this->Sellers = TableRegistry::get('Sellers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sellers);

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
