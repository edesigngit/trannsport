<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoyagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoyagesTable Test Case
 */
class VoyagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VoyagesTable
     */
    public $Voyages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.voyages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Voyages') ? [] : ['className' => 'App\Model\Table\VoyagesTable'];
        $this->Voyages = TableRegistry::get('Voyages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Voyages);

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
