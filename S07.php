<?php
$doc = new DOMDocument();
$doc->load('Movie.xml');

$movies = $doc->getElementsByTagName("MovieInfo");

foreach ($movies as $movie) {
    echo "MovieNo: " . $movie->getElementsByTagName("MovieNo")[0]->nodeValue . ",<br> ";
    echo "MovieTitle: " . $movie->getElementsByTagName("MovieTitle")[0]->nodeValue . ",<br> ";
    echo "ActorName: " . $movie->getElementsByTagName("ActorName")[0]->nodeValue . ",<br>";
    echo "Realease Year: " . $movie->getElementsByTagName("ReleaseYear")[0]->nodeValue . ",<br>";
}
?>
