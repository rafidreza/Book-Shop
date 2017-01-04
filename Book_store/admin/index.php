<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Welcome to Admin .....</h1>
			<div class="entry">
				<form method="get" action="all_book.php">
                    <input type="submit" name="submit" value="All Book">
                </form>
                <br>
                <br>
                <form method="get" action="addbook.php">
                    <input type="submit" name="submit" value="Add Book">
                </form>
                <br>
                <br>
                <form method="get" action="contact.php">
                    <input type="submit" name="submit" value="Contact">
                </form>
                <br>
                <br>
                <form method="get" action="category.php">
                    <input type="submit" name="submit" value="Category">
                </form>
                <br>
                <br>
                <form method="get" action="category - Copy.php">
                    <input type="submit" name="submit" value="Category 1">
                </form>
                <br>
                <br>
                <form method="get" action="subcategory.php">
                    <input type="submit" name="submit" value="Sub Category">
                </form>
                <br>
                <br>
                <form method="get" action="view_order.php">
                    <input type="submit" name="submit" value="View Order">
                </form>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
