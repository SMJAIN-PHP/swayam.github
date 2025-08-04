<?php



session_start(); // Start session to store notes in array list (simulate memory)

// Initialize notes array if not already
if (!isset($_SESSION['notes'])) {
    $_SESSION['notes'] = array();
}

// Initialize message
$message = "";

// Handle user actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    // Option 1: Add Note
    if ($action === 'add') {
        $note = trim($_POST['note']);

        if (!empty($note)) {
            $note = htmlspecialchars($note); // Prevent XSS
            $timestamp = date("Y-m-d H:i:s");
            $formattedNote = "[" . $timestamp . "] " . $note;
            array_push($_SESSION['notes'], $formattedNote);
            $message = "✅ Note added successfully.";
        } else {
            $message = "⚠️ Note cannot be empty.";
        }
    }

    // Option 2: Clear all notes (optional reset feature)
    elseif ($action === 'clear') {
        $_SESSION['notes'] = array();
        $message = "🗑️ All notes cleared.";
    }

    // Option 3: Exit (destroy session)
    elseif ($action === 'exit') {
        session_destroy();
        header("Location: notebook.php");
        exit;
    }

    // Invalid Action Handling
    else {
        $message = "❌ Invalid action selected.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP E-Note Book (Array List)</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        textarea { width: 100%; height: 100px; }
        .box { padding: 15px; border: 1px solid #ccc; background: #f9f9f9; margin-top: 20px; }
        .message { margin-top: 10px; color: green; }
        .error { color: red; }
    </style>
</head>
<body>

<h2> PHP E-Note Book </h2>

<!-- Display confirmation or error message -->
<?php if (!empty($message)) echo "<div class='message'>$message</div>"; ?>

<!-- Menu Simulation -->
<div class="box">
    <h3>Menu</h3>
    <form method="POST" action="">
        <label>1. Add Note</label><br>
        <textarea name="note" placeholder="Type your note here..."></textarea><br><br>
        <button type="submit" name="action" value="add">Add Note</button>
    </form>
    <form method="POST" action="" style="margin-top:10px;">
        <button type="submit" name="action" value="clear">Clear All Notes</button>
        <button type="submit" name="action" value="exit">Exit Note Book</button>
    </form>
</div>

<!-- Display Notes -->
<div class="box">
    <h3>All Notes</h3>
    <?php
    if (!empty($_SESSION['notes'])) {
        foreach ($_SESSION['notes'] as $note) {
            echo "<p>" . $note . "</p>";
        }
    } else {
        echo "<p>No notes found.</p>";
    }
    ?>
</div>

</body>
</html>
