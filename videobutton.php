<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<style>
.wrapper {
  --color: #1F242D;
  --color-invert: #ffffff;
  --clip-path: circle(70px at left);
  --clip-path-hover: circle(200px at left);
  --clip-path-clicked: circle(100vw at left);
  --duration: .4s;
  --timing-function: ease;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
}

.wrapper .video {
  height: 100vh;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-left: 15px;
  -webkit-clip-path: var(--clip-path);
          clip-path: var(--clip-path);
  -webkit-transition: -webkit-clip-path var(--duration) var(--timing-function);
  transition: -webkit-clip-path var(--duration) var(--timing-function);
  transition: clip-path var(--duration) var(--timing-function);
  transition: clip-path var(--duration) var(--timing-function), -webkit-clip-path var(--duration) var(--timing-function);
}

.wrapper .video iframe {
  position: fixed;
  background: #c4cbde;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.wrapper .text {
  position: relative;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: .2px;
  opacity: var(--opacity, 1);
  -webkit-transition: opacity 0.3s var(--timing-function) 0.2s;
  transition: opacity 0.3s var(--timing-function) 0.2s;
}

.wrapper .text::before, .wrapper .text::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: -1px;
  right: 25px;
  height: 0;
}

.wrapper .text::before {
  -webkit-box-shadow: 26px 0 0 1px var(--color);
          box-shadow: 26px 0 0 1px var(--color);
  right: var(--r, 100%);
  opacity: var(--opacity, 0);
  -webkit-transition: right .5s ease-in, opacity .1s linear;
  transition: right .5s ease-in, opacity .1s linear;
}

.wrapper .text::after {
  -webkit-box-shadow: 26px 0 0 1px var(--color-invert);
          box-shadow: 26px 0 0 1px var(--color-invert);
  -webkit-clip-path: var(--clip-path);
          clip-path: var(--clip-path);
  -webkit-transition: -webkit-clip-path var(--duration) var(--timing-function);
  transition: -webkit-clip-path var(--duration) var(--timing-function);
  transition: clip-path var(--duration) var(--timing-function);
  transition: clip-path var(--duration) var(--timing-function), -webkit-clip-path var(--duration) var(--timing-function);
}

.wrapper .text > span::before, .wrapper .text > span::after {
  content: attr(data-text);
  padding-left: 26px;
}

.wrapper .text > span::before {
  color: var(--color);
}

.wrapper .text > span::after {
  color: var(--color-invert);
  -webkit-clip-path: var(--clip-path);
          clip-path: var(--clip-path);
  -webkit-transition: -webkit-clip-path var(--duration) var(--timing-function);
  transition: -webkit-clip-path var(--duration) var(--timing-function);
  transition: clip-path var(--duration) var(--timing-function);
  transition: clip-path var(--duration) var(--timing-function), -webkit-clip-path var(--duration) var(--timing-function);
  position: absolute;
  left: 0;
}

.wrapper input {
  width: 220px;
  height: 40px;
  margin: auto;
  position: absolute;
  left: 0;
  right: 0;
  border-radius: 40px;
  z-index: 2;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  cursor: pointer;
}

.wrapper input:focus {
  outline: 0;
}

.wrapper input:hover ~ .video {
  -webkit-clip-path: var(--clip-path-hover);
          clip-path: var(--clip-path-hover);
}

.wrapper input:hover ~ .text::before {
  --r: 25px;
  --opacity: 1;
}

.wrapper input:hover ~ .text::after {
  -webkit-clip-path: var(--clip-path-hover);
          clip-path: var(--clip-path-hover);
}

.wrapper input:hover ~ .text > span::after {
  -webkit-clip-path: var(--clip-path-hover);
          clip-path: var(--clip-path-hover);
}

.wrapper input:checked {
  width: 100%;
  height: 100%;
  border-radius: 0;
}

.wrapper input:checked ~ .video {
  -webkit-clip-path: var(--clip-path-clicked);
          clip-path: var(--clip-path-clicked);
}

.wrapper input:checked ~ .text {
  --opacity: 0;
  -webkit-transition: opacity 0.3s var(--timing-function);
  transition: opacity 0.3s var(--timing-function);
}

.wrapper input:checked ~ .text::after {
  -webkit-clip-path: var(--clip-path-clicked);
          clip-path: var(--clip-path-clicked);
}

.wrapper input:checked ~ .text > span::after {
  -webkit-clip-path: var(--clip-path-clicked);
          clip-path: var(--clip-path-clicked);
}
/*# sourceMappingURL=slider.css.map */
</style>

<body>

<div class="wrapper">
  <input type="checkbox">
  <div class="video">
    <!-- <video src="https://www.robmillsarchitects.com/files/land/city/RMA_Web_land_city_1.mp4" loop muted autoplay></video>
 -->
 <iframe id="ytplayer" class="responsive-iframe video-div" width="100%" height="100%" src="//www.youtube.com/embed/Pbjhj2VnqmE?autoplay=1&mute=1&enablejsapi=1" frameborder="0" allow='autoplay'></iframe>

  </div>
  <div class="text">
    <span data-text="Watch the video"></span>
  </div>
</div>
</body>
</html>