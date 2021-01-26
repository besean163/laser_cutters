<?php

	$productProperties = [
		[
			"ru_name" =>"Наименование",
			"name" => "name",
			"check" => [
				"notEmpty",
				"notNull"
			],
		],
		[
			"ru_name" => "Цена",
			"name" =>"price",
			"check" => [
				"notEmpty",
				"notNull",
				"isNumber"
			],
		],
		[
			"ru_name" => "Ширина",
			"name" => "width",
			"check" => [
				"notEmpty",
				"notNull",
				"isNumber"
			],
		],
		[
			"ru_name" => "Высота",
			"name" => "height",
			"check" => [
				"notEmpty",
				"notNull",
				"isNumber"
			],
		],
		[
			"ru_name" => "Длина",
			"name" => "length",
			"check" => [
				"notEmpty",
				"notNull",
				"isNumber"
			],
		],
		[
			"ru_name" => "Имя в базе изделий",
			"name" => "baseName",
			"check" => [
				"notEmpty",
				"notNull"
			],
		],
	];

?>