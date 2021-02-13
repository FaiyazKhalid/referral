<center>Activation Date:
<?
//Example Y-m-d H:i:s date string.
$date = $row['date'];

//12 hour format with lowercase AM/PM
echo date("F j, Y", strtotime($row["date"])); ?>

<br>

<? echo date("g:i a", strtotime($row["date"]));?></center>

