@extends('layouts.app')

@section('content')

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{ $postagem->titulo }}</a></h2>
										<p></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/y h:i:s')}}</time>
										<a href="#" class="author"><span class="name">{{ $postagem->user->name }}</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="{{ url('images/pic01.jpg') }}" alt="" /></span>
								<p>{{ $postagem->conteudo }}</p>

								<footer>
									<ul class="stats">
										<li><a href="#">{{ $postagem->categoria->nome }}</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="{{ url('/blog/postagem' . $postagem->id) }}" class="icon solid fa-comment">128</a></li>

                                    <form action="{{ route('blog.postagemComentario', $postagem->id) }}" method="post">
                                        @csrf
                                        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
                                        <button type="submit" class="btn btn-danger"> Comentar</button>

                                    </ul>
								</footer>
							</article>



 @endsection
