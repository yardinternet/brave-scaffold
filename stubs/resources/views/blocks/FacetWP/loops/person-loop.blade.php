<div class="@xl:gap-6 grid grid-cols-12 gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.person :postData="$postData" :direction="Direction::Fluid" columnClass="col-span-12" />
	@empty
		<x-facetwp.no-results />
	@endforelse
</div>
