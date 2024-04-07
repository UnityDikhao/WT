<?php
if(isset($_POST['selectedBook'])) {
    $selectedBook = $_POST['selectedBook'];
    
    $xml = simplexml_load_file('books.xml');
    
    foreach ($xml->book as $book) {
        if ($book->title == $selectedBook) {
            $response = array(
                'title' => (string)$book->title,
                'author' => (string)$book->author,
                'year' => (int)$book->year,
                'price' => (float)$book->price
            );
            echo json_encode($response);
            break;
        }
    }
}
?>
