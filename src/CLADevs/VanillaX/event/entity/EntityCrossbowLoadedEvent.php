<?php

namespace CLADevs\VanillaX\event\entity;

use pocketmine\entity\Entity;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;
use pocketmine\event\entity\EntityEvent;
use pocketmine\item\Item;

class EntityCrossbowLoadedEvent extends EntityEvent implements Cancellable{
    use CancellableTrait;

    public function __construct(Entity $shooter, private Item $crossbow, private Item $projectile){
        $this->entity = $shooter;
    }

    /**
     * @return Item
     * Crossbow entity loaded
     */
    public function getCrossbow(): Item{
        return $this->crossbow;
    }

    /**
     * @return Item
     * item that was loaded onto the crossbow
     */
    public function getProjectile(): Item{
        return $this->projectile;
    }
}
