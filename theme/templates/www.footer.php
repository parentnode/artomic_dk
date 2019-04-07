<? $navigation = $this->navigation("main"); ?>
	</div>

	<div id="navigation">
		<ul class="navigation">
		<? if($navigation): ?>
			<? foreach($navigation["nodes"] as $node): ?>
			<?= $HTML->navigationLink($node); ?>
			<? endforeach; ?>
	 	<? endif; ?>
		</ul>
	</div>

	<div id="footer"></div>

</div>

</body>
</html>