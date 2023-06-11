
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
    '####',
    '####',
    '####',
    '####'
);

$bookableCell = new manicureCell($booking);

$calendar = new manicurekal();

$calendar->attachObserver('showCell', $bookableCell);

$bookableCell->routeActions();

echo $calendar->show();
?>
</body>
</html>

