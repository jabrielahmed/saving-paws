function addEvent(date){
    $('#eventDate').val(date);
    $('#eventDateView').html(date);
    $('#event_list').slideUp('slow');
    $('#event_add').slideDown('slow');
}

$(document).ready(function(){
    $('#addEventBtn').on('click',function(){
        var date = $('#eventDate').val();
        var title = $('#eventTitle').val();
        $.ajax({
            type:'POST',
            url:'functions.php',
            data:'func=addEvent&date='+date+'&title='+title,
            success:function(msg){
                if(msg == 'ok'){
                    var dateSplit = date.split("-");
                    $('#eventTitle').val('');
                    alert('Event Created Successfully.');
                    getCalendar('calendar_div',dateSplit[0],dateSplit[1]);
                }else{
                    alert('Some problem occurred, please try again.');
                }
            }
        });
    });
});