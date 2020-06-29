<?php

/**
 * @see https://www.baidu.com
 */
function dummy() {}

$ref = new ReflectionFunction('dummy');
$doc = $ref->getDocComment();

$matches = [];
preg_match('/@see(.*)(\\r\\n|\\r|\\n)/U', $doc, $matches);

echo $matches[1] . PHP_EOL;