<x-layout.article>
	<x-slot:article>
		<x-brave-back-button class="mb-3! lg:-mt-4" :text="$postData->isChild() ? __('Terug naar hoofdproject', 'sage') : __('Terug naar overzicht', 'sage')" />

		<h1>{!! $postData->title() !!}</h1>

		@if ($postData->isParent() || $postData->isChild() || $postData->isInformationPost)
			<div class="my-10 flex items-center gap-3">
				<span class="bg-primary size-2 rounded-full"></span>
				@if ($postData->isParent())
					<div>{{ __('Hoofdproject', 'sage') }}</div>
					<a href="#deelprojecten">
						{{ __('Naar alle deelprojecten', 'sage') }}
						<i class="fa-light fa-arrow-down ml-4"></i>
					</a>
				@endif
				@if ($postData->isChild() && !$postData->isInformationPost)
					<div>
						{{ __('Deelproject van', 'sage') }}
						<a href="{{ $postData->parent()->url() }}">{!! $postData->parent()->title() !!}</a>
					</div>
				@endif
				@if ($postData->isInformationPost)
					<div>
						{{ __('Informatie over', 'sage') }}
						<a href="{{ $postData->parent()->url() }}">{!! $postData->parent()->title() !!}</a>
					</div>
				@endif
			</div>
		@endif

		{!! $postData->content() !!}

		<hr class="wp-block-separator" />

		<x-social-share />
	</x-slot:article>

	<x-slot:bottom>
		@if ($postData->isParent())
			<h2 id="deelprojecten" class="alignwide">
				{{ $postData->children()->count() > 1 ? __('Deelprojecten', 'sage') : __('Deelproject', 'sage') }}:</h2>
			<div class="container mt-5 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
				@foreach ($postData->children() as $child)
					<x-card.project :postData="$child" />
				@endforeach
			</div>
		@endif

		@if ($postData->related()->isNotEmpty())
			<h2 class="alignwide">
				{{ $postData->related()->count() > 1 ? __('Gerelateerde projecten', 'sage') : __('Gerelateerd project', 'sage') }}
			</h2>
			<div class="container mt-5 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
				@foreach ($postData->related() as $related)
					<x-card.project :postData="$related" />
				@endforeach
			</div>
		@endif
	</x-slot:bottom>
</x-layout.article>
