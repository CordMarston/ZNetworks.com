		<?php
			mysql_connect("localhost", "znetworks", "utaqavaze") or die(mysql_error());
			mysql_select_db("zadmin_employees") or die(mysql_error());
			$getRandom = mysql_query("SELECT firstname, lastname, picture, whyZ, title FROM employees WHERE whyZ!='' AND active='0' AND picture!='' ORDER BY RAND() LIMIT 1");
			$e = mysql_fetch_array($getRandom);
		?>
		<div class="row">
			<div class="col-md-7 align-self-center">
				<h1>Why <?php echo $e['firstname'];?> Chose Z Networks</h1>
				<blockquote class="blockquote"><?php echo $e['whyZ'];?></blockquote>
				 <footer class="blockquote-footer" style="background-color:transparent;"><?php echo $e['firstname'].' '.$e['lastname'];?> <cite title="Source Title"><?php echo $e['title'];?></cite></footer>
				<p></p>
			</div>
			<div class="col-md-4 offset-md-1">
				<div class="item">
					<div class="polaroid"><img src="<?php echo $e['picture'];?>">
					<div class="caption text-black" style="color:black;"><?php echo $e['firstname'].' '.$e['lastname'];?></div>
					</div>
				</div>
			</div>
		</div>