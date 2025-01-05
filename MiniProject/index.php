<?php
$conn = new mysqli("localhost", "root", "", "todo_list");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $task_description = $_POST["task_description"];
  $conn->query("INSERT INTO tasks (task_description) VALUES ('$task_description')");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
</head>

<body>
  <h1>To-Do List</h1>
  <form method="POST" action="">
    <input type="text" name="task_description" placeholder="Tambahkan tugas baru" required>
    <button type="submit">Tambah</button>
  </form>
  <h2>Daftar Tugas</h2>
  <ul>
    <?php
    $result = $conn->query("SELECT * FROM tasks");
    while ($row = $result->fetch_assoc()) {
      echo "<li>" . $row['task_description'] . " 
            <a href='edit.php?id=" . $row['id'] . "'>Edit</a> 
            <a href='delete.php?id=" . $row['id'] . "'>Hapus</a></li>";
    }
    ?>
  </ul>
</body>

</html>