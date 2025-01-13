@push('customScripts')
    {!! $dataTable->scripts() !!}
    <script>
        function importFile() {
            let data = new FormData($('#importdata')[0])

            $.ajax({
                type: "POST",
                url: route('admin.peserta-umum-lima.import'),
                data: data,
                processData: false,
                contentType: false,
                beforeSend: function(res) {
                    Swal.fire({
                        title: 'Mohon Menunggu',
                        html: 'Sedang memuat data',
                        timerProgressBar: true,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    })
                    $('#btn-import').text('Mohon Menunggu')
                    $('#btn-import').prop('disabled', true)
                },
                error: function(res) {
                    $('#btn-import').text('Import Data Peserta')
                    $('#btn-import').prop('disabled', false)
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Peserta gagal diimport',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                success: function(res) {
                    $('input[name="file"]').val('')
                    $('#btn-import').text('Import Data Peserta')
                    $('#btn-import').prop('disabled', false)
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Peserta berhasil diimport',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#pesertaumumlima-table').DataTable().ajax.reload()
                }
            });
        }

        function nomorPeserta(id) {
            $('#nomorUndianModal').modal('show')
            $('.modal-title').text('Nomor Undian Peserta')

            $.ajax({
                type: "POST",
                url: route('nomor-undian-umum-lima'),
                data: {
                    _token: '{{ csrf_token() }}',
                    peserta_umum_lima_id: id
                },
                beforeSend: function(res) {
                    $('#nomorundian-table>tbody').html('')
                },
                error: function(res) {
                    alert('error')
                },
                success: function(res) {
                    let no = 1
                    res.nomorundian.forEach(val => {
                        $('#nomorundian-table>tbody').append(
                            '<tr>' +
                            '<td>' + no + '</td>' +
                            '<td>' + val.nomor_undian + '</td>' +
                            '</tr>'
                        )
                        no++
                    });
                }
            });

        }
    </script>
@endpush
