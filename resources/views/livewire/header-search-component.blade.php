<style>
    .search-style-1 form button{
        right: 8px;
        top: 48%;
    }
</style>
<div class="search-style-1 row">
    <form action="{{route('product.search')}}" class="col-10">
        <input type="text" name="q" placeholder="Search for items..." value="{{$q}}" id="search_input"> 
        <button type="submit"><i class="fa fa-search" style="font-size:24px"></i></button>
    </form>
    <div class="col-md-2">
    <button class="btn btn-info microphone" style="padding:6px 8px"><i class="fa fa-microphone" style="font-size:24px">
    <span class="recording-icon"></span>
    </i></button>
</div>
</div>

<script>
    var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    var recognition = new SpeechRecognition();
    
    recognition.interimResults = false;
    recognition.onresult = function(event){
        var lastResult = event.results.length - 1;
        var content = event.results[lastResult][0].transcript;
        document.getElementById("search_input").value = content;
        document.querySelector('form').submit(); // Submit the form after voice input
    }
    
    recognition.onspeechend = function(){
        recognition.stop();
        const microphone = document.querySelector('.microphone');
        microphone.classList.remove('recording');
    }
    
    recognition.onerror = function(event){
        console.log(event.error);
        const microphone = document.querySelector('.microphone');
        microphone.classList.remove('recording');
    }
    
    document.querySelector('.microphone').addEventListener('click', function(){
        recognition.start();
        const microphone = document.querySelector('.microphone');
        microphone.classList.add('recording');
    });
</script>