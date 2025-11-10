<x-brave-back-button text="{{__('Terug naar overzicht', 'sage') }}" :link="home_url('/evenementen')" />

<h1>{!! $postData->parent()->title !!}</h1>
@if(today() > $postData->startDate)
	<h2 class="text-red-700">{{ __('Dit evenement is reeds afgelopen', 'sage') }}</h2>
@endif

{!! $postData->parent()->content() !!}

@if ($postData->related()->isNotEmpty())
	<h2 class="alignwide !mt-12 mb-0 xl:!mt-16">{{ __('Bekijk ook deze evenementen','sage') }}</h2>
	<div class="@container alignwide">
		<div class="@xl:grid-cols-2 @3xl:grid-cols-3 @2xl:mt-8 mb-2 mt-4 grid gap-4 lg:gap-6">
			@foreach ($postData->related() as $related)
				<x-card.yard-event :postData="$related" />
			@endforeach
		</div>
	</div>
@endif
