<div id="CrossFade">
  <img src="//unsplash.it/1600/900?image=1043" alt="img">
  <img src="//unsplash.it/1600/900?image=1039" alt="img">
  <img src="//unsplash.it/1600/900?image=1017" alt="img">
  <img src="//unsplash.it/1600/900?image=929" alt="img">
  <div class="intro">
    <h1>Your journey starts here</h1>
    <p>A selection of the best tours, hotels and Flights in Morocco</p>
  </div>
</div>
<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  font-size: calc(.5vw + 1vh + .5vmin);
}


.intro {
  position: relative;
  margin: 2em;
  padding: .2em .6em;
  cursor: pointer;
  color: #FFF;
  font-size: 2em;
  max-width: 26em;
}

.intro h1 {
  margin-bottom: .5em;
  line-height: 11;
  font-weight: 100;
  width: 700px;
  color: rgb(180, 143, 49);
  font-size: 50px;
  font-weight: 1900;
  font-family: "MuseoModerno", cursive;
}


.intro p {

  font-weight: 100;
  width: 700px;
  color: rgb(106, 107, 84);
  font-size: 30px;
  font-weight: 100;
  font-family: "MuseoModerno", cursive;
}

/* CrossFade */
#CrossFade {
  background: #FFF; /* no flash */
  display: flex;
  align-items: flex-end;
  height: 400px;
  overflow: hidden;
  position: relative;
}

#CrossFade img {
  position: absolute;
  min-width: 100%;
  min-height: 100%;
  height: auto;
  background: #000;
  backface-visibility: hidden;
  opacity: 0;
  transform: scale(1.4) rotate(12deg);
  animation: CrossFade 24s infinite;
}

#CrossFade img:nth-child(3) {
  animation-delay: 6s;
}

#CrossFade img:nth-child(2) {
  animation-delay: 12s;
}

#CrossFade img:nth-child(1) {
  animation-delay: 18s;
}

@keyframes CrossFade {
  25% {
    opacity: 1;
    transform: scale(1) rotate(0);
  }
  40% {
    opacity: 0;
  }
}

/* Images */
#CrossFade img[src='//unsplash.it/1600/900?image=1043'],
#CrossFade img[src='//unsplash.it/1600/900?image=1039'],
#CrossFade img[src='//unsplash.it/1600/900?image=1017'],
#CrossFade img[src='//unsplash.it/1600/900?image=929'] {
  /* No additional styles needed, these selectors ensure the images are included */
}

/* Intro Content */
#CrossFade .intro h1 {
  margin-bottom: .5em;
  line-height: 1;
  font-weight: 100;
}

#CrossFade .intro p {
  margin-top: 0.5em;
}

/* HTML content */
.intro h1 {
  margin-bottom: .5em;
  line-height: 1;
  font-weight: 100;
}

.intro p {
  margin-top: 0.5em;
}


</style>
 