<?php
// understanding the logic!!
// 1 ruble = 0.013 USD
// 1 pound sterling = 1.28 USD
// 1 CA = 0.79 USD
// 1 EURO = 1.18 USD
// 1 yen = 0.0094 USD

$Rubles = 10007;
$Rubles *= 0.013;
$friendly_Rubles = number_format($Rubles, 2);
$Pounds = 500;
$Pounds *= 1.28;
$friendly_Pounds = number_format($Pounds, 2);
$CA = 5000;
$CA *= 0.79;
$friendly_CA = number_format($CA, 2);
$Euros = 1200;
$Euros *= 1.18;
$friendly_Euros= number_format($Euros, 2);
$yen = 2000;
$yen *= 0.0094;
$friendly_yen= number_format($yen, 2);

$total = $yen + $Euros + $Pounds + $CA + $Rubles;
$friendly_total = number_format($total, 2);

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency</title>
<style>
table {
    width: 400px;
    margin: 20px auto;
    border: 1px solid green;
    border-collapse:collapse;
}

td {
    border: 1px solid green;
    padding: 5px;
    text-align: left;
}

</style>

</head>
<body>
<table>

<tr>
<th>Rubles</th>
<td><?php echo '$ '.$friendly_Rubles.''; ?></td>
</tr>
</tr>

<tr>
<th>Pounds</th>
<td><?php echo '$ '.$friendly_Pounds.''; ?></td>
</tr>

<tr>
<th>CA</th>
<td><?php echo '$ '.$friendly_CA.''; ?></td>
<td></td>
</tr>

<tr>
<th>Euros</th>
<td><?php echo '$ '.$friendly_Euros.''; ?></td>
<td></td>
</tr>

<tr>
<th>Yen</th>
<td><?php echo '$ '.$friendly_yen.''; ?></td>
<td></td>
</tr>

<tr>
<th>Total</th>
<td><strong><?php echo '$ '.$total.''; ?></strong></td>
</tr>
<!-- use '..' to nest variables-->

</table>


</body>
</html>   