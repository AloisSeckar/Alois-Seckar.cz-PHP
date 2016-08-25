<?php
class ELRHPageContentRenderer {
	public static function renderContent($page_data) {
		// use "echo" function to render all contents of current page
		echo '<h1>LOGIN</h1>'.PHP_EOL;
		echo '<p>'.PHP_EOL;
			echo 'Přihlášení do administrace - pouze pro admina :)'.PHP_EOL;
		echo '</p>'.PHP_EOL;
		// display login form
		if (isset($_SESSION["user"])) {
			echo '<p style="font-weight: bold">'.PHP_EOL;
				echo 'Admin je přihlášen'.PHP_EOL;
			echo '</p>'.PHP_EOL;
		}
		echo '<form method="post" action="login">'.PHP_EOL;
			echo '<table>'.PHP_EOL;
				echo '<tr>'.PHP_EOL;
					echo '<td><strong>Login:</strong></td>'.PHP_EOL;
					echo '<td><input type="text" name="user_name" /></td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
				echo '<tr>'.PHP_EOL;
					echo '<td><strong>Pass:</strong></td>'.PHP_EOL;
					echo '<td><input type="password" name="user_pass" /></td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
				echo '<tr>'.PHP_EOL;
					echo '<td colspan="2"><input type="submit" value="Login" /></td>'.PHP_EOL;
				echo '</tr>'.PHP_EOL;
			echo '</table>'.PHP_EOL;
		echo '</form>'.PHP_EOL;
	}
}