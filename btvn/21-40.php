<!DOCTYPE html>
<html>
<head>
  <title>PHP still suck.</title>
</head>
<body>


<?php
echo "<pre>21) Viet function kiem tra xem so lon hon 30, 20 hay 10</pre>";

function bai20($i) {
  $j = $i > 30 ? 30: ($i > 20 ? 20 : ($i > 10 ? 10 : false)); 
  if($j) { echo $i." > ".$j; }
}
?>

<?php
echo "<pre>22) Lay url day du</pre>";

echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php
echo "<pre>23) So sánh phiên bản PHP</pre>";

if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
  echo 'Dang dung PHP >= 6.0.0. Phien ban hien tai: '.PHP_VERSION;
} else if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
  echo 'Dang dung PHP >= 5.3.0. Phien ban hien tai: '.PHP_VERSION;
} else if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
  echo 'Dang dung PHP 5. Phien ban hien tai: '.PHP_VERSION;
} else if (version_compare(PHP_VERSION, '5.0.0', '<')) {
  echo 'Dang o thoi ki do da. Phien ban hien tai: '.PHP_VERSION;
}
?>

<?php
echo "<pre>24) Hien thi chu so huu cua file nay</pre>";

echo 'Owner: '.get_current_user();
?>

<?php
echo "<pre>25) Lay dia chi thu muc goc re (root dir) cua file dang chay nhu da duoc dinh trong cai dat cua server</pre>";

echo getenv('DOCUMENT_ROOT');
?>

<?php
echo "<pre>26) Lay thong in ve he dieu hanh dang chay</pre>";

echo php_uname()."\n".PHP_OS;
?>

<?php
echo "<pre>27) Hien thi tat ca credits cua PHP</pre>";

phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
?>

<?php
echo "<pre>28) Lay dia chi thu muc cua file tam thoi</pre>";

echo tempnam(sys_get_temp_dir(), 'foo');
?>

<?php
echo "<pre>29) Lay ten functions cua module</pre>";

echo "<pre>";
print_r(get_extension_funcs("JSON"));
echo "</pre><br><pre>";
print_r(get_extension_funcs("XML"));
echo "</pre>";
?>

<?php
echo "<pre>30) Lay thoi diem cuoi cung thay doi trang web hien tai</pre>";

echo date("F d Y H:i:s.", getlastmod());
?>

<?php
echo "<pre>31) Trao 2 gia tri</pre>";

$var_foo = true;
$var_bar = false;

$var_temp = $var_foo;
$var_foo = $var_bar;
$var_bar = $var_temp;
?>

<?php
echo "<pre>32) Kiem tra xem gia tri co phai so armstrong hay ko, neu ko tra 'false'</pre>";

function armstrong_check($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;

  for ($i = 1; $i <= $sl; $i++) {
    $sum = $sum + pow((string)$num{$i}, $sl);
  }

  return (string)$sum == (string)$num);
}
?>

<?php
echo "<pre>33) Viet function doi chu so thanh con so</pre>";

function word_to_digit($string) {
  $words = explode(';', $string);
  $digit = '';

  foreach($words as $word) {
    switch(trim($word)) {
      case 'zero':
        $digit .= '0';
        break;
      case 'one':
        $digit .= '1';
        break;
      case 'two':
        $digit .= '2';
        break;
      case 'three':
        $digit .= '3';
        break;
      case 'four':
        $digit .= '4';
        break;
      case 'five':
        $digit .= '5';
        break;
      case 'six':
        $digit .= '6';
        break;
      case 'seven':
        $digit .= '7';
        break;
      case 'eight':
        $digit .= '8';
        break;
      case 'nine':
        $digit .= '9';
        break;
    }
  }

  return $digit;
}
?>

<?php
echo "<pre>34) Kiem tra xem 2 bit o vi tri khac nhau co trung nhau ko</pre>";

function check_bit($num, $pos1, $pos2) {
  $bin_num = strrev(decbin($num));

  return $bin_num[$pos1 - 1] == $bin_num[$pos2 - 1]);
}
?>

<?php
echo "<pre>35) Bo gia tri bi lap lai trong danh sach</pre>";

$list = array(1,1,2,2,3,4,5,5);

print_r(array_values(array_unique($list)));
?>

<?php
echo "<pre>36) Kiem tra xem chuoi co ton tai o cuoi mot chuoi khac</pre>";

function str2_in_str1($string1, $string2) {
  return substr($string1, strlen($string1) - strlen($string2), strlen($string2)) == $string2;
}
?>

<?php
echo "<pre>37) Tinh tong cua cac so nguyen to nho hon 100</pre>";

$primes = array();
$is_prime_no = false;

for ($i = 2; $i < 100; $i++) {
  $is_prime_no = true; 
  for ($j = 2; $j <= $i/2; $j++) {
    if ($i % $j == 0) {
      $is_prime_no = false;
      break;
    }
  }
  if ($is_prime_no) {
    array_push($primes, $i);
  }
  if (count($primes) == 100) {
    break;
  }
}

echo array_sum($primes)
?>

<?php
echo "<pre>38) Kiem tra xem Email co hop le</pre>";

function email_check($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>

<?php
echo "<pre>39) Lay kich truoc cua mot file</pre>";

echo filesize("dia/chi/den/file.txt");
?>

<?php
echo "<pre>40) Tim so du cua hai so (bang mot cach ngu ngoc)</pre>";

function mod_wo_mod($a, $b) {
   return $m - $n * (int)($a/$b);
}?>

</body>
</html>
