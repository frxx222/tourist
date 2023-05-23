<?php
// Check if the search query is submitted
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $xml = simplexml_load_file('file/index.xml');
    $found = false;
    foreach ($xml->blog as $blog) {
        if (stripos($blog->title, $search) !== false) {
            echo '<div class="blog">';
            echo '<h3>' . $blog->title . '</h3>';
            echo '<p>' . $blog->content . '</p>';
            echo '<p><strong>Author:</strong> ' . $blog->author . '</p>';
            echo '<p><strong>Date:</strong> ' . $blog->date . '</p>';
            echo '</div>';
            $found = true;
        }
    }
}
?>
