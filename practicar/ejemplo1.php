<html>
<head>
</head>
<body>

	<?php
$variable1=["casa", "perro", 4, "casa", "perra", 45, "cajfgjfsa", "perrgjfhdfo", 5];
$array_asoc=["lugar"=>"casa", "animal"=>"perro", "numero"=>4];
$variable2=1;
for ($i=0; $i <sizeof($variable1); $i=$i+2){

echo "$variable1[$i]</br>";
}
echo "</br></br></br></br>";
echo $array_asoc["numero"];
	?>
</body>
</html>
