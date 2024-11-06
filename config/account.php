<?php
if (isset($_SESSION['log_check'])) {
	echo '<script>$(".controls-login,.controls-signup").remove()</script>';//addClass("obj-hide")
} else {
	echo '<script>$(".controls-controls-panels,.controls-history,.controls-signout").remove()</script>';
}
?>