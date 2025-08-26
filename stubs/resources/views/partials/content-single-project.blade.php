<x-brave-back-button class="!mb-3 lg:-mt-4" :text="$postData->isChild() ? 'Terug naar hoofdproject' : 'Terug naar overzicht'" />

<h1>{!! $postData->title() !!}</h1>

@if ($postData->isParent() || $postData->isChild() || $postData->isInformationPost)
	<div class="my-10 flex items-center gap-3">
		<span class="bg-primary size-2 rounded-full"></span>
		@if ($postData->isParent())
			<div>Hoofdproject</div>
			<a href="#deelprojecten">
				Naar alle deelprojecten
				<i class="fa-light fa-arrow-down ml-4"></i>
			</a>
		@endif
		@if ($postData->isChild() && !$postData->isInformationPost)
			<div>
				Deelproject van
				<a href="{{ $postData->parent()->url() }}">{!! $postData->parent()->title() !!}</a>
			</div>
		@endif
		@if ($postData->isInformationPost)
			<div>
				Informatie over
				<a href="{{ $postData->parent()->url() }}">{!! $postData->parent()->title() !!}</a>
			</div>
		@endif
	</div>
@endif

{!! $postData->content() !!}

<hr class="wp-block-separator" />

<x-social.share />

@if ($postData->isParent())
	<h2 id="deelprojecten" class="alignwide">
		Deelproject{{ $postData->children()->count() > 1 ? 'en' : '' }}:</h2>
	<div class="container mt-5 grid grid-cols-12 gap-4">
		@foreach ($postData->children() as $child)
			<x-card.project :postData="$child" />
		@endforeach
	</div>
@endif

@if ($postData->related()->isNotEmpty())
	<h2 id="deelprojecten" class="alignwide">Gerelateerde
		project{{ $postData->related()->count() > 1 ? 'en' : '' }}</h2>
	<div class="container mt-5 grid grid-cols-12 gap-4">
		@foreach ($postData->related() as $related)
			<x-card.project :postData="$related" />
		@endforeach
	</div>
@endif
