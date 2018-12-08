

<form id="test-form">
  
  <div>
    <label>Field 1</label>
    <input type="text" name="test1" placeholder="Field 1"/>
  </div>

  <div>
    <label>Field 2</label>
    <input type="text" name="test2" placeholder="Field 2"/>
  </div>
  
  <div>
    <label>Field 3</label>
    <input type="text" name="test3" placeholder="Field 3"/>
  </div>
  
  <div>
    <label>Field 4</label>
    <input type="text" name="test4" placeholder="Field 4"/>
  </div>

  <div>
    <button type="submit"id="submit-form">Submit</button>
  </div>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>

$('#test-form').submit(function(e){
  e.preventDefault();
  formSubmit();
})

function formSubmit(){
  var submitForm = $('#submit-form').val();
  if(submitForm != ''){
    var $form = $('#test-form'),
        url = 'https://script.google.com/macros/s/AKfycbxtn3GrFfezrswcPQdZbSS7msNxZXKXzrZXRUrXG8unML3Xzs4/exec'

        $.ajax({
          url: url,
          method: "GET",
          dataType: "json",
          data: $form.serialize(),
          success: function(response){
              $('#test-form')[0].reset();
              alert('Form Submitted Successfully');
              return true
          }
        })
  }
  else{
    return false
  }
};

</script>

