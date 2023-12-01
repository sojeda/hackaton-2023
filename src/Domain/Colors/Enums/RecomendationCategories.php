<?php

declare(strict_types=1);

namespace Domain\Colors\Enums;

enum RecomendationCategories: string
{
    case MUSIC = "music";
    case TV_SHOW = "tvshow";
    case READING = "reading";
    case SPORTS = "sports";
}
