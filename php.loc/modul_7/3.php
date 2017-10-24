<? 
	$fullName = "Шевченко Тарас Григорьевич";

	echo trim(strstr($fullName, " "))." ".substr($fullName, 0, strpos($fullName, " "))."<hr />";

	$str = "abcdc b A";
	$str = str_replace(" ", "", $str);
	$str = mb_strtolower($str);
	echo $str.": ";
	echo $str==strrev($str) ? "Palindrome!" : "Not Palindrome!" ;

?>
