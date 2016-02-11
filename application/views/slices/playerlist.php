<aside>
	<h2>Player Stats</h2>
	<table class="table table-striped">
		<tbody>
			<table>
                        <?php 
                            foreach ($player as $key) {
                                echo"<tr><td>{$key['Player']}<td/><td>{$key['Peanuts']}<td/><td>#<td/><tr/>";
                            }
                         ?>
		</tbody>
	</table>
</aside>