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

use MarkdownExtraParser;

class MarkdownExtraParserTest extends MarkdownParserTest
{

    protected $configKeyTabWidth = MarkdownExtraParser::CONFIG_TAB_WIDTH;

    /**
     * Create a markdown parser.
     * @param array $configuration Optional configuration
     * @return \dflydev\markdown\IMarkdownParser
     */
    public function createParser($configuration = null)
    {
        if ($configuration !== null) {
            return new MarkdownExtraParser($configuration);
        }
        return new MarkdownExtraParser();
    }
    
}
