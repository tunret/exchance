<html>
<head>
	<meta charset="utf-8">
	<title>Exchance Money</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<?php
		if(isset($_POST['Transfer'])){
			$form =$_POST['from'];
			$to =$_POST['to'];
			$money = $_POST['moneys'];
			$transMon;
				if ($form == "thbf"){
					if ($to=="thbt") {
						$transMon=$money*1;
						$nameMo = 'THB';
					}
					if ($to=="audt") {
						$transMon=$money*0.05;
						$nameMo = 'AUD';
					}
					if ($to=="gbpt") {
						$transMon=$money*0.022;
						$nameMo = 'GBP';
					}
					if ($to=="usdt") {
						$transMon=$money*0.03;
						$nameMo = 'USD';
					}
				}

// ---------------------------------------------------จบ บาท ไป ...----------------------------------

				if ($form == "audf"){
					if ($to=="thbt") {
						$transMon=$money*27;
						$nameMo = 'THB';
					}
					if ($to=="audt") {
						$transMon=$money*1;
						$nameMo = 'AUD';
					}
					if ($to=="gbpt") {
						$transMon=$money*0.62;
						$nameMo = 'GBP';
					}
					if ($to=="usdt") {
						$transMon=$money*0.77;
						$nameMo = 'USD';
					}
				}


// ----------------------------------------------------จบ ออาเตเรย ไป ...---------------------------------


				if ($form == "gbpf"){
					if ($to=="thbt") {
						$transMon=$money*43.59;
						$nameMo = 'THB';
					}
					if ($to=="audt") {
						$transMon=$money*1.62;
						$nameMo = 'AUD';
					}
					if ($to=="gbpt") {
						$transMon=$money*1;
						$nameMo = 'GBP';
					}
					if ($to=="usdt") {
						$transMon=$money*1.25;
						$nameMo = 'USD';
					}
				}


// -----------------------------------------------------จบ ปอน ไป....--------------------------------


				if ($form == "usdf"){
					if ($to=="thbt") {
						$transMon=$money*35.00;
						$nameMo = 'THA';
					}
					if ($to=="audt") {
						$transMon=$money*1.30;
						$nameMo = 'AUD';
					}
					if ($to=="gbpt") {
						$transMon=$money*1.25;
						$nameMo = 'GBP';
					}
					if ($to=="usdt") {
						$transMon=$money*1;
						$nameMo = 'USD';
					}
				}
// ------------------------------------------------------จบ ดอลอเมกา ไป ....-------------------------------

		}
	?>
</head>
<body>
	<div class="wrap"> 
		<div id="head">CALCULATOR MONEY <br> 13570121</div>
		<form action="exchance121.php" method="post">
			<input type="number" name="moneys" placeholder="จำนวนเงิน" class="input-text">
			<div id="text">From</div><div id="text" class="mar">To</div>
			<select name="from">
				<option value="thbf">THB บาท</option>
				<option value="audf">AUD ดอลลาร์ออสเตเรีย</option>
				<option value="gbpf">GBP ปอนด์</option>
				<option value="usdf">USD ดอลลาร์สหรัฐอเมริกา</option>
			</select>
			
			<select name="to">
				<option value="thbt">THB บาท</option>
				<option value="audt">AUD ดอลลาร์ออสเตเรีย</option>
				<option value="gbpt">GBP ปอนด์</option>
				<option value="usdt">USD ดอลลาร์สหรัฐอเมริกา</option>
			</select>

			<input type="submit" name="Transfer" value="Transfer" id="btn" >
		</form>
		<div id="textans"><?php echo $transMon." "; ?><?php echo $nameMo; ?></div>

	</div>
</body>
</html>