@use(App\View\Components\Card\Enums\Direction)

<div class="@xl:gap-6 grid gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.project :postData="$postData" :direction="Direction::FLUID" />
	@empty
		@include('blocks.FacetWP.partials.no-results')
	@endforelse
</div>
