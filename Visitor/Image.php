<?php

declare(strict_types=1);

final readonly class Image implements Entity
{
    public function __construct(
        private string $url
    )
    {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->withImage($this);
    }
}
