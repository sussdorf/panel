

core = {
  api: 'https://panel.dnic.it',

  notification: {
        create: (type, message) => {
          if (type==='warn')
              iziToast.warning({
                  title: '',
                  message: message,
                  timeout: '10000',
                  progressBar: false,
                  position: 'topRight',
              });
          if (type==='success')
              iziToast.success({
                  title: '',
                  message: message,
                  timeout: '10000',
                  progressBar: false,
                  position: 'topRight',
              });
          if (type==='error')
            iziToast.error({
                    title: '',
                    message: message,
                    timeout: '10000',
                    progressBar: false,
                    position: 'topRight',
                });

        }

    },




  request: (url, data = {}, method , callback,contentType = 'application/json; charset=UTF-8') => {
$.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
        $.ajax({
    type: method,
    data: data,
    dataType: 'application/json',
    contentType,
    url: core.api + url,

    success: function (data) {
        if (typeof callback !== "undefined")
                    callback(data);
    },
    error: function (data) {
         if (data.status === 500)
                    core.notification.create('warn', 'API Anfrage konnte nicht verarbeitet werden (HTTP 500)');
                if (data.status === 421)
                    core.notification.create('warn', 'Es konnte keine Verbindung zum Hostsystem herstellt werden.');
                // if (data.status === 403)
                //     app.notification.create(false, app.string.translate('forbidden'));

                if (typeof callback !== "undefined")
                    callback(data);
    }
});


    }



};



