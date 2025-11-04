<div class="@xl:gap-6 grid gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.yard-event :postData="$postData" class="card-horizontal" />
	@empty
		<x-facetwp.no-results />
	@endforelse
</div>
