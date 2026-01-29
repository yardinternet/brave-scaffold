<x-layout.article>
	<x-slot:article>
		<x-brave-back-button text="{{ __('Terug naar overzicht', 'sage') }}" :link="home_url('/evenementen')" />

		<h1>{!! $postData->schedule()->title !!}</h1>

		@if ($postData->hasStarted())
			<x-alert type="warning">
				Deze activiteit is al begonnen.
			</x-alert>
		@endif
		@if ($postData->hasEnded())
			<x-alert type="warning">
				Deze activiteit heeft al plaatsgevonden.
			</x-alert>
		@endif

		{!! $postData->schedule()->content() !!}
	</x-slot:article>

	<x-slot:bottom>
		@if ($postData->related()->isNotEmpty())
			<h2 class="alignwide mt-12! xl:mt-16! mb-0">{{ __('Bekijk ook deze evenementen', 'sage') }}</h2>
			<div class="@container alignwide">
				<div class="@xl:grid-cols-2 @3xl:grid-cols-3 @2xl:mt-8 mb-2 mt-4 grid gap-4 lg:gap-6">
					@foreach ($postData->related() as $related)
						<x-card.yard-event :postData="$related" />
					@endforeach
				</div>
			</div>
		@endif
	</x-slot:bottom>
</x-layout.article>
