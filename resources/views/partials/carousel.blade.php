<div id="main-content-carousel" class="Main__Content__Carousel position-relative">
    <div class="loader-backdrop">
        <div class="backdrop"></div>
        <div class="indicator">
            <span><i class="fa fa-spinner fa-pulse"></i> {{ trans('home.loading') }}...</span>                                
        </div>
    </div>
    <input type="hidden" name="total_main_content_carousel_items" value="">
    <a
        id="slide-left-control"
        class="left carousel-control hidden"
        role="button"
        data-slide="left"
        data-current-item-id="0"
        style="display:none;"
    >
        <span class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></span>
        <span class="sr-only">{{ trans('home.previous') }}</span>
    </a>
    <a
        id="slide-right-control"
        class="right carousel-control hidden"
        role="button"
        data-slide="right"
        data-current-item-id="0"                            
        style="display:none;"                            
    >
        <span class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></span>
        <span class="sr-only">{{ trans('home.next') }}</span>
    </a>
    <div id="carousel-item-0" class="Listing gutter-5 sortable-content">
        <?php $key = 0; ?>        
        @foreach ($contents->chunk(3) as $chunked_content)
            <div class="row">
                @foreach ($chunked_content as $content)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div id="content-thumbnail-{{ $key }}" data-id="{{ $content->id }}" class="content-thumbnail">
                            <div id="thumbnail-{{ $content->id }}" class="Thumbnail hoverable" data-marker-id="{{ $content->id }}">
                                <a
                                    href="{{ $content->url }}"
                                    class="pjax"
                                    data-pjax-container="#pjaxModalContentContainer"
                                    data-pjax-fragment="#content-fragment"
                                    data-toggle="modal"
                                    data-target="#contentModal"
                                >
                                    <div class="Thumbnail__Header">
                                        <div>
                                            <span>{{ $content->title }}</span>
                                            <i class="flag-icon flag-icon-{{ strtolower($content->country_code) }}"></i>
                                        </div>
                                        <div class="backdrop"></div>
                                    </div>
                                    <img class="img-responsive lazy" data-original="{{ $content->thumbnail_url }}">
                                </a>
                                <div class="nav Thumbnail__Footer">
                                    <ul class="nav navbar-nav">
                                        <li><i class="fa fa-eye"></i> {{ $content->formatted_total_views }}</li>
                                        <li><i class="fa fa-comments"></i> {{ $content->total_comments }}</li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><i class="fa fa-thumbs-up"></i> {{ $content->total_rating }}</li>
                                        {{-- <li><i class="fa fa-thumbs-down"></i> {{ $content->total_dislikes }}</li> --}}
                                    </ul>
                                    <div class="backdrop"></div>
                                </div>                                                
                            </div>                                            
                        </div>
                    </div>
                    <?php $key++; ?>                                   
                @endforeach
            </div> 
        @endforeach           
    </div>
</div>