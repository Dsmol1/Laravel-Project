$('.add2cart').click(function(){
  event.preventDefault();
  let dish = $(this).data("dish");
  $.ajax({
    type: "GET",
    url: '/addDishAjax/' + dish,
    dataType: 'json',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(data){
      console.log(data['items'].length);
      $('#totalQty').text(data['items'].length);
    },

    error: function(data){
      console.log("error");
    }
  });
});
