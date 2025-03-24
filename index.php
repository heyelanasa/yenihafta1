<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

    
    <h1>Proje Kayıt Ekranı</h1>
<form action="/action_page.php">
  <label for="fname">Proje Adı:</label><br>
  <input type="text" id="pisim" name="pisim" placeholder="Proje İsmi"> <br>
  <br>
  <input type="reset" value="Sıfırla">
</form>
<br><br>
<fieldset>

<form action="/action_page.php">
  <legend><p><label for="text">Proje Özeti:</label></p></legend>
  <textarea id="text" name="text" rows="4" cols="50">atessddsfdsfdsfdsfsdfdsfdsfdsfdsfds</textarea> 
  <br>

</form>
</fieldset>
<br><br>

<form>
  <label for="fname">isim</label><br>
  <input type="text" id="fname" name="fname" size="50"><br>
  <label for="pin">PIN:</label><br>
  <input type="text" id="pin" name="pin" maxlength="4" size="4"autocomplete="on">
</form><br><br>


<fieldset>
<legend><h2>Proje Tipi</h2></legend>
<form>
  <input type="radio" id="ürün gelistirme" name="proje tipi" value="Ürün Geliştirme" readonly disabled size="50">
  <label for="ürün gelistirme">Ürün Geliştirme</label><br>
  <input type="radio" id="yenileme" name="proje tipi" value="Yenileme">
  <label for="yenileme">Yenileme</label><br>
  <input type="radio" id="Teknoloji" name="proje tipi" value="Teknoloji Trafiği">
  <label for="Teknoloji">Teknoloji Trafiği</label>
</form>
</fieldset>
<br><br><br>


<fieldset>
<legend><h2>Proje İlgi Alanları</h2></legend>
<form>
  <input type="checkbox" id="Matematik" name="Matematik" value="Matematik" size="50">
  <label for="Matematik"> Matematik</label><br>
  <input type="checkbox" id="Saat" name="Saat" value="Saat">
  <label for="Saat"> Saat</label><br>
  <input type="checkbox" id="Tarih" name="Tarih" value="Tarih">
  <label for="Tarih"> Tarih</label>
</form>
<form>
<input type="checkbox" id="Yapay Zeka" name="Yapay Zeka" value="Yapay Zeka">
<label for="Yapay Zeka"> Yapay Zeka</label><br>
<input type="checkbox" id="Saglik" name="Saglik" value="Saglik">
<label for="Saglik"> Sağlık</label><br>
<input type="checkbox" id="Teknoloji" name="Teknoloji" value="Teknoloji">
<label for="Teknoloji"> Teknoloji</label><br><br>


<form>
  <label for="tarih">Tarih:</label>
  <input type="date" id="tarih" name="tarih">
</form>
<br><br>
<input type="submit" value="Tamamla"> <input type="reset" value="Sıfırla">
<br><br>

</form>
</fieldset>
















</center>
</body>
</html>