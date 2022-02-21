// animate placeholder
$(document).ready(function(){
  $(".welcome-form-input").each(function(){
    $(this).click(function(){
      // remove placeholder
      $(this).attr("placeholder","");

      // show label
      var parent = this.parentElement;
      var label = parent.getElementsByTagName("LABEL")[0];
      $(label).removeClass("d-none");
      $(label).addClass("animate__animated animate__backInUp animate__faster");

    });
  });
});


// slide on next
$(document).ready(function(){
  $(".step-1-next-btn").click(function(e){
    e.preventDefault();
    $(".step-1").addClass("d-none");
    $(".step-2").removeClass("d-none");
    $(".step-2").addClass("animate__fadeIn");

  });
});
