<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $.each( $('*'), function() { 
        if( $(this).width() > $('body').width()) {
            console.log("Wide Element: ", $(this), "Width: ", $(this).width()); 
        } 
    });
</script>
<script>
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4) {
            var obj = JSON.parse(this.responseText);
            console.log(obj);
            var s = obj.bayi.harga;
            var x = s.split('.');
            document.getElementById('hargabayi').innerHTML = x[0];
            document.getElementById('komabayi').innerHTML = "." + x[1] + " ";
            document.getElementById('hargacoretbayi').innerHTML = "Rp " + obj.bayi.hargacoret;
            document.getElementById('penggunabayi').innerHTML = obj.bayi.pengguna;
            s = obj.pelajar.harga;
            x = s.split('.');
            document.getElementById('hargapelajar').innerHTML = x[0];
            document.getElementById('komapelajar').innerHTML = "." + x[1] + " ";
            document.getElementById('hargacoretpelajar').innerHTML = "Rp " + obj.pelajar.hargacoret;
            document.getElementById('penggunapelajar').innerHTML = obj.pelajar.pengguna;
            s = obj.personal.harga;
            x = s.split('.');
            document.getElementById('hargapersonal').innerHTML = x[0];
            document.getElementById('komapersonal').innerHTML = "." + x[1] + " ";
            document.getElementById('hargacoretpersonal').innerHTML = "Rp " + obj.personal.hargacoret;
            document.getElementById('penggunapersonal').innerHTML = obj.personal.pengguna;
            s = obj.bisnis.harga;
            x = s.split('.');
            document.getElementById('hargabisnis').innerHTML = x[0];
            document.getElementById('komabisnis').innerHTML = "." + x[1] + " ";
            document.getElementById('hargacoretbisnis').innerHTML = "Rp " + obj.bisnis.hargacoret;
            document.getElementById('penggunabisnis').innerHTML = obj.bisnis.pengguna;
            document.getElementById('hargapersonal').style.color = "#ffffff";
        }
    }
    xhr.withCredentials = true;
    xhr.Credentials = true;
    xhr.open("GET", "<?php echo base_url('assets/json/'); ?>harga.json", true);
    xhr.send();
</script>