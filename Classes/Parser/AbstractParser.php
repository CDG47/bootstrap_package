<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace BK2K\BootstrapPackage\Parser;

/**
 * BrandingService
 */
abstract class AbstractParser implements ParserInterface
{
    /**
     * @param string $extension
     * @return bool
     */
    public function supports($extension)
    {
        return false;
    }

    /**
     * @param string $file
     * @param array $settings
     * @return string
     */
    public function compile($file, $settings)
    {
        return $file;
    }
}
