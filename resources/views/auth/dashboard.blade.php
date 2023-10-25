@extends('master')

@section('content')
  <body id="home">


  <!--Jumbotron-->
  
</style>
  <section class="jumbotron text-center">
    <img src="img/salma.jpeg" alt="Salma" width="250" style="margin-top: 90px;" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Anisah Salma Rafida</h1>
    <p class="lead">Mobile Developer</p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,197.3C384,181,480,107,576,64C672,21,768,11,864,48C960,85,1056,171,1152,176C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!--akhir jumbotron-->
    

  <!-- about me -->
  <section id="about"> 
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col">
        <h2>About Me</h2>
      </div>
    </div>
    <div class="row justify-content-center fs-5 text-center">
      <div class="col-md-5" >
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex neque deserunt fugit quas dignissimos ipsum odit. Debitis praesentium aut ea error nobis dolores doloribus, obcaecati adipisci similique velit quo quam accusantium non a animi! Pariatur saepe ab doloribus deserunt aliquam quia possimus. Optio, consectetur soluta atque eaque quibusdam possimus reiciendis.</p>
      </div>
      <div class="col-md-5">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum omnis sapiente cum accusamus aspernatur saepe itaque, voluptatibus, laboriosam ea enim, quis officia porro dolores aliquam nemo quo. Qui alias modi exercitationem ipsa, dicta fuga vero nihil possimus dignissimos officiis quia? Libero sint dolorum ipsum sit eos porro exercitationem dolores molestias.</p>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,96L40,96C80,96,160,96,240,122.7C320,149,400,203,480,213.3C560,224,640,192,720,165.3C800,139,880,117,960,133.3C1040,149,1120,203,1200,192C1280,181,1360,107,1400,69.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </section>
  <!-- akhir about me -->

  <!-- projects --> 
  <section id="projects" >
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/app1.jpg" class="card-img-top" alt="project1">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/app1.jpg" class="card-img-top" alt="project2">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/app1.jpg" class="card-img-top" alt="project3">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/app1.jpg" class="card-img-top" alt="project4">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/app1.jpg" class="card-img-top" alt="project5">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </div>


      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L40,53.3C80,43,160,21,240,37.3C320,53,400,107,480,138.7C560,171,640,181,720,160C800,139,880,85,960,85.3C1040,85,1120,139,1200,144C1280,149,1360,107,1400,85.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </section>
  <!-- akhir projects -->

  <!-- contact aku -->
  <section id="contact">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" aria-describedby="name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,224L40,234.7C80,245,160,267,240,261.3C320,256,400,224,480,208C560,192,640,192,720,202.7C800,213,880,235,960,250.7C1040,267,1120,277,1200,272C1280,267,1360,245,1400,234.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </section>
  <!-- akhir contact -->


@endsection