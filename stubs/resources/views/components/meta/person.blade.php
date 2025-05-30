@props([
    'email' => null,
    'phone' => null,
])

@if ($email || $phone)
	<x-meta.list {{ $attributes }}>
		@if ($email)
			<x-meta.item icon="fa-envelope" :text="$email" :url="'mailto:' . $email" />
		@endif

		@if ($phone)
			<x-meta.item icon="fa-phone" :text="$phone" :url="'tel:' . $phone" />
		@endif
	</x-meta.list>
@endif
