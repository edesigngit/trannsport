<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BonLivraisonFixture
 *
 */
class BonLivraisonFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bon_livraison';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Num' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'NUM_CLIENT' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'REFERENCE' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'N?VOYAGE' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'REF_CATEGORIE' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'DATES' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'QUANTITE' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Num'], 'length' => []],
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
            'Num' => 1,
            'NUM_CLIENT' => 'Lorem ipsum dolor sit amet',
            'REFERENCE' => 'Lorem ipsum dolor sit amet',
            'N?VOYAGE' => 'Lorem ipsum dolor sit amet',
            'REF_CATEGORIE' => 'Lorem ipsum dolor sit amet',
            'DATES' => '2017-05-30',
            'QUANTITE' => 'Lorem ip',
            'created' => '2017-05-30 16:11:00',
            'modified' => '2017-05-30 16:11:00'
        ],
    ];
}
