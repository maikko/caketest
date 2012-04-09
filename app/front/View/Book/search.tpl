
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

{if $item_array}
<table border=1>
<tr>
<th colspan="2">タイトル</th>
<th>著作者</th>
<th>出版社</th>
<th>ISBNコード</th>
<th>発売年月</th>
{foreach from=$item_array item=book}
<tr>
<td><img src="{$book['img_url']}" border=0></td>
<td>{$book['title']}</td>
<td>{$book['author']}</td>
<td>{$book['publisher']}</td>
<td>{$book['isbn']}</td>
<td>{$book['publication_date']}</td>
</tr>
{/foreach}
</table>
{/if}
	</body>
</html>