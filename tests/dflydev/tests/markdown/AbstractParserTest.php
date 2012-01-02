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

abstract class AbstractParserTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * Create a markdown parser.
     * @return \dflydev\markdown\IMarkdownParser
     */
    abstract public function createParser();

    /**
     * Configure a Markdown parser for a specific tab width
     * @param \dflydev\markdown\IMarkdownParser $markdownParser
     */
    abstract public function configureTabWidth(\dflydev\markdown\IMarkdownParser $markdownParser, $width);

    /**
     * Simple test to ensure that parser can be created and most basic of
     * Markdown can be transformed.
     */
    public function testCreate()
    {
        $markdownParser = $this->createParser();
        $html = $markdownParser->transformMarkdown('#Hello World');
        $this->assertEquals("<h1>Hello World</h1>\n", $html, 'Simple H1 works');
    }

    /**
     * Test tab width for code blocks
     */
    public function testTabWidth()
    {
        $markdownParser = $this->createParser();
        $html = $markdownParser->transformMarkdown('    Hello World');
        $this->assertEquals("<pre><code>Hello World\n</code></pre>\n", $html, 'Default 4 space tab code block works');
        $this->configureTabWidth($markdownParser, 6);
        $html = $markdownParser->transformMarkdown('    Hello World');
        $this->assertEquals("<p>Hello World</p>\n", $html, 'Default 4 space tab code block not triggered when tab width set to 6');
        $html = $markdownParser->transformMarkdown('      Hello World');
        $this->assertEquals("<pre><code>Hello World\n</code></pre>\n", $html, 'Setting 6 space tab code block works');
    }

}
