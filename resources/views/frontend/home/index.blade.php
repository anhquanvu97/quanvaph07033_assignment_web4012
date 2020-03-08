@extends('frontend.layout')
@section('content')
<div class="container-fluid">
		<div class="row fh5co-post-entry">
			@foreach($posts as $post)
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
					<a href="{{ route('home.show',$post->id) }}"><img src="{{ $post->image }}" alt="Image" class="img-responsive"></a>
				</figure>
				<span class="fh5co-meta"><a href="{{ route('home.show',$post->id) }}">{{ $post->ShowNameCategory->name }}</a></span>
				<h2 class="fh5co-article-title"><a href="{{ route('home.show',$post->id) }}">{{ $post->title }}</a></h2>
				<span class="fh5co-meta fh5co-date">{{ date_format($post->updated_at,'d/m/Y') }}</span>
			</article>
			@endforeach
		</div>
	</div>
@endsection