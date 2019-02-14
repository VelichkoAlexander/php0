<?php
/**
 * Generic_Sniffs_Methods_OpeningMethodBraceBsdAllmanSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: OpeningFunctionBraceBsdAllmanSniff.php,v 1.8
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * There is some constants
 *
 * @file dz0.php
 */

CONST TEST_CONSTANTA = 'asd';
$user_name = 'Igor';

/**
 * Description.
 *
 * @return string
 */
function Show_something()
{
    return 'SOMETHING';
}

if (1==1) {
    echo 'hi';
}
