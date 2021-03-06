<?php

/**
 * XMLDiff.
 * Base abstract class for all the comparsion classes in the extension.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.xmldiff-base.php
 */

namespace XMLDiff;

abstract class Base
{
    /**
     * __construct.
     * Constructor.
     *
     * @param string $nsname
     *
     * @see http://php.net/manual/en/xmldiff-base.construct.php
     */
    public function __construct(string $nsname)
    {
    }

    /**
     * diff.
     * Produce diff of two XML documents.
     *
     * @param mixed $from
     * @param mixed $to
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/xmldiff-base.diff.php
     */
    public function diff(mixed $from, mixed $to): mixed
    {
    }

    /**
     * merge.
     * Produce new XML document based on diff.
     *
     * @param mixed $src
     * @param mixed $diff
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/xmldiff-base.merge.php
     */
    public function merge(mixed $src, mixed $diff): mixed
    {
    }
}
