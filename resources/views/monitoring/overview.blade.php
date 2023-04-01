@extends('layouts.layout')
@section('content')

    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Monitoring hinzufügen</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form id="add-monitor">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Name:</label>
                            <input type="text" name="description"class="form-control" id="description" placeholder="Name des Checks" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">IP:</label>
                            <input type="text" name="ip"class="form-control" id="ip" placeholder="IP-Adresse/Host">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Host:</label>
                            <input type="text" name="host"class="form-control" id="host" placeholder="Host">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Überwachungstyp:</label>
                            <select class="form-select" id="check" name="check"aria-label="Default select example" id="type" required>
                                <option selected>Open this select menu</option>
                                <option value="1">Ping (15% threshold)</option>
                                <option value="2">Ping (25% threshold)</option>
                                <option value="3">Ping (50% threshold)</option>
                                <option value="4">HTTP</option>
                                <option value="5">HTTPS</option>
                                <option value="8">TCP</option>
                                <option value="10">DNS</option>
                                <option value="12">Heartbeat</option>
                                <option value="13">SSL</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Port:</label>
                            <input type="text" class="form-control" id="port" placeholder="Port bei TCP,UDP">
                        </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Schliessen</button>
                    <button type="submit" class="btn btn-primary">Erstellen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                            <div class="card-header">
                                <h3 class="card-title">
                                    <span class="card-label ">Monitoring Übersicht</span>
                                    <div class="card-toolbar">


                                        <button style="margin-left: 500px;"type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                            <i class="fa-sharp fa-solid fa-plus"></i>Hinzufügen
                                        </button>


                                    </div>

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
                                            <th class="min-w-20px"style="margin-left: 100px;">Host</th>
                                            <th class="min-w-50px"style="margin-left: 100px;">Service</th>

                                            <th class="min-w-50px"style="margin-left: 100px;">Actions</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody>

                                        @if($monitoring)
                                            @foreach($monitoring as $sv)
                                                <script>

                                                    setTimeout(() => {
                                                        monitoring.getStatus(@php echo $sv->sid;@endphp);
                                                        setInterval(monitoring.getStatus, 5000, @php echo $sv->sid;@endphp);
                                                    }, 1000);
                                                </script>
                                                <tr>

                                                    <td>
                                                            <div id="@php echo $sv->sid;@endphp"></div>
                                                    </td>
                                                    <td>
                                                        @php echo $sv->host;@endphp
                                                    </td>
                                                    <td>
                                                        @php echo $sv->service;@endphp
                                                    </td>

                                                    <td style="margin-left: 100px;">
                                                        <div style="margin-left: 0px;">


                                                            <a href="/monitoring/view/@php echo $sv->sid;@endphp" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-3"><svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" id="dashboard" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M21,7V4a1,1,0,0,0-1-1H15a1,1,0,0,0-1,1V7a1,1,0,0,0,1,1h5A1,1,0,0,0,21,7ZM10,20V17a1,1,0,0,0-1-1H4a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1H9A1,1,0,0,0,10,20Z" style="fill: none; stroke: #2ca9bc; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary" d="M9,12H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H9a1,1,0,0,1,1,1v7A1,1,0,0,1,9,12Zm12,8V13a1,1,0,0,0-1-1H15a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h5A1,1,0,0,0,21,20Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg>
</span>
                                                                <!--end::Svg Icon-->                                    </a>
                                                            <a href="/monitoring/view/@php echo $sv->sid;@endphp" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-3"><svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" id="delete-alt" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M16,7V4a1,1,0,0,0-1-1H9A1,1,0,0,0,8,4V7m2,4v6m4-6v6" style="fill: none; stroke: #2ca9bc; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary" d="M4,7H20M18,20V7H6V20a1,1,0,0,0,1,1H17A1,1,0,0,0,18,20Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg>
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

            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

    </div>


@stop
