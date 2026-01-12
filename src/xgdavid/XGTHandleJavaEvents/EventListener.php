<?php
#
# __   _______ _______ _____            __      _____
# \ \ / / ____|__   __/ ____|           \ \    / /__ \
#  \ V / |  __   | | | |     ___  _ __ __\ \  / /   ) |
#   > <| | |_ |  | | | |    / _ \| '__/ _ \ \/ /   / /
#  / . \ |__| |  | | | |___| (_) | | |  __/\  /   / /_
# /_/ \_\_____|  |_|  \_____\___/|_|  \___| \/   |____|
#
#   @author XGDAVID
#   Copyright (c) XGTeam & GCStaff - 2026
#   !file XGDAVID
#   (?) user: xgdav | 11/01/2026 01:08 
# 

namespace xgdavid\XGTHandleJavaEvents;

use pocketmine\event\Listener;
use XGDAVID\XGTJavaBridge\events\player\JavaPlayerDeathEvent;
use XGDAVID\XGTJavaBridge\events\player\JavaPlayerJoinEvent;
use XGDAVID\XGTJavaBridge\events\player\JavaPlayerQuitEvent;
use XGDAVID\XGTJavaBridge\events\player\JavaPlayerRespawnEvent;
use XGDAVID\XGTJavaBridge\events\player\JavaPlayerToggleFlightEvent;
use XGDAVID\XGTJavaBridge\events\player\JavaPlayerToggleSneakEvent;
use XGDAVID\XGTJavaBridge\events\player\JavaPlayerToggleSprintEvent;

class EventListener implements Listener
{

    public function onJavaPlayerJoinEvent(JavaPlayerJoinEvent $event): void
    {
        $player = $event->getPlayer();
        $name = $player->getName();
        $player->sendMessage("§ki§r§f Welcome to the server, §b" . $name . "§f!");
        $event->setJoinMessage("§8[§2+§8] §f" . $name);
    }

    public function onJavaPlayerQutiEvent(JavaPlayerQuitEvent $event): void
    {
        $player = $event->getPlayer();
        $name = $player->getName();
        $event->setQuitMessage("§8[§c-§8] §f" . $name);
    }

    public function JavaPlayerToggleFlightEvent(JavaPlayerToggleFlightEvent $event): void
    {
        $player = $event->getPlayer();
        if ($event->isFlying()) {
            $player->sendMessage("§a>§f You have enabled flight mode");
        } else {
            $player->sendMessage("§c>§f You have disabled flight mode");
        }
    }

    public function JavaPlayerToggleSneakEvent(JavaPlayerToggleSneakEvent $event): void
    {
        $player = $event->getPlayer();
        if ($event->isSneaking()) {
            //    $player->sendMessage("§a>§f You are now sneaking");
        } else {
            //    $player->sendMessage("§c>§f You have stopped sneaking");
        }
    }

    public function JavaPlayerToggleSprintEvent(JavaPlayerToggleSprintEvent $event): void
    {
        $player = $event->getPlayer();
        if ($event->isSprinting()) {
            //  $player->sendMessage("§a>§f You are now sprinting");
        } else {
            //  $player->sendMessage("§c>§f You have stopped sprinting");
        }
    }

    public function JavaPlayerRespawnEvent(JavaPlayerRespawnEvent $event): void
    {
        $player = $event->getPlayer();
        $player->sendMessage("§8> §fYou have respawned at coordinates: X: §e" . $event->getRespawnX() . "§f Y: §e" . $event->getRespawnY() . "§f Z: §e" . $event->getRespawnZ());
    }

    public function JavaPlayerDeathEvent(JavaPlayerDeathEvent $event): void
    {
        $player = $event->getPlayer();
        if ($event->hasKiller()) {
            $killer = $event->getKiller();
            $event->setDeathMessage("§8> §c" . $player->getName() . "§f was killed by §4" . $killer);
        } else {
            $event->setDeathMessage("§8> §c" . $player->getName() . "§f has died");
        }
    }

}