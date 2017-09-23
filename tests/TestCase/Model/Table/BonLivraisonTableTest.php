<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BonLivraisonTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BonLivraisonTable Test Case
 */
class BonLivraisonTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BonLivraisonTable
     */
    public $BonLivraison;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bon_livraison'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BonLivraison') ? [] : ['className' => 'App\Model\Table\BonLivraisonTable'];
        $this->BonLivraison = TableRegistry::get('BonLivraison', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BonLivraison);

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
