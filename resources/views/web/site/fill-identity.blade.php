@extends('layouts.web.main')

@section('content')

<div class="row">
    <div class="col-md-4">
        <div id="left_form">
            <figure><img src="{{ url('web/img/registration_bg.svg') }}" alt=""></figure>
            <h2>Registrasi</h2>
            <p>Silahkan mengisi form data diri yang sudah disediakan di samping kanan.</p>
            <a href="javascript:;;" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
        </div>
    </div>
    <div class="col-md-8">

        <div id="wizard_container">
            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->
            <form name="example-1" id="wrapped" method="POST" action="{{url("process")}}" enctype="multipart/form-data">
                 {{ csrf_field() }}
                <input id="website" name="website" type="text" value="">
                <!-- Leave for security protection, read docs for details -->
                <div id="middle-wizard">

                    @include('web.site._step-1')
                    
                    @include('web.site._step-2')
                    
                    @include('web.site._step-3')
                    
                    @include('web.site._step-4')
                    
                    @include('web.site._final-step')
                    
                    <!-- /step-->
                </div>
                <!-- /middle-wizard -->
                <div id="bottom-wizard">
                    <button type="button" name="backward" class="backward">Sebelumnya </button>
                    <button type="button" name="forward" class="forward">Selanjutnya</button>
                    <button type="submit" name="process" class="submit">Kirim</button>
                </div>
                <!-- /bottom-wizard -->
            </form>
        </div>
        <!-- /Wizard container -->
    </div>
</div><!-- /Row -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal info -->
<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="more-infoLabel">Isi Data Diri Anda</h4>
            </div>
            <div class="modal-body">
                <p>Isi data diri Anda.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@push("script")
<script>
    $('form#wrapped').find("input[name='expected_salary']").mask('#.##0', {reverse: true});
    $('form#wrapped').find("input[name='company_salary']").mask('#.##0', {reverse: true});
    
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        beforeSelect: function (event, state) {
            if ($('input#website').val().length != 0) {
                return false;
            }
            if (!state.isMovingForward)
                return true;
            var inputs = $(this).wizard('state').step.find(':input');
            return !inputs.length || !!inputs.valid();
        }
    }).validate({
        errorPlacement: function (error, element) {
            if (element.is(':radio') || element.is(':checkbox')) {
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function (event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
        }
    });
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        startView: 2
    });
</script>
@endpush