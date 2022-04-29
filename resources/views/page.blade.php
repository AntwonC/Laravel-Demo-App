@extends ('layouts.layout')

@section ('content')
<div class = "content-form"> 
    <h1 class="info-input">Enter some information</h1>
    <form action = "/page" method= "POST"> 
        @csrf
        <label for = "name">Your Name: </label> 
        <input type = "text" id="name" name="name"> 
        <label for= "type">Choose your best option:</label> 
        <select name="type" id="type"> 
            <option value= "pizza">Pizza</option>
            <option value= "burger">Burger</option>
            <option value= "pasta">Pasta</option>
        </select> 
 
        <input type="submit" value="Submit" id="submit-button"> 

    </form> 
</div>
@endsection


