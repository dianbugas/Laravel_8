@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card border-left-warning shadow">
                    <div class="card-body">
                        <h6 class="h6 font-weight-bold text-gray-800 text-center">Link Referral</h6>
                        <div class="small mb-3 text-center">
                            <input type="text" class="input-link" id="myInput"
                                value="http://qurban.zakatsukses.org/agent?ref=">
                        </div>
                        <div class="pl-3 text-center">
                            <a href="https://www.facebook.com/sharer.php?u=http://qurban.zakatsukses.org/agent?ref=&picture=http://qurban.zakatsukses.org/wp-content/uploads/2020/07/Qurban-Pelosok-Nusantara.jpeg"
                                target="_blank" class="btn btn-primary btn-circle">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=http://qurban.zakatsukses.org/agent?ref= &text=Penuhi panggilan qurban tahun ini melalui : "
                                target="_blank" class="btn btn-info btn-circle"><i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://web.whatsapp.com/send?text=%5f%E2%80%9CMaka+dirikanlah+salat+karena+Tuhanmu+dan+berqurbanlah.%E2%80%9D+-+Al-Kautsar+%3A2%5f%0D%0A%0D%0APenuhi+panggilan+berquban+tahun+ini+melalui+%3A+%2Ahttp%3A%2F%2Fwww.qurban.zakatsukses.org%2Fagent?ref=%2A%0D%0A%0D%0AInsya+Allah%2C+qurban+yang+Anda+sampaikan+akan+menjangkau+saudara+di+seluruh+pelosok+Indonesia.%0D%0A%0D%0ALabbaik%21+Berqurban+terbaik.+Ajak+semua+keluarga%2C+sahabat+tercinta+untuk+segera+tunaikan+qurbanmu+melalui+Zakat+Sukses.%0D%0A%0D%0A*%23ZakatSukses*"
                                target="_blank" class="btn btn-success btn-circle">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <button class="btn btn-light btn-circle" btn btn-success onclick="myFunction()"
                                onmouseout="outFunc()">
                                <i class="fa fa-link cp-i"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card border-left-info shadow">
                    <div class="card-body">
                        <h6 class="h6 font-weight-bold text-gray-800 text-center">Total Daftar</h6>
                        <div class="row h-100 mt-2">
                            <div class="col-lg-4 text-left">
                                <span class="small">Transaksi</span>
                                <h5 class="text-left mt-3">2</h5>
                            </div>
                            <div class="col-lg-8 text-right">
                                <span class="small">Donasi</span>
                                <h5 class="mt-3">2</small></h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card border-left-success shadow">
                    <div class="card-body">
                        <h6 class="h6 font-weight-bold text-gray-800 text-center">Total Belum Bayar</h6>
                        <div class="row h-100 mt-2">
                            <div class="col-lg-4 text-left">
                                <span class="small">Transaksi</span>
                                <h5 class="text-left mt-3">1</h5>
                            </div>
                            <div class="col-lg-8 text-right">
                                <span class="small">Donasi</span>
                                <h5 class="mt-3">2</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->
@endsection
