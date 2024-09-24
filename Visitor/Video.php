<?php

declare(strict_types=1);

final readonly class Video implements Entity
{
    public function __construct(
        private string $id,
    )
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->withVideo($this);
    }
}
