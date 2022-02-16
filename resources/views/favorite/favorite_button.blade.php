@if (Auth::id())
        @if (Auth::user()->is_adding_favorite($micropost->id))
            {{-- お気に入り削除ボタンのフォーム --}}
            {{-- お気に入り登録中のみ表示 --}}
            {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
        @else
            {{-- お気に入り追加ボタンのフォーム --}}
            {{-- お気に入り未登録の時のみ表示 --}}
            {!! Form::open(['route' => ['favorites.favorite', $micropost->id], 'method' => 'store']) !!}
            {!! Form::submit('Favorite', ['class' => 'btn btn-success btn-sm']) !!}
            {!! Form::close() !!}
        @endif
@endif

