<?php
	include_once("header.php");
?>

<script>
	$(function() {

		$.ajax({
			type: 'POST',
			url: 'get_csrf_token.php',
			success: function(result) {
				const res = JSON.parse(result);
				console.log(res.token);
				document.getElementById('hiddenToken').value = res.token;
			}
		});
	});
</script>


	<div class="container">
		<div class="row">

			<h2>ENTER YOUR NAME</h2>

			<form action="update.php" method="post">

				<div class="form-group">
					<input type="text" class="form-control" name="name" id="name" value="NAME">
				</div>

				<div class="form-group">
					<input type="hidden" class="form-control" id="hiddenToken" name="hiddenToken">
				</div>

				<button type="submit" class="btn btn-primary">CLICK</button>

			</form>

		</div>
	</div>

</body>

</html>