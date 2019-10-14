@if (count($errors->all()))
    <div class="alert alert-danger">
        <strong>Alert</strong>
        <hr>
        Please check if your input follows these rules.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif