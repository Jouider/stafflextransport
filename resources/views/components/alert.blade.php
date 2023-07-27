@props(['type'])
<div class="alert alert-{{$type}} text-center w-70" role="alert">
    {{$slot}}
</div>