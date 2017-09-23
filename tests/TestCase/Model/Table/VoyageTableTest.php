<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoyageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoyageTable Test Case
 */
class VoyageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VoyageTable
     */
    public $Voyage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.voyage'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Voyage') ? [] : ['className' => 'App\Model\Table\VoyageTable'];
        $this->Voyage = TableRegistry::get('Voyage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Voyage);

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
}
