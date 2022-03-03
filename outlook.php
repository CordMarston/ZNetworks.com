<?php
header("Content-Disposition: attachment; filename=\"" . basename('https://dashboard.znteworks.biz/files/PasswordFix.reg') . "\"");
header("Content-Type: application/octet-stream");
header("Content-Length: " . filesize($File));
header("Connection: close");
?>