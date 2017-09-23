<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MarchandiseFixture
 *
 */
class MarchandiseFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'marchandise';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'REFERENCE' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'N°VOYAGE' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'REF_CATEGORIE' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'LIBELLES' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
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
            'ID' => 1,
            'REFERENCE' => 'Lorem ipsum dolor sit amet',
            'N°VOYAGE' => 'Lorem ipsum dolor sit amet',
            'REF_CATEGORIE' => 'Lorem ipsum dolor sit amet',
            'LIBELLES' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-05-30 16:12:57',
            'modified' => '2017-05-30 16:12:57'
        ],
    ];
}
