{{-- Shared form fields used by the edit and create blades --}}

@section('head')
@stop

<div class='form-group'>
  <h2>Title:</h2>
  {!!Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title'))!!}<br>
</div>

<div class='form-group'>
  <h2>Bottomline:<h2>
  {!!Form::text('bottomline',null,array('class'=>'form-control','placeholder'=>'Bottomline'))!!}<br>
</div>

<div class='form-group'>
  <h2>Body</h2>
  {!!Form::textarea('body',null,array('id'=>'body','placeholder'=>'Body'))!!}<br>
</div>

<div class='form-group invisible'>
  <input type="text" name="author" value='{{ $author->name }}' readonly hidden><br>
  <input type="text" name="author_id" value='{{ $author->id }}' readonly hidden><br>
</div>

<div class="form-group">
    <h2>Pictures </h2>
    <p> For security, uploading new images needs to be confirmed everytime the form is submitted</p>
    <div class='form-group' id="upload">
        {!! Form::button('Upload New Images', array('onClick'=>'showImages();', 'class' => 'btn-sm btn-primary')) !!}
    <div>
    <div class='form-group' id="images" style="display:none">
      <span class="glyphicon glyphicon-camera"></span>
      {!! Form::label('Main Photo (suggested size: 940x350)') !!}
      {!! Form::file('imageName',['value'=>'old(imageName)']) !!}
      <span class="glyphicon glyphicon-camera"></span>
      {!! Form::label('Thumbnail (suggested size: 150x88)') !!}
      {!! Form::file('thumbName',null) !!}
  </div>
</div>

<script src="/js/Zudbu.js" ></script>
<script src='/tinymce/tinymce.min.js'></script>
<script>
tinymce.init({
  selector: '#body', menubar:false,
  toolbar: 'removeformat bold italic underline |alignleft aligncenter alignright alignjustify | fontsizeselect |  bullist numlist outdent indent | undo redo |'
});
</script>
