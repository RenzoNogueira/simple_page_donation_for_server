<?php
require '../php/host/host.php';
$sql = "SELECT * FROM savings_goal";
$result = mysqli_query($conexao, $sql);
echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));