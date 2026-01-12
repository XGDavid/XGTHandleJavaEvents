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
#   (?) user: xgdav | 11/01/2026 01:07 
# 

namespace xgdavid\XGTHandleJavaEvents;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);

    }
}