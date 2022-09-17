<!DOCTYPE html>
<html>
<head>
  <title>PHP still suck.</title>
</head>
<body>


<?php
echo "<pre>41) Tao bang phep nhan toi 6*6</pre>";

echo "<table>";
for ($i = 1; $i <= 6; $i++) {
  echo "<tr>";
  for ($j = 1; $j <= 6; $j++) {
    echo "<td>".($i * $j)."</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>

<?php
echo "<pre>42) Tim ki tu khong lap lai trong chuoi</pre>";

function find_non_repeat($word) {
  for ($i = 0; $i < strlen($word); $i++) {
    if (substr_count($word, substr($word, $i, 1)) == 1) {
      return substr($word, $i, 1);
    }
  }
}

?>

<?php
echo "<pre>43) Nhan thanh phan len chinh no voi tat ca thanh phan trong danh sach</pre>";

function multiply_two_lists($x, $y) {
  $a = explode(' ', trim($x));
  $b = explode(' ', trim($y));

  foreach($a as $key => $value){
      $output[$key] = $a[$key] * $b[$key];
  }

  return implode(' ', $output);
}
?>

<?php
echo "<pre>44) Tinh tong cac cap so da duoc sap xep theo chieu tang voi kich thuoc cua cap duoc dinh san</pre>";

function find_Pairs($numbers, $pair_size) {
  $numbers_pairs = "";

  for ($i = 0; $i < count($numbers); $i++) {
     for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] + $numbers[$j] == (int)$pair_size) {
           $numbers_pairs .= $numbers[$i].",".$numbers[$j].";";
        }
     }
  }
  return $numbers_pairs;
}
?>

<?php
echo "<pre>45) Tinh tong cua tat ca cac chu so trong mot so</pre>";

function digits_sum($nums) {
  $sum = 0;

  for ($i = 0; $i < strlen($nums); $i++) {
    $sum += $nums[$i];
  }

  return $sum;
}
?>

<?php
echo "<pre>46) Lay chieu cao cua 3 toa nha cao nhattheo chieu giam dan</pre>";

$buildings = array(100, 120, 90, 50, 30);

rsort($buildings);

print("Top 3 toa nha cao nhat:");
echo "<p>".$heights[0]."</p>";
echo "<p>".$heights[1]."</p>";
echo "<p>".$heights[2]."</p>";
?>

<?php
echo "<pre>47) Tinh so chu so cua tong 2 chu so</pre>";

function num_digits($a, $b) {
  return strlen(strval($a + $b));
}
?>

<?php
echo "<pre>48) Kiem tra xem ba so nguyen co the la ba canh cua tam giac hay khong, in 'yes'/'no' tuong ung</pre>";

function triangle_check($a, $b, $c) {
  $a *= $a; $b *= $b; $c *= $c;
  if($a + $b == $c || $a + $c == $b || $b + $c == $a) {
    echo "Yes";
  } else {
    echo "No";
  }
}
?>

<?php
echo "<pre>49) Tim gia tri cua x va y voi a, b, c, d, e va f duoc dinh san</pre>";

// #TODO
?>

<?php
echo "<pre>50) Tinh tien theo yeu cau (vay 100000$, moi thang tang 5% xong lam tron len moi 1000)</pre>";

function($n) {
  $debt = 100000;

  for($i = 0; $i < $n; $i++){
    $debt = ceil(($debt * 1.05) / 1000) * 1000;
  }

  return $debt;
}
?>

<?php
echo "<pre>51) Doc gia tri n nguoi dung nhap vao va tim so nhom 4 so nguyen co mot chu so sao cho tong cua chung bang n</pre>";

echo "Hay nhap n: ";
$int_n = intval(trim(fgets(STDIN))));

$count = 0;
for($i = 0; $i < 10; $i++) { 
  for($j = 0; $j < 10; $j++) { 
    for($k = 0; $k < 10; $k++) { 
      for($l = 0; $l < 10; $l++) { 
        if ($i + $j + $k +$l === $int_n) {
          $count++;
        }
      }
    }
  }
}

echo $count;
?>

<?php
echo "<pre>52) Tim so so phan to nho hon hoc bang n</pre>";

function find_le_prime($n) {
  if($n == 1) { return 1 };

  $primes = array();
  for($j = 2; $j <= $n/2; $j++){
    if($n % $j == 0) {
      if($j > $n) {
        return $primes[0];
      }
      array_unshift($primes, $j);
    }
  }
}
?>

<?php
echo "<pre>53) </pre>";

// #TODO
?>

<?php
echo "<pre>54) Tinh tong, neu tong co nhieu hon hoac bang 80 ki tu, in 'overflow'</pre>";

function bai54($a, $b) {
  $sum = $a + $b;
  if(strlen(strval($sum))) >= 80) {
    echo "overflow";
  } else {
    return $sum;
  }
}
?>

<?php
echo "<pre>55) Viet function nhan 6 gia tri va sap xep no theo thu tu giam dan</pre>";

function sort_de($a, $b, $c, $d, $e, $f) {
  return rsort(array($a, $b, $c, $d, $e, $f));
}
?>

<?php
echo "<pre>56) Kiem tra xem hai duong thang co song song nhau khong</pre>";

function parallel_check($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4) {
  $pq = $x2 - $x1 !== 0.0 ? ($y2 - $y1) / ($x2 - $x1) : INF
  $rs = $x4 - $x3 !== 0.0 ? ($y4 - $y3) / ($x4 - $x3) : INF

  echo $pq === $rs ? 'Hai duong thang song song.' : 'hai duong thang khong song song';
}
?>

<?php
echo "<pre>57) </pre>";

// #TODO
?>

<?php
echo "<pre>58) </pre>";

// #TODO
?>

<?php
echo "<pre>59) </pre>";

// #TODO
?>

<?php
echo "<pre>60) </pre>";

// #TODO
?>
