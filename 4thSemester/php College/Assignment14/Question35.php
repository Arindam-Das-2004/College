
<?php
$messageContent = ""; // To refill message textarea after action

if (isset($_POST['done'])) {
    $filename = trim($_POST['filename']);
    $message = trim($_POST['message']);
    $task = $_POST['task'];

    $dir = "data/";

    // Create 'data' directory if not exists
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    // Full file path
    $filepath = $dir . $filename . ".txt";

    if ($task == "Create") {
        if (!file_exists($filepath)) {
            // Create new file with message
            file_put_contents($filepath, $message);
            $messageContent = "File '$filename' created successfully!";
        } else {
            $messageContent = "File already exists!";
        }
    } elseif ($task == "Read") {
        if (file_exists($filepath)) {
            // Read existing file content
            $messageContent = file_get_contents($filepath);
        } else {
            $messageContent = "File Doesn't exist.";
        }
    } elseif ($task == "Append") {
        if (file_exists($filepath)) {
            // Append message to existing file
            file_put_contents($filepath, "\n" . $message, FILE_APPEND);
            $messageContent = "File '$filename' appended successfully!";
        } else {
            $messageContent = "File Doesn't exist.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Task Manager</title>
</head>
<body>
    <h2>Manage Your Files</h2>
    <form action="" method="post">
        File Name:<br>
        <input type="text" name="filename" required><br><br>

        Message:<br>
        <textarea name="message" rows="5" cols="40"><?php echo htmlspecialchars($messageContent); ?></textarea><br><br>

        Task:<br>
        <select name="task" required>
            <option value="Create">Create</option>
            <option value="Read">Read</option>
            <option value="Append">Append</option>
        </select><br><br>

        <input type="submit" name="done" value="Done">
    </form>
</body>
</html>
