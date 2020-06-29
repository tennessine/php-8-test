<?php

declare (strict_types = 1);

final class User {
	public function __construct(
		public int $id,
		private string $name
	) {}
}

var_dump(new User(1, 'Foo'));