
    <div class='form-group'>
      {!!Form::label('Title:')!!}<br>
      {!!Form::text('title')!!}<br>
    </div>

    <div class='form-group'>
      {!!Form::label('Bottomline')!!}<br>
      {!!Form::text('bottomline')!!}<br>
    </div>
    <div class='form-group'>
      {!!Form::label('Body:')!!}<br>
      {!!Form::textarea('body')!!}<br>
    </div>
    <div class='form-group'>
      {!!Form::label('Category:')!!}<br>
      <select name='category' id='category'>
        @foreach($categories_for_select as $category_id => $category_name)
           <option value='{{ $category_id }}'> {{ $category_name }} </option>
       @endforeach
      </select>
    </div>
    <div class='form-group'>
      {!!Form::label('Author:')!!}<br>
      <select name='author_id' id='author_id'>
        @foreach($authors_for_select as $author_id => $author_name)
           <option value='{{ $author_id }}'> {{ $author_name }} </option>
       @endforeach
      </select>
    </div>
    {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
