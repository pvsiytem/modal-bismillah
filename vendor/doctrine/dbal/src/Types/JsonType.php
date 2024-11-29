<?php

declare(strict_types=1);

namespace TCG\Voyager\Database\Types\Common;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

/**
 * Type generating json objects values
 */
class JsonType extends Type
{
    public const NAME = 'json';

    /**
     * {@inheritDoc}
     */
    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return 'json'; // This is where we declare the SQL type for the column
    }

    /**
     * {@inheritDoc}
     */
    public function convertToDatabaseValue(mixed $value, AbstractPlatform $platform): ?string
    {
        if ($value === null) {
            return null;
        }

        return json_encode($value, JSON_THROW_ON_ERROR);
    }

    /**
     * {@inheritDoc}
     */
    public function convertToPHPValue(mixed $value, AbstractPlatform $platform): mixed
    {
        if ($value === null || $value === '') {
            return null;
        }

        return json_decode($value, true, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
