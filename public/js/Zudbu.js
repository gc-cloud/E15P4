var counter = 1;
var limit = 3;
function addInput(divName){
          var newdiv = document.createElement('div');
          newdiv.innerHTML = '<label>Reference / URL :</label>'+
          '<input class="form-control" name="source" type ="text" '+
          'placeholder="Display text for reference"><br>'+
          '<input class="form-control" name="url" type ="text"'+
          ' placeholder="URL for reference"><br>';
          document.getElementById(divName).appendChild(newdiv);
          counter++;
}

function addInput2(divName){
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
}
'<input class="entryField" name="url" type ="text" placeholder="Enter a URL"><br>'
'<input class="entryField" name="source" type ="text" placeholder="Enter a reference"><br>'
