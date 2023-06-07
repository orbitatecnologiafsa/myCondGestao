function checado(el){
    let checkbox = $('#senhaShow');
    if (checkbox.is(":checked")) {
        $('#password').prop('type', 'text')
    } else {
        $('#password').prop('type', 'password')
    }
}

function submit(el){
    $("#submit-form").click(function(){
        $('#password').prop('type', 'password')
    });
}

