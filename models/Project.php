<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Project
{
    private string $releaseDate;
    private string $name;
    private string $madeAt;
    private Collection $stack;
    private Collection $links;

    public function __construct(string $releaseDate, string $name, string $madeAt, Collection $stack, Collection $links)
    {
        $this->releaseDate = $releaseDate;
        $this->name = $name;
        $this->madeAt = $madeAt;
        $this->stack = $stack;
        $this->links = $links;
    }

    public function getReleaseDate(): string
    {
        return $this->releaseDate;
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

    public function getReleaseDateHuman(): string
    {
        // dd(strtotime($this->getReleaseDate()));

        return date("M Y", strtotime($this->getReleaseDate()));
    }

    public static function getLinkSvgHtml(string $source): string
    {
        $svgFilePath = dirname(__DIR__) . "/source/_components/svg/$source.blade.php";

        if (!file_exists($svgFilePath)) {
            return '';
        }

        return file_get_contents($svgFilePath);
    }
}
