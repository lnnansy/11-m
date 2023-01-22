<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Практика 11.7</title>
</head>
<body>
<?php
$a1 = 0;
$b1 = 0;
$a2 = 0;
$b2 = 1;
$a3 = 1;
$b3 = 0;
$a4 = 1;
$b4 = 1;
$x1 = true;
$y1 = true;
$x2 = false;
$y2 = false;
$x3 = 1;
$y3 = 1;
$x4 = 0;
$y4 = 0;
$x5 = -1;
$y5 = -1;
$x6 = "1";
$y6 = "1";
$x7 = null;
$y7 = null;
$x8 = "php";
$y8 = "php";
?>
<h1>Практика 11.7</h1>
<h2>Таблица истинности PHP</h2>
<table>
<thead>
<tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
</thead>
<tbody>
<tr>
<td><?php echo $a1 ?></td>
<td><?php echo $b1 ?></td>
<td><?php echo var_dump(!$a1) ?></td>
<td><?php echo var_dump($a1 || $b1) ?></td>
<td><?php echo var_dump($a1 && $b1) ?></td>
<td><?php echo var_dump($a1 xor $b1) ?></td>
</tr>
<tr>
<td><?php echo $a2 ?></td>
<td><?php echo $b2 ?></td>
<td><?php echo var_dump(!$a2) ?></td>
<td><?php echo var_dump($a2 || $b2) ?></td>
<td><?php echo var_dump($a2 && $b2) ?></td>
<td><?php echo var_dump($a2 xor $b2) ?></td>
</tr>
<tr>
<td><?php echo $a3 ?></td>
<td><?php echo $b3 ?></td>
<td><?php echo var_dump(!$a3) ?></td>
<td><?php echo var_dump($a3 || $b3) ?></td>
<td><?php echo var_dump($a3 && $b3) ?></td>
<td><?php echo var_dump($a3 xor $b3) ?></td>
</tr>
<tr>
<td><?php echo $a4 ?></td>
<td><?php echo $b4 ?></td>
<td><?php echo var_dump(!$a4) ?></td>
<td><?php echo var_dump($a4 || $b4) ?></td>
<td><?php echo var_dump($a4 && $b4) ?></td>
<td><?php echo var_dump($a4 xor $b4) ?></td>
</tr>
</tbody>
</table>
<h2>Таблица c гибким сравнением == в PHP</h2>
<table class='dop-table'>
<thead>
<tr><th ></th><th >true</th><th >false</th><th >1</th><th >0</th><th >-1</th><th >"1"</th><th >null</th><th >"php"</th></tr>
</thead>
<tbody>
<tr>
<td><strong>true</strong></td>
<td><?php var_dump($x1 == $y1) ?></td>
<td><?php var_dump($x2 == $y1) ?></td>
<td><?php var_dump($x3 == $y1) ?></td>
<td><?php var_dump($x4 == $y1) ?></td>
<td><?php var_dump($x5 == $y1) ?></td>
<td><?php var_dump($x6 == $y1) ?></td>
<td><?php var_dump($x7 == $y1) ?></td>
<td><?php var_dump($x8 == $y1) ?></td>
</tr>
<tr>
<td><strong>false</strong></td>
<td><?php var_dump($x1 == $y2) ?></td>
<td><?php var_dump($x2 == $y2) ?></td>
<td><?php var_dump($x3 == $y2) ?></td>
<td><?php var_dump($x4 == $y2) ?></td>
<td><?php var_dump($x5 == $y2) ?></td>
<td><?php var_dump($x6 == $y2) ?></td>
<td><?php var_dump($x7 == $y2) ?></td>
<td><?php var_dump($x8 == $y2) ?></td>
</tr>
<tr>
<td><strong>1</strong></td>
<td><?php var_dump($x1 == $y3) ?></td>
<td><?php var_dump($x2 == $y3) ?></td>
<td><?php var_dump($x3 == $y3) ?></td>
<td><?php var_dump($x4 == $y3) ?></td>
<td><?php var_dump($x5 == $y3) ?></td>
<td><?php var_dump($x6 == $y3) ?></td>
<td><?php var_dump($x7 == $y3) ?></td>
<td><?php var_dump($x8 == $y3) ?></td>
</tr>
<tr>
<td><strong>0</strong></td>
<td><?php var_dump($x1 == $y4) ?></td>
<td><?php var_dump($x2 == $y4) ?></td>
<td><?php var_dump($x3 == $y4) ?></td>
<td><?php var_dump($x4 == $y4) ?></td>
<td><?php var_dump($x5 == $y4) ?></td>
<td><?php var_dump($x6 == $y4) ?></td>
<td><?php var_dump($x7 == $y4) ?></td>
<td><?php var_dump($x8 == $y4) ?></td>
</tr>
<tr>
<td><strong>-1</strong></td>
<td><?php var_dump($x1 == $y5) ?></td>
<td><?php var_dump($x2 == $y5) ?></td>
<td><?php var_dump($x3 == $y5) ?></td>
<td><?php var_dump($x4 == $y5) ?></td>
<td><?php var_dump($x5 == $y5) ?></td>
<td><?php var_dump($x6 == $y5) ?></td>
<td><?php var_dump($x7 == $y5) ?></td>
<td><?php var_dump($x8 == $y5) ?></td>
</tr>
<tr>
<td><strong>"1"</strong></td>
<td><?php var_dump($x1 == $y6) ?></td>
<td><?php var_dump($x2 == $y6) ?></td>
<td><?php var_dump($x3 == $y6) ?></td>
<td><?php var_dump($x4 == $y6) ?></td>
<td><?php var_dump($x5 == $y6) ?></td>
<td><?php var_dump($x6 == $y6) ?></td>
<td><?php var_dump($x7 == $y6) ?></td>
<td><?php var_dump($x8 == $y6) ?></td>
</tr>
<tr>
<td><strong>null</strong></td>
<td><?php var_dump($x1 == $y7) ?></td>
<td><?php var_dump($x2 == $y7) ?></td>
<td><?php var_dump($x3 == $y7) ?></td>
<td><?php var_dump($x4 == $y7) ?></td>
<td><?php var_dump($x5 == $y7) ?></td>
<td><?php var_dump($x6 == $y7) ?></td>
<td><?php var_dump($x7 == $y7) ?></td>
<td><?php var_dump($x8 == $y7) ?></td>
</tr>
<tr>
<td><strong>"php"</strong></td>
<td><?php var_dump($x1 == $y8) ?></td>
<td><?php var_dump($x2 == $y8) ?></td>
<td><?php var_dump($x3 == $y8) ?></td>
<td><?php var_dump($x4 == $y8) ?></td>
<td><?php var_dump($x5 == $y8) ?></td>
<td><?php var_dump($x6 == $y8) ?></td>
<td><?php var_dump($x7 == $y8) ?></td>
<td><?php var_dump($x8 == $y8) ?></td>
</tr>
</tbody>
</table>
<h2>Таблица c жестким сравнением === в PHP</h2>
<table class='dop-table'>
<thead>
<tr><th ></th><th >true</th><th >false</th><th >1</th><th >0</th><th >-1</th><th >"1"</th><th >null</th><th >"php"</th></tr>
</thead>
<tbody>
<tr>
<td><strong>true</strong></td>
<td><?php var_dump($x1 === $y1) ?></td>
<td><?php var_dump($x2 === $y1) ?></td>
<td><?php var_dump($x3 === $y1) ?></td>
<td><?php var_dump($x4 === $y1) ?></td>
<td><?php var_dump($x5 === $y1) ?></td>
<td><?php var_dump($x6 === $y1) ?></td>
<td><?php var_dump($x7 === $y1) ?></td>
<td><?php var_dump($x8 === $y1) ?></td>
</tr>
<tr>
<td><strong>false</strong></td>
<td><?php var_dump($x1 === $y2) ?></td>
<td><?php var_dump($x2 === $y2) ?></td>
<td><?php var_dump($x3 === $y2) ?></td>
<td><?php var_dump($x4 === $y2) ?></td>
<td><?php var_dump($x5 === $y2) ?></td>
<td><?php var_dump($x6 === $y2) ?></td>
<td><?php var_dump($x7 === $y2) ?></td>
<td><?php var_dump($x8 === $y2) ?></td>
</tr>
<tr>
<td><strong>1</strong></td>
<td><?php var_dump($x1 === $y3) ?></td>
<td><?php var_dump($x2 === $y3) ?></td>
<td><?php var_dump($x3 === $y3) ?></td>
<td><?php var_dump($x4 === $y3) ?></td>
<td><?php var_dump($x5 === $y3) ?></td>
<td><?php var_dump($x6 === $y3) ?></td>
<td><?php var_dump($x7 === $y3) ?></td>
<td><?php var_dump($x8 === $y3) ?></td>
</tr>
<tr>
<td><strong>0</strong></td>
<td><?php var_dump($x1 === $y4) ?></td>
<td><?php var_dump($x2 === $y4) ?></td>
<td><?php var_dump($x3 === $y4) ?></td>
<td><?php var_dump($x4 === $y4) ?></td>
<td><?php var_dump($x5 === $y4) ?></td>
<td><?php var_dump($x6 === $y4) ?></td>
<td><?php var_dump($x7 === $y4) ?></td>
<td><?php var_dump($x8 === $y4) ?></td>
</tr>
<tr>
<td><strong>-1</strong></td>
<td><?php var_dump($x1 === $y5) ?></td>
<td><?php var_dump($x2 === $y5) ?></td>
<td><?php var_dump($x3 === $y5) ?></td>
<td><?php var_dump($x4 === $y5) ?></td>
<td><?php var_dump($x5 === $y5) ?></td>
<td><?php var_dump($x6 === $y5) ?></td>
<td><?php var_dump($x7 === $y5) ?></td>
<td><?php var_dump($x8 === $y5) ?></td>
</tr>
<tr>
<td><strong>"1"</strong></td>
<td><?php var_dump($x1 === $y6) ?></td>
<td><?php var_dump($x2 === $y6) ?></td>
<td><?php var_dump($x3 === $y6) ?></td>
<td><?php var_dump($x4 === $y6) ?></td>
<td><?php var_dump($x5 === $y6) ?></td>
<td><?php var_dump($x6 === $y6) ?></td>
<td><?php var_dump($x7 === $y6) ?></td>
<td><?php var_dump($x8 === $y6) ?></td>
</tr>
<tr>
<td><strong>null</strong></td>
<td><?php var_dump($x1 === $y7) ?></td>
<td><?php var_dump($x2 === $y7) ?></td>
<td><?php var_dump($x3 === $y7) ?></td>
<td><?php var_dump($x4 === $y7) ?></td>
<td><?php var_dump($x5 === $y7) ?></td>
<td><?php var_dump($x6 === $y7) ?></td>
<td><?php var_dump($x7 === $y7) ?></td>
<td><?php var_dump($x8 === $y7) ?></td>
</tr>
<tr>
<td><strong>"php"</strong></td>
<td><?php var_dump($x1 === $y8) ?></td>
<td><?php var_dump($x2 === $y8) ?></td>
<td><?php var_dump($x3 === $y8) ?></td>
<td><?php var_dump($x4 === $y8) ?></td>
<td><?php var_dump($x5 === $y8) ?></td>
<td><?php var_dump($x6 === $y8) ?></td>
<td><?php var_dump($x7 ===$y8) ?></td>
<td><?php var_dump($x8 === $y8) ?></td>
</tr>
</tbody>
</table>
<h2>Выводы о сравнении в PHP</h2>
<div class="paragraf"><p>Данные выводы о сравнении были осуществлены с помощью встроенной функции "var_dump", которая выводит информацию о переменной: тип и значение.
Поскольку, при фактическом сравнении переменных, в случае возвращения результата "false", данные об этом не отображаются.
</p><p>
1. Таблица истинности.
<ul>
  <li>Результат операции отрицания (!) ложен, когда исходное высказывание истинно, и наоборот.</li>
  <li>Результат операции ИЛИ (||) истинен, когда истинно А, либо истинно В, либо истинно и А и В одновременно, и ложен тогда, когда А и В одновременно ложны.</li>
  <li>Результат операции И (&&) истинен только в том случае, когда истинны одновременно А и В, и ложен во всех остальных случаях.</li>
  <li>Результат операции Исключающее ИЛИ (XOR) ложен тогда, когда А и В одновременно истинны или одновременно ложны.</li>
</ul>
</p><p>
2. Таблица гибкого сравнения
<ul>
  <li>true - равен true, 1, -1, "1", также строке "php"</li>
  <li>false - равен false, 0, значению null</li>
  <li>1 - равен true, 1, "1"</li>
  <li>0 - равен false, 0, значению null, также строке "php"</li>
  <li>-1 - равен true, -1</li>
  <li>"1" - равен true, 1, "1"</li>
  <li>null - равен false, 0, значению null</li>
  <li>"php" - равен true, 0, строке "php"</li>
</ul>
Данные равенства обусловлены тем, что в языке PHP существует неявное приведение типов. Которое и срабатывает при гибком сравнении.
</p><p>
3. Таблица жесткого сравнения
</p><p>
При жестком (===) сравнении, аргументы могут быть равны только самим себе.

</p>
</div>


</body>
</html>