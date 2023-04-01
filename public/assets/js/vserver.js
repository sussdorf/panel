vserver = {

        getInfo: (response) => {
            var pathArray = window.location.pathname.split( '/' );
            var uid = pathArray[3];
            core.request('/vmInfo/'+uid, {}, 'GET', (data) => {
                data = JSON.parse(data.responseText);
                let cpuo = data['cpu'];
                let cpu  = cpuo.toFixed(2);
                let vcore = data['cpus'];
                let ram_max = data['maxmem'];
                let ram_free = data['freemem'];
                let ram_now = (ram_max - ram_free);
                let ram_percent = Math.round((ram_now / ram_max ) * 100);
                $('#vserverinfo').html(data['name']);
                $('#coresinfo').html(data['cpus']+' VCores');
                $('#raminfo').html( vserver.misc.bytesToHumanReadable(data['maxmem']));
                $('#diskinfo').html( vserver.misc.bytesToHumanReadable(data['maxdisk']));
                $('#vserver_ram').html(vserver.misc.bytesToHumanReadable(ram_now)+'&nbsp;von&nbsp;'+vserver.misc.bytesToHumanReadable(ram_max)+'&nbsp;('+ram_percent+'%)');
                $('#vserver_cpu').html(cpu+'%&nbsp;von&nbsp;'+vcore+'&nbsp;VCores');
                $('#vcpuprogress').prop('style','width:'+cpu+'%');
                $('#vramprogress').prop('style','width:'+ram_percent+'%');

                var status =(data["status"]);
                if (status=="running") {
                    $("#vstart").attr("disabled","disabled");
                    $("#content_title").html('<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">V-Server:</h1>&nbsp; '+data['name']+ '&nbsp;<span class="badge badge-success">Online</span>');
                  }
                  else {
                    $("#vstop").attr("disabled","disabled");
                    $("#content_title").html('<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">V-Server:</h1>&nbsp; '+data['name']+ '&nbsp;<span class="badge badge-danger">Offline</span>');
                  }

                })
            },


        misc: {

            bytesToHumanReadable: (bytes, dp = 2, thresh = 1024) => {

                if (Math.abs(bytes) < thresh) {
                return bytes + ' B';
                }

                const units = ['kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB']
                let u = -1;
                const r = 10 ** dp;

                do {
                bytes /= thresh;
                ++u;
                }
                while (Math.round(Math.abs(bytes) * r) / r >= thresh && u < units.length - 1);


                return bytes.toFixed(dp) + ' ' + units[u];
                },
            openWindow: (url, name, width, heigth) => {
                  let leftPos = (screen.width - width) / 2,
                      topPos = (screen.height - heigth) / 2;
                  leftPos < 0 && (leftPos = 0);
                  topPos < 0 && (topPos = 0);
                  let s = "height=" + heigth + ",width=" + width + ",top=" + topPos + ",left=" + leftPos;
                  let win = window.open(url, name, s);
                  win.window.focus();
                  return win;
              }

        },
        getvmTraffic: (response) => {
            var pathArray = window.location.pathname.split( '/' );
            var uid = pathArray[3];
            core.request('/api/getvmTraffic/'+uid, {}, 'GET', (data) => {
            data = JSON.parse(data.responseText);

            let rx = data['interfaces'][0]['traffic']['month'][1]['rx'];
            let tx = data['interfaces'][0]['traffic']['month'][1]['tx'];
            let traffic = rx + tx;
            $('#traffinfo').html(vserver.misc.bytesToHumanReadable(traffic)+'&nbsp;von&nbsp;2&nbsp;TB');

                })
            }




}











