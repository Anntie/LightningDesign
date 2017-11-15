<?php

  function sendMessage($id, $message) {
    $url = "https://api.telegram.org/bot446680362:AAHB7H6Al2rl4TpA7w9NfG1Ualbe6LG381M/sendMessage?parse_mode=Markdown&chat_id=" . $id;
    $url = $url . "&text=" . urlencode($message);
    file_get_contents($url);
  }

?>
