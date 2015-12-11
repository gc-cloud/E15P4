
function addInput(divName){
          var newdiv = document.createElement('div');
          newdiv.innerHTML = '<label>Source / URL :</label>'+
          '<input class="form-control" name="sources[]" type ="text" '+
                    'placeholder="Display text"><br>'+
          '<input class="form-control" name="urls[]" type ="url"'+
                    'required pattern="https?://.+" placeholder="URL"><br>';
          document.getElementById(divName).appendChild(newdiv);
}
