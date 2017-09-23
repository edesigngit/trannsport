<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarchandisesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarchandisesTable Test Case
 */
class MarchandisesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MarchandisesTable
     */
    public $Marchandises;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.marchandises',
        'app.categories',
        'app.bon_livraisons',
        'app.clients',
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
        $config = TableRegistry::exists('Marchandises') ? [] : ['className' => 'App\Model\Table\MarchandisesTable'];
        $this->Marchandises = TableRegistry::get('Marchandises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Marchandises);

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
