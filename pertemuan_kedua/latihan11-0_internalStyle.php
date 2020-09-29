<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>internal style </title>
    <style type="text/css">
    p {
        color: blue;
        font-size: 20px;
    }

    /* style untuk class menggunakan titik*/
    .klas {
        display: block;
        margin: 20 auto;
        color: red;
    }

    /* style untuk id menggunakan tanda pagar*/
    #button-go,
    #button-back {
        border: solid 10px black;
    }
    </style>
</head>

<body>
    <div class="klas"> Penggunaan CSS Internal </div>
    <p> Manfaat internal CSS:

        Perubahan hanya terjadi pada 1 halaman,
        Class dan ID bisa digunakan oleh internal stylesheet,
        Tidak perlu meng-upload beberapa file karena HTML dan CSS bisa digunakan di file yang sama.</p>
    <p>
        Kekurangan menggunakan Internal CSS:

        Meningkatkan waktu akses website,
        Perubahan hanya terjadi pada 1 halaman – tidak efisien bila Anda ingin menggunakan CSS yang sama pada beberapa
        file.

    </p>

    <input type="button" value="go" id="button-go"> go <br>
    <input type="button" value="back" id="button-back"> back <br>

</body>

</html>