<div class="@xl:gap-6 grid gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.news class="card-horizontal" :postData="$postData" />
	@empty
		@include('blocks.FacetWP.partials.no-results')
	@endforelse
</div>
