<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Repository
{
    private string $fullName;
    private string $htmlUrl;
    private string $description;
    private int $stargazersCount;
    private int $forksCount;
    private Collection $languages;
    private string $packagistUrl;
    private int $packagistDownloadsCount;

    public function __construct(
        string $fullName,
        string $htmlUrl,
        string $description,
        int $stargazersCount,
        int $forksCount,
        Collection $languages,
        string $packagistUrl = '',
        int $packagistDownloadsCount = 0,
    ) {
        $this->fullName = $fullName;
        $this->htmlUrl = $htmlUrl;
        $this->description = $description;
        $this->stargazersCount = $stargazersCount;
        $this->forksCount = $forksCount;
        $this->languages = $languages;
        $this->packagistUrl = $packagistUrl;
        $this->packagistDownloadsCount = $packagistDownloadsCount;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getHtmlUrl(): string
    {
        return $this->htmlUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStargazersCount(): int
    {
        return $this->stargazersCount;
    }

    public function getForksCount(): int
    {
        return $this->forksCount;
    }

    public function getLanguages(): Collection
    {
        return $this->languages;
    }

    public function getPackagistUrl(): string
    {
        return $this->packagistUrl;
    }

    public function getPackagistDownloadsCount(): int
    {
        return $this->packagistDownloadsCount;
    }
}
