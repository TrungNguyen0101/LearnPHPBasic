<?php
echo "Exceptions in PHP";
echo '<br>';
function divide($a, $b)
{
    if (!$b) {
        throw new Exception("Cannot divide by zero");
    }
    return $a / $b;
}
// echo divide(5, 0);
try {
    echo '<br>';
    // divide(10, 2);
    echo divide(5, 0);
    echo "no errors";
} catch (Exception $e) {
    echo '<br>';
    echo "Caught exception: " . $e->getMessage() . "\n";
} finally {
    echo '<br>';
    echo "Finally come here...";
}
echo '<br>';
echo "Program runs here..";
