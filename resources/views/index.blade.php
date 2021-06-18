@extends('lay.lay')

<!-- Лента новостей-->
@section('content')
	<div id="main">

@foreach($articles as $article)
			<article class="post">
				<header>
					<div class="title">
						<h2>{{$article->title}}</h2>
                        <p>{{$article->title_down}}</p>
					</div>
					<div class="meta">
						<time class="published">27 февраля 2021 г.</time>
						<a href="/news/{{$article->id}}" class="author"><span class="name">{{$article->name}}</span><img src="images/avatar.jpg" alt="" /></a>
					</div>
				</header>
				<a href="/news/{{$article->id}}" class="image featured"><img src="{{$article->image_url}}" alt="" /></a>
				<p>{{$article->description}}</p>
				<footer>
					<ul class="actions">
						<li><a href="/news/{{$article->id}}" class="button big">Продолжить читать</a></li>
					</ul>
					<ul class="stats">
						<li><a href="#" class="icon fa-heart">28</a></li>
						<li><a href="#" class="icon fa-comment">128</a></li>
					</ul>
				</footer>
			</article>
        @endforeach

		<!-- Переход по страницам -->
			<ul class="actions pagination">
				<li><a href="" class="disabled button big previous">Предыдущая страница</a></li>
				<li><a href="#" class="button big next">Следущия страница</a></li>
			</ul>
	</div>
@endsection
