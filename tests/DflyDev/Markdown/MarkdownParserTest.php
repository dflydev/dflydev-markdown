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

class MarkdownParserTest extends \PHPUnit_Framework_TestCase
{
    
    protected $configKeyTabWidth = MarkdownParser::CONFIG_TAB_WIDTH;

    private $object;

    public function setUp()
    {
        $this->object = new MarkdownParser();
    }

    /**
     * Simple test to ensure that parser can be created and most basic of
     * Markdown can be transformed.
     */
    public function testCreate()
    {
        $html = $this->object->transformMarkdown('#Hello World');
        $this->assertEquals("<h1>Hello World</h1>\n", $html, 'Simple H1 works');
    }
    
    /**
     * Test tab width for code blocks
     */
    public function testTabWidth()
    {
        $html = $this->object->transformMarkdown('    Hello World');
        $this->assertEquals("<pre><code>Hello World\n</code></pre>\n", $html, 'Default 4 space tab code block works');
        $this->configureTabWidth($this->object, 6);
        $html = $this->object->transformMarkdown('    Hello World');
        $this->assertEquals("<p>Hello World</p>\n", $html, 'Default 4 space tab code block not triggered when tab width set to 6');
        $html = $this->object->transformMarkdown('      Hello World');
        $this->assertEquals("<pre><code>Hello World\n</code></pre>\n", $html, 'Setting 6 space tab code block (via method) works');
        $this->object = $this->createParser(array($this->configKeyTabWidth => 8));
        $html = $this->object->transformMarkdown('        Hello World');
        $this->assertEquals("<pre><code>Hello World\n</code></pre>\n", $html, 'Setting 8 space tab code block (via constructor) works');
    }

    /**
     * Configure a Markdown parser for a specific tab width
     * @param \dflydev\markdown\MarkdownParser $markdownParser
     * @param integer $width
     */
    protected function configureTabWidth(MarkdownParser $markdownParser, $width)
    {
        $markdownParser->configureMarkdownParser($this->configKeyTabWidth, $width);
    }
    
}
