<?php

/**
 * DOMCdataSection.
 * The DOMCdataSection inherits from DOMText for textural representation of CData constructs.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domcdatasection.php
 */
class DOMCdataSection extends DOMText
{
    /**
     * __construct.
     * Constructs a new DOMCdataSection object.
     *
     * @param string $value
     *
     * @see http://php.net/manual/en/domcdatasection.construct.php
     */
    public function __construct(string $value)
    {
    }

    /* Inherited methods */
    //public function DOMText::isWhitespaceInElementContent(void): bool
    //public function DOMText::splitText(int $offset): DOMText
}
