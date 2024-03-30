<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gadiza Food</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            .container {
  margin-bottom: 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box;
}
.container-1 {
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  background: #D9CFC1;
  position: relative;
  margin-bottom: 26px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 51px 0 56px 60px;
  width: 1440px;
  box-sizing: border-box;
}
.desktop-keranjang {
  background: #D9CFC1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  padding-bottom: 74px;
  width: 1440px;
  box-sizing: border-box;
}
.arrow-1 {
  background: #000000;
  margin: 33px 0 6px 0;
  width: 30px;
  height: 3px;
}
.konfirmasi-orderan {
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 36px;
  color: #000000;
}
.dikirim-ke {
  margin-right: 17.5px;
  width: 182.5px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 400;
  font-size: 30px;
  color: #000000;
}
.jl-pandanaran-ii-no-12-mugassari-kec-semarang-selatan-kota-semarang {
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 400;
  font-size: 30px;
  color: #000000;
}
.alamat {
  background: #FFFFFF;
  margin-bottom: 49px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 20.5px 0 29.5px 75.5px;
  width: 1440px;
  box-sizing: border-box;
}
.menu-3 {
  border-radius: 10px;
  border: 1px solid #000000;
  background: #FFFFFF;
  position: relative;
  margin: 0 123px 25px 123px;
  width: 1194px;
  height: 163px;
}
.rectangle-16 {
  border-radius: 10px 0 0 10px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/8jCXDEEAGgUGj2xwewBDpG/assets/images/162f452698bcd730772659ffdef7913fa009e91b?Expires=1712404251&KeyName=fn12-cdn&Signature=enRW_5vUSd3trbeEfsETxygLT-A=') 50% / cover no-repeat;
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 260px;
  height: 163px;
}
.picnic-roll {
  position: absolute;
  left: 297px;
  top: 31px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 32px;
  color: #000000;
}
.000 {
  position: absolute;
  left: 297px;
  bottom: 54px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 400;
  font-size: 24px;
  color: #000000;
}
.vector {
  position: absolute;
  top: 54px;
  right: 288.1px;
  width: 45px;
  height: 45px;
}
.2 {
  position: absolute;
  top: 46px;
  right: 208px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 36px;
  color: #000000;
}
.vector-2 {
  position: absolute;
  top: 54px;
  right: 101.1px;
  width: 45px;
  height: 45px;
}
.menu-4 {
  border-radius: 10px;
  border: 1px solid #000000;
  background: #FFFFFF;
  position: relative;
  margin: 0 123px 49px 123px;
  width: 1194px;
  height: 163px;
}
.rectangle-164 {
  border-radius: 10px 0 0 10px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/8jCXDEEAGgUGj2xwewBDpG/assets/images/5e93e81cc56e906aed8aada2051441a61ba54b09?Expires=1712404251&KeyName=fn12-cdn&Signature=efz1hCJy9nJ9yflssyY57lZhy9U=') 50% / cover no-repeat;
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 260px;
  height: 163px;
}
.puding-sedot {
  position: absolute;
  left: 297px;
  top: 31px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 32px;
  color: #000000;
}
.0005 {
  position: absolute;
  left: 297px;
  bottom: 54px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 400;
  font-size: 24px;
  color: #000000;
}
.vector-6 {
  position: absolute;
  top: 54px;
  right: 288.1px;
  width: 45px;
  height: 45px;
}
.5 {
  position: absolute;
  top: 46px;
  right: 208px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 36px;
  color: #000000;
}
.vector-7 {
  position: absolute;
  top: 54px;
  right: 101.1px;
  width: 45px;
  height: 45px;
}
.ringkasan-pesanan {
  margin-bottom: 49px;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 700;
  font-size: 32px;
  color: #000000;
}
.ongkir {
  margin-right: 17px;
  width: 276.9px;
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 400;
  font-size: 26px;
  color: #000000;
}
.subtotal {
  margin-right: 17px;
  width: 277.9px;
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 400;
  font-size: 26px;
  color: #000000;
}
.rp-11000 {
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 400;
  font-size: 26px;
  color: #000000;
}
.rp-60000 {
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 400;
  font-size: 26px;
  color: #000000;
}
.total {
  margin-right: 18px;
  width: 278.2px;
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 700;
  font-size: 28px;
  color: #000000;
}
.rp-71000 {
  margin-top: 5px;
  display: inline-block;
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 400;
  font-size: 24px;
  color: #000000;
}
.summary {
  border-radius: 5px;
  background: #FFFFFF;
  position: relative;
  margin-bottom: 15px;
  display: flex;
  flex-direction: column;
  padding: 23px 35.2px 30px 22.6px;
  width: fit-content;
  box-sizing: border-box;
}
.order {
  overflow-wrap: break-word;
  font-family: 'Hahmlet';
  font-weight: 600;
  font-size: 24px;
  color: #FFFFFF;
}
.frame-20 {
  border-radius: 5px;
  background: #BA3F1D;
  display: flex;
  flex-direction: row;
  justify-content: center;
  padding: 10px 0;
  width: 486px;
  box-sizing: border-box;
}
.pembayaran {
  margin-right: 18px;
  width: 295.9px;
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 700;
  font-size: 28px;
  color: #000000;
}
.dana {
  margin: 4px 0 1px 0;
  display: inline-block;
  overflow-wrap: break-word;
  font-family: 'Caudex';
  font-weight: 400;
  font-size: 24px;
  color: #000000;
}
.fast-pizza-delivery {
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/8jCXDEEAGgUGj2xwewBDpG/assets/images/573cd879a9c245678a99090f337a60f68db85a8b?Expires=1712404251&KeyName=fn12-cdn&Signature=78sGnOW2O7pJ6TXXvK3PiGIKoVs=') 50% / contain no-repeat;
  margin: 35px 133px 0 0;
  width: 534px;
  height: 454px;
}
.container-8 {
  margin: 0 1px 60px 11.7px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 415.5px;
  box-sizing: border-box;
}
.container-9 {
  margin: 0 0 21px 11.7px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 416.5px;
  box-sizing: border-box;
}
.container-10 {
  margin: 0 11.9px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-self: flex-start;
  width: 389.1px;
  box-sizing: border-box;
}
.container-11 {
  margin: 0 8.2px 15px 11.7px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 408.4px;
  box-sizing: border-box;
}
.container-12 {
  margin: 0 134px;
  display: flex;
  flex-direction: row;
  width: fit-content;
  box-sizing: border-box;
}
        </style>
    </head>
    <body>

    <div class="desktop-keranjang">
  <div class="container-1">
    <div class="arrow-1">
    </div>
    <span class="konfirmasi-orderan">
      Konfirmasi Orderan
    </span>
  </div>
  <div class="alamat">
    <span class="dikirim-ke">
      Dikirim ke : 
    </span>
    <span class="jl-pandanaran-ii-no-12-mugassari-kec-semarang-selatan-kota-semarang">
      Jl. Pandanaran II no. 12, Mugassari, Kec. Semarang Selatan, Kota Semarang
    </span>
  </div>
  <div class="menu-3">
    <div class="rectangle-16">
    </div>
    <span class="picnic-roll">
      Picnic Roll
    </span>
    <span class="000">
      15.000
    </span>
    <img class="vector" />
    <span class="2">
      2
    </span>
    <img class="vector-2" />
  </div>
  <div class="menu-4">
    <div class="rectangle-164">
    </div>
    <span class="puding-sedot">
      Puding Sedot
    </span>
    <span class="0005">
      6.000
    </span>
    <img class="vector-6" />
    <span class="5">
      5
    </span>
    <img class="vector-7" />
  </div>
  <div class="container-12">
    <div class="fast-pizza-delivery">
    </div>
    <div class="container">
      <div class="summary">
        <div class="ringkasan-pesanan">
          Ringkasan Pesanan
        </div>
        <div class="container-9">
          <span class="subtotal">
            Subtotal
          </span>
          <span class="rp-60000">
            Rp. 60.000
          </span>
        </div>
        <div class="container-8">
          <span class="ongkir">
            Ongkir
          </span>
          <span class="rp-11000">
            Rp. 11.000
          </span>
        </div>
        <div class="container-11">
          <span class="total">
            Total
          </span>
          <div class="rp-71000">
            Rp. 71.000
          </div>
        </div>
        <div class="container-10">
          <span class="pembayaran">
            Pembayaran
          </span>
          <div class="dana">
            DANA
          </div>
        </div>
      </div>
      <div class="frame-20">
        <span class="order">
          ORDER
        </span>
      </div>
    </div>
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
