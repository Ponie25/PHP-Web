<?php
include $_SERVER['DOCUMENT_ROOT'] . '/PHP-Web-main/PHP/config/db.php';


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $author = trim($_POST['author']);

    // Basic validation
    if (!empty($title) && !empty($content)) {
        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
        $stmt->execute([
            ':title' => $title,
            ':content' => $content,
            ':author' => $author
        ]);

        // Redirect back to the main page
        header("Location: ../index.php");
        exit;
    } else {
        echo "Please fill in all fields.";
    }
}
?>
