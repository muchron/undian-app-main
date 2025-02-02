@push('customScripts')
    <script>
        let getDataToShuffle = [];

        window.addEventListener('beforeunload', () => {
            let timerInterval;
            Swal.fire({
                title: "Mohon Tunggu",
                html: "Sedang memuat data",
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            })
        })

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
            // Mengambil data peserta undian saat halaman di load pertamakali / refresh
            getAllDataMember()
        });

        // Menambil data peserta undian
        function getAllDataMember() {
            $.ajax({
                url: route('peserta-undian-lima'),
                async: false,
                success: function(res) {
                    return getDataToShuffle = res.peserta
                }
            })
        }

        let shuffleData;

        function onShuffle() {

            shuffleData = setInterval(() => {
                const randomIndices = [];
                const peserta = [];
                let number = 1;
                console.clear()
                while (randomIndices.length < 5) {
                    const randomIndex = Math.floor(Math.random() * getDataToShuffle.length);
                    if (!randomIndices.includes(randomIndex)) {
                        randomIndices.push(randomIndex);
                    }
                    $(`#kode-acak-${number}`).text(getDataToShuffle[randomIndex].nomor_undian);
                    $(`input[name=undian_id_${number}`).val(getDataToShuffle[randomIndex].id);
                    number++;
                }
            }, 100)

        }

        function onStop() {

            clearInterval(shuffleData);
            let resultOfShuffle = [];
            for (let i = 1; i <= 5; i++) {
                const id = $(`input[name=undian_id_${i}`).val();
                resultOfShuffle.push(id);
            }

            console.log(resultOfShuffle);

            $.ajax({
                url: route('peserta-undian-lima.detail'),
                data: {
                    data: resultOfShuffle
                }
            }).done((response) => {
                response.peserta.forEach((peserta, index) => {
                    $(`#kode-acak-${index + 1}`).text(peserta.nomor_undian);
                    $(`#noreg-reward-${index + 1}`).text(peserta.nomor_undian);
                    $(`#nama-reward-${index + 1}`).text(peserta.nama_peserta);
                    $(`input[name="undian_id_${index + 1}"]`).val(peserta.id);
                });
            })

        }


        function onRefresh() {
            window.location.reload()
        }

        function onSubmit() {
            // Collect all 5 winners' data
            let winners = [];

            let people = [];

            for (let i = 1; i <= 5; i++) {
                let undian_id = $(`input[name="undian_id_${i}"]`).val();
                let nama = $(`#nama-reward-${i}`).html();

                if (undian_id && nama) {
                    winners.push(undian_id);
                    people.push(nama);
                }
            }

            if (winners.length > 0) {
                let data = {
                    _token: '{{ csrf_token() }}',
                    undian_ids: winners
                }
                $.ajax({
                    type: "POST",
                    url: route('pemenang-undian-umum-lima.store'),
                    data: data,
                    error: function(res) {
                        alert('Gagal menyimpan data pemenang')
                    },
                    success: function(res) {
                        // alert('Berhasil menyimpan data pemenang')
                        // Clear all input fields
                        for (let i = 1; i <= 5; i++) {
                            $(`input[name="undian_id_${i}"]`).val('')
                        }
                        loadTableUndianUmumLima()
                    }
                }).done((response) => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Selamat Atas Pemenang',
                        html: `${people.map((val, index) => {
                            return `${val}`
                        }).join(', ')}`,
                        showConfirmButton: false,
                        timer: 1500
                    })
                });
            } else {
                alert('Tidak ada data pemenang yang dipilih')
            }
        }

        loadTableUndianUmumLima()

        function loadTableUndianUmumLima() {
            $.ajax({
                type: "POST",
                url: route('pemenang-undian-umum-lima'),
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

                    console.log('response ===', res);

                    res.undianumumlima.forEach(val => { // Limit to 5 participants

                        $('#table-list-peserta').append(
                            '<tr>' +
                            '<td class="trow">' +
                            '<span class="nomor-undian">' + val.undian_umum_lima?.nomor_undian +
                            '</span> <br>' +
                            '<span class="nama-peserta">' + val.undian_umum_lima?.nama_peserta +
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
