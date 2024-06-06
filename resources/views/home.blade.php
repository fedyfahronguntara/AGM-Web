@extends('layouts.app')

@section('content')
<main>
      <!--=============== HOME ===============-->
      <section
        class="hero"
        id="hero"
        style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          background-image: url('https://images.unsplash.com/photo-1605752660759-2db7b7de8fa9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2VuZ2dpZ2klMjBiZWFjaHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">
            Explore surganya lombok
          </h1>
          <a href="{{ route('fullday') }}" class="btn btn-hero mt-5" style="background-color: #517980; color:#ffffff">Book Now Full Day</a>
          <a href="{{ route('transfer') }}" class="btn btn-hero mt-5" style="background-color: #517980; color:#ffffff">Book Now Transfer</a>
        </div>
      </section>

      <!--=============== Why us ===============-->
      <section class="container why-us text-center">
        <h2 class="section-title">Kenapa Memilih Kami</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5">
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-money why-us-icon mb-4"></i>
                <h4 class="mb-3">Save Money</h4>
                <p>
                  Paket liburan yang terjangkau & berkualitas bagi semua jenis
                  wisatawan
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bxs-heart why-us-icon mb-4"></i>
                <h4 class="mb-3">Stay Safe</h4>
                <p>
                  Menjamin keamanan dan kenyamanan anda melalui standard
                  operasional yang professional.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-timer why-us-icon mb-4"></i>
                <h4 class="mb-3">Save Time</h4>
                <p>
                  Anda tidak perlu bingung tentang pketerlambtan karna kami selalu tepat waktu.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== Package ===============-->


      <!-- Cars -->


      <!--=============== Video ===============-->
      <section class="container text-center">
        <h2 class="section-title">Video Tour</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5">
          <div class="col-12">
            <iframe
              width="100%"
              height="500px"
              src="https://www.youtube.com/embed/lyGaTk4MLVM?controls=1"
            >
            </iframe>
          </div>
        </div>
      </section>

      <!--=============== Blog ===============-->
      <section class="container blog text-center">
        <h2 class="section-title">Our Blog</h2>
        <hr width="40" class="text-center" />

        <div class="row justify-content-center mt-5">
        @foreach($posts as $post)
          <div class="col-lg-4 mb-4 blogpost">
            <a href="{{ route('posts.show', $post)  }}">
              <div class="card-post">
                <div class="card-post-img" >
                  <img src="{{ Storage::url($post->image) }}"
                    alt="{{ $post->title }}" style="width: 100%; height: auto; aspect-ratio: 4/3;">
                </div>
                <div class="card-post-data">
                  <span>Travel</span> <small>- {{ $post->created_at->diffForHumans() }}</small>
                  <h5>{{ $post->title }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach
        </div>
      </section>
    </main>
@endsection
