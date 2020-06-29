<?php

<<Params('Foo', 'argument')>>
<<See('https://www.baidu.com')>>
function dummy($argument) {}

$ref = new ReflectionFunction('dummy');

print_r($ref->getAttributes('See')[0]->getName());
echo PHP_EOL;
print_r($ref->getAttributes('See')[0]->getArguments()[0]);
echo PHP_EOL;

print_r($ref->getAttributes('Params')[0]->getArguments());

<<PhpAttribute>>
class Person {
	public function __construct(
		public string $name,
		public int $age
	) {
		printf("I am %s, I am %d years old\n", $this->name, $this->age);
	}
}

<<Person('Mars', 33)>>
function bar() {}

$ref = new ReflectionFunction('bar');
$ref->getAttributes('Person')[0]->newInstance();