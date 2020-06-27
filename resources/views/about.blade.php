@extends('layouts.app')
@section('content')

<div class="content" style="padding-left: 35px;">
    <div class="container bg-1 text-center" >
    <img class="rounded-circle" src="imgs/me.jpg" alt="Me" width="20%" height="20%">
    <p style="padding : 10px"><b>me@ahmetkaygisiz.space</b></p>
    </div>
    <hr>
    
    <div class="container-fluid bg-2 text-center">
    <h3>Kimim ben?</h3>
    <p>Selamlar, Ben Ahmet. Kod dünyasında 'başkanım ben da varım' demek için geldim buraya.Java ve Linux sevdiğim şeyler arasında. Spring Boot şu sıralar uğraşlarım içerisinde. Scala ve Python da kısa zamanda uğraşlarım arasına girecek.
    </p>
    </div>
    <hr>
    
    <div class="container-fluid bg-3 text-center">
    <h3>Neler yaparım?</h3>
    <p>Bir önceki işimde 'Jr. Java Developer & System Support Associate' olarak görev aldım. Uygulama sunucuları ve java ile çalıştım. Oracle WebLogic Application Server, Oracle Internet Directory, Oracle Service Bus, GitLab, Confluence, Jira yönetimlerinde görev aldım.Java Secure Channel(JSch) ile remote sunuculara bağlantı kurup log dosyalarının okunmasını,sıkıştırılmasını ve indirilebilmesini sağlayan bir java kütüphanesi hazırladım. Ağırlıklı olarak WebLogic ve Scripting üzerinde çalışsam da sunucular yerine kod tarafında daha aktif olmak istiyorum.
    </p>
    </div>
    <hr>

<!-- 
<div class="container-fluid bg-3">
    <h3 style="font-family: 'Ubuntu Mono', monospace; text-align: center;">Nasıl ulaşırsınız?</h3>
    
 <div class="contact-form">
        <form action="#">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
        
            <label for="mail">Contant Mail</label>
            <input type="text" id="mail" name="mail" placeholder="Your mail adress..">
        
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="About.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit">
        
        </form>
    </div> -->
    </div>
</div>

@endsection

