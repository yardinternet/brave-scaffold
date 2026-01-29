<x-layout.article>
	<x-slot:article>
		<x-brave-back-button />

		<h1>{!! $postData->title() !!}</h1>

		{!! $postData->content() !!}

		<x-social-share />
	</x-slot:article>

	<x-slot:bottom>
		@if ($postData->related()->isNotEmpty())
			<h2 class="alignwide mt-12! xl:mt-16! mb-0">Bekijk ook</h2>
			<div class="@container alignwide">
				<div class="@2xl:grid-cols-3 @2xl:mt-8 mb-2 mt-4 grid gap-4 lg:gap-6">
					@foreach ($postData->related() as $related)
						<x-card.knowledgebase :postData="$related" />
					@endforeach
				</div>
			</div>
		@endif
	</x-slot:bottom>
</x-layout.article>
