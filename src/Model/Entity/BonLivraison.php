<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BonLivraison Entity
 *
 * @property int $id
 * @property int $client_id
 * @property string $marchandise_id
 * @property string $voyages_id
 * @property string $categorie_id
 * @property string $quantite
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Marchandise $marchandise
 * @property \App\Model\Entity\Voyage $voyage
 * @property \App\Model\Entity\Category $category
 */
class BonLivraison extends Entity
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
