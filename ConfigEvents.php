<?php

declare(strict_types=1);

/*
 * This file is part of the Bartacus project, which integrates Symfony into TYPO3.
 *
 * Copyright (c) Emily Karisch
 *
 * The BartacusBundle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * The BartacusBundle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with the BartacusBundle. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Bartacus\Bundle\BartacusBundle;

/**
 * Contains all events thrown in the config loader.
 */
final class ConfigEvents
{
    /**
     * The ADDITIONAL_CONFIGURATION event occurs at the very beginning
     * when the AdditionalConfiguration.php is parsed.
     *
     * Useful to modify the $GLOBALS['TYPO3_CONF_VARS'] or load TypoScript.
     *
     * @Event("Symfony\Component\EventDispatcher\Event")
     */
    public const ADDITIONAL_CONFIGURATION = 'bartacus.config.additional_configuration';

    /**
     * The REQUEST_MIDDLEWARES event occurs at when the request middlewares
     * of the app extension are loaded.
     *
     * @Event("Bartacus\Bundle\BartacusBundle\Event\RequestMiddlewaresEvent")
     */
    public const REQUEST_MIDDLEWARES = 'bartacus.config.request_middlewares';
}
