@extends('layouts.app')
@section('content')

<div class="content" style="padding-left: 35px;">
    <div class="container bg-1 text-center" >
    <img class="rounded-circle" src="imgs/me.jpg" alt="Me" width="20%" height="20%">
    </div>
    <hr>
    
    <div class="container-fluid bg-2 text-center">
    <h3>Kimim ben?</h3>
    <p>.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <hr>
    
    <div class="container-fluid bg-3 text-center">
    <h3>Neler yaparım?</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
    </div>
    <hr>
    
    <div class="container-fluid bg-3">
    <h3 style="font-family: 'Ubuntu Mono', monospace; text-align: center;">Nasıl ulaşırsınız?</h3>
    
    <div class="contact-form">
        <form action="#">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
        
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit">
        
        </form>
    </div>
    </div>
</div>

@endsection

