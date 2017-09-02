<?php

/**
 * GearmanException.
 *
 * @property string $message
 * @property int $code
 * @property string $file
 * @property int $line
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.gearmanexception.php
 */
class GearmanException extends Exception
{
    protected $message;
    protected $code;
    protected $file;
    protected $line;

    /* Inherited methods */
    //final public function getMessage(): string
    //final public function getPrevious(): Throwable
    //final public function getCode(): mixed
    //final public function getFile(): string
    //final public function getLine(): int
    //final public function getTrace(): array
    //final public function getTraceAsString(): string
    //public function __toString(): string
    //final private function __clone(): void
}
