<!DOCTYPE html>
<html lang="en">
<head>
<style>
.container {
  margin-bottom: 55px;
  display: flex;
  flex-direction: row;
  column-gap: 80px;
  width: 100%;
  box-sizing: border-box;
}
.desktop-menu {
  background: #D9CFC1;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 32px 0 120px 0;
  width: 1440px;
  box-sizing: border-box;
  
}
.button {
  position: relative;
  margin: 17px 0 46px 0;
  width: 67px;
  height: 17px;
}
.frame-1 {
  margin: 26px 0 23px 0;
  display: flex;
  flex-direction: row;
  box-sizing: border-box;   
}
.beranda {
  margin-right: 30.3px;
  overflow-wrap: break-word;
  font-family: 'Frank Ruhl Libre';
  font-weight: 400;
  font-size: 24px;
  color: #000000;
}
.menu {
  margin-right: 30.1px;
  overflow-wrap: break-word;
  font-family: 'Frank Ruhl Libre';
  font-weight: 900;
  font-size: 24px;
  text-decoration-line: underline;
  color: #000000;
}
.tentang {
  overflow-wrap: break-word;
  font-family: 'Frank Ruhl Libre';
  font-weight: 400;
  font-size: 24px;
  color: #000000;
}
.frame-3 {
  display: flex;
  flex-direction: row;
  box-sizing: border-box;
}
.ellipse-1 {
  border-radius: 40px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/605a2fbc055a37e2caf29e9c0099747f244f17a0?Expires=1712286999&KeyName=fn12-cdn&Signature=wTG--nLR00-fFYCNXh454UbCmac=') 50% / cover no-repeat;
  margin-right: 22px;
  width: 80px;
  height: 80px;
}
.gadiza-food {
  margin: 17.5px 0;
  display: inline-block;
  overflow-wrap: break-word;
  font-family: 'Lobster';
  font-weight: 400;
  font-size: 36px;
  color: #000000;
}
.food-1 {
  border-radius: 20px;
  position: relative;
  width: 225px;
  height: 328px;
}
.rectangle-4 {
  border-radius: 10px;
  background: #FFFFFF;
  position: absolute;
  left: 50%;
  top: 0px;
  translate: -50% 0;
  width: 225px;
  height: 328px;
}
.puding-sedot {
  position: absolute;
  left: 18px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-6000 {
  position: absolute;
  left: 18px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-5 {
  width: 30px;
  height: 30px;
}
.rectangle-12 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/5e93e81cc56e906aed8aada2051441a61ba54b09?Expires=1712286999&KeyName=fn12-cdn&Signature=xxCGg2G2bEqUb5Hvgv57W1qyTIQ=') 50% / cover no-repeat;
  position: absolute;
  left: 10px;
  top: 21px;
  width: 202px;
  height: 168px;
}
.food-2 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.dimsum {
  position: absolute;
  left: 17px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-5000 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline-6 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-7 {
  width: 30px;
  height: 30px;
}
.rectangle-13 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/c460fa56a35148a99310f02c588b564d48fc2833?Expires=1712286999&KeyName=fn12-cdn&Signature=y_cF784pzdjL4uWR9V73kti27nA=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 17px;
  width: 191px;
  height: 168px;
}
.food-3 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-8 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-9 {
  width: 30px;
  height: 30px;
}
.rp-500010 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.macaroni-schotel {
  position: absolute;
  left: 20px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1111 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/33a0d4bee385f2af9546cc297b8fce016404c2bf?Expires=1712286999&KeyName=fn12-cdn&Signature=bclo92ZTd6LgT8nGKKawqNCkQb8=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 14px;
  width: 197px;
  height: 168px;
}
.food-4 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-12 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-13 {
  width: 30px;
  height: 30px;
}
.rp-15000 {
  position: absolute;
  left: 21px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.picinic-roll {
  position: absolute;
  left: 21px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1014 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/162f452698bcd730772659ffdef7913fa009e91b?Expires=1712286999&KeyName=fn12-cdn&Signature=i9DWXRe6Or23Ae3hpbYkjXcO0EI=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 13px;
  width: 199px;
  height: 168px;
}
.food-5 {
  border-radius: 20px;
  position: relative;
  width: 225px;
  height: 328px;
}
.rectangle-415 {
  border-radius: 10px;
  background: #FFFFFF;
  position: absolute;
  left: 50%;
  top: 0px;
  translate: -50% 0;
  width: 225px;
  height: 328px;
}
.croffle {
  position: absolute;
  left: 18px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-7000 {
  position: absolute;
  left: 18px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline-16 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-17 {
  width: 30px;
  height: 30px;
}
.rectangle-1218 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/7d39b865ea497d90a6bb69e95688255a0240178f?Expires=1712286999&KeyName=fn12-cdn&Signature=t0wC7IOp-NSU8unzhzFsr9_mSGA=') 50% / cover no-repeat;
  position: absolute;
  left: 10px;
  top: 21px;
  width: 202px;
  height: 168px;
}
.food-6 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.pastel {
  position: absolute;
  left: 17px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-500020 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline-21 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-22 {
  width: 30px;
  height: 30px;
}
.rectangle-1323 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/439e7fc0e44c7bd4b44427b5a8d349d322ebb6d4?Expires=1712286999&KeyName=fn12-cdn&Signature=DfOCOHmlWlNL5hWcm1VGB78RZfo=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 17px;
  width: 191px;
  height: 168px;
}
.food-7 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-25 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-26 {
  width: 30px;
  height: 30px;
}
.rp-700027 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.klappertaart {
  position: absolute;
  left: 20px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1128 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/c29d32e90d51b4e194787b240e9854ce38981573?Expires=1712286999&KeyName=fn12-cdn&Signature=ijjKJf43FlO45qhf6CclDZpasLI=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 14px;
  width: 197px;
  height: 168px;
}
.food-8 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-30 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-31 {
  width: 30px;
  height: 30px;
}
.rp-20000 {
  position: absolute;
  left: 21px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.puding-bunga {
  position: absolute;
  left: 21px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1032 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/75ca9fb639c091ecb434898a2fc0f005c3b9473f?Expires=1712286999&KeyName=fn12-cdn&Signature=cPuuDW74Ll0mky5WyyIvJhoogck=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 13px;
  width: 199px;
  height: 168px;
}
.food-9 {
  border-radius: 20px;
  position: relative;
  width: 225px;
  height: 328px;
}
.rectangle-433 {
  border-radius: 10px;
  background: #FFFFFF;
  position: absolute;
  left: 50%;
  top: 0px;
  translate: -50% 0;
  width: 225px;
  height: 328px;
}
.puding-sedot-34 {
  position: absolute;
  left: 18px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-600035 {
  position: absolute;
  left: 18px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline-36 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-37 {
  width: 30px;
  height: 30px;
}
.rectangle-1238 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/5e93e81cc56e906aed8aada2051441a61ba54b09?Expires=1712286999&KeyName=fn12-cdn&Signature=xxCGg2G2bEqUb5Hvgv57W1qyTIQ=') 50% / cover no-repeat;
  position: absolute;
  left: 10px;
  top: 21px;
  width: 202px;
  height: 168px;
}
.food-10 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.dimsum-40 {
  position: absolute;
  left: 17px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-500041 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline-42 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-43 {
  width: 30px;
  height: 30px;
}
.rectangle-1344 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/c460fa56a35148a99310f02c588b564d48fc2833?Expires=1712286999&KeyName=fn12-cdn&Signature=y_cF784pzdjL4uWR9V73kti27nA=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 17px;
  width: 191px;
  height: 168px;
}
.food-11 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-46 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-47 {
  width: 30px;
  height: 30px;
}
.rp-500048 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.macaroni-schotel-49 {
  position: absolute;
  left: 20px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1150 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/33a0d4bee385f2af9546cc297b8fce016404c2bf?Expires=1712286999&KeyName=fn12-cdn&Signature=bclo92ZTd6LgT8nGKKawqNCkQb8=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 14px;
  width: 197px;
  height: 168px;
}
.food-12 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-52 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-53 {
  width: 30px;
  height: 30px;
}
.rp-1500054 {
  position: absolute;
  left: 21px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.picinic-roll-55 {
  position: absolute;
  left: 21px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1056 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/162f452698bcd730772659ffdef7913fa009e91b?Expires=1712286999&KeyName=fn12-cdn&Signature=i9DWXRe6Or23Ae3hpbYkjXcO0EI=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 13px;
  width: 199px;
  height: 168px;
}
.food-13 {
  border-radius: 20px;
  position: relative;
  width: 225px;
  height: 328px;
}
.rectangle-457 {
  border-radius: 10px;
  background: #FFFFFF;
  position: absolute;
  left: 50%;
  top: 0px;
  translate: -50% 0;
  width: 225px;
  height: 328px;
}
.croffle-58 {
  position: absolute;
  left: 18px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-700059 {
  position: absolute;
  left: 18px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline-60 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-61 {
  width: 30px;
  height: 30px;
}
.rectangle-1262 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/7d39b865ea497d90a6bb69e95688255a0240178f?Expires=1712286999&KeyName=fn12-cdn&Signature=t0wC7IOp-NSU8unzhzFsr9_mSGA=') 50% / cover no-repeat;
  position: absolute;
  left: 10px;
  top: 21px;
  width: 202px;
  height: 168px;
}
.food-14 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.pastel-64 {
  position: absolute;
  left: 17px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rp-500065 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.mdicart-outline-66 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-67 {
  width: 30px;
  height: 30px;
}
.rectangle-1368 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/439e7fc0e44c7bd4b44427b5a8d349d322ebb6d4?Expires=1712286999&KeyName=fn12-cdn&Signature=DfOCOHmlWlNL5hWcm1VGB78RZfo=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 17px;
  width: 191px;
  height: 168px;
}
.food-15 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-70 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-71 {
  width: 30px;
  height: 30px;
}
.rp-700072 {
  position: absolute;
  left: 20px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.klappertaart-73 {
  position: absolute;
  left: 20px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1174 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/c29d32e90d51b4e194787b240e9854ce38981573?Expires=1712286999&KeyName=fn12-cdn&Signature=ijjKJf43FlO45qhf6CclDZpasLI=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 14px;
  width: 197px;
  height: 168px;
}
.food-16 {
  border-radius: 20px;
  background: #FFFFFF;
  position: relative;
  width: 225px;
  height: 328px;
}
.mdicart-outline-76 {
  position: absolute;
  left: 50%;
  bottom: 28px;
  translate: -50% 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
}
.vector-77 {
  width: 30px;
  height: 30px;
}
.rp-2000078 {
  position: absolute;
  left: 21px;
  bottom: 78px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 500;
  font-size: 20px;
  color: #000000;
}
.puding-bunga-79 {
  position: absolute;
  left: 21px;
  bottom: 105px;
  overflow-wrap: break-word;
  font-family: 'Be Vietnam', 'Roboto Condensed';
  font-weight: 700;
  font-size: 20px;
  color: #000000;
}
.rectangle-1080 {
  border-radius: 20px;
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/75ca9fb639c091ecb434898a2fc0f005c3b9473f?Expires=1712286999&KeyName=fn12-cdn&Signature=cPuuDW74Ll0mky5WyyIvJhoogck=') 50% / cover no-repeat;
  position: absolute;
  top: 21px;
  right: 13px;
  width: 199px;
  height: 168px;
}
.all-menu {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 1140px;
  box-sizing: border-box;
}
.navbar {
  background: rgba(255, 255, 255, 0.75);
  position: relative;
  margin-bottom: 88px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 10px 0 10px 60px;
  width: 92rem;
  margin-left:-30px;
  box-sizing: border-box;
}
.container-81 {
  margin-bottom: 55px;
  display: flex;
  flex-direction: row;
  column-gap: 80px;
  width: 1140px;
  box-sizing: border-box;
}
.food {
  background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/4kMuR5v8m98Be2eyFpJnNp/assets/images/076a56ea3614b3d92ffb951ec714a226798f9a94?Expires=1712286999&KeyName=fn12-cdn&Signature=tbip9Rq9C9OCaHyiE2kXSlHku2c=') 50% / contain no-repeat;
  position: absolute;
  left: -102px;
  top: -135px;
  width: 1643px;
  height: 2159px;
}
.container-82 {
  display: flex;
  flex-direction: row;
  column-gap: 80px;
  width: 1140px;
  box-sizing: border-box;
}
.container-83 {
  margin-bottom: 55px;
  display: flex;
  flex-direction: row;
  column-gap: 80px;
  width: 1140px;
  box-sizing: border-box;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  @include('layouts.navbar')
<div class="desktop-menu">
  <div class="food">
  </div>
  <div class="navbar">
    <div class="frame-3">
      <div class="ellipse-1">
      </div>
      <div class="gadiza-food">
        Gadiza Food
      </div>
    </div>
    <div class="frame-1">
      <span class="beranda">
        BERANDA
      </span>
      <span class="menu">
        MENU
      </span>
      <span class="tentang">
        TENTANG
      </span>
    </div>
    <img class="button" />
  </div>
  <div class="all-menu">
    <div class="container-81">
      <div class="food-1">
        <div class="rectangle-4">
        </div>
        <span class="puding-sedot">
          Puding Sedot
        </span>
        <span class="rp-6000">
          Rp6.000
        </span>
        <div class="mdicart-outline">
          <img class="vector-5" />
        </div>
        <div class="rectangle-12">
        </div>
      </div>
      <div class="food-2">
        <span class="dimsum">
          Dimsum
        </span>
        <span class="rp-5000">
          Rp5.000
        </span>
        <div class="mdicart-outline-6">
          <img class="vector-7" />
        </div>
        <div class="rectangle-13">
        </div>
      </div>
      <div class="food-3">
        <div class="mdicart-outline-8">
          <img class="vector-9" />
        </div>
        <span class="rp-500010">
          Rp5.000
        </span>
        <span class="macaroni-schotel">
          Macaroni Schotel
        </span>
        <div class="rectangle-1111">
        </div>
      </div>
      <div class="food-4">
        <div class="mdicart-outline-12">
          <img class="vector-13" />
        </div>
        <span class="rp-15000">
          Rp15.000
        </span>
        <span class="picinic-roll">
          Picinic Roll
        </span>
        <div class="rectangle-1014">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="food-5">
        <div class="rectangle-415">
        </div>
        <span class="croffle">
          Croffle
        </span>
        <span class="rp-7000">
          Rp7.000
        </span>
        <div class="mdicart-outline-16">
          <img class="vector-17" />
        </div>
        <div class="rectangle-1218">
        </div>
      </div>
      <div class="food-6">
        <span class="pastel">
          Pastel
        </span>
        <span class="rp-500020">
          Rp5.000
        </span>
        <div class="mdicart-outline-21">
          <img class="vector-22" />
        </div>
        <div class="rectangle-1323">
        </div>
      </div>
      <div class="food-7">
        <div class="mdicart-outline-25">
          <img class="vector-26" />
        </div>
        <span class="rp-700027">
          Rp7.000
        </span>
        <span class="klappertaart">
          Klappertaart
        </span>
        <div class="rectangle-1128">
        </div>
      </div>
      <div class="food-8">
        <div class="mdicart-outline-30">
          <img class="vector-31" />
        </div>
        <span class="rp-20000">
          Rp20.000
        </span>
        <span class="puding-bunga">
          Puding Bunga
        </span>
        <div class="rectangle-1032">
        </div>
      </div>
    </div>
    <div class="container-83">
      <div class="food-9">
        <div class="rectangle-433">
        </div>
        <span class="puding-sedot-34">
          Puding Sedot
        </span>
        <span class="rp-600035">
          Rp6.000
        </span>
        <div class="mdicart-outline-36">
          <img class="vector-37" />
        </div>
        <div class="rectangle-1238">
        </div>
      </div>
      <div class="food-10">
        <span class="dimsum-40">
          Dimsum
        </span>
        <span class="rp-500041">
          Rp5.000
        </span>
        <div class="mdicart-outline-42">
          <img class="vector-43" />
        </div>
        <div class="rectangle-1344">
        </div>
      </div>
      <div class="food-11">
        <div class="mdicart-outline-46">
          <img class="vector-47" />
        </div>
        <span class="rp-500048">
          Rp5.000
        </span>
        <span class="macaroni-schotel-49">
          Macaroni Schotel
        </span>
        <div class="rectangle-1150">
        </div>
      </div>
      <div class="food-12">
        <div class="mdicart-outline-52">
          <img class="vector-53" />
        </div>
        <span class="rp-1500054">
          Rp15.000
        </span>
        <span class="picinic-roll-55">
          Picinic Roll
        </span>
        <div class="rectangle-1056">
        </div>
      </div>
    </div>
    <div class="container-82">
      <div class="food-13">
        <div class="rectangle-457">
        </div>
        <span class="croffle-58">
          Croffle
        </span>
        <span class="rp-700059">
          Rp7.000
        </span>
        <div class="mdicart-outline-60">
          <img class="vector-61" />
        </div>
        <div class="rectangle-1262">
        </div>
      </div>
      <div class="food-14">
        <span class="pastel-64">
          Pastel
        </span>
        <span class="rp-500065">
          Rp5.000
        </span>
        <div class="mdicart-outline-66">
          <img class="vector-67" />
        </div>
        <div class="rectangle-1368">
        </div>
      </div>
      <div class="food-15">
        <div class="mdicart-outline-70">
          <img class="vector-71" />
        </div>
        <span class="rp-700072">
          Rp7.000
        </span>
        <span class="klappertaart-73">
          Klappertaart
        </span>
        <div class="rectangle-1174">
        </div>
      </div>
      <div class="food-16">
        <div class="mdicart-outline-76">
          <img class="vector-77" />
        </div>
        <span class="rp-2000078">
          Rp20.000
        </span>
        <span class="puding-bunga-79">
          Puding Bunga
        </span>
        <div class="rectangle-1080">
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>