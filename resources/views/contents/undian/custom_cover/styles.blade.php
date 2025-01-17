@push('styleCss')
    <style>
        #heading {
            /* border: 2px orange solid; */
            width: 80%;
            height: 100%;
            margin: 0 45px;
            border-radius: 5px;
            margin-top: 30px;
        }

        #text-heading {
            font-size: 36px;
            color: white;
            text-align: center;
            font-weight: bold;
            padding-left: 300px;
            padding-right: 10px;
            padding-top: 25px;
        }

        #kolom {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 5vh;
        }

        #kiri {
            width: 24%;
            border: 2px rgb(229, 187, 53) solid;
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            max-height: 650px;
        }

        #tengah {
            width: 45%;
            border: 2px rgb(229, 187, 53) solid;
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            max-height: 800px;
        }

        #kanan {
            width: 24%;
            border: 2px rgb(229, 187, 53) solid;
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            max-height: 350px;
        }

        #kode-acak {
            background-color: black;
            color: rgb(255, 162, 0);
            width: 100%;
            border-radius: 10px;
            padding: 5px;
            font-size: 24px;
            text-align: center;
            font-weight: bold;
        }

        #nama-hadiah,
        #text-congratulation {
            font-size: 32px;
            font-weight: bold;
            color: rgb(197, 128, 0);
        }

        .text-reward {
            font-size: 14px;
        }

        .text-senilai {
            font-size: 16px;
            font-weight: bold;
        }

        #table-list-peserta {
            width: 100%;
        }

        .trow {
            background-color: rgb(0, 255, 140);
            padding: 10px;
            border: 1px solid white;
            border-radius: 5px;
        }

        .trow:hover {
            background-color: rgb(136, 91, 8);
            color: white;
        }

        .nomor-undian {
            font-size: 16px;
            font-weight: bold;
        }

        .nama-peserta {
            font-size: 15px;
            font-weight: 500;
        }

        .slideshow-container {
            position: relative;
            max-width: 300px;
            /* Sesuaikan sesuai kebutuhan */
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .fade {
            animation: fade 1.5s ease-in-out;
        }

        @keyframes fade {
            from {
                opacity: 0.4;
            }

            to {
                opacity: 1;
            }
        }

        .mySlides,
        .mySlides2 {
            display: none;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        #button-menu {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #button-acak-off,
        #button-acak-on {
            margin-top: 10px;
            width: 150px;
            height: 30px;
            text-align: center;
            background-color: rgb(17, 117, 17);
            color: white;
            padding: 2px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #button-acak-off:hover,
        #button-acak-on:hover {
            background-color: rgb(1, 49, 1);
        }

        #button-ulang {
            margin-top: 10px;
            width: 150px;
            height: 30px;
            text-align: center;
            background-color: rgba(95, 79, 79, 0.767);
            color: white;
            padding: 2px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #button-ulang:hover {
            background-color: rgba(44, 35, 35, 0.767);
        }

        #button-berhenti {
            margin-top: 10px;
            width: 150px;
            height: 30px;
            text-align: center;
            background-color: rgb(194, 6, 6);
            color: white;
            padding: 2px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #button-berhenti:hover {
            background-color: rgb(117, 3, 3);
        }

        #peserta-reward {
            padding: 10px;
            margin-top: 25px;
            width: 100%;
            height: auto;
            border: 2px solid rgb(0, 255, 140);
            border-radius: 5px;
            text-align: center;
        }

        #noreg-reward {
            font-size: 24px;
            font-weight: bold;
        }

        #nama-reward {
            font-size: 20px;
            font-weight: bold;
        }

        #button-menu-save {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #button-simpan {
            margin-top: 50px;
            width: 150px;
            height: 30px;
            text-align: center;
            background-color: rgb(255, 153, 0);
            color: black;
            padding: 2px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #button-simpan:hover {
            background-color: rgb(136, 91, 8);
            color: white;
        }

        #datetimes-content {
            padding: 10px;
            margin-top: 50px;
            width: 100%;
            height: auto;
            border: 2px solid rgb(0, 255, 140);
            border-radius: 5px;
            text-align: center;
        }

        #tanggal {
            font-size: 24px;
            font-weight: 600;
            color: red;
        }

        #waktu {
            font-size: 28px;
            font-weight: bold;
            color: green;
        }
    </style>
@endpush
