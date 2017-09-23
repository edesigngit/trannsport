<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BonLivraisonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BonLivraisonsTable Test Case
 */
class BonLivraisonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BonLivraisonsTable
     */
    public $BonLivraisons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bon_livraisons',
        'app.clients',
        'app.factures',
        'app.marchandises',
        'app.categories',
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
        $config = TableRegistry::exists('BonLivraisons') ? [] : ['className' => 'App\Model\Table\BonLivraisonsTable'];
        $this->BonLivraisons = TableRegistry::get('BonLivraisons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BonLivraisons);

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
