<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$iller = array('','Adana', 'Adıyaman', 'Afyon', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin',
'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale',
'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir',
'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir', 
'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya', 
'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya',
'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak',
'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak',
'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce');
echo "<center><table border=1 width='90%'>";
echo "<tr><td>Plaka</td><td>İl Adı</td><td>Bölgesi</td><td>Bölge resmi</td></tr>";
foreach ($iller as $plaka => $ilin_adi) {
	$bölge="";
	$bl=0;
	switch($plaka){
		case 1: case 7: case 15: case 31: case 32: case 33: case 46: case 80:
		$bölge="Akdeniz Bölgesi";
		$bl=1;
		break;

		case 4: case 12: case 13: case 23: case 24: case 25: case 30: case 36: case 44: case 49: case 62: case 65: case 75: case 76:
		$bölge="Doğu Anadolu Bölgesi";
		$bl=2;
		break;

		case 2: case 21: case 27: case 47: case 56: case 63: case 72: case 73: case 79: 
		$bölge="Güney Doğu Anadolu Bölgesi";
		$bl=3;
		break;

		case 10: case 11: case 16: case 17: case 22: case 34: case 39: case 41: case 54: case 59: case 77: 
		$bölge="Marmara Bölgesi";
		$bl=4;
		break;  

		case 3: case 9: case 20: case 35: case 43: case 45: case 48: case 64:
		$bölge="Ege Bölgesi";
		$bl=5;
		break;

		case 6: case 18: case 26: case 38: case 40: case 42: case 50: case 51: case 58: case 66: case 68: case 70: case 71:
		$bölge="İç Anadolu Bölgesi";
		$bl=6;
		break;

		case 5: case 8: case 14: case 19: case 28: case 29: case 37: case 52: case 53: case 55: case 57: case 60: case 61: case 67: case 69: case 74: case 78: case 81:
		$bölge="Karadeniz Bölgesi";
		$bl=7;
		break;


	}

		if($plaka=='0'){
			continue;
		}
		else if($plaka <10){
			echo "<tr>
			<td>0$plaka</td>
			<td>$ilin_adi</td>
			<td>$bölge</td>
			<td><img src='res/$bl.jpg' width='20%'></td>
			</tr>";
		}
		else{
			echo "<tr>
			<td>$plaka</td>
			<td>$ilin_adi</td>
			<td>$bölge</td>
			<td><img src='res/$bl.jpg' width='20%'></td>
			</tr>";
		}
    }
echo "</table></center>";

?>	





</body>
</html>