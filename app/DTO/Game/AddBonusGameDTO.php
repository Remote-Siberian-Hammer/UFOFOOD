<?php

namespace App\DTO\Game;

class AddBonusGameDTO
{
    public int $MenuId;
    public int $UserId;

    public function __construct(int $MenuId, int $UserId)
    {
        $this->MenuId = $MenuId;
        $this->UserId = $UserId;
    }
}
