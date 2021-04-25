function previewImage(input, target) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $(target).attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

function openFileInput(file){
  $(file).click();
}

var currentDeleteForm;

$(".delete-btn").click(function(e){

  e.preventDefault();

  //set the current form variable
  currentDeleteForm = $(this).parent("form");

  //fire a confirmation box
  $("#notification").modal('show');
  
});

$("#confirm-delete-btn").click(function(e){
  currentDeleteForm.submit();
  $("#notification").modal('hide');
  currentDeleteForm = null;
});

function swapImage(img, mainImg){
  var thump = $(img).attr('src');
  var main = $(mainImg).attr('src');
  $(img).attr('src', main);
  $(mainImg).attr('src', thump);
}