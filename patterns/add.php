<?php

	include_once "productProperties.php";
	include_once "p_add.php";

	/*echo "<pre>";
	var_dump($_POST);
	var_dump($_GET);
	echo "</pre>";*/

	$errors = checkInput($_POST, $productProperties);

	if(!empty($errors)){
		echo "<pre>";
		var_dump($errors);
		echo "</pre>";
		echo "ПОЛЬЗОВАТЕЛЬ НЕ ДОБАВЛЕН.";
	}
	else{
		echo "Пользовать добавлен.";
	}

	function checkInput(array $input, array $lookArray){
		$errors = [];
		foreach ($input as $key => $value) {

			$name = '';
			$checkers = [];

			foreach ($lookArray as $la_value) {
				if($la_value['name'] == $key){
					$checkers = $la_value['check'];
					$la_value['value'] = $value;
				}
			}
			/*echo "<pre>";
			var_dump($checkers);
			echo "</pre>";*/

			if(array_search('notEmpty', $checkers) !== false){
				if(isEmpty($value)){
					$name = getName($key, $lookArray);
					$errors[] = "'{$name}' имеет пустую строку.";
				}
			}

			if(array_search('notNull', $checkers) !== false){
				if(isNull($value)){
					$name = getName($key, $lookArray);
					$errors[] = "'{$name}'' не имеет значения.";
				}
			}

			if(array_search('isNumber', $checkers) !== false){
				if(!isNumber($value)){
					$name = getName($key, $lookArray);
					$errors[] = "'{$name}' должно быть числом.";
				}
			}

			

			$name = '';
			$checkers = [];
		}
		return $errors;
	}

	function getName($lookValue, $arrayForLook){
		foreach ($arrayForLook as $p_value) {
			if($lookValue == $p_value['name']){
				return $p_value['ru_name'];
			}
		}
	}

	function isEmpty($string){
		if($string == ""){
			return true;
		}
		return false;
	}

	function isNull($value){
		if($value === null){
			return true;
		}
		return false;
	}

	function isNumber($value){
		if(is_numeric($value)){
			return true;
		}
		return false;
	}


?>