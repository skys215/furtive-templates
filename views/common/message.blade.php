@foreach (session('flash_notification', collect())->toArray() as $message)
    <aside class="bg--green fnt--white px1">
        <p>{!! $message['message'] !!}</p>
    </aside>
@endforeach
{{ session()->forget('flash_notification') }}
