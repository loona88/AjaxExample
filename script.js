$(document).ready(function(){
  $('#form').submit(function(e){
    e.preventDefault();
    var m_method=$(this).attr('method'),
        m_action=$(this).attr('action'),
        m_data=$(this).serialize();

    $.ajax({
      type: m_method,
      url: m_action,
      data: m_data,
      success: function(data){
        $('#info').html(data);
      }
    });
  });
});
