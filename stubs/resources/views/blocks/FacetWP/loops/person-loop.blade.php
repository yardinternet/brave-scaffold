<div class="@xl:gap-6 @lg:grid-cols-2 @3xl:grid-cols-3 grid gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.person :postData="$postData" />
	@empty
		<x-facetwp.no-results />
	@endforelse
</div>
