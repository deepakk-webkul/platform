<?php declare(strict_types=1);

namespace Shopware\Core\Content\Media\Pathname\PathnameStrategy;

use Shopware\Core\Content\Media\Aggregate\MediaThumbnail\MediaThumbnailEntity;
use Shopware\Core\Content\Media\MediaEntity;

class PhysicalFilenamePathnameStrategy extends AbstractPathNameStrategy
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'physical_filename';
    }

    /**
     * {@inheritdoc}
     */
    public function generatePathHash(MediaEntity $media, ?MediaThumbnailEntity $thumbnail = null): ?string
    {
        return $this->generateMd5Path($media->getUploadedAt()->getTimestamp() . '/' . $media->getFileName());
    }
}
