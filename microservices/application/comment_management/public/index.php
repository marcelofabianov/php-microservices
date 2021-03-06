<?php
/**
 * This file is part of comment_management
 * User: Sinan TURGUT <mail@sinanturgut.com.tr>
 * Date: 24.06.2019
 * php version 7.2
 *
 * @category Assessment
 * @package  CommentManagement
 * @author   Sinan TURGUT <mail@sinanturgut.com.tr>
 * @license  See LICENSE file
 * @link     https://dev.sinanturgut.com.tr
 */


require_once __DIR__.'/../vendor/autoload.php';


Sentry\init(['dsn' => 'https://8c9d7d4e841c421482d60533dc100833@sentry.io/1491710' ]);

$app = new CommentManagement\Application();
$app->run();
