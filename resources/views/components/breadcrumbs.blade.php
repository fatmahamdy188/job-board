@props(['links'])
<nav {{$attributes}} >
    <ul class="flex items-center space-x-4 text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>
 
        {{--        Extracting the links props as key value pairs--}}
 
        @foreach($links as $label => $link)
            <li class="fas fa-arrow-right">→</li>
            <li>
                <a href="{{$link}}"> {{$label}} </a>
            </li>
        @endforeach
 
    </ul>
</nav> 