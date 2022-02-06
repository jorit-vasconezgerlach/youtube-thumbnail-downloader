window.addEventListener('load', ()=>{
          const url = document.querySelector("#url");
          const thumbnail = document.querySelector("#thumbnail");
          const button = document.querySelector("#download");
          url.onkeyup = ()=>{
            let urlVal = url.value;
            if(urlVal.indexOf("https://www.youtube.com/watch?v=") != -1){
              thumbnail.style.display = 'block';
              let urlId = urlVal.split('v=')[1].substring(0, 11);
              let urlImg = 'https://img.youtube.com/vi/'+urlId+'/maxresdefault.jpg';
              thumbnail.src = urlImg;
              button.href = urlImg;
            } else {
              thumbnail.style.display = 'none';
            }
          }
})