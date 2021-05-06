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

$("#admin-sidebar-toggle").click(function(e){
  e.preventDefault();
  var sidebar = $("#admin-sidebar");
  
  if(sidebar.hasClass('show')){
    sidebar.animate({'width': 0}, 500);
    sidebar.removeClass('show');
    sidebar.css('height', '0');
    sidebar.parent().removeClass('bg-primary');
  }else{
    sidebar.animate({'width': '100%'}, 500);
    sidebar.addClass('show');
    if(window.innerWidth > 300){
      sidebar.css('height', '100%');
      sidebar.parent().addClass('bg-primary');
    }
    else
      sidebar.css('height', 'auto');
  }
});