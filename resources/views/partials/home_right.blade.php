<div class="col-md-6">
    <div class="Map">
        @if (is_rtl())
            @include('partials.map_header-right')
        @else
            <h2 class="Content__Heading">
                <span>
                    <span class="dropdown no-padding">
                        <a
                            class="text-default"
                            data-toggle="modal"
                            data-target="#homePageCategoriesModal"
                        >
                            {{ trans('home.categories') }}</a>
                        <a
                            data-toggle="modal"
                            data-target="#homePageCategoriesModal"
                        >
                            <i class="fa fa-chevron-circle-down text-primary"></i>
                        </a>                            
                    </span>                        
                    
                    <span class="dropdown no-padding padding-left-5 pull-right country-dropdown-span">
                        <b>{{ trans('home.jump-to-country') }}:</b>&nbsp;<i class="fs14 flag-icon flag-icon-{{ strtolower($country_code) }}" id="country-filter-flag-selected"></i> 
                        <a data-toggle="dropdown" class="text-default">
                            <span
                                class="country-name-span no-padding"
                                id="country-filter-selected"
                                data-key="{{ strtolower($country_code) }}"
                            >{{ $country_name }}</span></a>&nbsp;
                        <a data-toggle="dropdown"><i class="fa fa-chevron-circle-down text-primary"></i></a>
                        <ul class="dropdown-menu pull-right">
                            @foreach (countries_with_videos() as $key => $country)
                                <li class="{{ $country->code == $country_code ? 'hidden' : '' }}">
                                    <a 
                                        href="{{ route('home', ['geo' => strtolower($country->code)]) }}"
                                        class="country-map-trigger"
                                        data-country-name="{{ $country->name }}"
                                        data-country-code="{{ $country->code }}"
                                        data-target-label="#country-filter-selected"
                                        data-label="{{ $country->name }}"
                                        data-key="{{ strtolower($country->code) }}"
                                        data-target-flag="#country-filter-flag-selected"
                                    >
                                        <i class="flag-icon flag-icon-{{ strtolower($country->code) }}"></i>
                                        {{ $country->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </span>
                </span>
            </h2>
        @endif
        <div id="map"></div>
        <div class="backdrop"></div>
        <div class="loader">
            <i class="fa fa-spinner fa-pulse"></i> {{ trans('home.loading_map') }}
        </div>                    
    </div>
</div>