<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/var-export-php
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

/**
 * Exports variable as PHP file code.
 *
 * @param mixed $var Variable to export
 * @return string
 */
function var_export_php($var): string
{
    return '<?php return ' . var_export($var, true) . ';';
}
