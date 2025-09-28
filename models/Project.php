<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Project
{
    private array $date;
    private string $name;
    private string $madeAt;
    private Collection $stack;
    private Collection $links;
    private ContributionLevel $contributionLevel;
    private Collection $tasks;

    public function __construct(array $date, string $name, string $madeAt, Collection $stack, Collection $links, ContributionLevel $contributionLevel, Collection $tasks)
    {
        $this->date = $date;
        $this->name = $name;
        $this->madeAt = $madeAt;
        $this->stack = $stack;
        $this->links = $links;
        $this->contributionLevel = $contributionLevel;
        $this->tasks = $tasks;
    }

    public function getDate(): array
    {
        return $this->date;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMadeAt(): string
    {
        return $this->madeAt;
    }

    public function getStack(): Collection
    {
        return $this->stack;
    }

    public function getLinks(): Collection
    {
        return $this->links;
    }

    public function getContributionLevel(): ContributionLevel
    {
        return $this->contributionLevel;
    }

    public function getTasks(): Collection
    {
        return $this->tasks;
    }

    public function getStartDateHuman(): string
    {
        return $this->getDate()['start'] ? $this->formatDate($this->getDate()['start']) : '';
    }

    public function getEndDateHuman(): string
    {
        return $this->getDate()['end'] ? $this->formatDate($this->getDate()['end']) : '';
    }

    public static function getLinkSvgHtml(string $source): string
    {
        $svgFilePath = dirname(__DIR__) . "/source/_components/svg/$source.blade.php";

        if (!file_exists($svgFilePath)) {
            return '';
        }

        return file_get_contents($svgFilePath);
    }

    private function formatDate(string $date): string
    {
        return date("Y M", strtotime($date));
    }
}
