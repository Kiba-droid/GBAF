<?php
include 'header.php';
require_once('bdd.php');
?>
<?php
$actors = findAllActor();
echo "<ul>";
foreach ($actors as $key => $value) { 
    echo '<li>' . $value['name'] . '</li>';
}
echo "</ul>";

echo "<br />";

$user = findAllUser();
echo "<ul>";
foreach ($user as $key => $value) { 
    echo '<li>' . $value['userName'] . '</li>';
    echo '<p>' . $value['name'] . ' ' . $value['lastName'] . '</p>';
}
echo "</ul>";
?>
?>
<?php
include 'footer.php';
?>

