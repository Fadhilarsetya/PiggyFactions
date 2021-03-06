<?php

declare(strict_types=1);

namespace DaPigGuy\PiggyFactions\commands\subcommands\claims\unclaim;

use DaPigGuy\PiggyFactions\commands\subcommands\FactionSubCommand;
use DaPigGuy\PiggyFactions\factions\Faction;
use DaPigGuy\PiggyFactions\players\FactionsPlayer;
use pocketmine\Player;

class UnclaimAutoSubCommand extends FactionSubCommand
{
    public function onNormalRun(Player $sender, ?Faction $faction, FactionsPlayer $member, string $aliasUsed, array $args): void
    {
        $member->setAutoUnclaiming(!$member->isAutoUnclaiming());
        $member->sendMessage("commands.unclaim.auto.toggled" . ($member->isAutoUnclaiming() ? "" : "-off"));
    }
}