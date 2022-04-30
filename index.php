<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Flip a Coin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <!-- Import CSS -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

	<!-- ====== PHP ====== -->
<?php
	
	
	function OpenCon()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "pogchamp69!!";
		$db = "..Coin Flip/assets/sql/CoinFlipSQL";
		$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
	return $conn;
	}
 
 
	function CloseCon($conn)
	{
		$conn -> close();
	}

	
?>


	<!-- ======= Javascript ====== -->
<script>


	function flipCoin() {
		// Set variables to be used as PHP embedded in the Javascript
		var openConPHP = "<?php echo openCon(); ?>";
		var updateTotal = "<?php echo $sql = 'UPDATE CoinFlipSQL SET Total = Total + 1'; ?>";
		var updateHeads = "<?php echo $sql = 'UPDATE CoinFlipSQL SET Heads = Heads + 1'; ?>";
		var updateTails = "<?php echo $sql = 'UPDATE CoinFlipSQL SET Tails = Tails + 1'; ?>";
		var closeConPHP = "<?php echo closeCon(); ?>";
		
		// Open SQL connection
		openConPHP;
		

		var image_change = document.getElementById("heads_tails");
		// Random choice between 0 and 1. 1 is heads and 0 is tails. The coin image will change depending the result.
		var flip = Math.floor(Math.random() * 2)
			//Update total flip count in SQL
			updateTotal;
			if (flip == 1) {
				image_change.src="../Coin Flip/assets/img/coin_heads.jpg";
				updateHeads;
				}
			else if (flip == 0){
				image_change.src="../Coin Flip/assets/img/coin_tails.jpg";
				updateTails;
				}
		// Close SQL connection
		closeConPHP;
    }
	
	
</script>





  <!-- ======= Main ======= -->
  <section id="main">
    <div class="main-container">
	  <center>
        <h1>Flip A Coin</h1>
        <h2>Click below to test your luck... If you dare...</h2>
        <div class="flip-button">
          <a href="#button" onclick="flipCoin()">Click to Flip</a>
        </div>
		<div class="coin">
			<img src="assets/img/coin_clear.jpg" id="heads_tails" width="150" height="150" alt="No coin">
		</div>
		</center>
    </div>
  </section><!-- End Main -->

 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright 2021. All Rights Reserved
          </div>
          <div class="credits">
            Designed by swallace100 on GitHub</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

</body>

</html>