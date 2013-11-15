var nextPageNumber = 1;
function nextPage() {
  //EX:
  //http://www.robert-deluca.com/blog/page/2/
  nextPageNumber++;
  var pageNumber = "http://www.robert-deluca.com/page/" + nextPageNumber;
  //Debugging
  //console.log(nextPageNumber);
  //console.log(pageNumber);
  return pageNumber;
}
jQuery(document).ready(function(){
  $.ajaxSetup ({
    cache: false,
    timeout: 5000
  });

  $("#prev_page").click(function(event){
    event.preventDefault();
    
    $('.loading-div').show(function(){
      
      $.get(nextPage(), function(data){
        $('.loaded-in-posts').append($(data).find('.blog-roll').html());
      }).done(function(){
        $('.loading-div').hide();
      }).fail(function(){
        $('.loading-div').hide();
        $('.error-div').show(function(){
          $(this).delay(4000).fadeOut();
        });
      });

    });

  });

});