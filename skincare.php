<!DOCTYPE html>
<html>
    <head>
    <link rel = "icon" href ="logo.jpeg" type = "image/x-icon">
    </head>
    <meta charset="UTF-8">
    <title>Skincare</title>
    <meta http-equiv="X-UA_Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <body>
        <h3 class="heading">Skincare Tutorials</h3>
        <p class="skin">No matter what your skin type is, a daily skin care routine can help you maintain overall skin health and improve specific concerns like acne, scarring, and dark spots. <br>Start with a basic and simple routine to see how your skin reacts. And don’t forget to patch test new products, especially if you suspect you have sensitive skin. This can help you identify potential allergic reactions.</p><br>
        <u1 class="section-btn right">
            <a href="logout.php">
            <button type="submit" name="btn" id="btn" class="inp">
            <span data-hover="Logout">Logout</span>
            </button>
            </a>
          </u1>
        <div class="container">
            <div class="main-video">
                <div class="video">
                    <video src="svid1.mp4" controls muted autoplay></video>
                    <h3 class="title">1. 7 tips for good skincare routine </h3>
                </div>
            </div>
            <div class="video-list">
                <div class="vid active">
                    <video  src="svid1.mp4"  muted></video>
                    <h3 class="title">1. 7 tips for good skincare routine</h3>
                </div>
                <div class="vid">
                    <video src="svid2.mp4"  muted></video>
                    <h3 class="title">2. CLEAR & GLOWING SKIN » healthy skincare tips</h3>
                </div>
                <div class="vid">
                    <video src="svid3.mp4"  muted></video>
                    <h3 class="title">3. How to take care of each Skin Type</h3>
                </div>
                <div class="vid">
                    <video src="svid4.mp4"  muted></video>
                    <h3 class="title">4. Teen skincare</h3>
                </div>
                <div class="vid">
                    <video src="svid5.mp4"  muted></video>
                    <h3 class="title">5. Open skin pores to Flawless skin</h3>
                </div>
            </div>

        </div>
        <script>
            let listVideo = document.querySelectorAll('.video-list .vid');
            let mainVideo = document.querySelector('.main-video video');
            let title = document.querySelector('.main-video .title');
            listVideo.forEach(video =>{
                video.onclick = () =>{
                    listVideo.forEach(vid => vid.classList.remove('active'));
                    video.classList.add('active');
                    if(video.classList.contains('active')){
                        let src = video.children[0].getAttribute('src'); 
                        mainVideo.src = src;
                        let text = video.children[1].innerHTML;
                        title.innerHTML=text;
                    };
                };
            });

        </script>
    </body>
    <style>
    .section-btn
    {
      margin: 32px 0 0 0;
      padding: 0;
    }

    button.inp
    {
        float: right;
    }

    .section-btn a
    {
      color: #fff;
      font-weight: normal;
      line-height: 45px;
      perspective: 1000px;
    }

    .section-btn a span
    {
      position: relative;
      display: inline-block;
      font-size: 18px;
      font-weight: normal;
      letter-spacing: 0.5px;
      padding: 2px 27px;
      background: #A6A4A4;
      border-radius: 1px;
      transition: transform 0.3s;
      transform-origin: 50% 0;
      transform-style: preserve-3d;
    }

    .section-btn a span::before
    {
      position: absolute;
      top: 100%;
      left: 0;
      height: 100%;
      width: 100%;
      color: #fff;
      background: #000;
      border-radius: 1px;
      padding: 2px 2px;
      transition: background 0.3s;
      transform: rotateX(-90deg);
      content: attr(data-hover);
      transform-origin: 50% 0;
    }

    .section-btn a:hover span, 
    .section-btn a:focus span
    {
      transform: rotateX(90deg) translateY(5px);
    }
        </style>
</html>