<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Thumbnail Downloader</title>
  <link rel="stylesheet" href="page.css">
</head>
<body>
  <form action="">
    <input type="url" placeholder="Paste Video URL" id="url">
    <img id="thumbnail" src="" alt="" id="thumbnail">
    <input type="submit" value="Download" id="submit">
  </form>
  <script>
    const url = document.querySelector("#url");
    const thumbnail = document.querySelector("#thumbnail");
    const button = document.querySelector(".download-btn");
    url.onkeyup = ()=>{
      let urlVal = url.value;
      if(urlVal.indexOf("https://www.youtube.com/watch?v=") != -1){
        let urlId = urlVal.split('v=')[1].substring(0, 11);
        let urlImgId = 'https://img.youtube.com/vi/'+url+'/maxresdefault.jpg';
        thumbnail.src = urlImgId;
      }
    }
  </script>
</body>
</html>