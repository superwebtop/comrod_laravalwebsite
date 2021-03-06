<h2 class="Content__Heading z-index-6">
    <span>
        <span class="dropdown no-padding padding-left-5 pull-right country-dropdown-span">
            <a
                data-toggle="modal"
                data-target="#homePageCategoriesModal"
            >
                <i class="fa fa-chevron-circle-down text-primary"></i>
            </a>                            
            <a
                class="text-default"
                data-toggle="modal"
                data-target="#homePageCategoriesModal"
            >
                {{ trans('video.categories') }}</a>
        </span>
        <span class="dropdown no-padding">
            <a data-toggle="dropdown"><i class="fa fa-chevron-circle-down text-primary"></i></a>
            <a data-toggle="dropdown" class="text-default">
                <span
                    class="country-name-span no-padding"
                    id="country-filter-selected"
                    data-key="{{ strtolower($country_code) }}"
                >{{ $country_name }}</span>
            </a>&nbsp;
            <i class="fs14 flag-icon flag-icon-{{ strtolower($country_code) }}" id="country-filter-flag-selected"></i> 
            &nbsp;<b>:{{ trans('video.jump-to-country') }}</b>
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
                            {{ $country->name }} 
                            <i class="flag-icon flag-icon-{{ strtolower($country->code) }}"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
        </span>  
    </span>
</h2>