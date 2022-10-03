@props(['name','tag'=>'a','icon'=>''])
<{{$tag}} class="animate-button">
    <i class="{{$icon}}"></i>
    <span class="btn-animate-top"></span>
    <span class="btn-animate-right"></span>
    <span class="btn-animate-bottom"></span>
    <span class="btn-animate-left"></span>
    <div class="btn-text">{{$name}} </div>
</{{$tag}}>
