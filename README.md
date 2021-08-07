# php-cli-color-message
Simple and easy to use the PHP command-line output of color

## How to use
```php
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
```

## Run result on Windows 10 (CMD.EXE):
![code run result](https://github.com/ftauscheck/php-cli-color-message/blob/2bc704553d735faa45967f8f52144dbc940997be/example/cmd_example.png)

## Run result on Linux (PUTTY):
![code run result](https://github.com/ftauscheck/php-cli-color-message/blob/2bc704553d735faa45967f8f52144dbc940997be/example/linux_example.png)
