<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientfactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientfactsTable Test Case
 */
class ClientfactsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientfactsTable
     */
    public $Clientfacts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.clientfacts',
        'app.clients',
        'app.bon_livraisons',
        'app.marchandises',
        'app.categories',
        'app.factures',
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
        $config = TableRegistry::exists('Clientfacts') ? [] : ['className' => 'App\Model\Table\ClientfactsTable'];
        $this->Clientfacts = TableRegistry::get('Clientfacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clientfacts);

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
