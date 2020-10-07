</div>
</div>

<!-- jquery
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/bootstrap.min.js"></script>
<!-- meanmenu JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/jquery.meanmenu.js"></script>
<!-- mCustomScrollbar JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sticky JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/jquery.sticky.js"></script>
<!-- scrollUp JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/counterup/jquery.counterup.min.js"></script>
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/counterup/waypoints.min.js"></script>
<!-- modal JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/modal-active.js"></script>
<!-- icheck JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/icheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/icheck/icheck-active.js"></script>
<!-- main JS
		============================================ -->
<script src="<?php echo base_url() ?>assets/Template_Admin/base/js/main.js"></script>
</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
    // Provinsi
    $.ajax({
        url: "http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
        method: "GET",
        async: false,
        dataType: 'json',
        success: function(data) {
            var html = '';
            html = '<option value=\"' + '\">--- Pilih Provinsi ---</option>';
            var i;
            for (i = 0; i < data.length; i++) {
                html += '<option value=\"' + data[i].id + '\">' + data[i].name +
                    '</option>';
            }
            $('#provinsi').html(html);
            console.log(data);
        }
    });

    //Kabupaten/kota
    $('#provinsi').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "http://www.emsifa.com/api-wilayah-indonesia/api/regencies/" + id + ".json",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var htmlKecamatan = '';
                var htmlKelurahan = '';
                html = '<option value=\"' + '\">--- Pilih Kabupaten/Kota ---</option>';
                htmlKecamatan = '<option value=\"' + '\">--- Pilih Kecamatan ---</option>';
                htmlKelurahan = '<option value=\"' + '\">--- Pilih Kelurahan ---</option>';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=\"' + data[i].id + '\">' + data[i]
                        .name + '</option>';
                }
                $('#kota').html(html);
                $('#kecamatan').html(htmlKecamatan);
                $('#kelurahan').html(htmlKelurahan);
            }
        });
    });


    //Kecamatan
    $('#kota').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "http://www.emsifa.com/api-wilayah-indonesia/api/districts/" + id + ".json",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                html = '<option value=\"' + '\">--- Pilih Kecamatan ---</option>';
                htmlKelurahan = '<option value=\"' + '\">--- Pilih Kelurahan ---</option>';
                for (i = 0; i < data.length; i++) {
                    html += '<option value=\"' + data[i].id + '\">' + data[i]
                        .name + '</option>';
                }
                $('#kecamatan').html(html);
                $('#kelurahan').html(htmlKelurahan);
            }
        });
    });

    //Kecamatan
    $('#kecamatan').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "http://www.emsifa.com/api-wilayah-indonesia/api/villages/" + id + ".json",
            method: "GET",
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                html = '<option value=\"' + '\">--- Pilih Kelurahan ---</option>';
                for (i = 0; i < data.length; i++) {
                    html += '<option value=\"' + data[i].id + '\">' + data[i]
                        .name + '</option>';
                }
                $('#kelurahan').html(html);
            }
        });
    });
});
</script>