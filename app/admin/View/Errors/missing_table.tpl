
<h2>{__d('cake_dev', 'Missing Database Table')}</h2>
<p class="error">
	<strong>{__d('cake_dev', 'Error')}: </strong>
	{__d('cake_dev', 'Table %1$s for model %2$s was not found in datasource %3$s.', '<em>' . $table . '</em>',  '<em>' . $class . '</em>', '<em>' . $ds . '</em>')}
</p>
<p class="notice">
	<strong>{__d('cake_dev', 'Notice')}: </strong>
	{__d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_table.ctp')}
</p>

{$this->element('exception_stack_trace')}
