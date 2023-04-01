@extends('layouts.layout')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Willkommen </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->

                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->

                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row g-5 g-xl-8">

                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">V-Server Übersicht</span>


                                </h3>


                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fw-bold text-muted bg-light">


                                            <th class="min-w-50px"style="margin-left: 100px;">Status</th>
                                            <th class="min-w-50px">Name</th>
                                            <th class="min-w-50px">RAM</th>
                                            <th class="min-w-50px">V-Cores</th>
                                            <th class="min-w-50px">Speicher</th>
                                            <th class="min-w-50px">IP-Adresse</th>
                                            <th class="min-w-50px">Actions</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody>

                                        @if($vserver)
                                            @foreach($vserver as $sv)
                                        <tr>
                                            <td>
                                                    @php if(!@$fp = fsockopen( $sv->ip,$sv->port, $errno, $errstr, 1)){
                                                    echo '<span class="badge badge-danger">Offline</span>';
                                                }
                                                else {
                                                    echo '<span class="badge badge-success">Online</span>';
                                                } @endphp
                                            </td>
                                            <td>
                                                    @php echo $sv->hostname; @endphp
                                            </td>
                                            <td>
                                                    @php echo $sv->ram;@endphp
                                            </td>
                                            <td>
                                                    @php echo $sv->vcores;@endphp
                                            </td>
                                            <td>
                                                    @php echo $sv->speicher;@endphp
                                            </td>
                                            <td>
                                                    @php echo $sv->ip; @endphp
                                            </td>
                                            <td style="margin-right: 300px;">
                                                <div class="d-flex justify-content-end flex-shrink-0">


                                                    <a href="/vserver/view/@php echo $sv->uid;@endphp" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path></svg>
</span>
                                                        <!--end::Svg Icon-->                                    </a>


                                                </div>
                                            </td>
                                        </tr>



                                        @endforeach
                                        @endif
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>



                                        <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>

                        <!--begin::Statistics Widget 1-->

                        <!--end::Statistics Widget 1-->

                    </div>

                    <!--end::Statistics Widget 1-->

                </div>









                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

    </div>


@stop
