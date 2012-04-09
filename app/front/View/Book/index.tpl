
<h1>BookSearch</h1>
{$Session->flash()}
{$Form->create(null, ['url'=>'/book/search'])}
<table>
	<tr>
		<th>書籍タイトル</th>
		<td>{$Form->text('title')}</td>
		<th>著者名</th>
		<td>{$Form->text('author')}</td>
	</tr>
	<tr>
		<th>出版社名</th>
		<td>{$Form->text('publisherName')}</td>
		<th>ISBNコード</th>
		<td>{$Form->text('isbn')}</td>
	</tr>
</table>
{$Form->end("検索")}