<?php

declare(strict_types=1);

final class Banner implements Visitor
{
    public function withImage(Image $image): string
    {
        return $image->getUrl();
    }

    public function withVideo(Video $video): string
    {
        return $video->getId();
    }
}
