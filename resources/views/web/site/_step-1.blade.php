<div class="step">
    <h3 class="main_question"><strong>1/5</strong>Isi Data Diri Anda</h3>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="first_name" class="form-control required" placeholder="Nama Depan">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="last_name" class="form-control required" placeholder="Nama Belakang">
            </div>
        </div>
    </div>
    <!-- /row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="email" name="email" class="form-control required" placeholder="Emal Anda">
                <div class="email-error-custom"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="phone" class="form-control required" placeholder="No Handphone Anda">
            </div>
        </div>
    </div>
    <!-- /row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="date_of_birth" class="form-control datepicker required" placeholder="Tanggal Lahir (Tahun-Bulan-Tanggal)">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group radio_input">
                <label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
                <label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <textarea name="address" class="form-control required" placeholder="Alamat Tinggal"></textarea>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <input type="text" name="city" class="form-control required" placeholder="Kota">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <input type="text" name="postal_code" class="form-control required" placeholder="Kode Pos">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="country" class="form-control required" placeholder="Negara">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group radio_input">
                <label><input type="radio" value="Belum Menikah" checked name="marital_status" class="icheck">Belum Menikah</label>
                <label><input type="radio" value="Menikah" name="marital_status" class="icheck">Menikah</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <input type="text" name="expected_salary" class="form-control required" placeholder="Gaji yang diinginkan">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <select name="religion" class="form-control required">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="other">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label><input type="checkbox" value="1" name="profesional_recomendation" class="icheck">Rekomendasi Profesional</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="job_type" class="form-control required" placeholder="Bidang Pekerjaan yang diinginkan">
            </div>
        </div>
    </div>
    <br>

    <!-- /row -->
</div>

@push("script")
<script>
$("input[name='email']").change(function() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        type: 'POST',
        url: "{{url('check-email')}}",
        data: {
            '_token':"{{ csrf_token() }}",
            'email':$(this).val()
        },
        success: function(result) {
            var data = JSON.parse(result);
            if (data.status == false) {
                $('.email-error-custom').html('<span for="email" class="error">Email sudah digunakan</span>');
                $(this).addClass('error');
                $('.forward').attr('disabled', true);
            } else {
                $('.email-error-custom').html('');
                $(this).removeClass('error');
                $('.forward').removeAttr('disabled');
            }
        }
    })
})
</script>
@endpush