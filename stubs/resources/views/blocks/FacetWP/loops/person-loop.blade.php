<div class="auto-grid">
	@forelse ($postDataCollection as $postData)
		<x-card.person :postData="$postData" />
	@empty
		<x-facetwp.no-results />
	@endforelse
</div>
