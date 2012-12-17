<?php

/*
 * This file is a part of the PHP Markdown library.
 *
 * (c) Dragonfly Development Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DflyDev\Markdown;

/**
 * Provides an interface of what a Markdown parser in PHP can do
 */
interface IParser {

    /**
     * Transform Markdown text to HTML.
     * @param string $text The Markdown text to be transformed
     * @return string Returns the generated HTML text.
     */
    public function transform($text);

}