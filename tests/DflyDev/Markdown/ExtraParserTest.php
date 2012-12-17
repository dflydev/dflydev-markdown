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

class ExtraParserTest extends BaseParserTest
{

    protected $configKeyTabWidth = ExtraParser::CONFIG_TAB_WIDTH;

    protected function setUp()
    {
        $this->object = new ExtraParser();
    }
    
}
