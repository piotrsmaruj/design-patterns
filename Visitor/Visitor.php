<?php

interface Visitor
{
    public function withImage(Image $image): string;
    public function withVideo(Video $video): string;
}
