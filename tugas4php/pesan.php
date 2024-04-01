<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </style>
</head>

<body>
    <section class="py-5">
        <div class="container">
            <h2 style="text-align: center;">Pemesanan Komik</h2>
            <hr>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="novel">Pilih Novel:</label>
                    <select class="form-control" name="novel" id="novel">
                        <option selected>-- Pilih Komik --</option>
                        <option selected>One Piece Vol 1</option>
                        <option selected>One Piece Vol 20</option>
                        <option selected>One Piece Vol 97</option>
                        <option selected>One Piece Vol 47</option>
                        <option selected>One Piece Vol 101</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Komik:</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" value="1">
                </div>
                <br>
                <input type="submit" name="beli" value="Beli" class="btn btn-dark">
            </form>
        </div>
    </section>
</body>