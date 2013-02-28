<div class="navbar">
 	<div class="navbar-inner">
 		<a class="brand"  href="./?p=list_contacts">MyContacts</a>
		<ul class="nav">
		<?php foreach($pages as $file => $text): ?>
			<li><a href="./?p=<?php echo $file ?>"><?php echo $text ?></a></li>
		<?php endforeach ?>
		</ul>
		<form method="get" class="form-inline pull-right">
		<input type="hidden" name="p" value="list_contacts" />
			<div class="input-prepend input-append">
				  <input name="q" class="span2" placeholder="search" type="text" />
				  <button class="btn" type="submit"><i class="icon-search"></i></button>
			</div>
		</form>
	</div>
</div>