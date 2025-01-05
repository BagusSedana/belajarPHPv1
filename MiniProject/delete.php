<?php
$conn = new mysqli("localhost", "root", "", "todo_list");
$id = $_GET["id"];
$conn->query("DELETE FROM tasks WHERE id = $id");
header("Location: index.php");