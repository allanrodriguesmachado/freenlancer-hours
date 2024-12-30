<div class="grid grid-cols-2 gap-4">
        @foreach($this->projects AS $item)
                <a href="{{route('projects.show', $item)}}">
                    {{$item->id}} . {{$item->title}}
                </a>
        @endforeach
</div>
