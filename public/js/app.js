// Call the dataTables jQuery plugin
$(document).ready(function() {

  show_product(); 
  function show_product(){
    $.ajax({
      type  : 'GET',
      url   : 'http://localhost:8000/api/getData',
      dataType : 'json',
      async : false,
      success : function(data){
        var html = '';
        var data=data.books;
        var i;
        console.log(data.books);
        for(i=0; i<data.length; i++){
          html += '<tr>'+
          '<td>'+(i+1)+'</td>'+
          '<td>'+data[i].name+'</td>'+
          '<td>'+data[i].book_code+'</td>'+
          '<td>'+data[i].author+'</td>'+
          '</tr>';
        }
        $('#show_data').html(html);
      },
    });
  }
  
  
  	$('#mydata').dataTable({
                "bLengthChange": true,
                "bInfo": true,
                "bPaginate": true,
                "bStateSave": true,
                "rowHeight":true,
                "bFilter": true,
                "bSort": true,
                "bAutoWidth": true,   
      "language": {
		 "sShow":   "Show",
		 "sSearch": "Search:",
         "paginate": {
         "first":      "First",
         "last":       "Last",
         "next":       "Next",
         "previous":   "Previous",
		 
     }
                }
            }

    );
});
