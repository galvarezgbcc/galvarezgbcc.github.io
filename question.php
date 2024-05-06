<?php

if (!isset($_POST["attend"])) {
    echo "<p>Please select Yes or No.</p>";
}
elseif ($_POST["attend"] == "yes") {
    echo "<p>Thank you!</p>";
}
elseif ($_POST["attend"] == "no") {
    echo "<p>Thank you!</p>";
}

?>
