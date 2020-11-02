<html>
<title>Program Kriptografi</title>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- <?php include 'chiper.php';?> -->
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="max-width: 900px; float: none; margin: 0 auto; margin-top: 40px; margin-bottom: 0px; color: white; ">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>PROGRAM KRIPTOGRAFI CAESAR CHIPER</h2>
							<b>CAESAR CIPHER</b>
								<p>
									Caesar cipher merupakan salah satu jenis cipher substitusi yang 
									membentuk cipher dengan cara melakukan penukaran karakter pada plainteks 
									menjadi tepat satu karakter pada chiperteks. Teknik seperti ini disebut juga sebagai chiper abjad tunggal. 
									Algoritma kriptografi Caesar Cipher sangat mudah  untuk digunakan. Inti dari algoritma kriptografi ini adalah 
									melakukan pergeseran terhadap semua karakter pada  plainteks dengan nilai pergeseran yang sama.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-5" style= "padding: 10px; color: white;">
                                <?php 

function Cipher($ch, $key)
{
	if (!ctype_alpha($ch))
		return $ch;

	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key)
{
	$output = "";

	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
		$output .= Cipher($ch, $key);

	return $output;
}

function Decipher($input, $key)
{
	return Encipher($input, 26 - $key);
}

$plainText ="";
$cipherText ="";

if 
(isset($_POST["submit"])) {
	$cipherText = Encipher($_POST["text"], $_POST["angka"]);
	$plainText = Decipher($cipherText, $_POST["angka"]);
}
 ?>
<body>

<form action="" method="post">
	<center>
	<table>
		<tr>
		<tr>
		<td><b>Plain Text</b></td><td></td>
			<td><textarea name="text" ></textarea></td>
			
		</tr>
		<tr>
		<td><b>Key</b></td><td></td>
			<td><input type="number" name="angka"></td>
		</tr>
		<tr>
		<td></td><td></td>
			<td><button type="submit" name="submit">Enkripsi</button>
		</tr>
		
		<tr>
			<td><b>Chipher Text</b></td><td></td>
			<td><textarea name="hasil" ><?php if(isset($_POST["submit"])){
				echo $cipherText;
			} ?></textarea></td>
		</tr>
	</table>
	</center>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
	
</form>
</body>
</html>

