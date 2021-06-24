<div id="page-content-wrapper">
	<div class="container mt-3">
		<h2>Form Login</h2>
		<?php 
			echo $this->session->userdata('username');
		 ?>
		<form action="login/auth" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" id="username" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
</div>