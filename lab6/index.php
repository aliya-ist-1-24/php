<?php

// 1. explode()
echo "<h2>explode()</h2>";
$text = "red,green,blue";
$array = explode(",", $text);
print_r($array);

// 2. implode()
echo "<h2>implode()</h2>";
$array = ["cat", "dog", "bird"];
echo implode(" - ", $array);

// 3. trim()
echo "<h2>trim()</h2>";
$text = "   Programming   ";
echo trim($text);

// 4. rtrim()
echo "<h2>rtrim()</h2>";
$text = "Computer   ";
echo rtrim($text);

// 5. ltrim()
echo "<h2>ltrim()</h2>";
$text = "   Internet";
echo ltrim($text);

// 6. md5()
echo "<h2>md5()</h2>";
$password = "mypassword";
echo md5($password);

// 7. sha1()
echo "<h2>sha1()</h2>";
$text = "Security";
echo sha1($text);

// 8. nl2br()
echo "<h2>nl2br()</h2>";
$text = "First line\nSecond line";
echo nl2br($text);

// 9. str_replace()
echo "<h2>str_replace()</h2>";
$text = "I like Java";
echo str_replace("Java", "PHP", $text);

// 10. str_ireplace()
echo "<h2>str_ireplace()</h2>";
$text = "I LOVE PROGRAMMING";
echo str_ireplace("programming", "coding", $text);

// 11. strip_tags()
echo "<h2>strip_tags()</h2>";
$text = "<h1>Title</h1> <p>Text</p>";
echo strip_tags($text);

// 12. strlen()
echo "<h2>strlen()</h2>";
$text = "Database";
echo strlen($text);

// 13. mb_strlen()
echo "<h2>mb_strlen()</h2>";
$text = "Кыргызстан";
echo mb_strlen($text);

// 14. mb_strpos()
echo "<h2>mb_strpos()</h2>";
$text = "Learning PHP language";
echo mb_strpos($text, "PHP");

// 15. mb_strtolower()
echo "<h2>mb_strtolower()</h2>";
$text = "HELLO STUDENTS";
echo mb_strtolower($text);

// 16. mb_strtoupper()
echo "<h2>mb_strtoupper()</h2>";
$text = "web development";
echo mb_strtoupper($text);

// 17. mb_substr()
echo "<h2>mb_substr()</h2>";
$text = "Information Technology";
echo mb_substr($text, 0, 11);

// 18. htmlspecialchars()
echo "<h2>htmlspecialchars()</h2>";
$text = "<b>Important message</b>";
echo htmlspecialchars($text);

// 19. htmlspecialchars_decode()
echo "<h2>htmlspecialchars_decode()</h2>";
$text = "&lt;i&gt;Example text&lt;/i&gt;";
echo htmlspecialchars_decode($text);

// 20. htmlentities()
echo "<h2>htmlentities()</h2>";
$text = "<u>Underlined text</u>";
echo htmlentities($text);

?>