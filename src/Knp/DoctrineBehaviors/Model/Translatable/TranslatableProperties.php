<?php

/*
 * This file is part of the KnpDoctrineBehaviors package.
 *
 * (c) KnpLabs <http://knplabs.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Knp\DoctrineBehaviors\Model\Translatable;

use JMS\Serializer\Annotation as Serializer;

/**
 * Translatable trait.
 *
 * Should be used inside entity, that needs to be translated.
 */
trait TranslatableProperties
{
    /**
     * Will be mapped to translatable entity
     * by TranslatableListener
     *
     * @Serializer\Exclude
     */
    private $translations;

    /**
     * Will be merged with persisted translations on mergeNewTranslations call
     *
     * @see mergeNewTranslations
     *
     * @Serializer\Exclude
     */
    private $newTranslations;

    /**
     * currentLocale is a non persisted field configured during postLoad event
     *
     * @Serializer\Exclude
     */
    private $currentLocale;
}
