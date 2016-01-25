<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Error Entity.
 *
 * @property int $id
 * @property string $event_id
 * @property \App\Model\Entity\Event $event
 * @property int $project_id
 * @property \App\Model\Entity\Project $project
 * @property string $message
 * @property string $culprit
 * @property string $request
 * @property string $exception
 * @property string $logger
 * @property string $platform
 * @property string $extra
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Error extends Entity
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
