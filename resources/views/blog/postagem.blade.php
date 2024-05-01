@extends('layouts.app')

@section('content')

						<!-- Post -->
							<article class="post">

								<p>{{ $postagem->conteudo }}</p>

								<footer>
									<ul class="stats">
										<li><a href="#">{{ $postagem->categoria->nome }}</a></li>
										<li><a href="#" class="icon solid fa-heart">{{ $postagem->curtidas>count() }}</a></li>
										<li><a href="{{ url('/blog/postagem/' . $postagem->id) }}" class="icon solid fa-comment">{{ $postagem->comentarios->count() }} COMENTÁRIOS</a></li>


                                        @auth


                                    <form action="{{ route('blog.postagemComentario', $postagem->id) }}" method="post">
                                        @csrf
                                        <textarea name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
                                        <button type="submit" class="btn btn-danger">Comentar</button>
                                    </form>
                                    @endauth

                                </ul>
								</footer>

                            <h3>Comentários:</h3>
                            @foreach ($postagem->comentarios as $comentario)
                                   <p>{{ $comentario->conteudo }} </p>
                                   <p>Feito por:  {{ $comentario->user->name }} - Data:  {{ $comentario->created_at }}</p>

                                   @endforeach

                            </article>



 @endsection
