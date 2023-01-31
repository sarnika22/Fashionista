<!DOCTYPE html>
<html>
    <head>
    <link rel = "icon" href ="logo.jpeg" type = "image/x-icon">
    </head>
    <meta charset="UTF-8">
    <title>Makeup</title>
    <meta http-equiv="X-UA_Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <body>
        <h3 class="heading">Make-up Tutorials</h3>
        <p><i>Makeup may do magical things, but it doesn't have to be a mystery. Applying a basic, natural look doesn't require a lot of skill or tools. You can do lots of the blending with your fingertips, and choose to leave out certain products if they don't appeal to you. <br> So have no fear: enjoy the process and your fresh, glowing face!</i></p><br>
        <u1 class="section-btn right">
            <a href="logout.php">
            <button type="submit" name="btn" id="btn" class="inp">
            <span data-hover="Logout">Logout</span>
            </button>
            </a>
          </u1>
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
        <div class="container">
            <div class="main-video">
                <div class="video">
                    <video src="vid1.mp4" controls muted autoplay></video>
                    <h3 class="title">1. Quick_Easy 5 min Makeup Tutorial</h3>
                </div>
            </div>
            <div class="video-list"> 
                <div class="con">
                    <div class="wrapper">
                        <input type="text" name="search" id="search" placeholder="search" autocomplete="chrome-off">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="vid active" id="card">
                    <video src="vid1.mp4"  muted ></video>
                    <h3 class="title">1. Quick_Easy 5 min Makeup Tutorial</h3>
                </div>
                <div class="vid" id="card">
                    <video src="vid2.mp4"  muted></video>
                    <h3 class="title">2. Easy Fall Makeup Tutorial</h3>
                </div>
                <div class="vid" id="card">
                    <video src="vid3.mp4"  muted></video>
                    <h3 class="title">3. Beginners Eye Make Up Tutorial</h3>
                </div>
                <div class="vid" id="card">
                    <video src="vid4.mp4"  muted ></video>
                    <h3 class="title">4. MakeUp Kit things for Beginners</h3>
                </div>
                <div class="vid" id="card">
                    <video src="vid5.mp4"  muted></video>
                    <h3 class="title">5. Step by step EyeShadow Tutorial</h3>
                </div>  
            </div>
        <script src="mkp.js"></script>
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
</html>