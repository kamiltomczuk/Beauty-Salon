
<!DOCTYPE html>
<html lang = "en">
<head>
    <link href="../styles/calendar.css" type="text/css" rel="stylesheet"/>
    <title>Terminy makijaż</title>
</head>
<body>
<?php
include 'manicurekal.php';
include 'manicure.php';
include 'manicureCell.php';


$booking = new manicure(
    'm29582_test',
    'mysql.ct8.pl',
    'm29582_ktpjatk',
    'Siema123'
);

$bookableCell = new manicureCell($booking);

$calendar = new manicurekal();

$calendar->attachObserver('showCell', $bookableCell);

$bookableCell->routeActions();

echo $calendar->show();
?>
</body>
</html>

