<h2>{$name}</h2>
<p class="error">
	<strong>{__d('cake', 'Error')}: </strong>
	{__d('cake', 'An Internal Error Has Occurred.')}
</p>
{if(Configure::read('debug') > 0 )}
{$this->element('exception_stack_trace')}
{/if}
