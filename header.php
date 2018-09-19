<div class="header">
	<div class="header-inside">
		<div class="logo-wrapper">
			<img class="logo" src="assets/img/logo-32.png">
			<span class="mmGranites">MM Granites</span>
		</div>
		<div class="nav-bar" id="nav-bar">
			<a href="index.php">Home</a>
			<a href="products.php">Products</a>
			<a href="projects.php">Projects</a>
			<a href="aboutus.php">About Us</a>
			<a href="contact.php">Contact Us</a>
		</div>
		<span class="menu-icon" onclick="navControll(this)">&#9776;</span><!-- X: &#10005; -->
	</div>
</div>
<script type="text/javascript">
	var navFlag = "close";
	function navControll(menuIcon) {
		document.getElementById("nav-bar").classList.toggle("nav-bar-mobile");
		menuIcon.style.display="inline";
		
		if(navFlag == "close")
		{menuIcon.innerHTML = "&#10005;";
		navFlag = "open";
		}
		else
		{
		menuIcon.innerHTML = "&#9776;";
		navFlag = "close";
		}

	}
</script>