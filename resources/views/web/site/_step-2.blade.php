<div class="step">
    <h3 class="main_question"><strong>2/5</strong>Pendidikan dan Pengalaman Bekerja</h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="text" name="school_name" class="form-control required" placeholder="Pendidikan">
            </div>
        </div>
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="styled-select">
                    <select class="required" name="education_state">
                        <option value="" selected>Kualifikasi</option>
                        <option value="SMA">SMA / SMK Sederajat</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Master">Master</option>
                        <option value="Doktoral">Doktoral</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="styled-select">
                            <select class="required" name="school_start_year">
                                <option value="" selected>Periode Pendidikan</option>
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
                            <select name="school_end_year">
                                <option value="" selected>Sampai Tahun</option>
                                @foreach (range(date('Y'), 1990) as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <small><input id="is_graduated_yet" name="is_graduated_yet" type="checkbox" class="icheck required" value="1"> <label for="is_graduated_yet">Saya belum lulus</label></small>
        </div>
    </div>
    <!-- /row -->
</div>