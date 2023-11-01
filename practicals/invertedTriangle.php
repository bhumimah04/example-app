<?php
$height = 5; // Change this value to set the height of the inverted triangle

for ($row = $height; $row >= 1; $row--) {
    // Print asterisks for the current row
    for ($col = 1; $col <= $row; $col++) {
        echo "*";
        if ($col < $row) {
            echo " ";
        }
    }
    echo PHP_EOL; // Move to the next line
}
?>



