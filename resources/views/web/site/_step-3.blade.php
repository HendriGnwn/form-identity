<div class="step">
    <h3 class="main_question"><strong>3/5</strong>Sertifikasi dan Lainnya</h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="text" name="certificate_name" class="form-control required" placeholder="Nama Sertifikat">
            </div>
        </div>
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="styled-select">
                    <select class="required" name="certificate_year">
                        <option value="" selected>Tahun</option>
                        @foreach (range(date('Y'), 1990) as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="styled-select">
                    <input type="text" name="certificate_final_grade" class="form-control required" placeholder="Nilai Akhir">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label><small>Upload Dokumen Sertifikat</small></label>
                <input type="file" name="certificate_document" class="form-control required" placeholder="Dokumen Sertifikat">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label><input type="checkbox" value="1" name="certificate_yet">&nbsp;&nbsp;Saya belum mempunyai sertifikat</label>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>

@push('script')
<script>
$('input[name="certificate_yet"]').click(function() {
    if ($(this).is(':checked') == true) {
        $('input[name="certificate_name"]').removeClass("required");
        $('select[name="certificate_year"]').removeClass("required");
        $('input[name="certificate_final_grade"]').removeClass("required");
        $('input[name="certificate_document"]').removeClass("required");
    } else {
        $('input[name="certificate_name"]').addClass("required");
        $('select[name="certificate_year"]').addClass("required");
        $('input[name="certificate_final_grade"]').addClass("required");
        $('input[name="certificate_document"]').addClass("required");
    }
})
</script>
@endpush