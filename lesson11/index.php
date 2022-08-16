<?php
// htmlspecialchars関数でXSS対策
function h($message) {
    return htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
}
echo h($_GET['message']);
?>