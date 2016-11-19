<?php

/**
*  класс для генерации построчной навигации
*/
class Pagination
{
	# var ссылок навигации на страцину
	private $max = 10;

	#var ключ для GET, в который пишется номер страницы

	private $index = 'page';

	#var текущая страница

	private $current_page;

	# общее количество записей 

	private $total;

	# запиcей на страницу

	private $limit;

	public function __construct($total, $currentPage, $limit, $index)
	{
		#установить общее количество записей
		$this->total = $total;
		#количество записей на странице
		$this->limite = $limit;

		#Ключ в URL
		$this->index = $index;

		#Количество страниц
		$this->amount = $this->amount();

		#номер текущей страницы
		$this->setCurrentPage($currentPage);
	}
	# хтмл код со ссылками навигации
	public function get()
	{
		$link = null;

		$limits = $this->limits();

		$html = '<ul class="pagination">';
		for ($page=$limits[0]; $page <=$limits[1] ; $page++) { 
			if ($page == $this->current_page) {
				$links .= '<li class="active"><a href="#">' . $page . '</a></li>';
			} else {
				$links .= $this->generateHtml($page);
				}
			}
			if (!is_null($links)) {
				#если текущия страница не первая
				if ($this->current_page >1)
					$links = $this->generateHtml(1, '&lt') . $links;
				if ($this->current_page < $this->amount)
					$links .= $this->generateHtml($this->amount, '&gt');
			}

			$html .= $links . '</ul>';

			return $html;
	}

	private function generateHtml ($page, $text = null)
	{
		if(!$text)
			$text = $page;

		$currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
		$currentURI = preg_replace('~/page~[0-9]+', '', $currentURI);

		return '<li><a href="' . $currentURI . $this->index. $page . '">' . $text . '</a></li>';
	}

	//для пллучения откуда стартовать

	// return массив с началом и концом отсчета

	private function limits()
	{
		$left = $this->current_page = round($this->max / 2);
	}
}