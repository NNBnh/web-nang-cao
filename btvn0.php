<h1>PHP suck!</h1>
<p>nnbnh.github.io</p>

<?php
echo "<pre>1)</pre>";

phpinfo();
?>

<?php
echo "<pre>2)</pre>";

echo "<p>Tomorrow I'll learn PHP global variables.</p>";
echo "<p>This is a bad command: del c:\\\\*.*</p>";
?>

<?php
echo "<pre>3)</pre>";

$var = "PHP Tutorial";
echo "
  <h3>".$var."</h3>
  <p>
    PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose
    scripting language. It is a cross-platform, HTML embedded server-side scripting language and is
    especially suited for web development.
  </p>
";
?>

<?php
echo "<pre>4)</pre>";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <h2>Please input your name:</h2>
  <input type="text" name="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo $_POST['fname'];
}
?>

<?php
echo "<pre>5)</pre>";

if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
    $ip_address = $_SERVER["HTTP_CLIENT_IP"];
} elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $ip_address = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else {
    $ip_address = $_SERVER["REMOTE_ADDR"];
}

echo $ip_address;
?>

<?php
echo "<pre>6)</pre>";

echo $_SERVER["HTTP_USER_AGENT"];
?>

<?php
echo "<pre>7)</pre>";

echo basename($_SERVER["PHP_SELF"]);
?>

<?php
echo "<pre>8)</pre>";

$url = parse_url("https://www.w3resource.com/php-exercises/php-basic-exercises.php");

echo "<ul>";
echo "<li>Scheme: ". $url["scheme"]. "</li>";
echo "<li>Host: ".   $url["host"].   "</li>";
echo "<li>Path: ".   $url["path"].   "</li>";
echo "</ul>"
?>

<?php
echo "<pre>9)</pre>";

function bai8($string) {
  return preg_replace('/(\b[a-z])/i', '<span style="color:red">\1</span>', $string);
}

echo bai8("PHP Tutorial");
?>

<?php
echo "<pre>10)</pre>";

if (!empty($_SERVER["HTTPS"])) {
  echo "https";
} else {
  echo "http";
}
?>

<?php
echo "<pre>11)</pre>";

// Uncomment de su dung: header("Location: https://www.w3resource.com");
?>

<?php
echo "<pre>12)</pre>";

if (filter_var("mail@example.com", FILTER_VALIDATE_EMAIL)) {
  echo $email." = Valid";
} else {
  echo $email." = Invalid";
}
?>

<?php
echo "<pre>13)</pre>";

$a = 1000;
$b = 1200;
$c = 1400;

echo "
  <table border=1 cellspacing=0 cellpading=0>
    <tr>
      <td style='color:blue'>Salary of Mr. A is</td>
      <td>$a$</td>
    </tr>
    <tr>
      <td style='color:blue'>Salary of Mr. B is</td>
      <td>$b$</td>
    </tr>
    <tr>
      <td style='color:blue'>Salary of Mr. C is</td>
      <td>$c$</td>
    </tr>
  </table>
";
?>

<?php
echo "<pre>14)</pre>";

echo "<pre>";
foreach (file("https://www.w3resource.com") as $line_number => $line) {
  echo $line_number." | ".htmlspecialchars($line)."\n";
}
echo "</pre>";
?>

<?php
echo "<pre>15)</pre>";

$current_file_name = basename($_SERVER["PHP_SELF"]);
$file_last_modified = filemtime($current_file_name);

echo date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>

<?php
echo "<pre>16)</pre>";

echo count(file(basename($_SERVER["PHP_SELF"])));
?>

<?php
echo "<pre>17)</pre>";

echo phpversion();
?>

<?php
echo "<pre>18)</pre>";

echo "<p>".date('h:i:s')."</p>";
sleep(5);
echo "<p>".date('h:i:s')."</p>";
?>

<?php
echo "<pre>19)</pre>";

$d = "A00";
for ($i = 1; $i <= 5; $i++) {
  echo "<p>".++$d."</p>";
}
?>

<?php
echo "<pre>20)</pre>";

echo $xxx;
print_r(error_get_last());
?>
