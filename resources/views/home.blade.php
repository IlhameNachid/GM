<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
   <div class="logout">
      <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
         @csrf
         @method('DELETE')
         <button class="Btn" type="submit">
            <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
            <div class="text">Logout</div>
         </button>
      </form>
          </div>
    <div class="cont">
       <h1> Bonjour, {{ Auth::user()->name }}</h1>
    </div>
    <div class="container cont">
         <div class="card__container">
         <a href="{{url('bureau')}}" class="card__button">
            <article class="card__article">
               <img src="assets/img/landscape-1.png" alt="image" class="card__img">
               <div class="card__data">
                  <h2 class="card__title">The Great Path</h2>
               </div>
            </article>
         </a>
         <a href="#" class="card__button">
            <article class="card__article">
               <img src="assets/img/landscape-2.png" alt="image" class="card__img">
               <div class="card__data">
                  <h2 class="card__title">Starry Night</h2>         
               </div>
            </article>
         </a>
         <a href="#" class="card__button">
            <article class="card__article">
               <img src="assets/img/landscape-3.png" alt="image" class="card__img">
               <div class="card__data">
                  <h2 class="card__title">Path Of Peace</h2>               
               </div>
            </article>
         </a>
         <a href="{{url('bureau')}}" class="card__button">
            <article class="card__article">
               <img src="assets/img/landscape-1.png" alt="image" class="card__img">
               <div class="card__data">
                  <h2 class="card__title">The Great Path</h2>          
               </div>
            </article>    
         </a>   
         <a href="#" class="card__button">
            <article class="card__article">
               <img src="assets/img/landscape-2.png" alt="image" class="card__img">
               <div class="card__data">
                  <h2 class="card__title">Starry Night</h2>           
               </div>
            </article>
         </a>
         <a href="#" class="card__button">
            <article class="card__article">
               <img src="assets/img/landscape-3.png" alt="image" class="card__img">
               <div class="card__data">
                  <h2 class="card__title">Path Of Peace</h2>   
               </div>
            </article>
         </a>        
         </div>
         <div class="foter">
         </div>
      </div>
      

</body>
</html>