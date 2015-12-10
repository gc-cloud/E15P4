
function addInput(divName){
          var newdiv = document.createElement('div');
          newdiv.innerHTML = '<label>Reference / URL :</label>'+
          '<input class="form-control" name="sources[]" type ="text" '+
                    'placeholder="Display text"><br>'+
          '<input class="form-control" name="urls[]" type ="text"'+
                    'placeholder="URL"><br>';
          document.getElementById(divName).appendChild(newdiv);
}

function addInput2(divName){
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
}
