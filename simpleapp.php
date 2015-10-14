<?php
  $data = shell_exec('uptime');
  $uptime = explode(' up ', $data);
  $uptime = explode(',', $uptime[1]);
  $uptime = $uptime[0];

  echo "<h3>Hello World from Distelli!</h3>";
  echo "<p>You have successfully deployed your PHP application.</p>";
  echo "<p>Server Uptime $uptime </p>";
  echo "<hr>";
  echo "<ul>";
  echo "<li><a href=\"https://www.distelli.com\">Distelli Website</a></li>";
  echo "<li><a href=\"https://www.distelli.com/docs\">Distelli Docs</a></li>";
  echo "<li><a href=\"https://www.distelli.com/blog\">Distelli Blog</a></li>";
  echo "<li><a href=\"https://www.distelli.com/about\">Distelli About</a></li>";
  echo "</ul>";
?>
