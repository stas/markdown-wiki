<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $title ?></title>
        <link rel="stylesheet" href="/css/normal.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen" />
        <link rel="icon" href="/favicon.ico" />
	</head>
	<body>
    <div id="menu">
       <ul>
            <li><a href="/">Home</a></li>
       </ul>
    </div>
    <div id="wrapper">
		<?php echo $html ?>
        <div id="footer">
            <p>Last modification at: <?php echo date("d M, Y",$modified); ?>, <?php echo date("H:i:s",$modified); ?>.
            <br/>
            Using <a
            href="http://michelf.com/projects/php-markdown/">Markdown</a>, see the <a href="/syntax">syntax</a>.
            <br />
            Contact: stas[la]nerd[punct]ro
            </p>
        </div>
    </div>
	</body>
</html>
