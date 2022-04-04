@extends('layout.app')

@section('content')
<div class="site-index">

    <div class="col-md-6 offset-md-3 register">

        <h2>Formularz rejestracji</h2>

        <form class="form-horizontal" id="form" action="{{ route('register.do') }}">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Imię">
            <input type="text" class="mt-1" name="surname" placeholder="Nazwisko">
            <input type="text" class="mt-1" name="email" placeholder="Adres email">
            <textarea name="description" class="mt-1" placeholder="Opis"></textarea>

            <p class="m-0 p-0 mt-3">Stanowisko:</p>
            <select id="position" name="position">
                <option value="0">Wybierz stanowisko</option>
                <option value="1">Tester</option>
                <option value="2">Developer</option>
                <option value="3">Project Manager</option>
            </select>
            <div id="ext-position" class="mt-3">

            </div>
            <div id="message"></div>

            <button type="submit" class="btn btn-primary bs-btn-auth mt-3">Zarejestruj</button>

        </form>


    </div>

</div>

<script>
    $("#position").change(function(){
        var value = $(this).val();
        $.ajax({url: '/form/fields/' + value, success: function(result){
            $("#ext-position").html(result);
        }});
    });

    $("#form").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        $("#message").html('');
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            success: function(data){
                $('#form').trigger("reset");
                $("#ext-position").html('');
                $("#message").html(data)
            },
            error: function(data){
                errors = '';
                for(var i in data.responseJSON.errors)
                  errors += data.responseJSON.errors[i] + "<br/>";
                $("#message").html(errors)

            }
        });
    });

</script>
@endsection
