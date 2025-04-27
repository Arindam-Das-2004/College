<!-- string in php-->
<?php
$a=10;
$b=20;
$c=$a +$b;
echo "<br>hello world";
echo '<br>Hello World';
echo '<br> Sum is $c'; // if we use single cotation it is shows as a string
echo "<br> Sum id $c";// But if we use double cotation it find the assign value and print the original thing not sum..


//Notes: Php String builtin function:--

//1. PHP strlen() Function: This will return the number of characters of present in the string along with whitesspaces.
echo "<br>For example:<br> ";
$s="Brainware university";//25
echo strlen($s);

//2. PHP str_word_count() Function: This function will return the total  universitynumber of words in the String.
echo "<br> Example<br>";
$s1="I am a stident of Brainware University:";
echo str_word_count($s1);//7

//3. PHP strpos() Function: This function searchs for a specific text within a string. If a match is found,the function returns the character position of the first match.If no match is found,the returns the character postion of the first match.If no match is found,it will return FALSE.

$s2="I am at BWU";
echo strpos($s2,"BWU");
var_dump(strpos($s,"hello<br>"));//8bool(false)

//4. PHP strtolower() Function: It will convert all the characters of a string to lower case.
$s3="BRAINWARE UNIVERSITY";
echo "<Br>";
echo strtolower($s3);//brainware university

// 5. PHP strtoupper() Function: It will convert all the charactor of the string upper case: 
    $s4="brainware university";
    echo "<Br>";
    echo strtoupper($s4);//BRAINWARE UNIVERSITY

// 6. PHP ucfirst() Function: It will convert only the first character of the giver string to upper case.

$s5="arindam";
echo "<Br>";
echo ucfirst($s5);


// 7. PHP lcfirst() Function: It will convert only the first character of a giver string to lower case.

$s6="BRAINWARE";
echo "<Br>";
echo lcfirst($s6);//bRAINWARE

//8. PHP ucwords() Function:It will convert only the first character of each word in the given string to uppercase.

$s7="brainware university";
echo "<Br>";
echo ucwords($s7);//Brainware University


//9. PHP str_replace() Function: This function replaces some characters with some other characters in a given string. The function takes three arguments.The 3rd argument is the original strings,the first argument is the string which has to be replaced, and the ssecond argument replace the string.

$s8="hello bwu";
echo "<Br>";
echo str_replace("bwu","world",$s8);//hello world

// 10 PHP strrev() Function: This function is used to reverse a string.
$s9="brainware";
echo "<Br>";
echo strrev($s9);//erawniarb

// 11 PHP trim() Function: This function removes any whitespaces from the beginning and the end of the string.
$s10="     Brainware   University      ";
echo strlen($s10)."<br>";
echo trim($s10);
echo strlen($s10);

?>