@extends('layouts.app')

@section('content')

@foreach ($autores as $value)


						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h3><a href="{{ url('/blog/autor/' . $value->id) }}">{{ $value->name }}</a></h3>
										<p></p>
									</div>
								</header>
							</article>

 @endforeach

 @endsection
