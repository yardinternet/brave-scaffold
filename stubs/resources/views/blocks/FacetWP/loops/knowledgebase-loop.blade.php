@use(App\View\Components\Card\Enums\Direction)

<div class="@xl:gap-6 grid gap-4">
	@forelse ($postDataCollection as $postData)
		<x-card.knowledgebase :postData="$postData" :direction="Direction::FLUID" />
	@empty
		<x-facetwp.no-results />
	@endforelse
</div>
