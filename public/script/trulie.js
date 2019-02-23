var url = 'http://localhost/trulie/public/';
var TrulieTable = function() {
  // console.log(url);
  $('#trulie_data').DataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "Paginate": true,
            "ajax":{
                     "url": url+"trulies/fetch",
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: "{{csrf_token()}}"}
                   },
            "columns": [
                { "data": "id" },
                { "data": "description" },
                { "data": "trues" },
                { "data": "lies" },
                { "data": "latitude" },
                { "data": "longitude" },
                { "data": "location" },
                { "data": "status" },
                { "data": "options" },
            ]  

        });
   //jQuery('#incidentform_data_wrapper .dataTables_filter input').addClass("form-control input-small input-inline"); // modify table search input
       // jQuery('#incidentform_data_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown
        //jQuery('#incidentform_data_wrapper .dataTables_length select').select2(); // initialize select2 dropdown
}

$( document ).ready(function() {

  TrulieTable();
});

