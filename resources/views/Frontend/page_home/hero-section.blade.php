<section class="hero-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="text-center mb-5 pb-2">
                    <h1 class="text-white">Listen to Pod Talk</h1>

                    <p class="text-white">Listen it everywhere. Explore your fav podcasts.</p>

                    <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Start listening</a>
                </div>

                <div class="owl-carousel owl-theme">

                    @foreach ($singers as $item)
                        <div class="owl-carousel-info-wrap item">
                            <img src="{{asset('pod_talk')}}/{{$item->photo}}"
                                class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    {{$item->name}}
                                    @if ($item->verified==true)
                                        <img src="{{asset('pod_talk')}}/images/verified.png" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    @endif
                                </h4>

                                <?php
                                    $skills=explode(",",$item->skill);
                                ?>
                                @foreach ($skills as $sk)
                                  <span class="badge">{{$sk}}</span>
                                @endforeach

                            </div>

                            <div class="social-share">
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="{{$item->social1}}" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="{{$item->social1}}" class="social-icon-link bi-facebook"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>

        </div>
    </div>
</section>
