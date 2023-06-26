<?php
// Generate a random number between 1 and 20 (there are 20 quotes)
srand(mktime());
$randomNumber = rand(1, 20);

// Define the file path for the selected quote
$quoteFilePath = 'quotes/' . $randomNumber . '.txt';

// Check if the quote file exists
if (file_exists($quoteFilePath)) {
    // Read the contents of the quote file
    $quoteLines = file($quoteFilePath);

    // Extract the quote and elaboration from the lines
    $quote = isset($quoteLines[0]) ? trim($quoteLines[0]) : '';
    $elaboration = isset($quoteLines[1]) ? trim($quoteLines[1]) : '';

    // Display the quote
    echo '<h1>Inspiring Quote</h1>';
    echo '<p>' . $quote . '</p>';

    // Check if there is an elaboration available
    if (!empty($elaboration)) {
        echo '<button id="moreButton">More +</button>';
        echo '<div id="elaboration" style="display: none;">';
        echo '<p>' . $elaboration . '</p>';
        echo '</div>';

        // JavaScript to toggle the visibility of the elaboration
        echo '<script>';
        echo 'document.getElementById("moreButton").addEventListener("click", function() {';
        echo '    var elaborationDiv = document.getElementById("elaboration");';
        echo '    if (elaborationDiv.style.display === "none") {';
        echo '        elaborationDiv.style.display = "block";';
        echo '        document.getElementById("moreButton").innerHTML = "Less -";';
        echo '    } else {';
        echo '        elaborationDiv.style.display = "none";';
        echo '        document.getElementById("moreButton").innerHTML = "More +";';
        echo '    }';
        echo '});';
        echo '</script>';
    }
} else {
    echo 'Quote not found.';
}
echo '<p>Support my affiliate links:</p> <p><a href="../bcast/">bcast</a> <a href="../deskera/">deskera</a> <a href="../heights/">heights</a> <a href="../morningbrew/">morning brew</a> <a href="../publitio/">publitio</a> <a href="../suitedash/">suitedash</a></p>' 
?>
