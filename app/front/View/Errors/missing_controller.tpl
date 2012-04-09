{assign var=pluginDot value=$plugin}
<h2>{__d('cake_dev', 'Missing Controller')}</h2>
<p class="error">
	<strong>{__d('cake_dev', 'Error')}: </strong>
	{__d('cake_dev', '%s could not be found.', '<em>' . $pluginDot . $class . '</em>')}
</p>
<p class="error">
	<strong>{__d('cake_dev', 'Error')}: </strong>
	{__d('cake_dev', 'Create the class %s below in file: %s', '<em>' . $class . '</em>', (empty($plugin) ? APP_DIR . DS : CakePlugin::path($plugin)) . 'Controller' . DS . $class . '.php')}
</p>
<pre>
&lt;?php
class {$class . ' extends ' . $plugin}AppController {

}
</pre>
<p class="notice">
	<strong>{__d('cake_dev', 'Notice')}: </strong>
	{__d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_controller.ctp')}
</p>

{$this->element('exception_stack_trace')}
