<h3>EULA</h3>

<div class="info">You must accept the EULA to continue!</div>

<textarea style="height: 300px; width: 98%;"><?php echo $eula; ?></textarea>
<hr>
<a href="index.php"><img src="img/icons/cross.png" title="Cancel"/> Cancel</a>

<form method="post">
	<input type="hidden" name="nextStep" value="requirements">
	<button type="submit"><img src="img/icons/tick.png" title="I accept" alt="I accept"> I accept the "EULA" </button>
</form>