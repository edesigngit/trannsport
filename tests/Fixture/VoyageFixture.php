<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VoyageFixture
 *
 */
class VoyageFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'voyage';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'N°VOYAGE' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DESTINATION' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'N°VOYAGE' => 'Lorem ipsum dolor sit amet',
            'DATE' => '2017-05-30',
            'DESTINATION' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-05-30 16:13:07',
            'modified' => '2017-05-30 16:13:07'
        ],
    ];
}
