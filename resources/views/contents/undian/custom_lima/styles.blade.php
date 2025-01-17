@push('styleCss')
    <style>
        #heading{
            /* border: 2px orange solid; */
            width: 80%;
            height: 70%;
            margin: 0 45px;
            border-radius: 5px;
            margin-top: 50px;
        }
        #kolom{
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 10px;
        }
        #tengah{
            width: 70%;
        }
        #kanan{
            width: 25%;
            border: 2px rgb(229, 187, 53) solid;
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
            border: 2px solid rgb(229, 187, 53);
        }

        /* text selamat kepada pemenang */
        #reward, #text-congratulation{
            font-size: 25px;
            font-weight: bold;
            color: black;
        }
        .text-reward{
            font-size: 14px;
        }
        .text-senilai{
            font-size: 16px;
            font-weight: bold;
        }
        #table-list-peserta{
            width: 100%;
        }
        .trow{
            background-color: rgb(230, 239, 201);
            padding: 10px;
            border: 1px solid white;
            border-radius: 5px;
        }
        .trow:hover{
            background-color: rgb(229, 187, 53);
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
            /* background: linear-gradient(to right, rgb(17, 117, 17), rgb(199, 232, 89)); */
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
            background-color: rgba(122, 133, 133, 0.767);
            color: rgb(250, 252, 252);
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
            font-size: 36px;
        }
        #noreg-reward{
            font-size: 27px;
            font-weight: bold;
        }
        #nama-reward{
            font-size: 27px;
            font-weight: bold;
        }
        #button-menu-save{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #button-simpan{
            margin-top: 20px;
            width: 100%;
            height: 50px;
            text-align: center;
            background-color: rgb(229, 187, 53);
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
            padding: 1px;
            margin-top: 20px;
            width: 100%;
            height: auto;
            border: 2px solid orange;
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
