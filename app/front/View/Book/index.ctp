<html>
	<head>
		<title>BookSearch</title>
	</head>
	<body>
		<h1>BookSearch</h1>
		<?php echo $this->Form->create(null, array('type'=>'post','action'=>'search'));  ?>
		<table>
			<tr>
				<th>書籍タイトル</th>
				<td><?php echo $this->Form->text('title');  ?></td>
				<th>著者名</th>
				<td><?php echo $this->Form->text('author');  ?></td>
			</tr>
			<tr>
				<th>出版社名</th>
				<td><?php echo $this->Form->text('publisherName');  ?></td>
				<th>ISBNコード</th>
				<td><?php echo $this->Form->text('isbn');  ?></td>
			</tr>
		</table>
		<?php echo $this->Form->end("検索");  ?>

	</body>
</html>