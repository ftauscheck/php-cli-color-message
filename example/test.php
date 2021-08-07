<?php
  include('color.php');
  echo "\e[H\e[J";
  $colors = new Colors();
	echo "\n".$colors->head("╔══════════════════════════════════════════════════════════════════════════════╗");
	echo "\n".$colors->head("║                                                                              ║");
	echo "\n".$colors->head("║     php-cli-color_v2 Library                                                 ║");
  echo "\n".$colors->head("║                                                                              ║");
	echo "\n".$colors->head("║     ver: 1.0 - Initial release (after fork of wujunze/php-cli-color)         ║");
	echo "\n".$colors->head("║                                                                              ║");
  echo "\n".$colors->head("╟──────────────────────────────────────────────────────────────────────────────╢");
  echo "\n".$colors->head("║                                                                              ║");
	echo "\n".$colors->head("║        https://github.com/ftauscheck/php-cli-color_v2                        ║");
	echo "\n".$colors->head("║                                                                              ║");
	echo "\n".$colors->head("╚══════════════════════════════════════════════════════════════════════════════╝")."\n\n";

  echo "\n".$colors->notice("Notice message.");
  echo "\n".$colors->warn("Warning message.");
  echo "\n".$colors->error("Error message.");
  echo "\n".$colors->fatalerror("Fatal Error message.");
  echo "\n".$colors->success("Success message");
  
  echo "\n".$colors->getColoredString("Colored string: purple string on yellow background.", "purple", "yellow");
  echo "\n".$colors->getColoredString("Colored string: blue string on light gray background.", "blue", "light_gray");
  echo "\n".$colors->getColoredString("Colored string: red string on black background (error function).", "red", "black");
  echo "\n";
?>
