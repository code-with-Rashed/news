 <!-- Recent news area start -->
 <div class="container">
     <div class="row">
         <!-- Carousel area start -->
         <div class="col-md-7">
             <div id="carouselExampleCaptions" class="carousel slide">
                 <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                         aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                         aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                         aria-label="Slide 3"></button>
                 </div>
                 <div class="carousel-inner">
                     @foreach ($recent_news as $news)
                         @if ($loop->index < 2)
                             <div class="carousel-item @if ($loop->index == 0) active @endif">
                                 <a href="read.html">
                                     <img src="{{ asset('storage/media/news/' . $news['image']) }}"
                                         class="d-block w-100 rounded" alt="banner" loading="lazy" />
                                 </a>
                                 <div class="carousel-caption d-none d-md-block">
                                     <a href="category.html" class="text-decoration-none text-white fw-bold">
                                         <h5>{{ $news['category_name'] }}</h5>
                                     </a>
                                     <a href="read.html" class="text-decoration-none text-white">
                                         <p>{{ $news['title'] }}</p>
                                     </a>
                                 </div>
                             </div>
                         @endif
                     @endforeach
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
         </div>
         <!-- Carousel area end -->
         <div class="col-md-4">
             <div class="shadow-sm p-2 rounded">
                 @foreach ($recent_news as $news)
                     @if ($loop->index > 1 && $loop->index < 5)
                         <div class="row mb-3">
                             <div class="col-md-5">
                                 <a href="read.html" class="d-block">
                                     <img src="{{ asset('storage/media/news/' . $news['image']) }}" alt="img"
                                         class="w-100 me-2 rounded" loading="lazy" />
                                 </a>
                             </div>
                             <div class="col-md-7">
                                 <a href="read.html" class="text-decoration-none text-dark">
                                     <p class="h6">{{ $news['title'] }}</p>
                                 </a>
                                 <a href="category.html" class="text-decoration-none text-dark">
                                     <p title="Category"><i class="bi bi-tag"></i>{{ $news['category_name'] }}</p>
                                 </a>
                                 <p title="Release Date">
                                     <i class="bi bi-calendar3"></i> {{ date('d/m/Y', strtotime($news['created_at'])) }}
                                 </p>
                             </div>
                         </div>
                     @endif
                 @endforeach
             </div>
         </div>
     </div>
 </div>
 <!-- Recent news area end -->
