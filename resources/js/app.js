require('./bootstrap');

window.Swal = require("sweetalert2");

import "admin-lte/plugins/jquery/jquery";
import "admin-lte/plugins/bootstrap/js/bootstrap.bundle";
import "admin-lte/dist/js/adminlte";
import "admin-lte/plugins/daterangepicker/daterangepicker.js";




        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cutomer-details.pdf");
                }
            })
        });
   
