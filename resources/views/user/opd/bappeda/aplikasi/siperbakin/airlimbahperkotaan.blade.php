@extends('layouts.user.app')

@section('judul-halaman', 'Siperbakin')


@push('css')
    @livewireStyles
   
@endpush

@section('navbar')
   
        @livewire('user.opd.bappeda.aplikasi.siperbakin.dashboardnav')
   
@endsection


@section('content')
   
        @livewire('user.opd.bappeda.aplikasi.siperbakin.airlimbahperkotaan')
   
@endsection

@push('java-script')
    @livewireScripts


    <script>
        window.addEventListener('tampilkonfirmasihapus', e => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Menghapus data Sistem Pengelolaan Air Limbah Perkotaan, pertimbangkan kembali!",
                icon: 'Peringatan',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    livewire.emit('hapusmulai')
                }
            })
        });


        window.addEventListener('dataterhapussukses', e => {
            Swal.fire(
                'Terhapus!',
                'Data berhasil dihapus.',
                'Sukses'
            )
        });


        window.addEventListener('TampilModalTambahAirLimbahPerkotaan', e => {
            $('#ModalTambahAirLimbahPerkotaan').modal({
                backdrop: 'static',
                keyboard: false
            }).modal('show');
        });



        window.addEventListener('TampilModalEditAirLimbahPerkotaan', e => {
            $('#ModalEditAirLimbahPerkotaan').modal({
                backdrop: 'static',
                keyboard: false
            }).modal('show');
        });

        window.addEventListener('TampilModalLihatAirLimbahPerkotaan', e => {
            $('#ModalLihatAirLimbahPerkotaan').modal({
                backdrop: 'static',
                keyboard: false
            }).modal('show');
        });

        window.addEventListener('TutupModal', e => {
            $('#ModalTambahAirLimbahPerkotaan').modal('hide');
            $('#ModalEditAirLimbahPerkotaan').modal('hide');
            $('#ModalLihatAirLimbahPerkotaan').modal('hide');
        });


        function isNumberOrDot(event) {
            // Mendapatkan kode tombol
            var keyCode = event.keyCode || event.which;

            // Izinkan angka (0-9), titik (.), backspace (8), dan tab (9)
            return /[0-9\.]/.test(event.key) || keyCode === 8 || keyCode === 9;
        }


        
    </script>

    
@endpush


