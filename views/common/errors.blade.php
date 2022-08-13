@if(!empty($errors))
    @if($errors->any())
        @foreach($errors->all() as $error)
            <aside class="bg--red fnt--white px1">
                <p><strong>ERROR</strong>: {!! $error !!}</p>
            </aside>
        @endforeach
    @endif
@endif
