<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Lastest episodes</h4>
                </div>
            </div>

            @foreach ($songs as $song)
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">
                                <div class="section-overlay"></div>
                                <a href="{{route('song',$song->id)}}" class="custom-block-image-wrap">
                                    <img src="{{asset('pod_talk')}}/{{$song->photo_song}}"
                                        class="custom-block-image img-fluid" alt="">

                                    <a href="#" class="custom-block-icon">
                                        <i class="bi-play-fill"></i>
                                    </a>
                                </a>
                            </div>

                            <div class="mt-2">
                                <a href="#" class="btn custom-btn">
                                    Subscribe
                                </a>
                            </div>
                        </div>

                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small class="me-4">
                                    <i class="bi-clock-fill custom-icon"></i>
                                    50 Minutes
                                </small>

                                <small>Episode <span class="badge">15</span></small>
                            </div>

                            <h5 class="mb-2">
                                <a href="{{route('song',$song->id)}}">
                                   {{$song->title}}
                                </a>
                            </h5>

                            <div class="profile-block d-flex">
                                <img src="{{asset('pod_talk')}}/images/profile/4.jpg"
                                    class="profile-block-image img-fluid" alt="">

                                <p>
                                    Elsa
                                    <img src="{{asset('pod_talk')}}/images/verified.png" class="verified-image img-fluid" alt="">
                                    <strong>Influencer</strong>
                                </p>
                            </div>

                            <p class="mb-0">{{$song->description}}</p>

                            <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                <a href="#" class="bi-headphones me-1">
                                    <span>120k</span>
                                </a>

                                <a href="#" class="bi-heart me-1">
                                    <span>42.5k</span>
                                </a>

                                <a href="#" class="bi-chat me-1">
                                    <span>11k</span>
                                </a>

                                <a href="#" class="bi-download">
                                    <span>50k</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-column ms-auto">
                            <a href="#" class="badge ms-auto">
                                <i class="bi-heart"></i>
                            </a>

                            <a href="#" class="badge ms-auto">
                                <i class="bi-bookmark"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


            {{-- <div class="col-lg-6 col-12">
                <div class="custom-block d-flex">
                    <div class="">
                        <div class="custom-block-icon-wrap">
                            <div class="section-overlay"></div>
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="{{asset('pod_talk')}}/images/podcast/12577967_02.jpg" class="custom-block-image img-fluid"
                                    alt="">

                                <a href="#" class="custom-block-icon">
                                    <i class="bi-play-fill"></i>
                                </a>
                            </a>
                        </div>

                        <div class="mt-2">
                            <a href="#" class="btn custom-btn">
                                Subscribe
                            </a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <div class="custom-block-top d-flex mb-1">
                            <small class="me-4">
                                <i class="bi-clock-fill custom-icon"></i>
                                15 Minutes
                            </small>

                            <small>Episode <span class="badge">45</span></small>
                        </div>

                        <h5 class="mb-2">
                            <a href="detail-page.html">
                                Daily Talk
                            </a>
                        </h5>

                        <div class="profile-block d-flex">
                            <img src="{{asset('pod_talk')}}/images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                class="profile-block-image img-fluid" alt="">

                            <p>William
                                <strong>Vlogger</strong>
                            </p>
                        </div>

                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                            <a href="#" class="bi-headphones me-1">
                                <span>140k</span>
                            </a>

                            <a href="#" class="bi-heart me-1">
                                <span>22.4k</span>
                            </a>

                            <a href="#" class="bi-chat me-1">
                                <span>16k</span>
                            </a>

                            <a href="#" class="bi-download">
                                <span>62k</span>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>

                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>
