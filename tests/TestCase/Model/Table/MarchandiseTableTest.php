<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarchandiseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarchandiseTable Test Case
 */
class MarchandiseTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MarchandiseTable
     */
    public $Marchandise;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.marchandise'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Marchandise') ? [] : ['className' => 'App\Model\Table\MarchandiseTable'];
        $this->Marchandise = TableRegistry::get('Marchandise', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Marchandise);

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
