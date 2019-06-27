<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @noinspection PhpUnhandledExceptionInspection
 *
 * @link        https://github.com/webino/var-export-php
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

use Tester\Assert;
use Tester\Environment;

Environment::setup();


$obj = new class()
{
    use VarExportPhpTrait;

    public function __invoke(): string
    {
        $var = ['foo' => ['bar' => 'baz']];
        return $this->varExportPhp($var);
    }
};


$code = $obj();


Assert::matchFile('VarExportPhp.expected', $code);
