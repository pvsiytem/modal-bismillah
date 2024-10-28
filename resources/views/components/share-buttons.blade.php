@php
    $buttons = config('share-buttons.buttons');
    $url = request()->fullUrl(); // Gets the current page URL
    $text = 'Check this out!'; // Default share text, can be customized
@endphp

<div id="social-buttons">
    @foreach ($buttons as $key => $button)
        @php
            $buttonUrl = str_replace(
                [':url', ':text'],
                [$url, urlencode($text)],
                $button['url']
            );
        @endphp
        <a href="{{ $buttonUrl }}" class="social-button" target="_blank">
            {!! str_replace(':url', $buttonUrl, config("share-buttons.templates.$key")) !!}
        </a>
    @endforeach
</div>