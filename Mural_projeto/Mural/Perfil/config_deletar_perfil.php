<?php
  $stmt = $pdo->prepare('DELETE FROM usuario WHERE email = :email');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
?>