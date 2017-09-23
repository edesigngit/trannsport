<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategorieFixture
 *
 */
class CategorieFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'categorie';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'REF_CATEGORIE' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'CATEGORIE' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DESCRIPTION' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CUT' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
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
            'REF_CATEGORIE' => 'Lorem ipsum dolor sit amet',
            'CATEGORIE' => 'Lorem ipsum dolor sit amet',
            'DESCRIPTION' => 'Lorem ipsum dolor sit amet',
            'CUT' => 1.5,
            'created' => '2017-05-30 16:12:26',
            'modified' => '2017-05-30 16:12:26'
        ],
    ];
}
