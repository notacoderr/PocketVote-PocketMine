<?php

namespace ProjectInfinity\PocketVote\task;

use pocketmine\scheduler\Task;
use ProjectInfinity\PocketVote\PocketVote;

class ExpireVotesTask extends Task {

    public function onRun(int $currentTick) {
        PocketVote::getPlugin()->getLogger()->debug('Cleaning up expired votes.');
        PocketVote::getPlugin()->getVoteManager()->expireVotes();
    }
}