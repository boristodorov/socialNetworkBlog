@if(count($errors) > 0)

<div class="row">
    @foreach($errors->all() as $error)
    <div class="alert-danger col-md-offset-3 col-md-6" style="border-radius: 5px; text-align: center; margin-bottom: 5px; ">
        <ul style="list-style: none; margin: 5px;">
            
            <li>{{ $error }}</li>
            
        </ul>
    </div>
    @endforeach
</div>
@endif

@if(Session::has('message'))
    <div class="row">
        <div class="alert-success col-md-offset-3 col-md-6" style="border-radius: 5px; text-align: center">
            {{Session::get('message')}}
        </div>
    </div>
@endif