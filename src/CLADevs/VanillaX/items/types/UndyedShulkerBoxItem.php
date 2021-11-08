<?php

namespace CLADevs\VanillaX\items\types;

use pocketmine\block\BlockIds;
use pocketmine\item\ItemBlock;
use pocketmine\item\ItemIds;

class UndyedShulkerBoxItem extends ItemBlock{

    public function __construct(int $meta = 0){
        parent::__construct(BlockIds::UNDYED_SHULKER_BOX, $meta, ItemIds::UNDYED_SHULKER_BOX);
    }

    public function getMaxStackSize(): int{
        return 1;
    }
}