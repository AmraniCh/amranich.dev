<?php

namespace App\Models\Project;

use Stringable;

class ContributionLevel implements Stringable
{
    public const LEVELS = [
        "low edit",
        "medium edit",
        "high edit",
        "scratch"
    ];

    private string $level;

    public function __construct(string $level)
    {
        $this->setLevel($level);
    }

    public function __toString(): string
    {
        return ucwords($this->level);
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @throws \InvalidArgumentException
     */
    private function setLevel(string $level): void
    {
        $lowerCasedLevel = strtolower($level);

        if (!in_array($lowerCasedLevel, self::LEVELS)) {
            throw new \InvalidArgumentException(sprintf("Invalid project contribution level '%s'.", $level));
        }

        $this->level = $lowerCasedLevel;
    }
}
