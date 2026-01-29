<x-layout.article>
	<x-slot:article>
		<x-brave-back-button />

		<h1>{!! $postData->title() !!}</h1>

		<time class="my-4 block text-gray-500 md:my-6" datetime="{{ $postData->date('Y-m-d') }}">
			<i class="fa-light fa-clock mr-1 sm:mr-2" aria-hidden="true"></i>
			{{ $postData->date('j F Y') }}
		</time>

		{!! $postData->content() !!}

		<x-social-share />
	</x-slot:article>

	<x-slot:bottom>
		@if ($postData->related()->isNotEmpty())
			<h2 class="alignwide mt-12! xl:mt-16! mb-0">{{ __('Het laatste nieuws', 'sage') }}</h2>
			<div class="@container alignwide">
				<div class="@2xl:grid-cols-3 @2xl:mt-8 mb-2 mt-4 grid gap-4 lg:gap-6">
					@foreach ($postData->related() as $related)
						<x-card.news :postData="$related" />
					@endforeach
				</div>
			</div>
		@endif
	</x-slot:bottom>
</x-layout.article>
