<!doctype html>
<html>
<head>
<title>Halaman tidak ditemukan</title>
<style>
body,html{
    width:100%;
    height:100%;
    margin:0;
}
.cover{
    position:fixed;
    width:100%;
    height:100vh;
    filter:grayscale(100%) brightness(50%);
    background:url("{{URL::to('/')}}/img/background_home-min.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    z-index:1;
    
}
.focus{
    position:relative;
    width:100%;
    height:100vh;
    z-index:2;
    display:flex;
    align-items:center;
    justify-content: center;
}
</style>
</head>
<body>
<div class="cover"></div>
<div class="focus">
    <div>
        <h1 style="font-size:3rem;color:white">Halaman yang anda cari tidak ditemukan.</h1>
        <b style="color:white">Akan diarahkan ke home page dalam 3 detik.</b>
    </div>
</div>
<script>
setTimeout(() => {
    window.location.href = "/";
}, 3000);
</script>
</body>
</html>