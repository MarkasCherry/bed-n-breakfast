<?php

namespace App\Media;

use DateTimeInterface;
use Spatie\MediaLibrary\Support\UrlGenerator\BaseUrlGenerator;


class CustomUrlGenerator extends BaseUrlGenerator
{
    /**
     * Get the url for the profile of a media item.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return env('ADMIN_STORAGE_URL').'/'.$this->getPathRelativeToRoot();
    }

    public function getPath(): string
    {
        // TODO: Implement getPath() method.
    }

    public function getTemporaryUrl(DateTimeInterface $expiration, array $options = []): string
    {
        // TODO: Implement getTemporaryUrl() method.
    }

    public function getResponsiveImagesDirectoryUrl(): string
    {
        // TODO: Implement getResponsiveImagesDirectoryUrl() method.
    }
}
