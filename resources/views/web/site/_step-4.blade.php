<div class="step">
    <h3 class="main_question"><strong>4/5</strong>Pengalaman Kerja</h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="text" name="company_name" class="form-control required" placeholder="Nama Perusahaan">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="company_position" class="form-control required" placeholder="Posisi">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="styled-select">
                    <input type="text" name="company_salary" class="form-control required" placeholder="Gaji">
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="styled-select">
                            <select class="required" name="company_start_date_month">
                                <option value="" selected>Mulai Bulan</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="styled-select">
                            <select class="required" name="company_start_date_year">
                                <option value="" selected>Mulai Tahun</option>
                                @foreach (range(date('Y'), 1990) as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="styled-select">
                            <select class="required" name="company_end_date_month">
                                <option value="" selected>Sampai Bulan</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="styled-select">
                            <select class="required" name="company_end_date_year">
                                <option value="" selected>Sampai Tahun</option>
                                @foreach (range(date('Y'), 1990) as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <small><input id="company_stil_work" name="company_stil_work" type="checkbox" class="icheck required" value="1"> <label for="company_stil_work">Saya masih bekerja disini</label></small>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea name="company_responsible" class="form-control required" style="height:100px" placeholder="Tanggung Jawab"></textarea>
            </div>
            <br/>
            <br/>
        </div>
        
    </div>
    <!-- /row -->
</div>