<x-layout>
	<div class="@container alignwide">
		<h1>{!! $postData->title() !!}</h1>

		<p>{!! $postData->excerpt !!}</p>

		<div class="@xl:grid-cols-2 @3xl:grid-cols-3 grid gap-4 lg:gap-6">
			@foreach ($postData->events() as $event)
				<x-card.yard-event :postData="$event" />
			@endforeach
		</div>
	</div>
</x-layout>
