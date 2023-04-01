monitoring = {

                getStatus:(id)=>{
                    core.request('/ping/'+id, {}, 'GET', (data) => {
                        data = JSON.parse(data.responseText);
                        if (data['status']==1){

                            $('#'+id).html('<span class="badge badge-success">Online</span>');
                        }
                        else {
                            $('#'+id).html('<span class="badge badge-danger">Offline</span>');
                        }


                    })
                },
                addMonitor:(formdata)=>{
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: '/monitoring/addhost',
                        data: formdata,
                        success: function(response)
                        {
                            if (response === 'success') {
                                //window.location = '/monitoring/overview/';

                                //iziToast.success({title: 'OK',message: 'Host wurde hinzugefügt!',position: 'topRight',});
                                core.notification.create('success','Host wurde hinzugefügt')
                                window.setTimeout("location.href='/monitoring/overview/'+uuid", 5000);

                            }
                            if (response === 'failed')
                                core.notification.create('warn','Ungültige Zugangsdaten');

                        },

                    });
    }














}

