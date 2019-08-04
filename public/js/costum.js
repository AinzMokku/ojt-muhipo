$(function () {

  // $('#tambah_sekolah').click(function() {
  //   var nama_sekolah = $('#nama_sekolah').val();
  //   var alamat_sekolah = $('#alamat_sekolah').val();

  //   $.ajax({
  //     url: "http://localhost/sekolah/baru/save/" + nama_sekolah +"/" + alamat_sekolah,
  //     method: "get",
  //     success: function(mess){
  //       //perintah
  //       $('#m_sekolah').modal(hide);
  //     },
  //     error: function(err){
  //       //perintah
  //     }
  //   })
  // });

    //Initialize Select2 Elements
    $('.select2').select2()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
  
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#datepicker').datepicker({
      autoclose: true
    })

    $('#avatar').click(function(){
        $("#file").click();
    })

    $('#file').change(function(){
        setImage(this,"#avatar");
    })
  })

  $(document).ready(function() {
    $('#technig').summernote({
      height:300,
    });
  });

  $(document).ready(function(){
      $('.summernote').summernote({
          height: 500,
      });
  });

  function setImage(input,target){
    if (input.file && input.files[0]){
      var reader = new FileReader();

      reader.onload = function(e){
        $(target).attr('src', e.target.result);
      }
      reader.readAsDataURL(input.file[0]);
    }
  }

  

