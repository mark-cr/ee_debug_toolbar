<link rel="stylesheet" type="text/css" href="<?php echo $theme_css_url."log_viewer.css" ?>">

<div id="EEDebug_log_viewer" class="EEDebug_panel">

	<?php if(!$log_dir_writable): ?>
		<p><?php echo lang('log_dir_not_writable'); ?></p>
	<?php endif; ?>
	
	
	<?php if(!$logs_enabled): ?>
		<p><?php echo lang('logging_not_enabled'); ?></p>
	<?php endif; ?>
	
	<?php if($log_dir_writable && $logs_enabled): ?>
		<h4>Log Viewer</h4>
		<div id="EEDebug_log_viewer_data" class="EEDebug-log-loading"> </div>
		<input type="hidden" id="EEDebug_log_viewer_action_url" name="EEDebug_log_viewer_action_url" value="<?php echo $ajax_action_url; ?>" />
				
		<script src="<?php echo $theme_js_url . "log_viewer.js" ?>" type="text/javascript"
				charset="utf-8" defer id="EEDebug_debug_log_viewer_script"></script>		
	<?php endif; ?>
</div>