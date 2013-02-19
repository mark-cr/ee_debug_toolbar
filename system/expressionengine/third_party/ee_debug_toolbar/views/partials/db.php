<div id="EEDebug_database" class="EEDebug_panel">
	<h4><?php echo count($query_data['queries']).' '.lang('database_queries'); ?></h4>
	<?php echo lang('query_cache_is'); ?> <?php echo ($config_data['enable_db_caching'] == 'y' ? lang('enabled') : lang('disabled')); ?>
	<h4><?php echo lang('adapter'); ?> 0</h4>
	<ol>
		<?php foreach ($query_data['queries'] AS $query): ?>
		<li><strong>[<?php echo $query['time']; ?> s]</strong> <?php echo $query['query']; ?></li>
		<?php endforeach; ?>
	</ol>
</div>