<?php
include('header.php');?>

<div class="container-fluid">
    <header>
        <H3> DIGITAL TALENT | FORM DENGAN BOOTSTRAP </H3>
    </header>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1"> Nama anda </label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nama anda">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Laki-Laki</option>
                <option>Perempuan</option>

            </select>
        </div>
    </form>
    <button type="button" class="btn btn-primary">Simpan</button>

</div>

<?php
include('footer.php')
?>