<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script>

        function reset(){
            document.getElementById("formulir").reset();
        } 
        
        function tampilkan(){
            alert("Nama Lengkap : "+document.getElementById("name").value+"\n"
            +"Tempat Tanggal Lahir : "+document.getElementById("tempat").value+","+document.getElementById("tgl").value+"/"+document.getElementById("bln").value+"/"+document.getElementById("thn").value)+"\n"
            +"Alamat : "+document.getElementById("alamat").value+"\n"
            +"No Telp/HP : "+document.getElementById("hp").value+"\n"
            +"Jenis Kelamin : "+document.getElementById("kelamin1").checked?document.getElementById("kelamin1").value:document.getElementById("kelamin2").value+"\n"
            +"Agama : "+document.getElementById("agama").value+"\n"
            +"Hobi : "+document.getElementById("hobi1").value+" "+document.getElementById("hobi2").value+" "+document.getElementById("hobi3").value+" "+document.getElementById("hobi4").value
        }
        </script>
    </head>
    <body>
        <form id="formulir">
            <table>
                <tr><td><b>Form Data Diri</b></td></tr>
                <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input class="form-input" type="text" name="name" id="name" /></td>
                </tr>

                <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><input class="form-input" type="text" name="tempat" id="tempat"  />, <input type="number" id="tgl" />/<input type="number" id="bln" />/<input type="number" id="thn" /></td>
                </tr>

                <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea id="alamat"></textarea></td>
                </tr>

                <tr>
                <td>No. Telp/HP</td>
                <td>:</td>
                <td><input class="form-input" type="text" id="hp" /></td>
                </tr>

                <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <input type="radio" id="kelamin1" name="kelamin" value="Laki-Laki">
                <label for="html">Laki-laki</label>
                <input type="radio" id="kelamin2" name="kelamin" value="Perempuan">
                <label for="css">Perempuan</label><br>
                </td>
                </tr>

                <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                <select id="agama" name="agama">
                <option value="Islam">Islam</option>
                <option value="Keristen">Keristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Hindu">Budha</option>
                </select>
                </td>
                </tr>

                <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                <input type="checkbox" id="hobi1" name="hobi1" value="Baca Buku">
                <label for="hobi1">Baca Buku</label>
                <input type="checkbox" id="hobi2" name="hobi2" value="Olah Raga">
                <label for="hobi2">Olah Raga</label>
                <input type="checkbox" id="hobi3" name="hobi3" value="Main Game">
                <label for="hobi3">Main Game</label>
                <input type="checkbox" id="hobi4" name="hobi4" value="Hiking">
                <label for="hobi1">Hiking</label>
                </td>
                </tr>

                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                <button type="button" onclick="tampilkan()">Tampilkan</button>
                <button type="button" onclick="reset()">Reset</button>
                </td>
                </tr>
            </table>
        </form>
    </body>
</html>
