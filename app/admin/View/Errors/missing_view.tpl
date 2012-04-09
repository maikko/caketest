
<h2>{__d('cake_dev', 'Missing View')}</h2>
<p class="error">
	<strong>{__d('cake_dev', 'Error')}: </strong>
	{__d('cake_dev', 'The view for %1$s%2$s was not found.', '<em>' . Inflector::camelize($this->request->controller) . 'Controller::</em>', '<em>' . $this->request->action . '()</em>')}
</p>
<p class="error">
	<strong>{__d('cake_dev', 'Error')}: </strong>
	{__d('cake_dev', 'Confirm you have created the file: %s', $file)}
</p>
<p class="notice">
	<strong>{__d('cake_dev', 'Notice')}: </strong>
	{__d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_view.ctp')}
</p>

{$this->element('exception_stack_trace')}
