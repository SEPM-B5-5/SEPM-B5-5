<?php
	include("session.php");
?>
<!-- [Code] Attribution: 
// - Huu Nghia le
// - Daniel Surla -->
<nav class="navbar navbar-expand-lg bg-secondary">
	<span>
		<img src="/public/imgs/image842.png" alt="Table Icon by Daniel Surla" class="mr-3" width="32" height="32">

		<ul class="navbar-nav">

			<li class="nav-item">
				<a href="/public/php/home.php"class="nav-link">Home</a>
			</li>

			<?php if ($currentFilepath != "/public/php/Workshifts") { ?>

			<li class="nav-item">
				<a href="/public/php/Workshifts.php"class="nav-link">Roster</a>
			</li>

			<?php } else { ?>

			<li class="nav-item">
				<a href="/public/php/Workshifts.php"class="btn-link disabled">Roster</a>
			</li>

			<?php } ?>
			<?php
				if (loggedIn()) {
			?>
			
			<li class="nav-item">
				<a href="/public/index.php" class="nav-link">Logout</a>
			</li>

			<li class="nav-item text-right">
				<a href="/public/php/createaccount.php" class="nav-link">Create Account</a>
			</li>

			<li class="nav-item text-right">
				<a href="/public/php/resetpassword.php" class="nav-link">Reset Password</a>
			</li>

			<?php
				} else {
			?>
			<li class="nav-item">
				<a href="/public/index.php" class="nav-link">Login</a>
			</li>
			<?php
				}
			?>
			
		</ul>
	</span>
</nav>