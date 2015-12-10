
    <div class='form-group'>
      <h2>Title:</h2>
      {!!Form::text('title',null,array('class'=>'form-control'))!!}<br>
    </div>


    <div class='form-group'>
      <h2>Bottomline:<h2>
      {!!Form::text('bottomline',null,array('class'=>'form-control'))!!}<br>
    </div>

    <div class='form-group'>
      <h2>Body</h2>
      {!!Form::textarea('body',null,array('class'=>'form-control'))!!}<br>
    </div>

    <div class='form-group invisible'>
      <input type="text" name="author" value='{{ $author->name }}' readonly hidden><br>
      <input type="text" name="author_id" value='{{ $author->id }}' readonly hidden><br>
    </div>
