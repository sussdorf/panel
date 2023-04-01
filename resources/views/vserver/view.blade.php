@extends('layouts.layout')
@section('content')
   <br> <div id="kt_app_content" class="app-content kt-grid__item kt-grid__item--fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div id="content_title"></div>



            <!--end::Header-->

            <!--begin::Body-->
            <div class="row">
                <div class="col-sm">
                    <div class="card mb-5 mb-xl-8" style=" background-color: hsla(0, 0%, 0%, 0);">
                        <!--begin::Header-->
                        <div class="card-header card-header-stretch overflow-auto" style=" background-color: white;">
                            <!--begin::Tabs-->
                            <ul class="nav nav-stretch nav-line-tabs fw-semibold fs-6 border-transparent flex-nowrap" role="tablist" id="kt_layout_builder_tabs">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" href="/vserver/view/" aria-selected="true" onclick="location.href=this.href+uuid;return false;">

                                        Übersicht
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="/monitoring/overview/" role="tab" aria-selected="false" tabindex="-1"onclick="location.href=this.href+uuid;return false;">
                                        Monitoring
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="#kt_builder_sidebar" role="tab" aria-selected="false" tabindex="-1">
                                        Verwalten
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="#kt_builder_header" role="tab" aria-selected="false" tabindex="-1">
                                        Netzwerk
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="#kt_builder_toolbar" role="tab" aria-selected="false" tabindex="-1">
                                        Firewall
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="#kt_builder_footer" role="tab" aria-selected="false" tabindex="-1">
                                        Backups
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="/vserver/stats/" role="tab" aria-selected="false" tabindex="-1" onclick="location.href=this.href+uuid;return false;">
                                        Statistik
                                    </a>
                                </li>
                            </ul>
                            <!--end::Tabs-->
                        </div><br>
                        <div class="row ">
                            <div class="col md">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3 class="card-title"><svg width="23px" height="23px" viewBox="0 0 32 32" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg820" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs814"> <linearGradient xlink:href="#linearGradient4424" id="linearGradient4358" x1="401.57144" y1="535.79797" x2="401.57144" y2="520.79797" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.25 0 0 1.2 -484.714 468.561)"></linearGradient> <linearGradient id="linearGradient4424"> <stop id="stop4426" offset="0" style="stop-color:#60a5e7;stop-opacity:0"></stop> <stop id="stop4428" offset="1" style="stop-color:#a6f3fb;stop-opacity:.25773194"></stop> </linearGradient> </defs> <metadata id="metadata817"> <rdf:rdf> <cc:work> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title></dc:title> <dc:date>2021</dc:date> <dc:creator> <cc:agent> <dc:title>Timothée Giet</dc:title> </cc:agent> </dc:creator> <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"></cc:license> </cc:work> <cc:license rdf:about="http://creativecommons.org/licenses/by-sa/4.0/"> <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"></cc:permits> <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"></cc:permits> <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"></cc:requires> <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"></cc:requires> <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"></cc:permits> <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"></cc:requires> </cc:license> </rdf:rdf> </metadata> <g id="layer1" transform="translate(.072 -1091.192)"> <path style="opacity:1;vector-effect:none;fill:#373737;fill-opacity:1;stroke:none;stroke-width:2;stroke-linecap:butt;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:3.20000005;stroke-opacity:1" d="m17.198 1099.53-1.65 2.858a7 7 30 0 0-1.42-.187l-.854-3.186-3.863 1.035.852 3.18a7 7 30 0 0-1.14.877l-2.853-1.648-2 3.464 2.857 1.65a7 7 30 0 0-.187 1.42l-3.186.854 1.036 3.864 3.18-.853a7 7 30 0 0 .876 1.14l-1.648 2.853 3.464 2 1.65-2.857a7 7 30 0 0 1.421.187l.854 3.186 3.863-1.035-.852-3.18a7 7 30 0 0 1.14-.876l2.853 1.647 2-3.464-2.857-1.65a7 7 30 0 0 .186-1.42l3.186-.854-1.035-3.864-3.18.853a7 7 30 0 0-.876-1.14l1.647-2.853zm-1.268 6.197a4 4 0 0 1 1.464 5.464 4 4 0 0 1-5.464 1.464 4 4 0 0 1-1.464-5.464 4 4 0 0 1 5.464-1.464z" id="rect2175-7"></path> <path style="opacity:1;vector-effect:none;fill:#373737;fill-opacity:1;stroke:none;stroke-width:2;stroke-linecap:butt;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:3.20000005;stroke-opacity:1" d="m18.585 1096.867.98.566a4 4 0 0 0 1.05 3.917l-.566.981 1.732 1 .566-.979a4 4 0 0 0 3.917-1.05l.982.567 1-1.732-.98-.566a4 4 0 0 0-1.051-3.917l.566-.982-1.732-1-.565.98a4 4 0 0 0-3.918 1.05l-.981-.567zm3.098.634a2 2 30 0 1 2.732-.732 2 2 30 0 1 .732 2.732 2 2 30 0 1-2.732.732 2 2 30 0 1-.732-2.732z" id="rect2261"></path> </g> </g></svg>Konfiguration</h3>

                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm b-right" style="text-align: center">
                                                <div class="icon">
                                                    <!--?xml version="1.0" encoding="utf-8"?--><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg fill="#000000" width="23" height="23" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 .52a5.39 5.39 0 0 0-5.59 5.15c0 5 3.88 8.61 5.17 9.66a.66.66 0 0 0 .84 0c1.29-1.05 5.17-4.63 5.17-9.66A5.39 5.39 0 0 0 8 .52zM8 14a15.2 15.2 0 0 1-2.46-2.76 9.85 9.85 0 0 1-1.88-5.57A4.14 4.14 0 0 1 8 1.77a4.14 4.14 0 0 1 4.34 3.9c0 4.08-2.96 7.16-4.34 8.33z"></path><path d="M8 2.54a2.73 2.73 0 0 0-2.84 2.65A2.74 2.74 0 0 0 8 7.84a2.75 2.75 0 0 0 2.83-2.65A2.74 2.74 0 0 0 8 2.54zm0 4.05a1.49 1.49 0 0 1-1.57-1.4A1.49 1.49 0 0 1 8 3.79a1.5 1.5 0 0 1 1.58 1.4A1.5 1.5 0 0 1 8 6.59z"></path></svg>
                                                </div>
                                                <div class="text-vserver-location">Frankfurt</div>
                                            </div>
                                            <div class="col-sm b-right" style="text-align: center">
                                                <div class="icon">
                                                    <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>

                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>

                                                        <g id="SVGRepo_iconCarrier"> <path d="M6 6H6.01M6 18H6.01M5.2 10H18.8C19.9201 10 20.4802 10 20.908 9.78201C21.2843 9.59027 21.5903 9.28431 21.782 8.90798C22 8.48016 22 7.92011 22 6.8V5.2C22 4.0799 22 3.51984 21.782 3.09202C21.5903 2.71569 21.2843 2.40973 20.908 2.21799C20.4802 2 19.9201 2 18.8 2H5.2C4.07989 2 3.51984 2 3.09202 2.21799C2.71569 2.40973 2.40973 2.71569 2.21799 3.09202C2 3.51984 2 4.07989 2 5.2V6.8C2 7.92011 2 8.48016 2.21799 8.90798C2.40973 9.28431 2.71569 9.59027 3.09202 9.78201C3.51984 10 4.0799 10 5.2 10ZM5.2 22H18.8C19.9201 22 20.4802 22 20.908 21.782C21.2843 21.5903 21.5903 21.2843 21.782 20.908C22 20.4802 22 19.9201 22 18.8V17.2C22 16.0799 22 15.5198 21.782 15.092C21.5903 14.7157 21.2843 14.4097 20.908 14.218C20.4802 14 19.9201 14 18.8 14H5.2C4.07989 14 3.51984 14 3.09202 14.218C2.71569 14.4097 2.40973 14.7157 2.21799 15.092C2 15.5198 2 16.0799 2 17.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.0799 22 5.2 22Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g>

                                                    </svg>
                                                </div>
                                                <div class="text-vserver-name" id="vserverinfo" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Hostname" data-bs-original-title="Hostname" data-kt-initialized="1"></div>
                                            </div>
                                            <div class="col-sm b-right" style="text-align: center">
                                                <div class="icon">
                                                    <svg fill="#000000" height="23px" width="23px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 431.908 431.908" xml:space="preserve">
<g>
    <path d="M423.908,152.051c4.418,0,8-3.582,8-8s-3.582-8-8-8h-24.006v-31.936h24.006c4.418,0,8-3.582,8-8s-3.582-8-8-8h-24.006
        V71.996c0-22.056-17.944-40-40-40h-16.109V8c0-4.418-3.582-8-8-8s-8,3.582-8,8v23.996h-31.937V8c0-4.418-3.582-8-8-8s-8,3.582-8,8
        v23.996H247.92V8c0-4.418-3.582-8-8-8s-8,3.582-8,8v23.996h-31.935V8c0-4.418-3.582-8-8-8s-8,3.582-8,8v23.996h-31.936V8
        c0-4.418-3.582-8-8-8s-8,3.582-8,8v23.996h-31.936V8c0-4.418-3.582-8-8-8s-8,3.582-8,8v23.996H71.985c-22.056,0-40,17.944-40,40
        v16.119H8c-4.418,0-8,3.582-8,8s3.582,8,8,8h23.985v31.936H8c-4.418,0-8,3.582-8,8s3.582,8,8,8h23.985v31.936H8
        c-4.418,0-8,3.582-8,8s3.582,8,8,8h23.985v31.935H8c-4.418,0-8,3.582-8,8s3.582,8,8,8h23.985v31.936H8c-4.418,0-8,3.582-8,8
        s3.582,8,8,8h23.985v31.936H8c-4.418,0-8,3.582-8,8s3.582,8,8,8h23.985v16.119c0,22.056,17.944,40,40,40h16.128v23.995
        c0,4.418,3.582,8,8,8s8-3.582,8-8v-23.995h31.936v23.995c0,4.418,3.582,8,8,8s8-3.582,8-8v-23.995h31.936v23.995
        c0,4.418,3.582,8,8,8s8-3.582,8-8v-23.995h31.935v23.995c0,4.418,3.582,8,8,8s8-3.582,8-8v-23.995h31.936v23.995
        c0,4.418,3.582,8,8,8s8-3.582,8-8v-23.995h31.937v23.995c0,4.418,3.582,8,8,8s8-3.582,8-8v-23.995h16.109c22.056,0,40-17.944,40-40
        v-16.119h24.006c4.418,0,8-3.582,8-8s-3.582-8-8-8h-24.006v-31.936h24.006c4.418,0,8-3.582,8-8s-3.582-8-8-8h-24.006v-31.936
        h24.006c4.418,0,8-3.582,8-8s-3.582-8-8-8h-24.006v-31.935h24.006c4.418,0,8-3.582,8-8s-3.582-8-8-8h-24.006v-31.936H423.908z
         M383.902,359.912c0,13.233-10.767,24-24,24H71.985c-13.233,0-24-10.767-24-24V71.996c0-13.234,10.767-24,24-24h287.917
        c13.233,0,24,10.766,24,24V359.912z"></path>
    <path d="M343.777,72.121H88.11c-8.822,0-16,7.177-16,16v255.667c0,8.822,7.178,16,16,16h255.667c8.822,0,16-7.178,16-16V88.121
        C359.777,79.298,352.599,72.121,343.777,72.121z M88.11,343.787V88.121h255.667l0.002,255.667H88.11z"></path>
</g>
</svg>
                                                </div>
                                                <div class="text-vserver-cores" id="coresinfo" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Virtuelle Prozessoren" data-bs-original-title="Virtuelle Prozessoren" data-kt-initialized="1"></div>
                                            </div>
                                            <div class="col-sm b-right" style="text-align: center">
                                                <div class="icon">
                                                    <svg fill="#000000" height="23px" width="23px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.92 299.92" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M293.4,65.2H6.52C2.914,65.2,0,68.114,0,71.72v117.36c0,3.606,2.914,6.52,6.52,6.52h6.52v32.6 c0,3.606,2.914,6.52,6.52,6.52h260.8c3.606,0,6.52-2.914,6.52-6.52v-32.6h6.52c3.606,0,6.52-2.914,6.52-6.52V71.72 C299.92,68.114,297.006,65.2,293.4,65.2z M273.84,221.68h-19.56H228.2h-26.08h-26.08h-26.08h-26.08H97.8H71.72H45.64H26.08V195.6 h19.56h26.08H97.8h26.08h26.08h26.08h26.08h26.08h26.08h19.56V221.68z M286.88,182.56h-6.52H19.56h-6.52V78.24h273.84V182.56z"></path> <path d="M32.6,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H32.6c-3.606,0-6.52,2.914-6.52,6.52 V163C26.08,166.606,28.994,169.52,32.6,169.52z M39.12,104.32H65.2v52.16H39.12V104.32z"></path> <path d="M97.8,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H97.8c-3.606,0-6.52,2.914-6.52,6.52 V163C91.28,166.606,94.194,169.52,97.8,169.52z M104.32,104.32h26.08v52.16h-26.08V104.32z"></path> <path d="M163,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H163c-3.606,0-6.52,2.914-6.52,6.52 V163C156.48,166.606,159.394,169.52,163,169.52z M169.52,104.32h26.08v52.16h-26.08V104.32z"></path> <path d="M228.2,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H228.2 c-3.606,0-6.52,2.914-6.52,6.52V163C221.68,166.606,224.594,169.52,228.2,169.52z M234.72,104.32h26.08v52.16h-26.08V104.32z"></path> <path d="M52.16,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C49.246,221.68,52.16,218.766,52.16,215.16z"></path> <path d="M78.24,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C75.326,221.68,78.24,218.766,78.24,215.16z"></path> <path d="M104.32,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C101.406,221.68,104.32,218.766,104.32,215.16z"></path> <path d="M130.4,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C127.486,221.68,130.4,218.766,130.4,215.16z"></path> <path d="M156.48,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52s-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 S156.48,218.766,156.48,215.16z"></path> <path d="M182.56,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C179.646,221.68,182.56,218.766,182.56,215.16z"></path> <path d="M208.64,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C205.726,221.68,208.64,218.766,208.64,215.16z"></path> <path d="M234.72,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C231.806,221.68,234.72,218.766,234.72,215.16z"></path> <path d="M260.8,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C257.886,221.68,260.8,218.766,260.8,215.16z"></path> </g> </g> </g> </g></svg>
                                                </div>
                                                <div class="text-vserver-ram" id="raminfo" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Arbeitsspeicher" data-bs-original-title="Arbeitsspeicher" data-kt-initialized="1"></div>
                                            </div>
                                            <div class="col-md" style="text-align: center">
                                                <div class="icon">
                                                    <svg height="23px" width="23px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M497.897,215.708L426.05,105.736c-10.865-16.624-29.389-26.654-49.242-26.654H135.207 c-19.869,0-38.392,10.03-49.258,26.654L14.103,215.708C4.908,229.789,0,246.243,0,263.058v112.877 c0,15.678,6.401,30.032,16.69,40.292c10.259,10.288,24.614,16.697,40.299,16.69h398.022c31.474-0.015,56.975-25.502,56.989-56.982 V263.058C512,246.243,507.092,229.789,497.897,215.708z M41.408,233.544l71.846-109.972c4.834-7.414,13.097-11.878,21.953-11.878 h241.601c8.841,0,17.105,4.464,21.938,11.878l71.862,109.972c1.877,2.876,3.355,5.958,4.641,9.107H36.751 C38.037,239.501,39.515,236.419,41.408,233.544z M479.388,375.935c-0.014,6.786-2.705,12.773-7.14,17.23 c-4.465,4.442-10.452,7.133-17.238,7.14H56.989c-6.786-0.007-12.773-2.698-17.238-7.14c-4.435-4.457-7.126-10.444-7.14-17.23 V263.058c0-0.281,0.059-0.562,0.059-0.842h446.658c0,0.281,0.059,0.562,0.059,0.842V375.935z"></path> <circle class="st0" cx="304.917" cy="332.857" r="21.199"></circle> <circle class="st0" cx="397.859" cy="332.857" r="21.199"></circle> </g> </g></svg>
                                                </div>
                                                <div class="text-vserver-disk" id="diskinfo" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Festplattenspeicher" data-bs-original-title="Festplattenspeicher" data-kt-initialized="1"></div>
                                            </div>
                                            <div class="col-sm" style="text-align: center">
                                                <div class="icon">
                                                    <svg fill="#000000" width="64px" height="23px" viewBox="0 0 24 24" id="up-right-down-left-sign" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary" d="M20,2H13a1,1,0,0,0-.92.62,1,1,0,0,0,.21,1.09l1.88,1.88L5.59,14.17,3.71,12.29a1,1,0,0,0-1.09-.21A1,1,0,0,0,2,13v7a2,2,0,0,0,2,2h7a1,1,0,0,0,.92-.62,1,1,0,0,0-.21-1.09L9.83,18.41l8.58-8.58,1.88,1.88a1,1,0,0,0,1.09.21A1,1,0,0,0,22,11V4A2,2,0,0,0,20,2Z" style="fill: #000000;"></path></g></svg>
                                                </div>
                                                <div class="text-vserver-disk" id="traffinfo" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Traffic" data-bs-original-title="Traffic" data-kt-initialized="1"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="col-sm-4">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3 class="card-title"><svg width="23px" height="23px" viewBox="0 0 1000 1000" id="Layer_2" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M271.465,359.13c-30.33,0-55-24.67-55-55v-71.77c0-30.33,24.67-55,55-55h243.73 c30.32,0,55,24.67,55,55v71.77c0,20.79-11.6,38.93-28.67,48.27c3.28,1.62,6.38,3.6,9.24,5.9c6.82-3.28,14.37-5.01,21.93-5.01 c1.8,0,3.59,0.09,5.35,0.28c10.74-13.62,17.15-30.8,17.15-49.44v-71.77c0-44.11-35.89-80-80-80h-243.73c-44.11,0-80,35.89-80,80 v71.77c0,44.11,35.89,80,80,80h133.03l-12.76-25H271.465z" style="fill:#231F20;"></path> <path d="M410.245,283.99c7.08-3.62,15.02-5.53,22.96-5.53c19.18,0,36.5,10.58,45.19,27.6l14.34,28.07h22.46 c16.56,0,30-13.43,30-30v-71.77c0-16.57-13.44-30-30-30h-243.73c-16.57,0-30,13.43-30,30v71.77c0,16.57,13.43,30,30,30h111.4 c-0.68-6.86,0.06-13.86,2.25-20.63C389.295,300.61,398.215,290.13,410.245,283.99z" style="fill:#231F20;"></path> <path d="M807.395,750.86l-24.35-47.69c-2.61-5.12-8.93-7.16-14.04-4.55l-158.09,80.73l-1.7,0.87 c-5.11,2.61-7.15,8.93-4.55,14.04l24.37,47.69c2.6,5.12,8.93,7.16,14.04,4.56l159.78-81.61 C807.964,762.29,810.015,755.97,807.395,750.86z M774.315,747.43c-0.99,3.04-3.12,5.72-6.19,7.29l-17.2,8.84 c-6.14,3.15-13.68,0.73-16.83-5.41c-1.58-3.07-1.77-6.49-0.79-9.53c0.99-3.05,3.12-5.72,6.19-7.3l17.21-8.83 c6.13-3.16,13.67-0.74,16.83,5.4C775.105,740.96,775.285,744.38,774.315,747.43z" style="fill:#231F20;"></path> <path d="M755.594,676.91l1.54-0.79c4.83-2.46,7.25-8.19,5.271-13.24c-0.33-0.83-0.76-1.59-1.25-2.28 c-0.08-0.16-0.14-0.32-0.22-0.48c-3.16-6.14-10.69-8.56-16.83-5.4l-6.25,3.21l-5.2-10.17c-7.48-14.65-8.2-31.83-1.98-47.05 c6.23-15.22,5.5-32.39-1.98-47.04l-23.14-45.32l-0.92-1.79l-39.03-76.43l-8.78-17.19l-12.86-25.18 c-6.42-12.57-21.96-17.6-34.52-11.19c-6.91,3.53-11.53,9.81-13.24,16.83l-0.58-1.14c-6.42-12.57-21.95-17.6-34.52-11.18 c-6.9,3.52-11.53,9.8-13.23,16.83l-6.03-11.79c-1.01-1.98-2.25-3.77-3.66-5.36c-7.57-8.51-20.27-11.23-30.86-5.83 c-4.26,2.18-7.64,5.4-10.01,9.2c-1.48,2.36-2.57,4.94-3.22,7.63l-3.9-7.63l-12.76-25l-12.77-25l-8.53-16.7 c-6.42-12.56-21.95-17.6-34.52-11.18c-8.86,4.52-13.97,13.58-13.97,22.93c0,1.65,0.16,3.3,0.48,4.95c0.45,2.26,1.21,4.49,2.31,6.64 l9.38,18.36l12.76,25l58.06,113.69l12.69,24.85l30.37,59.46c2.63,5.14,0.59,11.44-4.56,14.06c-1.519,0.78-3.15,1.15-4.75,1.15 c-3.8,0-7.47-2.08-9.31-5.7l-37.95-74.31c-6.59-12.9-22.54-18.06-35.44-11.47c-12.9,6.59-18.06,22.53-11.47,35.43l42.7,83.62 l13.2,25.85c9.81,19.21,27,33.62,47.64,39.92c10.31,3.15,19.77,8.33,27.87,15.12c8.1,6.79,14.86,15.2,19.76,24.8l3.42,6.7 c-3.62,3.75-4.65,9.51-2.14,14.4c0.41,0.8,0.89,1.53,1.44,2.19c0.01,0.03,0.03,0.06,0.05,0.09c2.41,3.72,6.88,5.31,11.07,4.42 c1.45-0.17,2.9-0.58,4.27-1.29l156.03-80.16C755.555,676.94,755.575,676.92,755.594,676.91z" style="fill:#231F20;"></path> </g> </g></svg>Aktionen</h3>

                                    </div>
                                    <div class="card-body ">
                                        <div class="row g-2">

                                            <button class="btn btn-success btn-sm" data-act="start" id="vstart">
                                                Hochfahren
                                            </button>
                                            <button class="btn btn-huge btn-danger btn-sm" data-act="stop" id="vstop">
                                                Herunterfahren
                                            </button>

                                            <button class="btn btn-warning btn-sm" data-act="reboot" id="vreboot">
                                                Neu starten
                                            </button>
                                            <button class="btn btn-huge btn-danger btn-sm" data-act="stop" onclick="vserver.misc.openWindow('/api/terminal/'+uuid,'Terminal',900,600)">
                                                VNC Console
                                            </button>
                                        </div>






                                    </div>
                                </div>

                            </div><br>
                            <div class="col-md-8">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3 class="card-title">Auslastung</h3>

                                    </div>
                                    <div class="card-body ">
                                        <div class="row g-2 g-xl-4">
                                            <section class="product-vserver-stats-ram">
                                                <div class="top">
                                                    <label>Arbeitsspeicher</label>
                                                    <aside id="vserver_ram"></aside>
                                                </div>
                                                <div class="progress">
                                                    <div id="vramprogress" class="progress-bar" role="progressbar" style="width: background-color rgb(88, 103, 221)"></div>
                                                </div>
                                            </section>
                                            <section class="product-vserver-stats-cpu">
                                                <div class="top">
                                                    <label>Prozessor</label>
                                                    <aside id="vserver_cpu"></aside>
                                                </div>
                                                <div class="progress">
                                                    <div id="vcpuprogress" class="progress-bar" role="progressbar" style="width: background-color rgb(88, 103, 221)"></div>
                                                </div>
                                            </section>

                                        </div>






                                    </div>
                                </div>

                            </div>






                            <!--begin::Body-->

                        </div>

                        <!--end::Statistics Widget 1-->











                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
            </div>
            <!--end::Content wrapper-->

        </div>
        <!--end:::Main-->
    </div>
   
   


   <script>
       $( "#vstop" ).click(function() {
           core.request('/api/vmControl/'+uuid+'/stop', {}, 'GET', (data) => {
               data = data.responseText;
               if(data=='Ok');{
                   core.notification.create('success','V-Server wurde erfolgreich heruntergefahren');
                   setTimeout("document.location.reload();",3000);
               }

           })
       });
       $( "#vstart" ).click(function() {
           core.request('/api/vmControl/'+uuid+'/start', {}, 'GET', (data) => {
               data = data.responseText;
               if(data=='Ok');{
                   core.notification.create('success','V-Server wurde erfolgreich gestartet');
                   setTimeout("document.location.reload();",3000);
               }

           })
       });
       $( "#vreboot" ).click(function() {
           core.request('/api/vmControl/'+uuid+'/reboot', {}, 'GET', (data) => {
               data = data.responseText;

               if(data=='Ok');{

                   core.notification.create('success','V-Server wurde erfolgreich neu gestartet');
                   setTimeout("document.location.reload();",3000);
               }

           })
       });

       setTimeout(() => {
           vserver.getInfo();
           setInterval(vserver.getInfo, 5000);
       }, 1000);
       
   </script>
@stop
