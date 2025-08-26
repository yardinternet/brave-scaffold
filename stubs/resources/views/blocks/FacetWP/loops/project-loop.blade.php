<div class="@xl:gap-6 grid grid-cols-12 gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.project :postData="$postData" :direction="Direction::Fluid" columnClass="col-span-12" />
	@empty
		@include('blocks.FacetWP.partials.no-results')
	@endforelse
</div>
