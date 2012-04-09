<?php
App::uses('AppController', 'Controller');

class BookController extends AppController {
	public function beforeFilter(){
		if(!$this->Session->read('member')){
			$this->Session->setFlash("ログインしてください。");
			$this->redirect('/login/index');
		}
	}
	public function index() {
	}

	public function search(){
		$this->modelClass = null;
		if($this->request->data){
			//TODO 後で定数に
			$developerId = 'XXX';
			$affiliateId = 'XXX';
			$url = 'http://api.rakuten.co.jp/rws/3.0/rest?operation=BooksBookSearch&version=2011-12-01&developerId=';
			$url .= $developerId;
			$url .= '&affiliateId='.$affiliateId;

			// リクエストパラメータ
			$title = $this->request->data['Book']['title'];
			$author = $this->request->data['Book']['author'];
			$publisherName = $this->request->data['Book']['publisherName'];
			$isbn = $this->request->data['Book']['isbn'];
			// 全部空ならエラー
			if(!$title && !$author && !$publisherName && !$isbn){
				$this->Session->setFlash("検索ワードを入力してください。");
				return;
			}

			if($title){
				$url .= '&title=' . urlencode($title);
			}
			if($author){
				$url .= '&author=' . urlencode($author);
			}
			if($publisherName){
				$url .= '&publisherName=' . urlencode($publisherName);
			}
			if($isbn){
				$url .= '&isbn=' .urlencode($isbn);
			}

			// とりあえず最初の10件
			$url .= '&hits=10';

			// xmlデータ取得
			$contents = file_get_contents($url);
			// 名前空間の:があると上手くいかないので削除
			$contents = str_replace('header:Header', 'Header', $contents);
			$contents = str_replace('booksBookSearch:BooksBookSearch', 'BooksBookSearch', $contents);
			// xml解析
			$xml = simplexml_load_string($contents);
			// 必要なデータだけ取得
			$item_array = array();
			foreach ($xml->Body->BooksBookSearch->Items->Item as $item){
				$item_array[] = array(
						'title'=>$item->title,
						'author'=>$item->author,
						'publisher'=>$item->publisherName,
						'isbn'=>$item->isbn,
						'publication_date'=>$item->salesDate,
						'img_flag'=>($item->smallImageUrl?1:0),
						'img_url'=>$item->smallImageUrl,
					);
			}
 			$this->set("item_array", $item_array);
		}
	}

}
