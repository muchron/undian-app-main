@push('customScripts')
    <script>
        function generateDateNow() {
            const now = new Date();
            const year = now.getFullYear();
            const month = now.getMonth() + 1;
            const day = now.getDate();
            let textMonth = ''
            if (month < 10) {
                textMonth = '0' + month
            } else {
                textMonth = month
            }
            const dateNow = `${day}/${textMonth}/${year}`;
            return dateNow;
        }

        function generateTimeNow() {
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();
            let textHours = ''
            let textMinutes = ''
            let textSeconds = ''
            if (hours < 10) {
                textHours = '0' + hours
            } else {
                textHours = hours
            }
            if (minutes < 10) {
                textMinutes = '0' + minutes
            } else {
                textMinutes = minutes
            }
            if (seconds < 10) {
                textSeconds = '0' + seconds
            } else {
                textSeconds = seconds
            }
            const timeNow = `${textHours}:${textMinutes}:${textSeconds}`;
            return timeNow + ' WIB';
        }

        $(document).ready(function() {
            setInterval(() => {
                $('#waktu').text(generateTimeNow())
            }, 1000);
            $('#tanggal').text(generateDateNow())
            dataPesertaGrandprize = getAllDataPesertaGrandprize().responseJSON.peserta;

        });

        let dataPesertaGrandprize = ''

        function getAllDataPesertaGrandprize() {
            return $.ajax({
                url: route('peserta-grandprice'),
                async: false,
                success: function(res) {
                    return res.peserta
                }
            })
        }

        let shuffleData;

        function onShuffle() {
            shuffleData = setInterval(() => {
                const randomIndices = [];
                const peserta = [];
                const randomIndex = Math.floor(Math.random() * dataPesertaGrandprize.length);
                $(`#kode-acak`).text(dataPesertaGrandprize[randomIndex].nomor_undian);
                $(`input[name=undian_id]`).val(dataPesertaGrandprize[randomIndex].id);
            }, 100);
        }

        function onStop() {
            clearInterval(shuffleData)
            $.ajax({
                type: "POST",
                url: route('peserta-grandprice.detail'),
                data: {
                    _token: '{{ csrf_token() }}',
                    id: $('input[name=undian_id]').val()
                },
                beforeSend: function(res) {
                    $('#button-acak-off').show()
                    $('#button-acak-on').hide()
                    $('input[name="undian_id"]').val('')
                },
                success: function(res) {
                    $('#button-acak-off').show()
                    $('#button-acak-on').hide()
                    $('#kode-acak').text(res.peserta.nomor_undian)
                    $('#noreg-reward').text(res.peserta.nomor_undian)
                    $('#nama-reward').text(res.peserta.nama_peserta)
                    $('input[name="undian_id"]').val(res.peserta.id)
                }
            });
        }

        function onRefresh() {
            window.location.reload()
        }

        function onSubmit() {
            let undian_id = $('input[name="undian_id"]').val()
            if (undian_id != '') {
                let data = {
                    _token: '{{ csrf_token() }}',
                    undian_id: undian_id
                }
                $.ajax({
                    type: "POST",
                    url: route('pemenang-undian-grandprice.store'),
                    data: data,
                    error: function(res) {
                        alert('gagal simpan')
                    },
                    success: function(res) {
                        $('input[name="undian_id"]').val('')
                        loadTableUndianGrandprice()
                    }
                }).done((response) => {
                    const pemenang = $('#nama-reward').text()
                    Swal.fire({
                        icon: 'success',
                        title: 'Selamat Atas Pemenang',
                        html: `${pemenang}`,
                        showConfirmButton: false,
                        timer: 1500
                    })
                });
            }
        }

        loadTableUndianGrandprice()

        function loadTableUndianGrandprice() {
            $.ajax({
                type: "POST",
                url: route('pemenang-undian-grandprice'),
                data: {
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function(res) {
                    $('#table-list-peserta').html('')
                },
                error: function(res) {
                    alert('error')
                },
                success: function(res) {
                    res.undiangrandprice.forEach(value => {
                        $('#table-list-peserta').append(
                            '<tr>' +
                            '<td class="trow">' +
                            '<span class="nomor-undian">' + value.undian_grandprice.nomor_undian +
                            '</span> <br>' +
                            '<span class="nama-peserta">' + value.undian_grandprice.nama_peserta +
                            '</span>' +
                            '</td>' +
                            '</tr>'
                        )
                    });
                }
            });
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === '1') {
                onShuffle();
            } else if (event.key === '2') {
                onRefresh();
            } else if (event.key === ' ') {
                onStop();
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === '4') {
                onSubmit();
            }
        });
    </script>
@endpush
