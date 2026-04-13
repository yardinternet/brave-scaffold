<x-layout>
	<div class="@container alignwide">
		<h1>{!! $postData->title() !!}</h1>

		<p>{!! $postData->excerpt !!}</p>

		<div class="auto-grid">
			@foreach ($postData->events() as $event)
				<x-card.yard-event :postData="$event" />
			@endforeach
		</div>
	</div>
</x-layout>
