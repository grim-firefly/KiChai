@props(['name', 'tag' => 'a', 'icon' => '','url'=>''])
<{{ $tag }} class="animate-button" @if ($tag == 'a') href="{{$url}}" @endif>
    <i class="{{ $icon }}"></i>
    <span class="btn-animate-top"></span>
    <span class="btn-animate-right"></span>
    <span class="btn-animate-bottom"></span>
    <span class="btn-animate-left"></span>
    <div class="btn-text">{{ $name }} </div>
    </{{ $tag }}>
