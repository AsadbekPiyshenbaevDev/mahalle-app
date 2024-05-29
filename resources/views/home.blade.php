<x-layout>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row" style="justify-content: center;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row" style="justify-content: center;">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card" style="padding: 0px 10px;">
                            <div class="card-header">
                                <h4>Máhálle passportı</h4>
                            </div>
                            <div class="card-body">
                                <div class="row   w-full" style="padding: 22px;">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary"
                                            data-sider-select-id="29d62cfb-2997-43ef-9c2b-a7a95d0c5271">
                                            Máhálle aqsaqalı</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">{{ auth()->user()->surname }}
                                                {{ auth()->user()->name }} {{ auth()->user()->ochs }}</span></dd>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary">Sektor</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">4-sektor(DSI)</span>
                                        </dd>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary">Ózbekshe atı</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">Aqtuba</span>
                                        </dd>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary">Russha atı</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">Ақтуба</span>
                                        </dd>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary">Aymaqlıq shegarası (gа)</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">13 898</span></dd>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary">Wálayat</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">Qaraqalpaqstan Respublikası</span></dd>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary">Rayonı</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">Kegeyli rayonı</span>
                                        </dd>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <dt style="font-size:16px;" class="text-secondary">INN</dt>
                                        <dd style="font-size:16px;" class="mt-1 text-gray-900"><span
                                                class="font-medium text-lg">202822362</span>
                                        </dd>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-left"
                                style="border-top: 1px solid #b8b6b6;padding-top: 10px;padding-bottom: 0px;">
                                <p style="color: #6677ef;"><i class="fa fa-phone"></i> &nbsp; +998934881920</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            {{-- <div class="card-header">
                      <h4>Card Action Button</h4>
                  </div> --}}
                            <div class="card-body" style="padding: 0px !important">
                                {{-- <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                  </div> --}}


                                <div id="map" style="border-radius: 10px; "></div>

                                <script type="text/javascript">
                                    function initMap() {
                                        const myLatLng = {
                                            lat: 22.2734719,
                                            lng: 70.7512559
                                        };
                                        const map = new google.maps.Map(document.getElementById("map"), {
                                            zoom: 5,
                                            center: myLatLng,
                                        });

                                        new google.maps.Marker({
                                            position: myLatLng,
                                            map,
                                            title: "Hello Rajkot!",
                                        });
                                    }

                                    window.initMap = initMap;
                                </script>

                                <script type="text/javascript"
                                    src="https://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&callback=initMap"></script>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-span-2 card flex flex-col gap-4 p-4 shadow bg-card">
                            <div class="flex justify-between items-center">
                                <div class="text-xl font-medium">Statistika</div>
                            </div>
                            <div class="h-full w-full row p-4">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 hover:bg-hover cursor-pointer ng-star-inserted"
                                    style="display:flex;" aria-describedby="cdk-describedby-message-ng-1-29"
                                    cdk-describedby-host="ng-1"><custom-icon-wrapper class="mr-2"><mat-icon
                                            role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_solid-population"
                                            data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="16" fill="#E0EAFF">
                                                </rect>
                                                <g clip-path="url('/mahalla/current-mahalla/general#clip0_52_5883')">
                                                    <path
                                                        d="M22.5273 36.5625C23.5503 40.2226 25.2224 43.2451 27.0562 44V36.5625H22.5273ZM21.3977 29.0625C21.4576 30.9656 21.6951 32.8824 22.0758 34.6875H27.0562V29.0625H21.3977ZM28.9375 36.5625V44C30.7713 43.2451 32.4497 40.2226 33.4727 36.5625H28.9375ZM19.5241 29.0625H12.0475C12.1644 31.058 12.6431 32.9543 13.4304 34.6875H20.1551C19.7917 32.8887 19.5793 30.9837 19.5241 29.0625ZM20.6023 36.5625H14.4414C16.5526 39.9273 19.8784 42.5954 23.8062 43.6524C22.4626 41.9666 21.3578 39.3725 20.6023 36.5625ZM35.3977 36.5625C34.6422 39.3725 33.5374 41.9666 32.1938 43.6524C36.1216 42.5954 39.4474 39.9273 41.5586 36.5625H35.3977ZM36.4759 29.0625C36.4207 30.9837 36.2083 32.8887 35.8449 34.6875H42.5696C43.3569 32.9543 43.8356 31.058 43.9525 29.0625H36.4759ZM28.9375 29.0625V34.6875H33.9242C34.3049 32.8824 34.5424 30.9656 34.6023 29.0625H28.9375ZM28 12C25.9318 12 24.1875 13.8693 24.1875 15.9375C24.1875 18.0057 25.9318 19.6875 28 19.6875C30.0682 19.6875 31.8125 18.0057 31.8125 15.9375C31.8125 13.8693 30.0682 12 28 12ZM39.3125 15.9375C37.7616 15.9375 36.5 17.1991 36.5 18.75C36.5 20.3009 37.7616 21.5625 39.3125 21.5625C40.8634 21.5625 42.125 20.3009 42.125 18.75C42.125 17.1991 40.8634 15.9375 39.3125 15.9375ZM16.6875 15.9375C15.1366 15.9375 13.875 17.1991 13.875 18.75C13.875 20.3009 15.1366 21.5625 16.6875 21.5625C18.2384 21.5625 19.5 20.3009 19.5 18.75C19.5 17.1991 18.2384 15.9375 16.6875 15.9375ZM42.0695 22.5219C41.2937 23.0908 40.346 23.4375 39.3125 23.4375C38.2769 23.4375 37.3275 23.089 36.5509 22.5181C36.1001 22.8545 35.6886 23.2397 35.3819 23.7133C35.4947 24.2297 35.5625 24.7626 35.5625 25.3125V27.1875H43.3377C43.7035 27.1875 44 26.891 44 26.5253C44 24.9367 43.2539 23.4479 42.0695 22.5219ZM31.1518 20.6297C30.264 21.2162 29.1414 21.5625 28 21.5625C26.8601 21.5625 25.7389 21.2168 24.8517 20.6316C23.2943 21.6976 22.3125 23.5579 22.3125 25.5375V26.25C22.3125 26.7751 22.7249 27.1875 23.25 27.1875H32.75C33.2751 27.1875 33.6875 26.7751 33.6875 26.25V25.3125C33.6875 23.3021 32.6743 21.6326 31.1518 20.6297ZM19.4491 22.5181C18.6724 23.089 17.7231 23.4375 16.6875 23.4375C15.654 23.4375 14.7063 23.0908 13.9305 22.5219C12.7461 23.4479 12 24.9367 12 26.5253V27.1875H20.4375V25.3125C20.4375 24.7626 20.5053 24.2297 20.6181 23.7133C20.3114 23.2397 19.8998 22.8546 19.4491 22.5181Z"
                                                        fill="#444CE7"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_52_5883">
                                                        <rect width="32" height="32" fill="white"
                                                            transform="translate(12 12)">
                                                        </rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 7&nbsp;452 </span><span
                                                class="tracking-normal badge text-sm font-normal bg-indigo-50 text-indigo-700 rounded-[40px] px-2 py-1 bg-red-50 text-red-700 ng-star-inserted">19.0%</span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Xalıq sanı</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 hover:bg-hover cursor-pointer ng-star-inserted"
                                    style="display:flex;" aria-describedby="cdk-describedby-message-ng-1-30"
                                    cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_solid-home"
                                            data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="16" fill="#F4EBFF">
                                                </rect>
                                                <g clip-path="url('/mahalla/current-mahalla/general#clip0_52_5891')">
                                                    <path
                                                        d="M16.3507 41.4609C16.3507 41.4609 16.3223 42.1762 17.0211 42.1762L25.0874 42.1667L25.0992 35.5571C25.0992 35.5571 24.9855 34.4675 26.0431 34.4675H29.39C30.6406 34.4675 30.5636 35.5571 30.5636 35.5571L30.5494 42.1454H38.4452C39.3322 42.1454 39.292 41.2548 39.292 41.2548V29.0695L28.1642 19.171L16.3507 29.0695V41.4609Z"
                                                        fill="#9E77ED"></path>
                                                    <path
                                                        d="M12 28.1481C12 28.1481 13.0031 29.9968 15.1905 28.1481L28.2629 17.089L40.5193 28.0794C43.0514 29.9056 44 28.0794 44 28.0794L28.2629 13.8239L12 28.1481ZM40.2221 17.0629H37.0694L37.0825 20.8859L40.2221 23.5494V17.0629Z"
                                                        fill="#9E77ED"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_52_5891">
                                                        <rect width="32" height="32" fill="white"
                                                            transform="translate(12 12)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 1&nbsp;292 </span><span
                                                class="tracking-normal badge text-sm font-normal bg-indigo-50 text-indigo-700 rounded-[40px] px-2 py-1 bg-green-50 text-green-700 ng-star-inserted">100.0%</span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Xojalıqlar
                                            sanı</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 hover:bg-hover cursor-pointer ng-star-inserted"
                                    style="display:flex;" aria-describedby="cdk-describedby-message-ng-1-31"
                                    cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_man" data-mat-icon-namespace="customicons"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" fit=""
                                                preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="20" fill="#E5E8FF">
                                                </rect>
                                                <path
                                                    d="M27.9997 22.9975C30.3158 22.9975 32.2001 21.1288 32.2001 18.832C32.2001 16.5352 30.3158 14.6665 27.9997 14.6665C25.6837 14.6665 23.7993 16.5353 23.7993 18.832C23.7993 21.1287 25.6835 22.9975 27.9997 22.9975Z"
                                                    fill="#3D51FF"></path>
                                                <path opacity="0.5"
                                                    d="M21.7344 25.0508H34.2656C34.808 25.0508 35.3085 25.2953 35.6392 25.7212C35.97 26.1474 36.08 26.6898 35.9415 27.2096L33.2438 37.3287C32.6153 39.6863 30.459 41.3329 28 41.3329C25.5409 41.3329 23.3846 39.6863 22.7561 37.3285L20.0584 27.2092C19.92 26.6894 20.0302 26.147 20.361 25.7211C20.6914 25.2953 21.1922 25.0508 21.7344 25.0508Z"
                                                    fill="#3D51FF"></path>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 3&nbsp;788 </span><span
                                                class="tracking-normal badge text-sm font-normal bg-indigo-50 text-indigo-700 rounded-[40px] px-2 py-1 bg-red-50 text-red-700 ng-star-inserted">30.1%</span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Erkekler</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 hover:bg-hover cursor-pointer ng-star-inserted"
                                    style="display:flex;" aria-describedby="cdk-describedby-message-ng-1-32"
                                    cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_woman"
                                            data-mat-icon-namespace="customicons"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" fit=""
                                                preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="20" fill="#E5E8FF">
                                                </rect>
                                                <path
                                                    d="M27.9997 22.9972C30.3157 22.9972 32.2001 21.1288 32.2001 18.832C32.2001 16.535 30.3157 14.6665 27.9997 14.6665C25.6837 14.6665 23.7993 16.535 23.7993 18.832C23.7993 21.1288 25.6835 22.9972 27.9997 22.9972Z"
                                                    fill="#3D51FF"></path>
                                                <path opacity="0.5"
                                                    d="M33.2439 29.055L35.9416 39.1743C36.08 39.6941 35.9698 40.2365 35.639 40.6624C35.3083 41.0883 34.8078 41.3328 34.2656 41.3328H21.7343C21.1921 41.3328 20.6916 41.0883 20.3609 40.6624C20.0302 40.2365 19.9199 39.6941 20.0586 39.1744L22.756 29.055C23.3845 26.6973 25.5411 25.0508 28.0001 25.0508C30.4591 25.0508 32.6154 26.6973 33.2439 29.055Z"
                                                    fill="#3D51FF"></path>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 3&nbsp;664 </span><span
                                                class="tracking-normal badge text-sm font-normal bg-indigo-50 text-indigo-700 rounded-[40px] px-2 py-1 bg-red-50 text-red-700 ng-star-inserted">7.6%</span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Áyeller</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 hover:bg-hover cursor-pointer ng-star-inserted"
                                    style="display:flex;" aria-describedby="cdk-describedby-message-ng-1-33"
                                    cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_family"
                                            data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                                viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <g
                                                    clip-path="url('/mahalla/current-mahalla/general#clip0_8523_80073')">
                                                    <path
                                                        d="M36 0H16C7.16344 0 0 7.16344 0 16V36C0 44.8366 7.16344 52 16 52H36C44.8366 52 52 44.8366 52 36V16C52 7.16344 44.8366 0 36 0Z"
                                                        fill="#E5E8FF"></path>
                                                    <path
                                                        d="M33.8563 18.3375C36.1586 18.3375 38.025 16.4711 38.025 14.1687C38.025 11.8664 36.1586 10 33.8563 10C31.5539 10 29.6875 11.8664 29.6875 14.1687C29.6875 16.4711 31.5539 18.3375 33.8563 18.3375Z"
                                                        fill="#3D51FF"></path>
                                                    <path
                                                        d="M31.9694 34.2055L30.2131 27.318C29.9006 26.093 28.7944 25.2305 27.5256 25.2305H24.4756C23.2069 25.2305 22.1006 26.093 21.7881 27.318L20.0319 34.2055C19.7694 35.2305 20.5444 36.2243 21.6006 36.2243H22.9194V40.6118C22.9194 41.3743 23.5381 41.9993 24.3069 41.9993H27.7006C28.4631 41.9993 29.0881 41.3805 29.0881 40.6118V36.2243H30.4069C31.4569 36.2243 32.2319 35.2305 31.9694 34.2055Z"
                                                        fill="#3D51FF"></path>
                                                    <path
                                                        d="M26.0002 24.5063C27.7019 24.5063 29.0814 23.1266 29.0814 21.4249C29.0814 19.7232 27.7019 18.3438 26.0002 18.3438C24.2984 18.3438 22.9189 19.7232 22.9189 21.4249C22.9189 23.1266 24.2984 24.5063 26.0002 24.5063Z"
                                                        fill="#3D51FF"></path>
                                                    <path
                                                        d="M41.9315 31.4622L39.5565 22.1434C39.1315 20.4809 37.6378 19.3184 35.9253 19.3184H31.8003C31.1565 19.3184 30.5503 19.4809 30.0128 19.7747C30.2253 20.2809 30.3378 20.8372 30.3378 21.4247C30.3378 22.5497 29.9065 23.5747 29.2003 24.3497C30.2815 24.8434 31.119 25.8059 31.4253 27.0122L32.7878 32.3559L33.1815 33.8997C33.2065 33.9934 33.2253 34.0934 33.2378 34.1872C33.3565 34.9622 33.1503 35.7372 32.6628 36.3622C32.119 37.0684 31.2878 37.4684 30.4003 37.4684H30.3315V40.6059C30.3315 40.8872 30.2878 41.1559 30.2065 41.4122C30.544 41.7684 31.0315 41.9934 31.5628 41.9934H36.1565C37.194 41.9934 38.0315 41.1559 38.0315 40.1184V34.1809H39.8128C41.2378 34.1872 42.2815 32.8434 41.9315 31.4622ZM18.819 33.8997L19.2128 32.3559L20.5753 27.0122C20.8815 25.7997 21.719 24.8434 22.8003 24.3497C22.0675 23.5519 21.6615 22.5079 21.6628 21.4247C21.6628 20.8434 21.7753 20.2872 21.9878 19.7747C21.4503 19.4809 20.844 19.3184 20.2003 19.3184H16.0753C14.3628 19.3184 12.8628 20.4809 12.444 22.1434L10.069 31.4622C9.71906 32.8434 10.7628 34.1872 12.1878 34.1872H13.969V40.1247C13.969 41.1622 14.8065 41.9997 15.844 41.9997H20.4378C20.969 41.9997 21.4503 41.7747 21.794 41.4184C21.7128 41.1622 21.669 40.8934 21.669 40.6122V37.4747H21.6003C20.7065 37.4747 19.8815 37.0684 19.3378 36.3684C18.8503 35.7434 18.6503 34.9622 18.7628 34.1934C18.7753 34.0934 18.794 33.9934 18.819 33.8997Z"
                                                        fill="#3D51FF"></path>
                                                    <path
                                                        d="M22.3102 14.1768C22.3146 11.8744 20.4518 10.0044 18.1495 10C15.8471 9.9956 13.9771 11.8584 13.9727 14.1607C13.9683 16.4631 15.8311 18.3331 18.1335 18.3375C20.4358 18.3419 22.3058 16.4791 22.3102 14.1768Z"
                                                        fill="#3D51FF"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8523_80073">
                                                        <rect width="52" height="52" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 1&nbsp;422 </span><span
                                                class="tracking-normal badge text-sm font-normal bg-indigo-50 text-indigo-700 rounded-[40px] px-2 py-1 bg-green-50 text-green-700 ng-star-inserted">90.9%</span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Shańaraqlar
                                            sanı</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 hover:bg-hover cursor-pointer ng-star-inserted"
                                    style="display:flex;" aria-describedby="cdk-describedby-message-ng-1-34"
                                    cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_disabled-person"
                                            data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="16" fill="#FFEAD5">
                                                </rect>
                                                <g clip-path="url('/mahalla/current-mahalla/general#clip0_52_5940')">
                                                    <path
                                                        d="M33.4624 35.7862C32.8147 35.5008 32.0595 35.8016 31.7804 36.4505C30.4646 39.4816 27.4732 41.44 24.1593 41.44C19.5718 41.44 15.8393 37.7075 15.8393 33.12C15.8393 30.1452 17.4419 27.3843 20.0198 25.911C20.6355 25.5616 20.848 24.7795 20.4972 24.1651C20.1478 23.5507 19.3644 23.3331 18.7513 23.6889C15.3759 25.6153 13.2793 29.2287 13.2793 33.12C13.2793 39.1194 18.1599 44 24.1593 44C28.4947 44 32.4076 41.4362 34.1279 37.4694C34.4095 36.8217 34.1125 36.0678 33.4624 35.7862Z"
                                                        fill="#FB6514"></path>
                                                    <path
                                                        d="M42.6288 37.1251C42.3651 36.4672 41.6253 36.1472 40.9648 36.4109L39.0499 37.1776L36.2634 28.2586C36.1817 27.998 36.019 27.7703 35.7989 27.6086C35.5788 27.447 35.3128 27.3599 35.0397 27.36H25.8979L25.4999 24.8H30.5597C31.2675 24.8 31.8397 24.2278 31.8397 23.52C31.8397 22.8122 31.2675 22.24 30.5597 22.24H25.1031L24.4413 17.9763C25.4141 17.4259 26.0797 16.3955 26.0797 15.2C26.0797 13.4349 24.6448 12 22.8797 12C21.1159 12 19.6797 13.4349 19.6797 15.2C19.6797 16.6169 20.6115 17.8074 21.8902 18.2272L23.5351 28.8358C23.6324 29.4604 24.1687 29.92 24.7997 29.92H34.0989L37.0172 39.2614C37.0703 39.4298 37.1574 39.5855 37.2733 39.7187C37.3891 39.852 37.5312 39.9599 37.6906 40.0358C37.862 40.1178 38.0497 40.1602 38.2397 40.16C38.4028 40.1603 38.5644 40.1295 38.7159 40.0691L41.9159 38.7891C42.5725 38.5268 42.8912 37.7818 42.6288 37.1251Z"
                                                        fill="#FB6514" style="width: 20px;height: 20px;"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_52_5940">
                                                        <rect width="32" height="32" fill="white"
                                                            transform="translate(12 12)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 56 </span><span
                                                class="tracking-normal badge text-sm font-normal bg-indigo-50 text-indigo-700 rounded-[40px] px-2 py-1 bg-red-50 text-red-700 ng-star-inserted">0.0%</span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Nágranlar</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger d-flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 ng-star-inserted"
                                    aria-describedby="cdk-describedby-message-ng-1-35" cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_probation-time"
                                            data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="16" fill="#EBE9FE">
                                                </rect>
                                                <i style="position: absolute;
                                                left: 47px;
                                                top: 32px;
                                                font-size: 24px;
                                                color: #7A5AF8;"
                                                    class="far fa-id-card"></i>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 3 </span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Dápterdegiler</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger d-flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 ng-star-inserted"
                                aria-describedby="cdk-describedby-message-ng-1-35" cdk-describedby-host="ng-1">
                                <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                        class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                        aria-hidden="true" data-mat-icon-type="svg"
                                        data-mat-icon-name="custom_probation-time"
                                        data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                            viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                            <rect width="56" height="56" rx="16" fill="#EBE9FE">
                                            </rect>
                                            <i style=" position: absolute;
                                            left: 52px;
                                            top: 26px;
                                            font-size: 39px;
                                            color: #3a08ff;"
                                                class="fas fa-blind"></i>
                                        </svg></mat-icon><!----></custom-icon-wrapper>
                                <div class="flex flex-col">
                                    <div
                                        class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                        <span class="text-3xl" style="font-size: 16px;"> 3 </span><!---->
                                    </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Jalǵız nuraniyler</span><!---->
                                </div>
                            </div><!---->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger d-flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 ng-star-inserted"
                            aria-describedby="cdk-describedby-message-ng-1-35" cdk-describedby-host="ng-1">
                            <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                    class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                    aria-hidden="true" data-mat-icon-type="svg"
                                    data-mat-icon-name="custom_probation-time"
                                    data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                        viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                        <rect width="56" height="56" rx="16" fill="#EBE9FE">
                                        </rect>
                                        <i style="position: absolute;
                                        left: 44px;
                                        top: 30px;
                                        font-size: 28px;
                                        color: #7A5AF8;"
                                            class="fas fa-user-shield"></i>
                                    </svg></mat-icon><!----></custom-icon-wrapper>
                            <div class="flex flex-col">
                                <div
                                    class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                    <span class="text-3xl" style="font-size: 16px;"> 3 </span><!---->
                                </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Ekinshi jahan urısı qatnasıwshıları</span><!---->
                            </div>
                        </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger d-flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 ng-star-inserted"
                                    aria-describedby="cdk-describedby-message-ng-1-36" cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_police-station"
                                            data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="16" fill="#EAECF5">
                                                </rect>
                                                <path
                                                    d="M33 20.5C30.455 20.5 28.355 18.645 28.335 18.63C28.2427 18.5479 28.1235 18.5026 28 18.5026C27.8765 18.5026 27.7573 18.5479 27.665 18.63C27.645 18.645 25.545 20.5 23 20.5C22.8675 20.5004 22.7406 20.5532 22.6469 20.6469C22.5532 20.7406 22.5004 20.8675 22.5 21V25.5C22.5 29.82 27.64 31.415 27.855 31.48C27.9498 31.5067 28.0502 31.5067 28.145 31.48C28.36 31.415 33.5 29.82 33.5 25.5V21C33.4996 20.8675 33.4468 20.7406 33.3531 20.6469C33.2594 20.5532 33.1325 20.5004 33 20.5ZM30.715 24.575L29.72 25.545L29.955 26.915C29.9703 27.0072 29.9596 27.1018 29.9243 27.1883C29.889 27.2748 29.8304 27.3498 29.755 27.405C29.6698 27.4682 29.5661 27.5016 29.46 27.5C29.3794 27.5003 29.3002 27.4796 29.23 27.44L28 26.795L26.77 27.44C26.6879 27.4837 26.5953 27.5036 26.5025 27.4974C26.4097 27.4912 26.3205 27.4592 26.245 27.405C26.1696 27.3498 26.111 27.2748 26.0757 27.1883C26.0404 27.1018 26.0297 27.0072 26.045 26.915L26.28 25.545L25.285 24.575C25.2189 24.51 25.1721 24.4278 25.1501 24.3378C25.128 24.2477 25.1314 24.1533 25.1599 24.0651C25.1885 23.9768 25.241 23.8983 25.3117 23.8382C25.3823 23.7782 25.4683 23.739 25.56 23.725L26.935 23.525L27.55 22.28C27.5958 22.2012 27.6614 22.1359 27.7404 22.0904C27.8194 22.045 27.9089 22.0211 28 22.0211C28.0911 22.0211 28.1806 22.045 28.2596 22.0904C28.3386 22.1359 28.4042 22.2012 28.45 22.28L29.065 23.525L30.44 23.725C30.5317 23.739 30.6177 23.7782 30.6883 23.8382C30.759 23.8983 30.8115 23.9768 30.8401 24.0651C30.8686 24.1533 30.872 24.2477 30.8499 24.3378C30.8279 24.4278 30.7811 24.51 30.715 24.575ZM28 13C24.8187 13.0042 21.7689 14.2699 19.5194 16.5194C17.2699 18.7689 16.0042 21.8187 16 25C16 34.145 27.225 42.55 27.705 42.9C27.7897 42.9649 27.8933 43 28 43C28.1067 43 28.2103 42.9649 28.295 42.9C28.775 42.55 40 34.145 40 25C39.9958 21.8187 38.7301 18.7689 36.4806 16.5194C34.2311 14.2699 31.1813 13.0042 28 13ZM28 34C26.22 34 24.4799 33.4722 22.9999 32.4832C21.5198 31.4943 20.3663 30.0887 19.6851 28.4442C19.0039 26.7996 18.8257 24.99 19.1729 23.2442C19.5202 21.4984 20.3774 19.8947 21.636 18.636C22.8947 17.3774 24.4984 16.5202 26.2442 16.1729C27.99 15.8257 29.7996 16.0039 31.4442 16.6851C33.0887 17.3663 34.4943 18.5198 35.4832 19.9999C36.4722 21.4799 37 23.22 37 25C36.9981 27.3864 36.0493 29.6745 34.3619 31.3619C32.6745 33.0493 30.3864 33.9981 28 34ZM33 20.5C30.455 20.5 28.355 18.645 28.335 18.63C28.2427 18.5479 28.1235 18.5026 28 18.5026C27.8765 18.5026 27.7573 18.5479 27.665 18.63C27.645 18.645 25.545 20.5 23 20.5C22.8675 20.5004 22.7406 20.5532 22.6469 20.6469C22.5532 20.7406 22.5004 20.8675 22.5 21V25.5C22.5 29.82 27.64 31.415 27.855 31.48C27.9498 31.5067 28.0502 31.5067 28.145 31.48C28.36 31.415 33.5 29.82 33.5 25.5V21C33.4996 20.8675 33.4468 20.7406 33.3531 20.6469C33.2594 20.5532 33.1325 20.5004 33 20.5ZM30.715 24.575L29.72 25.545L29.955 26.915C29.9703 27.0072 29.9596 27.1018 29.9243 27.1883C29.889 27.2748 29.8304 27.3498 29.755 27.405C29.6698 27.4682 29.5661 27.5016 29.46 27.5C29.3794 27.5003 29.3002 27.4796 29.23 27.44L28 26.795L26.77 27.44C26.6879 27.4837 26.5953 27.5036 26.5025 27.4974C26.4097 27.4912 26.3205 27.4592 26.245 27.405C26.1696 27.3498 26.111 27.2748 26.0757 27.1883C26.0404 27.1018 26.0297 27.0072 26.045 26.915L26.28 25.545L25.285 24.575C25.2189 24.51 25.1721 24.4278 25.1501 24.3378C25.128 24.2477 25.1314 24.1533 25.1599 24.0651C25.1885 23.9768 25.241 23.8983 25.3117 23.8382C25.3823 23.7782 25.4683 23.739 25.56 23.725L26.935 23.525L27.55 22.28C27.5958 22.2012 27.6614 22.1359 27.7404 22.0904C27.8194 22.045 27.9089 22.0211 28 22.0211C28.0911 22.0211 28.1806 22.045 28.2596 22.0904C28.3386 22.1359 28.4042 22.2012 28.45 22.28L29.065 23.525L30.44 23.725C30.5317 23.739 30.6177 23.7782 30.6883 23.8382C30.759 23.8983 30.8115 23.9768 30.8401 24.0651C30.8686 24.1533 30.872 24.2477 30.8499 24.3378C30.8279 24.4278 30.7811 24.51 30.715 24.575ZM33 20.5C30.455 20.5 28.355 18.645 28.335 18.63C28.2427 18.5479 28.1235 18.5026 28 18.5026C27.8765 18.5026 27.7573 18.5479 27.665 18.63C27.645 18.645 25.545 20.5 23 20.5C22.8675 20.5004 22.7406 20.5532 22.6469 20.6469C22.5532 20.7406 22.5004 20.8675 22.5 21V25.5C22.5 29.82 27.64 31.415 27.855 31.48C27.9498 31.5067 28.0502 31.5067 28.145 31.48C28.36 31.415 33.5 29.82 33.5 25.5V21C33.4996 20.8675 33.4468 20.7406 33.3531 20.6469C33.2594 20.5532 33.1325 20.5004 33 20.5ZM30.715 24.575L29.72 25.545L29.955 26.915C29.9703 27.0072 29.9596 27.1018 29.9243 27.1883C29.889 27.2748 29.8304 27.3498 29.755 27.405C29.6698 27.4682 29.5661 27.5016 29.46 27.5C29.3794 27.5003 29.3002 27.4796 29.23 27.44L28 26.795L26.77 27.44C26.6879 27.4837 26.5953 27.5036 26.5025 27.4974C26.4097 27.4912 26.3205 27.4592 26.245 27.405C26.1696 27.3498 26.111 27.2748 26.0757 27.1883C26.0404 27.1018 26.0297 27.0072 26.045 26.915L26.28 25.545L25.285 24.575C25.2189 24.51 25.1721 24.4278 25.1501 24.3378C25.128 24.2477 25.1314 24.1533 25.1599 24.0651C25.1885 23.9768 25.241 23.8983 25.3117 23.8382C25.3823 23.7782 25.4683 23.739 25.56 23.725L26.935 23.525L27.55 22.28C27.5958 22.2012 27.6614 22.1359 27.7404 22.0904C27.8194 22.045 27.9089 22.0211 28 22.0211C28.0911 22.0211 28.1806 22.045 28.2596 22.0904C28.3386 22.1359 28.4042 22.2012 28.45 22.28L29.065 23.525L30.44 23.725C30.5317 23.739 30.6177 23.7782 30.6883 23.8382C30.759 23.8983 30.8115 23.9768 30.8401 24.0651C30.8686 24.1533 30.872 24.2477 30.8499 24.3378C30.8279 24.4278 30.7811 24.51 30.715 24.575Z"
                                                    fill="#4E5BA6"></path>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 11 </span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Profilaktika
                                            esabında</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 hover:bg-hover cursor-pointer ng-star-inserted"
                                    style="display:flex;" aria-describedby="cdk-describedby-message-ng-1-37"
                                    cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2"><mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_unemployed"
                                            data-mat-icon-namespace="customicons"><svg width="70px" height="70px"
                                                viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="16" fill="#FEE4E2">
                                                </rect>
                                                <g clip-path="url('/mahalla/current-mahalla/general#clip0_52_9849')">
                                                    <path
                                                        d="M14.1391 39.5804L13.4189 34.298H12V40.9032H14.7331C14.4126 40.5282 14.2065 40.0691 14.1391 39.5804ZM27.4914 38.8795L28.1163 34.298H18.6547L19.2795 38.8795C19.3827 39.6365 19.1443 40.3613 18.6859 40.9032H28.0849C27.6266 40.3613 27.3883 39.6365 27.4914 38.8795ZM32.0378 40.9032H34.1688V34.298H33.3522L32.6318 39.5804C32.5644 40.0691 32.3583 40.5282 32.0378 40.9032ZM36.9552 32.618V34.2623H35.1834V41.1226H43.9998V34.2623H42.228V32.618H36.9552ZM41.4627 34.2623H37.7207V33.3834H41.4627V34.2623Z"
                                                        fill="#F04438"></path>
                                                    <path
                                                        d="M12.9841 27.292C13.3692 28.1806 14.2867 28.5378 15.1743 28.8832C16.3098 29.3253 17.0647 29.6679 17.2081 30.3731C17.28 30.7267 17.4894 31.0373 17.7903 31.2365C18.0912 31.4358 18.4589 31.5074 18.8126 31.4356C19.1662 31.3638 19.4768 31.1544 19.6761 30.8535C19.8754 30.5527 19.9469 30.185 19.8751 29.8313C19.4254 27.6177 17.3822 26.8224 16.1615 26.3471C16.0366 26.2985 15.8927 26.2425 15.7582 26.1872C16.0463 25.5221 16.3702 24.873 16.7284 24.2429C17.2912 23.2558 17.8554 22.4789 18.3604 21.881V27.0217C19.2065 27.6065 19.9784 28.459 20.242 29.7572C20.3342 30.2113 20.2442 30.6741 19.9882 31.0606C19.7322 31.447 19.3412 31.7105 18.8871 31.8027C18.7733 31.826 18.6566 31.8377 18.5402 31.8377C17.7195 31.8377 17.0051 31.2531 16.8415 30.4479C16.7446 29.9705 16.2071 29.6871 15.0387 29.2322C14.6135 29.0667 14.1625 28.89 13.756 28.6456C13.4361 29.0801 13.2975 29.6218 13.3696 30.1565L14.6453 39.5117C14.7878 40.5564 15.6815 41.314 16.7071 41.314C16.801 41.314 16.8958 41.3077 16.9914 41.2946C18.1315 41.1391 18.9297 40.0888 18.7743 38.9485L17.9105 32.6142L21.0697 33.3747C21.9045 33.5756 22.7424 33.2429 23.2261 32.5967H23.8318C23.7953 32.6634 23.7559 32.7284 23.7136 32.7916C24.2096 33.3067 24.9565 33.554 25.7022 33.3747L28.8613 32.6142L27.9976 38.9485C27.8421 40.0888 28.6404 41.1391 29.7805 41.2946C29.8761 41.3077 29.9708 41.314 30.0647 41.314C31.0904 41.314 31.9841 40.5562 32.1266 39.5117L33.4023 30.1565C33.4482 29.8207 33.4113 29.4787 33.2951 29.1603C33.1788 28.8419 32.9865 28.5567 32.735 28.3294C32.7143 28.3107 32.6913 28.2952 32.6699 28.2773C32.1616 28.733 31.4952 28.9938 30.8827 29.2322C29.7145 29.6871 29.177 29.9705 29.0799 30.4479C28.9163 31.2533 28.2019 31.8377 27.3812 31.8377C27.2648 31.8377 27.1481 31.826 27.0344 31.8027C26.5802 31.7105 26.1892 31.4469 25.9332 31.0606C25.6772 30.6743 25.5872 30.2113 25.6794 29.7572C25.943 28.4592 26.7148 27.6067 27.561 27.0217V21.881C28.066 22.4789 28.6302 23.2558 29.193 24.2429C29.5513 24.873 29.8751 25.5221 30.1632 26.1872C30.0287 26.2425 29.8848 26.2985 29.7599 26.3471C28.539 26.8224 26.496 27.6177 26.0463 29.8315C26.0061 30.0293 26.0104 30.2335 26.0588 30.4294C26.1073 30.6254 26.1988 30.808 26.3266 30.9642C26.4544 31.1205 26.6153 31.2463 26.7977 31.3326C26.9802 31.4189 27.1795 31.4636 27.3813 31.4634C27.695 31.463 27.9989 31.3543 28.2416 31.1556C28.4843 30.957 28.6509 30.6806 28.7133 30.3732C28.8567 29.668 29.6116 29.3255 30.7472 28.8834C31.6347 28.5379 32.5522 28.1807 32.9373 27.2922C33.0824 26.9579 33.1999 26.4223 32.9376 25.7685C32.6458 25.0393 32.3184 24.3249 31.9565 23.6278C29.8338 19.5466 27.438 18.0217 27.1044 17.8239C27.1417 18.0483 27.1619 18.2784 27.1619 18.5133C27.1619 20.5568 25.6952 22.2632 23.7594 22.6376L24.5763 28.6563L22.9605 30.6974L21.3446 28.6563L22.1614 22.6376C20.2259 22.263 18.7593 20.5566 18.7593 18.5133C18.7593 18.2784 18.7796 18.0483 18.8168 17.8239C18.4839 18.0212 16.0877 19.5461 13.9649 23.6278C13.6031 24.3249 13.2757 25.0393 12.9838 25.7685C12.7215 26.4221 12.839 26.9578 12.9841 27.292Z"
                                                        fill="#F04438"></path>
                                                    <path
                                                        d="M22.9599 22.3404C25.0736 22.3404 26.787 20.627 26.787 18.5133C26.787 16.3997 25.0736 14.6862 22.9599 14.6862C20.8463 14.6862 19.1328 16.3997 19.1328 18.5133C19.1328 20.627 20.8463 22.3404 22.9599 22.3404Z"
                                                        fill="#F04438"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_52_9849">
                                                        <rect width="32" height="32" fill="white"
                                                            transform="translate(12 12)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></mat-icon><!----></custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 261 </span><span
                                                class="tracking-normal badge text-sm font-normal bg-indigo-50 text-indigo-700 rounded-[40px] px-2 py-1 bg-red-50 text-red-700 ng-star-inserted">0.0%</span><!---->
                                        </div><span
                                            style="font-size:16px;" class="font-medium sky-600 tracking-wider">Jumıssızlar</span><!---->
                                    </div>
                                </div><!---->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 pb-3 mat-mdc-tooltip-trigger d-flex count-with-icon squared-border p-2 pl-4 rounded-lg m-0 ng-star-inserted"
                                    aria-describedby="cdk-describedby-message-ng-1-11" cdk-describedby-host="ng-1">
                                    <custom-icon-wrapper class="mr-2">
                                        <mat-icon role="img"
                                            class="mat-icon notranslate h-16 icon-bg-primary icon-img-primary w-16 mat-icon-no-color ng-star-inserted"
                                            aria-hidden="true" data-mat-icon-type="svg"
                                            data-mat-icon-name="custom_unofficial-work"
                                            data-mat-icon-namespace="customicons">
                                            <svg width="70px" height="70px" viewBox="0 0 56 56" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" fit=""
                                                preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <rect width="56" height="56" rx="16" fill="#D1E9FF">
                                                </rect>
                                                <g clip-path="url('/mahalla/current-mahalla/general#clip0_52_9855')">
                                                    <path
                                                        d="M39.2279 37.9723H22.4522C21.9803 37.9723 21.5977 38.3549 21.5977 38.8268V39.3528C21.5977 39.8247 21.9802 40.2075 22.4522 40.2075H42.0546V37.9724L39.2279 37.9723Z"
                                                        fill="#2E90FA"></path>
                                                    <path
                                                        d="M20.6735 24.5195C23.2865 24.5195 25.4047 22.4013 25.4047 19.7884C25.4047 17.1755 23.2865 15.0573 20.6735 15.0573C18.0606 15.0573 15.9424 17.1755 15.9424 19.7884C15.9424 22.4013 18.0606 24.5195 20.6735 24.5195Z"
                                                        fill="#2E90FA"></path>
                                                    <path
                                                        d="M32.2173 31.3923L21.3754 31.3863L21.1187 31.3854V30.1273L21.1098 29.0742C21.1098 26.5587 19.0705 24.5193 16.5549 24.5193C16.4697 24.5193 16.385 24.5222 16.3009 24.5268L16.2945 24.5193C13.9227 24.5194 12 26.4421 12 28.8139V40.9428H21.1187V35.7759L20.9981 35.7664C20.9895 35.7656 20.9874 35.7665 20.982 35.7665C20.3651 35.7665 19.7738 35.5067 19.3571 35.0519L15.656 31.0118C15.6279 30.9812 15.6062 30.9454 15.592 30.9064C15.5778 30.8674 15.5714 30.826 15.5732 30.7845C15.575 30.743 15.585 30.7023 15.6026 30.6647C15.6201 30.627 15.6449 30.5933 15.6755 30.5652C15.7061 30.5372 15.742 30.5154 15.781 30.5012C15.82 30.487 15.8614 30.4806 15.9029 30.4825C15.9444 30.4843 15.9851 30.4942 16.0227 30.5118C16.0603 30.5294 16.0941 30.5542 16.1222 30.5848L19.8232 34.6247C20.124 34.953 20.5481 35.1538 20.9947 35.1603L21.4298 35.1665H32.2173C33.2595 35.1665 34.1044 34.3216 34.1044 33.2794C34.1045 32.2371 33.2595 31.3923 32.2173 31.3923Z"
                                                        fill="#2E90FA"></path>
                                                    <path
                                                        d="M43.429 24.696C42.9878 24.5448 42.5074 24.7802 42.3561 25.2215L38.7742 35.6781H25.957C25.4906 35.6781 25.1123 36.0563 25.1123 36.5228C25.1123 36.9893 25.4906 37.3675 25.957 37.3675H39.3675C39.6548 37.3675 39.9083 37.2236 40.0608 37.0043C40.1149 36.9331 40.1573 36.8536 40.1864 36.769L43.9549 25.7686C44.1056 25.3275 43.8706 24.8471 43.429 24.696Z"
                                                        fill="#2E90FA"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_52_9855">
                                                        <rect width="32" height="32" fill="white"
                                                            transform="translate(12 12)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </mat-icon><!---->
                                    </custom-icon-wrapper>
                                    <div class="flex flex-col">
                                        <div
                                            class="whitespace-nowrap font-semibold tracking-wider primary-text flex items-center gap-4"style="display:flex;">
                                            <span class="text-3xl" style="font-size: 16px;"> 0 </span><!---->
                                        </div><span style="font-size:16px;" class="font-medium sky-600 tracking-wider">Rásmiy
                                            jumıssızlar</span><!---->
                                    </div>
                                </div><!----><!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
