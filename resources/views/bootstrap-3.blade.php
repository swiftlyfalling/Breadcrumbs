@if ($breadcrumbs)
    <ul class="breadcrumb breadcrumb-top">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && ! $breadcrumb->isLast())
                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif