<?php
/**
 * Related Record Module Factory Class
 *
 * PHP version 7
 *
 * Copyright (C) The National Library of Finland 2015.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category VuFind
 * @package  Related_Records
 * @author   Ere Maijala <ere.maijala@helsinki.fi>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:building_a_related_record_module Wiki
 */
namespace Finna\Related;

use Zend\ServiceManager\ServiceManager;

/**
 * Related Record Module Factory Class
 *
 * @category VuFind
 * @package  Related_Records
 * @author   Ere Maijala <ere.maijala@helsinki.fi>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:building_a_related_record_module Wiki
 *
 * @codeCoverageIgnore
 */
class Factory
{
    /**
     * Factory for Nothing module.
     *
     * @param ServiceManager $sm Service manager.
     *
     * @return Similar
     */
    public static function getNothing(ServiceManager $sm)
    {
        return new Nothing();
    }

    /**
     * Factory for SimilarDeferred module.
     *
     * @param ServiceManager $sm Service manager.
     *
     * @return Similar
     */
    public static function getSimilarDeferred(ServiceManager $sm)
    {
        return new SimilarDeferred();
    }
}
