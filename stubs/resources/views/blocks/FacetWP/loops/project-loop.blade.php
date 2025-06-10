<div class="@xl:gap-6 grid grid-cols-12 gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.project :postData="$postData" />
	@empty
		@include('blocks.FacetWP.partials.no-results')
	@endforelse
</div>
