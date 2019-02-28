<h3>Introduction</h3>

<p>You are about to install <b><?php  echo $product; ?></b> (Version: <?php echo $productVersion; ?>) developed by <b><?php echo $company; ?></b>.</p>

<form method="post">
	<input type="hidden" name="nextStep" value="eula">
	<button type="submit"><img src="img/icons/tick.png" title="Start" alt="Start"> Start</button>
</form>
