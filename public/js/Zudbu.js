var counter =0;
function addInput(divName){
          var newdiv = document.createElement('div');
          newdiv.id = 'new'+counter;
          newdiv.innerHTML = '<label>Source / URL :</label>'+
          '<a onClick=removeElement("new'+counter+'");'+
          ' class="glyphicon glyphicon-trash"></a>'+
          '<input class="form-control" name="sources[]" type ="text" '+
                    'placeholder="Display text"><br>'+
          '<input class="form-control" name="urls[]" type ="url"'+
                    'required pattern="https?://.+" placeholder="URL"><br>';
          document.getElementById(divName).appendChild(newdiv);
          counter++;
}

function removeElement(divNum) {
  var deleteMe = document.getElementById(divNum);
  deleteMe.parentNode.removeChild(deleteMe);
}
