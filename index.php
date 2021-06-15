<!DOCTYPE html>
<php>
<head>
    <title>Calculator - Online</title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <style type ="text/css">
	*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body{
    display:flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #FFA17F;  
    background: -webkit-linear-gradient(to right, #00223E, #FFA17F); 
    background: linear-gradient(to right, #00223E, #FFA17F);
    
}

#dong_ho.h2{
    position: relative;
    display:block;
    color:#fff;
    text-align: center;
    margin:10px 0;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.4em;
}

#dong_ho #thoi_gian{
    display:flex;
}

#dong_ho #thoi_gian div{
    position: relative;
    margin: 0 5px;
    -webkit-box-reflect: below 10px linear-gradient(transparent, #0004);
}

#dong_ho #thoi_gian div span{ 
    position: relative;
    display:block;
    width:200px;
    height: 160px;
    background: #2196f3;
    color: #fff;
    font-weight: 300;
    display:flex;
    justify-content: center;
    align-items: center;
    font-size: 5rem;
    z-index:3;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.2);
}

#dong_ho #thoi_gian span:nth-child(2){
    height: 65px;
    font-size: 2rem;
    letter-spacing: 0.3rem;
    z-index: 2;
    box-shadow: none;
    background:#127fd6;
    text-transform: uppercase;
}

#dong_ho #thoi_gian div:last-child span {
    background: #ff006a;
}

#dong_ho #thoi_gian div:last-child span:nth-child(2) {
    background: #ec0062;
}
	<style>
</head>
<body>
    <div id="dong_ho">
        <h2>Thời gian bây giờ là:</h2>
        <div id="thoi_gian">
            <div>
                <span id="gio">00</span><span>Giờ</span>
            </div>
            <div>    
                <span id="phut">00</span><span>Phút</span>
            </div>
            <div>
                <span id="giay">00</span><span>Giây</span>
            </div>
        </div>
    </div>

<script>
    function Dong_ho() {
        var gio = document.getElementById("gio");
        var phut = document.getElementById("phut");
        var giay = document.getElementById("giay");

        var Gio_hien_tai = new Date().getHours();
        var Phut_hien_tai = new Date().getMinutes();
        var Giay_hien_tai = new Date().getSeconds();

        gio.innerHTML = Gio_hien_tai;
        phut.innerHTML = Phut_hien_tai;
        giay.innerHTML = Giay_hien_tai;
    }

    var Dem_gio = setInterval(Dong_ho, 1000);
</script>
</body>
</php>