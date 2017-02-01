<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 5</title>
</head>
<body>
<h3>Pr&aacute;ctica 5</h3>

<?php

$urls = array( "http://www.abc.com.py",  "http://www.abc.com.py",        "https://mail.google.com",
			   "http://gitref.org",      "https://mail.google.com",      "http://aulavirtual.uc.edu.py",
               "http://www.hattick.org", "http://aulavirtual.uc.edu.py", "http://www.hattick.org",
			   "http://www.abc.com.py" , "http://www.hattick.org",        "http://aulavirtual.uc.edu.py"
             );

$bitacora = array();

foreach ( $urls as $i => $v )
{
	if( isset( $bitacora[$urls[$i]] ) )
		$bitacora[$urls[$i]]++;
	else
		$bitacora[$urls[$i]] = 1;
}

echo "El acceso del usuario fue el siguiente:<br/>";
$tamanho = count($bitacora);

foreach ($bitacora as $i=>$v)
	echo $i." accesos:".$v."<br/>";

?>

</body>
</html>


