<?php
	include_once("header.php");
?>
	<div class="container">
		<div class="row">

			<form action="process.php" method="post">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control" id="username" name="username" required value="sachini">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required value="sliit">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	</div>

</body>

</html>