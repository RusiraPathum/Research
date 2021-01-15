$(document).on('click','#show_data',function(e){

    var id = "load";

    $.ajax({
        url: "./php/form.php",
        type: "POST",
        cache: false,
        data: {id:id},
        success: function(data){

            $('#table').html(data);
        },
        error : function(request,error)
        {
            alert("Request: "+JSON.stringify(request));
        }
    });
});

function check(){

    var date = document.getElementById('date').value;
    var name = document.getElementById('name').value;
    var in_time = document.getElementById('in_time').value;
    var out_time = document.getElementById('out_time').value;

    var id = "insert";
    var dt ={
        id:id,
        date: date,
        name: name,
        in_time: in_time,
        out_time: out_time
    }
    // alert(JSON.stringify(dt));
    if (date!= "" && name!= "" && in_time!= "" && out_time!= ""){
        $.ajax({
            url: './php/form.php',
            method: 'POST',
            data: dt,
            success: function (msg) {
                alert("Successfully saved !");
                window.location.reload();
            },
            error : function(request,error)
            {
                alert("Request: "+JSON.stringify(request));
            }
        });
    }else
        alert('Please Fill All The Field');
}


