
    <div class='form-group'>
      {!!Form::label('Title:')!!}<br>
      {!!Form::text('title',null,array('class'=>'entryField'))!!}<br>
    </div>


    <div class='form-group'>
      {!!Form::label('Bottomline')!!}<br>
      {!!Form::text('bottomline',null,array('class'=>'entryField'))!!}<br>
    </div>

    <div class='form-group'>
      {!!Form::label('Body:')!!}<br>
      {!!Form::textarea('body',null,array('class'=>'entryField'))!!}<br>
    </div>

    <div class='form-group invisible'>
      <input type="text" name="author" value='{{ $author->name }}' readonly hidden><br>
      <input type="text" name="author_id" value='{{ $author->id }}' readonly hidden><br>
    </div>
