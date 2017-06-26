<?php

/*
 *     __						    _
 *    / /  _____   _____ _ __ _   _| |
 *   / /  / _ \ \ / / _ \ '__| | | | |
 *  / /__|  __/\ V /  __/ |  | |_| | |
 *  \____/\___| \_/ \___|_|   \__, |_|
 *						      |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author LeverylTeam
 * @link https://github.com/LeverylTeam
 *
 * Based on Specter by @Falkirks
 * Modified to Automatically test CI Tests.
 *
*/

namespace Leveryl\network;

use pocketmine\math\Vector3;
use pocketmine\network\SourceInterface;
use pocketmine\Player;

class SpecterPlayer extends Player{
    public $spec_needRespawn = false;
    public function __construct(SourceInterface $interface, $clientID, $ip, $port){
        parent::__construct($interface, $clientID, $ip, $port); // TODO: Change the autogenerated stub
    }
    /**
     * @return Vector3
     */
    public function getForceMovement(){
        return $this->forceMovement;
    }

}