@extends('layouts.layout')
@section('content')
<br>
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
                                <h3 class="card-title"><svg width="23px" height="23px" viewBox="0 0 32 32" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg820" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs814"> <linearGradient xlink:href="#linearGradient4424" id="linearGradient4358" x1="401.57144" y1="535.79797" x2="401.57144" y2="520.79797" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.25 0 0 1.2 -484.714 468.561)"></linearGradient> <linearGradient id="linearGradient4424"> <stop id="stop4426" offset="0" style="stop-color:#60a5e7;stop-opacity:0"></stop> <stop id="stop4428" offset="1" style="stop-color:#a6f3fb;stop-opacity:.25773194"></stop> </linearGradient> </defs> <metadata id="metadata817"> <rdf:rdf> <cc:work> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title></dc:title> <dc:date>2021</dc:date> <dc:creator> <cc:agent> <dc:title>Timothée Giet</dc:title> </cc:agent> </dc:creator> <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"></cc:license> </cc:work> <cc:license rdf:about="http://creativecommons.org/licenses/by-sa/4.0/"> <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"></cc:permits> <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"></cc:permits> <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"></cc:requires> <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"></cc:requires> <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"></cc:permits> <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"></cc:requires> </cc:license> </rdf:rdf> </metadata> <g id="layer1" transform="translate(.072 -1091.192)"> <path style="opacity:1;vector-effect:none;fill:#373737;fill-opacity:1;stroke:none;stroke-width:2;stroke-linecap:butt;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:3.20000005;stroke-opacity:1" d="m17.198 1099.53-1.65 2.858a7 7 30 0 0-1.42-.187l-.854-3.186-3.863 1.035.852 3.18a7 7 30 0 0-1.14.877l-2.853-1.648-2 3.464 2.857 1.65a7 7 30 0 0-.187 1.42l-3.186.854 1.036 3.864 3.18-.853a7 7 30 0 0 .876 1.14l-1.648 2.853 3.464 2 1.65-2.857a7 7 30 0 0 1.421.187l.854 3.186 3.863-1.035-.852-3.18a7 7 30 0 0 1.14-.876l2.853 1.647 2-3.464-2.857-1.65a7 7 30 0 0 .186-1.42l3.186-.854-1.035-3.864-3.18.853a7 7 30 0 0-.876-1.14l1.647-2.853zm-1.268 6.197a4 4 0 0 1 1.464 5.464 4 4 0 0 1-5.464 1.464 4 4 0 0 1-1.464-5.464 4 4 0 0 1 5.464-1.464z" id="rect2175-7"></path> <path style="opacity:1;vector-effect:none;fill:#373737;fill-opacity:1;stroke:none;stroke-width:2;stroke-linecap:butt;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:3.20000005;stroke-opacity:1" d="m18.585 1096.867.98.566a4 4 0 0 0 1.05 3.917l-.566.981 1.732 1 .566-.979a4 4 0 0 0 3.917-1.05l.982.567 1-1.732-.98-.566a4 4 0 0 0-1.051-3.917l.566-.982-1.732-1-.565.98a4 4 0 0 0-3.918 1.05l-.981-.567zm3.098.634a2 2 30 0 1 2.732-.732 2 2 30 0 1 .732 2.732 2 2 30 0 1-2.732.732 2 2 30 0 1-.732-2.732z" id="rect2261"></path> </g> </g></svg>Statistik</h3>

                            </div>
                            <div class="card-body ">
                                <div class="col-md-10">
                                    <div class="card md">
                                        <div class="card-header">
                                            <h3 class="card-title">CPU-Auslastung</h3>

                                        </div>
                                        <div class="card-body ">

                                            <canvas id="cpu"></canvas>







                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-10">
                                    <div class="card md">
                                        <div class="card-header">
                                            <h3 class="card-title">RAM-Auslastung</h3>

                                        </div>
                                        <div class="card-body ">

                                            <canvas id="ram"></canvas>








                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-10">
                                    <div class="card md">
                                        <div class="card-header">
                                            <h3 class="card-title">Netzwerk-Auslastung</h3>

                                        </div>
                                        <div class="card-body ">

                                            <canvas id="net"></canvas>








                                        </div>
                                    </div>

                                </div>

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
<!--begin::Javascript-->


<script>
    function format_time(s) {

        const dtFormat = new Intl.DateTimeFormat('de-DE', {

            timeStyle: 'medium',

            timeZone: 'Europe/Berlin'

        });



        return dtFormat.format(new Date(s * 1e3));

    }
    let options = {
        responsive: true,
        maintainAspectRatio: false,
        elements: {
            point: {
                radius: 0
            }
        },
        scales: {
            xAxes: [{
                ticks: {
                    callback: function (value, index, values) {
                        return moment.unix(value).format('H:mm')
                    }
                }
            }]
        },
        tooltips: {
            mode: 'index',
            intersect: false
        },
        hover: {
            mode: 'index',
            intersect: false
        },
        animation: {
            duration: 0
        }
    };

    const getGraphs = () => {
        $.getJSON('/vmStats/'+uuid, (data) => {

            //alert(JSON.stringify(data.data));
            //var cpu_ctx = document.getElementById('cpu');

            var net_ctx = document.getElementById('net').getContext('2d');
            var ram_ctx = document.getElementById('ram').getContext('2d');
            var cpu_ctx = document.getElementById('cpu').getContext('2d');



            let cpu = {
                labels: data.data.map(ele => ele.time),
                datasets: [{
                    label: 'CPU',
                    backgroundColor: 'rgba(220,53,69, 0.5)',
                    data: data.data.map(ele => ((ele.cpu ? ele.cpu : 0) * 100).toFixed(2))
                }]
            };
            let ram = {
                labels: data.data.map(ele => ele.time),
                datasets: [{
                    label: 'RAM Used',
                    backgroundColor: 'rgba(255,193,7, 0.5)',
                    data: data.data.map(ele => ((ele.mem ? ele.mem : 0) / 1000000000).toFixed(
                        2))
                },
                    {
                        label: 'RAM Total',
                        data: data.data.map(ele => ((ele.maxmem ? ele.maxmem : 0) / 1000000000)
                            .toFixed(2))
                    }
                ]
            };

            let network = {
                labels: data.data.map(ele => ele.time),
                datasets: [{
                    label: 'Netin',
                    backgroundColor: 'rgba(51,181,229, 0.5)',
                    data: data.data.map(ele => (ele.netin ? (ele.netin) / 1000000 : 0)
                        .toFixed(
                            2)),
                    order: 2,
                    label: 'Netin (MB/s) '
                },
                    {
                        label: 'Netout',
                        backgroundColor: 'rgba(0,200,81, 0.5)',
                        data: data.data.map(ele => (ele.netout ? (ele.netout) / 1000000 : 0)
                            .toFixed(2)),
                        order: 1,
                        label: 'Netout (MB/s) '
                    }
                ]
            }
            var cpu_config = {
                type: 'line',
                options,
                data: cpu
            }

            var ram_config = {
                type: 'line',
                options,
                data: ram
            }
            var net_config = {
                type: 'line',
                options,
                data: network
            }
            if (window.cpu_chart) {
                window.cpu_chart.data = cpu;
                window.cpu_chart.update();
            } else {
                window.cpu = new Chart(cpu_ctx, cpu_config);

            }
            if (window.ram_chart) {
                window.ram_chart.data = ram;
                window.ram_chart.update();
            } else {
                window.ram_chart = new Chart(ram_ctx, ram_config)
            }
            if (window.network_chart) {
                window.network_chart.data = network;
                window.network_chart.update();
            } else {
                window.network_chart = new Chart(net_ctx, net_config);
            }
        });
    }
    setTimeout(() => {
        getGraphs();

        setInterval(getGraphs, 3000);
    },1000 );
    setTimeout(() => {
        vserver.getInfo();

        setInterval(vserver.getInfo, 3000);
    },1000 );
</script>
@stop
