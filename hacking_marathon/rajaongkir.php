<?php
    $api_key = "d74c1ef67db1b3a7f905ed416c7d88c5";
    function hitung_ongkir($kota_asal, $kota_tujuan, $kurir, $berat, $api_key){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "origin=".$kota_asal."&destination=".$kota_tujuan."&weight=".$berat."&courier=".$kurir,
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key:d74c1ef67db1b3a7f905ed416c7d88c5"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
       
        if ($err) {
            $data['result'] = $err;
        } else {
            $result = json_decode($response, true);
            if ($result['rajaongkir']['status']['code'] == 200){
                $data['status'] = true;
                $data['result'] = $result['rajaongkir']['results'][0];
            } else {
                $data['result'] = $result['rajaongkir']['status']['description'];
            }
        }
        return $data;
    }
?>  

        <form method="GET">
            Kota Asal Pengiriman<br/>
            <select name="kota_asal">
                <?php
                $koneksi = new mysqli("localhost","root","","rajaongkir");
                $ambil = $koneksi->query("SELECT * FROM tb_ro_cities");
                    while ($obj = $ambil->fetch_object()) {
                        echo "<option value='".$obj->city_id."'>".$obj->city_name."</option>";
                    }
                ?>
            </select>
            <br/><br/>
            Kota Tujuan Pengiriman<br/>
            <select name="kota_tujuan"><?php
                $koneksi = new mysqli("localhost","root","","rajaongkir");
                $ambil = $koneksi->query("SELECT * FROM tb_ro_cities");
                    while ($obj = $ambil->fetch_object()) {
                        echo "<option value='".$obj->city_id."'>".$obj->city_name."</option>";
                    }
                ?>
            </select>
            </select>
            <br/><br/>
            Kurir<br/>
            <select name="kurir">
                <option value="jne">JNE</option>
                <option value="pos">POS Indonesia</option>
                <option value="tiki">TIKI</option>
            </select>
            <br/><br/>
            Berat<br/>
            <input type=text name="berat" value=500> gram
            <br/><br/>
            <button type="submit">CEK Ongkir</button>
        
        </form>
        <script src="jquery-3.2.1.min.js"></script>
        <script src="jquery.autocomplete.min.js"></script>
<?php      
        if (isset($_GET['kota_asal'])){
            $kota_asal = $_GET['kota_asal'];
            $kota_tujuan = $_GET['kota_tujuan'];
            $kurir = $_GET['kurir'];
            $berat = $_GET['berat'];
            $ongkir = hitung_ongkir($kota_asal,$kota_tujuan,$kurir,$berat,$api_key);
            
            echo "<pre>";
            print_r($ongkir['result']);
            echo "</pre>";   
        }
?>