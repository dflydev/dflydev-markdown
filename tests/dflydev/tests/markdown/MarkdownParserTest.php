<?php

/*
 * This file is a part of the PHP Markdown library.
 *
 * (c) Dragonfly Development Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\tests\markdown;

class MarkdownParserTest extends AbstractParserTest
{

    /**
     * (non-PHPdoc)
     * @see dflydev\tests\markdown.AbstractParserTest::createParser()
     */
    public function createParser()
    {
        return new \dflydev\markdown\MarkdownParser();
    }
    
    /**
     * (non-PHPdoc)
     * @see dflydev\tests\markdown.AbstractParserTest::configureTabWidth()
     */
    public function configureTabWidth(\dflydev\markdown\IMarkdownParser $markdownParser, $width)
    {
        $markdownParser->configureMarkdownParser(\dflydev\markdown\MarkdownParser::CONFIG_TAB_WIDTH, $width);
    }

}
