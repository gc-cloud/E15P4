{{-- Present thumbnails, title and bottomline for all selected articles --}}
@foreach($articles as $article)
    <div class="result relative row">
      <a href='/articles/show/{{$article->id}}'><span class="expanded"></span></a>
      <div class="col-lg-2 col-md-3 col-xs-4">
        <img  class="img-thumbnail vertical-align" src="{{$article->thumbPath}}" alt="Article Thumbnail" >
      </div>
      <div class="col-lg-10 col-md-8 col-xs-8">
        <h2>{{$article->title }}</h2>
        <p>{{$article->bottomline}}<a href='/articles/show/{{$article->id}}'> Read full article</a></p>
      </div>
      <div class="col-lg-2 col-md-3 col-xs-4">
        @if(isset($show_edit))
          {{-- Edite/Delet options. This section only shows if the user is authorized to contribute --}}
          <a class="front" href='/articles/edit/{{$article->id}}'><span class="glyphicon glyphicon-pencil"></span> Edit</a>
          <a class="front" href='/articles/confirm-delete/{{$article->id}}'><span class="glyphicon glyphicon-trash"></span> Delete</a><br>
        @endif
      </div>
    </div>
    <br>
@endforeach
