<link rel="stylesheet" href="{{asset('./css/chitiet.css')}}">
<section>
    <h1 style="text-align: center;">{{$book->book_name}}</h1>
    @foreach ($chapters as $chapters)
    <details open>
      <summary>{{$chapters->chapter_name}}</summary>
      <div>
      @if ($loop->first)
        <img src="{{ asset('storage/images/books/'.$book->book_image) }}" alt="">
      @endif
        <p>{{$chapters->chapter_content}}</p>
      </div>
    </details>
    @endforeach
  </section>
  <div class="action">
    <a href="{{route('index')}}">Quay lai</a>
  </div>