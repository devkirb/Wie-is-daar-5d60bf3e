<?php
echo "> Hoi gebruiker!\n";
$line = readline("> ");
if (!empty($line)) {
  readline_add_history($line);
}
echo '> De gebruiker zegt: ' . $line;
?>