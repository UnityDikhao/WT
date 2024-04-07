<?php

$suggestions = array("apple", "banana", "cherry", "date", "fig", "grape", "kiwi", "lemon", "mango", "orange");

$query = $_POST['query'];

$filteredSuggestions = array_filter($suggestions, function($item) use ($query) {
    return strpos($item, $query) !== false;
});

foreach ($filteredSuggestions as $suggestion) {
    echo "<p>$suggestion</p>";
}
?>
