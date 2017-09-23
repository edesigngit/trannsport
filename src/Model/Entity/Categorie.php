<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categorie Entity.
 *
 * @property int $id
 * @property string $REF_CATEGORIE
 * @property string $CATEGORIE
 * @property string $DESCRIPTION
 * @property float $CUT
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Categorie extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
