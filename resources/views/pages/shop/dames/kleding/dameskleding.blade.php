@extends('layouts.layout')
    <div class="containershop">
       

        @section('body')
                <h1>Dameskleding</h1>
                <p>Hier komt dameskleding</p>
<!doctype html>
<title>Example</title>
<style>
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 20px;
  align-items: stretch;
  }
.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
}
.grid > article img {
  max-width: 100%;
}
.text {
  padding: 0 20px 20px;
}
.text > button {
  background: gray;
  border: 0;
  color: white;
  padding: 10px;
  width: 100%;
  }
</style>
<main class="grid">
  <article>
    <img src="{{URL::asset('/images/shop/dames/blauw.jpeg')}}" alt="Sample photo">
    <div class="text">
        <center><bold>€20,-</bold></center><br>
      <small>Seamlessly visualize quality</small>
   
    </div>
  </article>
  <article>
    <img src="{{URL::asset('/images/shop/dames/blauw.jpeg')}}" alt="Sample photo">
    <div class="text">
        <center><bold>€20,-</bold></center><br>
      <small>Seamlessly visualize quality</small>
     
    
    </div>
  </article>
    <article>
    <img src="{{URL::asset('/images/shop/dames/levi2.jpg')}}" alt="Sample photo">
    <div class="text">
        <center><bold>€20,-</bold></center><br>
      <small>Seamlessly visualize quality</small>

    </div>
  </article>
    <article>
    <img src="{{URL::asset('/images/shop/dames/toedeloe.jpg')}}" alt="Sample photo">
    <div class="text">
        <center><bold>€20,-</bold></center><br>
      <small>Seamlessly visualize quality</small>
     
  
    </div>
  </article>
    <article>
    <img src="{{URL::asset('/images/shop/dames/tou.jpg')}}" alt="Sample photo">
    <div class="text">
        <center><bold>€20,-</bold></center><br>
      <small>Seamlessly visualize quality</small>
    
    </div>
  </article>
    <article>
    <img src="{{URL::asset('/images/shop/dames/blauw.jpeg')}}" alt="Sample photo">
    <div class="text">
        <center><bold>€20,-</bold></center><br>
      <small>Seamlessly visualize quality</small>
     
     
    </div>
  </article>
</main>


<!-- END MAIN -->
</div>
</div>
        @endsection
    </div>