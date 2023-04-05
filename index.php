<?php
require_once("connection.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php
	$ReklamSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM banners ORDER BY banner_show ASC LIMIT 1");
	$ReklamSorgusu->execute();
	$ReklamSayisi		=	$ReklamSorgusu->rowCount();
	$ReklamKaydi		=	$ReklamSorgusu->fetch(PDO::FETCH_ASSOC);
	?>
	<table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr height="150">
			<td align="center"><img src="images/<?php echo $ReklamKaydi["banner_file"]; ?>" border="0"></td>
		</tr>
	</table>
</body>
</html>
<?php
$ReklamGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE banners SET banner_show=banner_show+1 WHERE id = ? LIMIT 1");
$ReklamGuncelle->execute([$ReklamKaydi["id"]]);

$VeritabaniBaglantisi	=	null;
?>