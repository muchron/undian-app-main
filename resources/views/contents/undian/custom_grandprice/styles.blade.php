@push('styleCss')
    <style>
        #heading{
            width: 80%;
            height: 70%;
            margin: 0 45px;
            border-radius: 5px;
        }
        #kolom{
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 5vh;
        }
        #tengah{
            width: 70%;
        }
        #kanan{
            width: 25%;
            border: 2px  rgb(229, 187, 53) solid;
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            max-height: 100%;
        }
        #kode-acak{
            background-color: black;
            color: white;
            width: 100%;
            border-radius: 10px;
            padding: 5px;
            font-size: 70px;
            text-align: center;
            font-weight: bold;
        }
        #reward, #text-congratulation{
            font-size: 25px;
            font-weight: bold;
            color: rgb(197, 128, 0);
        }
        .text-reward{
            font-size: 25px;
        }
        .text-senilai{
            font-size: 16px;
            font-weight: bold;
        }
        #table-list-peserta{
            width: 100%;
        }
        .trow{
            background-color: rgb(230, 235, 179);
            padding: 10px;
            border: 1px solid white;
            border-radius: 5px;
        }
        .trow:hover{
            background-color:rgb(229, 187, 53);
            color: white;
        }
        /* font-size pemenang undian */
        .nomor-undian{
            font-size: 25px;
            font-weight: bold;
        }
        /* font-size pemenang undian */
        .nama-peserta{
            font-size: 25px;
            font-weight: 500;
        }
        #button-menu{
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #button-acak-off, #button-acak-on{
            margin-top: 10px;
            width: 150px;
            height: 50px;
            text-align: center;
            background-color: rgb(45, 110, 120);
            color: white;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #button-acak-off:hover, #button-acak-on:hover{
            background-color: rgb(1, 49, 1);
        }
        #button-ulang{
            margin-top: 10px;
            width: 150px;
            height: 50px;
            text-align: center;
            background-color: rgba(129, 120, 120, 0.767);
            color: white;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #button-ulang:hover{
            background-color: rgba(44, 35, 35, 0.767);
        }
        #button-berhenti{
            margin-top: 10px;
            width: 150px;
            height: 50px;
            text-align: center;
            background-color: rgb(194, 6, 6);
            color: white;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #button-berhenti:hover{
            background-color: rgb(117, 3, 3);
        }
        #peserta-reward{
            padding: 10px;
            margin-top: 25px;
            width: 100%;
            height: auto;
            border: 2px solid rgb(229, 187, 53);
            border-radius: 5px;
            text-align: center;
        }
        #noreg-reward{
            font-size: 50px;
            font-weight: bold;
        }
        #nama-reward{
            font-size: 50px;
            font-weight: bold;
        }
        #button-menu-save{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #button-simpan{
            margin-top: 50px;
            width: 100%;
            height: 50px;
            text-align: center;
            background-color: rgb(299, 187, 53);
            color: black;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #button-simpan:hover{
            background-color: rgb(136, 91, 8);
            color: white;
        }
        #datetimes-content{
            padding: 10px;
            margin-top: 50px;
            width: 100%;
            height: auto;
            border: 2px solid rgb(229, 187, 53);
            border-radius: 5px;
            text-align: center;
        }
        #tanggal{
            font-size: 24px;
            font-weight: 600;
            color: black;
        }
        #waktu{
            font-size: 28px;
            font-weight: bold;
            color: rgb(45, 110, 120);
        }
    </style>
@endpush
