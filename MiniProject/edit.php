<?php
$conn = new mysqli("localhost", "root", "", "todo_list");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $task_description = $_POST["task_description"];
  $conn->query("UPDATE tasks SET task_description = '$task_description' WHERE id = $id");
  header("Location: index.php");
}

$id = $_GET["id"];
$result = $conn->query("SELECT * FROM tasks WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Tugas</title>
</head>

<body>
  <h1>Edit Tugas</h1>
  <form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
    <input type="text" name="task_description" value="<?= $row["task_description"]; ?>" required>
    <button type="submit">Update</button>
  </form>
</body>

</html>