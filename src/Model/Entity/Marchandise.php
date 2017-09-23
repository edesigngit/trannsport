<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Marchandise Entity
 *
 * @property int $id
 * @property string $categorie_id
 * @property string $reference
 * @property string $libelles
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\BonLivraison[] $bon_livraisons
 * @property \App\Model\Entity\Facture[] $factures
 */
class Marchandise extends Entity
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
