<x-brave-back-button />

<h1>{!! $postData->title() !!}</h1>

<time class="my-4 block text-gray-500 md:my-6" datetime="{{ $postData->date('Y-m-d') }}">
	<i class="fa-light fa-clock mr-1 sm:mr-2" aria-hidden="true"></i>
	{{ $postData->date('j F Y') }}
</time>

{!! $postData->content() !!}

<x-social.share />

@if ($postData->related()->isNotEmpty())
	<h2 class="alignwide !mt-12 mb-0 xl:!mt-16">Het laatste nieuws</h2>
	<div class="@container alignwide">
		<div class="@2xl:grid-cols-3 @2xl:mt-8 mb-2 mt-4 grid gap-4 lg:gap-6">
			@foreach ($postData->related() as $related)
				<x-card.news :postData="$related" />
			@endforeach
		</div>
	</div>
@endif
