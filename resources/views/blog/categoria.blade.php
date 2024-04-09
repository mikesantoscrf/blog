@extends('layouts.app')

@section('content')

@foreach ($categorias as $value)


						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h3><a href="{{ url('/blog/categoria/' . $value->id) }}">{{ $value->nome }}</a></h3>
										<p></p>
									</div>
								</header>
							</article>

 @endforeach

 @endsection
