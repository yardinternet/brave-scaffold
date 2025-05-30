<x-brave-back-button />

<h1>{!! $postData->title() !!}</h1>

<x-meta.person class="mb-6" :email="$postData->email" :phone="$postData->phone" />

{!! $postData->content() !!}
