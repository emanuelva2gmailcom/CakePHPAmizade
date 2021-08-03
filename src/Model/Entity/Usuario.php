<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $modifyDate
 * @property \Cake\I18n\FrozenDate $createdDate
 */
class Usuario extends Entity
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
        'nome' => true,
        'email' => true,
        'senha' => true,
        'modifyDate' => true,
        'createdDate' => true,
    ];
}
