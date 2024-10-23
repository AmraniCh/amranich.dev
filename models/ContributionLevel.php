<?php

namespace App\Models;

use Stringable;

class ContributionLevel implements Stringable
{
    private const LEVELS = ['low edit', 'medium edit', 'high edit', 'full', 'scratch'];
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
            throw new \InvalidArgumentException(sprintf("Invalid project contribution level '%s'.", $lowerCasedLevel));
        }

        $this->level = $lowerCasedLevel;
    }
}
