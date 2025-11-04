@props([
    'eventDateTime' => null,
    'eventLocation' => null,
])

@if ($eventDateTime || $eventLocation)
	<x-meta.list {{ $attributes }}>
		@if ($eventDateTime)
			<x-meta.item icon="fa-clock" :text="$eventDateTime" />
		@endif
		@if ($eventLocation)
			<x-meta.item icon="fa-map-marker-alt" :text="$eventLocation" />
		@endif
	</x-meta.list>
@endif
