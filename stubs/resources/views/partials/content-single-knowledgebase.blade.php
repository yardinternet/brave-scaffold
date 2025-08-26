<x-brave-back-button />

<h1>{!! $postData->title() !!}</h1>

{!! $postData->content() !!}

<x-social.share />

@if ($postData->related()->isNotEmpty())
	<h2 class="alignwide !mt-12 mb-0 xl:!mt-16">Bekijk ook</h2>
	<div class="@container alignwide @xl:gap-6 grid grid-cols-12 gap-4">
		@foreach ($postData->related() as $related)
			<x-card.knowledgebase :postData="$related" />
		@endforeach
	</div>
@endif
