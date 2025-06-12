<div class="@xl:gap-6 grid gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.knowledgebase class="card-horizontal" :postData="$postData" />
	@empty
		<x-facetwp.no-results />
	@endforelse
</div>
