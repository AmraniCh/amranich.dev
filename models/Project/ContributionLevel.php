<?php

namespace App\Models\Project;

use Stringable;

class ContributionLevel implements Stringable
{
    public const LEVELS = [
        "low edit" => 'Projects based on existing foundations or templates, featuring minimal customization to address specific needs. This level highlights minor adjustments to pre-existing elements, reflecting limited modifications within established frameworks. Our overall contribution to the total features and functionality or codebase may be less than 20%.',
        "medium edit" => 'Projects incorporating existing foundations or templates, with notable customization to fulfill specific requirements. This level underscores considerable modifications to pre-existing elements, showcasing adaptability and tailored adjustments within established frameworks. Our overall contribution to the total features and functionality or codebase may range between 20% and 40%.',
        "high edit" => 'Projects primarily built upon existing foundations or templates, extensively customized to meet specific needs. This level emphasizes significant adjustments to pre-existing elements, highlighting adaptability and tailored modifications within established frameworks, Overall, our contribution to the total features and functionality or codebase may be above 40%.',
        "full" => 'Projects initiated from scratch, with occasional integration of pre-existing elements for efficiency. While some components may not be entirely custom-built, the project largely reflects unique solutions, ensuring significant originality and adaptability.',
        "scratch" => "Projects created from scratch, with little use of ready-made templates or frameworks. Emphasizes custom solutions tailored to specific needs, showing creativity and flexibility in tool choices."
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

        if (!in_array($lowerCasedLevel, array_keys(self::LEVELS))) {
            throw new \InvalidArgumentException(sprintf("Invalid project contribution level '%s'.", $level));
        }

        $this->level = $lowerCasedLevel;
    }
}
