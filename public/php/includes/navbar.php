<?php include("session.php"); ?>

<nav class="navbar navbar-expand-lg bg-secondary">
	<span>
		<img src="../../imgs/image842.png" alt="Table Icon by Daniel Surla">

		<ul class="navbar-nav">

			<li class="nav-item">
				<a href= <?php echo "$hostServerUrl/public/php/home.php" ?> class="nav-link">Home</a>
			</li>

			<li class="nav-item">
				<a href= <?php echo "$hostServerUrl/public/php/Workshifts.php" ?> class="nav-link">Roster</a>
			</li>

			<?php
				if (loggedIn()) { 
			?>
			<li class="nav-item">
				<a href= <?php echo "$hostServerUrl/public/php/index.php" ?> class="nav-link">Logout</a>
			</li>

			<li class="nav-item text-right">
				<a href= <?php echo "$hostServerUrl/public/php/NewStaff.php" ?> class="nav-link">New Staff</a>
			</li>
			<?php
				}
			?>

			<?php
				else {
			?>
			<li class="nav-item">
				<a href= <?php echo "$hostServerUrl/public/php/index.php" ?> class="nav-link">Login</a>
			</li>
			<?php
				}
			?>
			
		</ul>
	</span>
</nav>