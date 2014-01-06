PHP Markdown & Extra
====================

An updated and stripped version of the original [PHP Markdown](http://michelf.com/projects/php-markdown/)
by [Michel Fortin](http://michelf.com/). Works quite well with PSR-0
autoloaders and is [Composer](http://packagist.org/) friendly.

This Project Has Been Deprecated
================================

Thank you for your interest in contributing to this package. Unfortunately, **I
do not plan to continue maintaining this package.**

The original purpose of this package was to provide a way to get a PSR-0 and
Composer friendly port of Michel Fortin's PHP Markdown library on Packagist.
Michel was originally uninterested in Composer and did not want to make changes
and said I was free to fork and maintain a special Composer package.

In January of 2013 (or around then) Michel finally joined the Composer
bandwagon. More details can be found [here][1]. This means that the major reason
this port existed (to be a Composer friendly port) effectively went away. This
corresponded with the 1.3 release of PHP Markdown.

Additionally, other versions of PHP Markdown parsers have come into existence
and are quite nice.

Please feel free to continue to use it as-is but if you are starting a new
project I would recommend finding another library. If you have a project already
depending on this package, I would recommend planning to migrate to something
that is better maintained.

Thanks for your support and using this library over the years.

---


Changes from the official PHP Markdown & Extra
----------------------------------------------

The initial pass at updating PHP Markdown & Extra left the core of
the code more or less intact but the changes to the organization
and naming were quite substantial. This effectively makes this package
a hard fork from Markdown 1.0.1n and MarkdownExtra 1.2.4.

Updated in the following ways:

 * Moved parser classes into their own files
 * Using PHP 5.3 namespaces
 * Following [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) standards
 * Replaced `@define` configuration variables with class `const` variables
 * Integrated with [Travis CI](http://travis-ci.org/)
 * Made [Composer](http://packagist.org/) friendly

Stripped in the following ways:

 * No more embedded plugin code (WordPress, bBlog, etc.)
 * No more top level function calls (`Markdown()`, etc.)

Last synced with:

 * PHP Markdown v1.0.1o
 * PHP Markdown Extra v1.2.5


Requirements
------------

 * PHP 5.3+

Installation
------------

To add this package as a local, per-project dependency to your project, simply add a
dependency on `dflydev/markdown` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
version 1.0 of this package:

    {
        "require": {
            "dflydev/markdown": "1.0.*"
        }
    }

Usage
-----

Simple usage for the standard Markdown ([details](http://michelf.com/projects/php-markdown/)) parser:

    <?php
    use dflydev\markdown\MarkdownParser;

    $markdownParser = new MarkdownParser();

    // Will return <h1>Hello World</h1>
    $markdownParser->transformMarkdown("#Hello World");

Simple usage for the Markdown Extra ([details](http://michelf.com/projects/php-markdown/extra/)) parser:

    <?php
    use dflydev\markdown\MarkdownExtraParser;

    $markdownParser = new MarkdownExtraParser();

    // Will return <h1>Hello World</h1>
    $markdownParser->transformMarkdown("#Hello World");


License
-------

This library is licensed under the New BSD License - see the LICENSE file for details.


Community
---------

If you have questions or want to help out, join us in the
[#dflydev](irc://irc.freenode.net/#dflydev) channel on irc.freenode.net.


Not Invented Here
-----------------

The original [PHP Markdown](http://michelf.com/projects/php-markdown/) was
quite excellent but was not as easy to use as it could be in more modern PHP
applications. Having started to use [Composer](http://packagist.org/) for a
few newer applications that needed to transform Markdown, I decided to strip
and update the original PHP Markdown so that it could be more easily managed
by the likes of Composer.

All of the initial work done for this library (which I can only assume
was quite substantial after having looked at the code) was done by
[Michel Fortin](http://michelf.com/) during the original port from Perl to
PHP.

If you do not need to install PHP Markdown by way of Composer or need to
leverage PSR-0 autoloading, I suggest you continue to use the official and
likely more stable and well used original version of
[PHP Markdown](http://michelf.com/projects/php-markdown/)

[1]: https://github.com/michelf/php-markdown/issues/31
