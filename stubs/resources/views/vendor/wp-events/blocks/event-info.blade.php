@php
	use Yard\Events\Data\EventData;
@endphp

@if (!($eventData instanceof EventData))
	<x-alert type="warning" class="col-span-12">
		{{ __('Momenteel kan er (nog) geen event informatie getoond worden.','sage') }}
	</x-alert>
@else
	<ul class="flex list-none flex-col flex-wrap gap-x-8 gap-y-2 !pl-0">
		@if ($eventData->formattedDateTime())
			<li class="flex items-baseline gap-x-4 gap-y-2">
				<i class="fa-light text-primary fa-fw fa-clock min-w-5"></i>

				<span class="flex flex-col">
					{!! $eventData->formattedDateTime() !!}

					@if (!empty($eventData->schedule()->dateDataCollection) || !empty($eventData->schedule()->recurrenceRule))
						<a href="{{ $eventData->schedule()->url() }}">{{ __('Bekijk alle data', 'sage') }}</a>
					@endif
				</span>
			</li>
		@endif

		<li class="flex items-baseline gap-x-4 gap-y-2">
			<i class="fa-light text-primary fa-fw fa-map-marker-alt min-w-5"></i>
			<span class="flex flex-col">
				@if($eventData->venue())
					<span>{!! $eventData->venue()?->title() !!}</span>
				@endif
				{!! $eventData->formattedAddress !!}
				@if ($eventData->venue()?->location?->googleMapsLink())
					<span>
							<a href="{{ $eventData->venue()?->location?->googleMapsLink() }}" target="_blank">
								{{ __('Bekijk op Google Maps', 'sage') }}
							</a>
						</span>
				@endif
			</span>
		</li>

		@if ($eventData->price())
			<li class="flex items-baseline gap-x-4 gap-y-2">
				<i class="fa-light text-primary fa-fw fa-euro-sign min-w-5"></i>
				<span>
					<span>{!! $eventData->price() !!}</span>
					@if ($eventData->priceDescription())
						<span class="ml-3 text-sm">{!! $eventData->priceDescription() !!}</span>
					@endif
				</span>
			</li>
		@endif
	</ul>
@endif
