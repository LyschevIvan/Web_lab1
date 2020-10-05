$(document).ready(function (){
    let y_inp = $(".y-input")
    let inp_form = $(".inp-form")
    const onChange = function (){
        let val_Y = $(".y-input").val().replace(',', '.')
        let re = new RegExp('^-?[0-9]+(\.[0-9]+)?$')
        if(re.test(val_Y)){
            if((parseFloat(val_Y) >= -3)&&(parseFloat(val_Y) <= 5)) {
                $(".input_alert").attr("style", "visibility :  hidden;")
                $(".submit-btn").prop("disabled", false)
            }
            else{
                $(".input_alert").attr("style", "visibility :  visible;")
                $(".submit-btn").prop("disabled", true)
            }
        }
        else{
            $(".input_alert").attr("style", "visibility :  visible;")
            $(".submit-btn").prop("disabled", true)
        }

    }

    y_inp.keyup(onChange)


    inp_form.on("submit",function (event){
        event.preventDefault();
        $.ajax('check.php', {
            method: 'post',
            dataType:'html',
            data: $(this).serialize(),
            success: function (data){
                 // alert(data)
                $("tr:last").after(data)

           }
        })
    })


    $('.clear-btn').click(function (){
        $.ajax({
            url: 'clear.php',
            method: 'post',
            success: function (data){
                //alert(data);
                $("#table").html(data)
                onChange()
            }
        })
    }

    )


})

