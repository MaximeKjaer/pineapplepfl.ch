<?php

if ($_SERVER['REQUEST_URI'] == "/index.en.html") {
	$html = file_get_contents('https://www.epfl.ch/index.en.html');
} else {
	$html = file_get_contents('https://www.epfl.ch/');
};
$html = str_replace('href="//', 'href="https://', $html);
$html = str_replace('src="/', 'src="https://www.epfl.ch/', str_replace('href="/', 'href="https://www.epfl.ch/', $html));
$html = str_replace('<link href="https://www.epfl.ch/public/hp2013/css/app.e49decc256e9.css" rel="stylesheet" type="text/css" />', '<style>'.file_get_contents('https://www.epfl.ch/public/hp2013/css/app.e49decc256e9.css').'</style>', $html); 
$html = str_replace('../epfl-bootstrap/fonts/epfl-icons.8d666797fa9a.woff', '/fonts/epfl-icons.8d666797fa9a.woff', $html);
$html = str_replace('src="visual', 'src="https://www.epfl.ch/visual', $html);
$html = str_replace('<head>', '<!--

       .__                                   .__  ________________________________.____     
______ |__| ____   ____ _____  ______ ______ |  | \_   _____/\______   \_   _____/|    |    
\____ \|  |/    \_/ __ \\__  \ \____ \\____ \|  |  |    __)_  |     ___/|    __)  |    |    
|  |_> >  |   |  \  ___/ / __ \|  |_> >  |_> >  |__|        \ |    |    |     \   |    |___ 
|   __/|__|___|  /\___  >____  /   __/|   __/|____/_______  / |____|    \___  /   |_______ \
|__|           \/     \/     \/|__|   |__|                \/                \/            \/

--><head>', $html);

$html = str_replace('<svg width="95" height="46"><image xlink:href="https://www.epfl.ch/public/hp2013/epfl-bootstrap/images/logo.c366d4772210.svg" src="https://www.epfl.ch/public/hp2013/epfl-bootstrap/images/logo.0db041f79158.png" width="95" height="46" /></svg>', '<img src="logo.jpg">', $html);

//$html = str_replace('https://www.epfl.ch/public/hp2013/epfl-bootstrap/images/logo.0db041f79158.png', 'logo.jpg', $html);
//$html = str_replace('xlink:href="https://www.epfl.ch/public/hp2013/epfl-bootstrap/images/logo.c366d4772210.svg"', '', $html);


$html = str_replace('EPFL', '🍍PINEAPPEPFL🍍', $html);
echo ($html);
?>