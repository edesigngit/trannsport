<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Facture Entity
 *
 * @property int $id
 * @property int $clientfact_id
 * @property string $libelles
 * @property int $categorie_id
 * @property int $voyage_id
 * @property int $quantite
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Clientfact $clientfact
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Voyage $voyage
 */
class Facture extends Entity
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
        'id' => false
    ];
}
