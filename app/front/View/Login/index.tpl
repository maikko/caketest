{$Session->flash()}
{$Form->create('Member',['url'=>'/login/login'])}
<p>{$Form->error('Member.mail')}</p>
<p>{$Form->error('Member.password')}</p>
<table>
	<tr>
		<th>mail</th>
		<td>{$Form->text('Member.mail')}</td>
	</tr>
	<tr>
		<th>pass</th>
		<td>{$Form->password('Member.password')}</td>
	</tr>
</table>
{$Form->end('Login')}