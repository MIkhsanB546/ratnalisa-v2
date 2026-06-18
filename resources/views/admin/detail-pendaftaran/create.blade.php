@extends('admin.layouts.app')

@section('title', 'Tambah Detail')

@section('page-title', 'Tambah Detail')


@section('content')

    <div class="card">


        <div class="card-header">

            <h3 class="card-title">

                Tambah Layanan


            </h3>

        </div>



        <form method="POST" action="{{ route(
            'detail-pendaftaran.store',
        
            $pendaftaran,
        ) }}">

            @csrf



            <div class="card-body">


                <div class="mb-3">


                    <label class="form-label">

                        Pilih layanan


                    </label>



                    @foreach ($layanans as $layanan)
                        <div class="form-check">


                            <input class="form-check-input" type="checkbox" name="id_layanan[]"
                                value="{{ $layanan->id_layanan }}" id="{{ $layanan->id_layanan }}">



                            <label class="form-check-label" for="{{ $layanan->id_layanan }}">


                                {{ $layanan->nama_layanan }}


                                -

                                Rp

                                {{ number_format(
                                    $layanan->harga,
                                
                                    0,
                                
                                    ',',
                                
                                    '.',
                                ) }}


                            </label>


                        </div>
                    @endforeach



                    @error('id_layanan')
                        <div class="text-danger">

                            {{ $message }}

                        </div>
                    @enderror



                </div>



            </div>



            <div class="card-footer">


                <a href="{{ route(
                    'detail-pendaftaran.index',
                
                    $pendaftaran,
                ) }}" class="btn btn-secondary">


                    Kembali


                </a>



                <button class="btn btn-primary">


                    Simpan


                </button>



            </div>



        </form>


    </div>

@endsection
