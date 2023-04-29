<!DOCTYPE html>
                <html>
                <head>
                    <title>Building a Deep Neural Network to play FIFA 18</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/building-a-deep-neural-network-to-play-fifa-18-dce54d45e675"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@chintan.t93?source=post_page-----dce54d45e675--------------------------------">Author : Chintan Trivedi</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Building a Deep Neural Network to play FIFA 18</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A.I. bots in gaming are usually built by hand-coding a bunch of rules that impart game-intelligence. For the most part, this approach does a fairly good job of making the bot imitate human-like behavior. However, for most games it is still easy to tell apart a bot from an actual human playing. If we want to make these bots behave more human-like, would it help to not build them using hand-coded rules? What if we simply let the bot figure out the game by making it learn from looking at how humans play?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Exploring this would require a game where it is possible to collect such data of humans playing the game ahead of developing the game itself. FIFA is one such game that let me explore this. Being able to play the game and record my in-game actions and decisions allowed me to train an end-to-end Deep Learning based bot without having to hard-code a single rule of the game.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>The code for this project along with the trained model can be found here: </em><a href="https://github.com/ChintanTrivedi/DeepGamingAI_FIFA.git" target="_self">https://github.com/ChintanTrivedi/DeepGamingAI_FIFA.git</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Mechanism for playing the game</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The underlying mechanism to build such a bot needs to work without having access to any of the game’s internal code. Good thing then that the premise of this bot says we do not want to look at any such in-game information. A simple screenshot of the game window is all that is needed to feed into the bot’s game engine. It processes this visual information and outputs the action it wants to take which gets communicated to the game using a key-press simulation. Rinse and repeat.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*AEFM3316ltc7KOZ-p-v3Ww.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*AEFM3316ltc7KOZ-p-v3Ww.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*AEFM3316ltc7KOZ-p-v3Ww.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*AEFM3316ltc7KOZ-p-v3Ww.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*AEFM3316ltc7KOZ-p-v3Ww.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*AEFM3316ltc7KOZ-p-v3Ww.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*AEFM3316ltc7KOZ-p-v3Ww.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*AEFM3316ltc7KOZ-p-v3Ww.png 640w, https://miro.medium.com/v2/resize:fit:720/1*AEFM3316ltc7KOZ-p-v3Ww.png 720w, https://miro.medium.com/v2/resize:fit:750/1*AEFM3316ltc7KOZ-p-v3Ww.png 750w, https://miro.medium.com/v2/resize:fit:786/1*AEFM3316ltc7KOZ-p-v3Ww.png 786w, https://miro.medium.com/v2/resize:fit:828/1*AEFM3316ltc7KOZ-p-v3Ww.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*AEFM3316ltc7KOZ-p-v3Ww.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*AEFM3316ltc7KOZ-p-v3Ww.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*AEFM3316ltc7KOZ-p-v3Ww.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that we have a framework in place to feed input to the bot and to let its output control the game, we come to the interesting part: learning game intelligence. This is done in two steps by (1) using convolution neural network for understanding the screenshot image and (2) using long short term memory networks to decide appropriate action based on the understanding of the image.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">STEP 1: Training Convolution Neural Network (CNN)</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">CNNs are well known for their ability to detect objects in an image with high accuracy. Add to that fast GPUs and intelligent network architectures and we have a CNN model that can run in real time.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ZA6O4-IZwvSmaj5Ddh_ZnA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For making our bot understand the image it is given as input, I use an extremely light weight and fast CNN called MobileNet. The feature map extracted from this network represents a high level understanding of the image, like where the players and other objects of interest are located on the screen. This feature map is then used with a Single-Shot Multi-Box to detect the players on the pitch along with the ball and the goal.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*z1MGOrtP72kq6E7fT7KMIg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*z1MGOrtP72kq6E7fT7KMIg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*z1MGOrtP72kq6E7fT7KMIg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*z1MGOrtP72kq6E7fT7KMIg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*z1MGOrtP72kq6E7fT7KMIg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*z1MGOrtP72kq6E7fT7KMIg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*z1MGOrtP72kq6E7fT7KMIg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*z1MGOrtP72kq6E7fT7KMIg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*z1MGOrtP72kq6E7fT7KMIg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*z1MGOrtP72kq6E7fT7KMIg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*z1MGOrtP72kq6E7fT7KMIg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*z1MGOrtP72kq6E7fT7KMIg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*z1MGOrtP72kq6E7fT7KMIg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*z1MGOrtP72kq6E7fT7KMIg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*z1MGOrtP72kq6E7fT7KMIg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">STEP 2: Training Long Short Term Memory Networks (LSTM)</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*WmfAqqF0sHST1NGxigcoaw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*WmfAqqF0sHST1NGxigcoaw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*WmfAqqF0sHST1NGxigcoaw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*WmfAqqF0sHST1NGxigcoaw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*WmfAqqF0sHST1NGxigcoaw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*WmfAqqF0sHST1NGxigcoaw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*WmfAqqF0sHST1NGxigcoaw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*WmfAqqF0sHST1NGxigcoaw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*WmfAqqF0sHST1NGxigcoaw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*WmfAqqF0sHST1NGxigcoaw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*WmfAqqF0sHST1NGxigcoaw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*WmfAqqF0sHST1NGxigcoaw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*WmfAqqF0sHST1NGxigcoaw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*WmfAqqF0sHST1NGxigcoaw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*WmfAqqF0sHST1NGxigcoaw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that we have an understanding of the image, we could go ahead and decide what move we want to make. However, we don’t want to look at just one frame and take action. We’d rather look at a short sequence of these images. This is where LSTMs come into picture as they are well known for being able to model temporal sequences in data. Consecutive frames are used as time steps in our sequence, and a feature map is extracted for each frame using the CNN model. These are then fed into two LSTM networks simultaneously.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:68%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 509px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9B6fCWYBzrIMdLWPXOOVfA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9B6fCWYBzrIMdLWPXOOVfA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9B6fCWYBzrIMdLWPXOOVfA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9B6fCWYBzrIMdLWPXOOVfA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9B6fCWYBzrIMdLWPXOOVfA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9B6fCWYBzrIMdLWPXOOVfA.png 1100w, https://miro.medium.com/v2/resize:fit:1018/format:webp/1*9B6fCWYBzrIMdLWPXOOVfA.png 1018w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 509px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9B6fCWYBzrIMdLWPXOOVfA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*9B6fCWYBzrIMdLWPXOOVfA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*9B6fCWYBzrIMdLWPXOOVfA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*9B6fCWYBzrIMdLWPXOOVfA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*9B6fCWYBzrIMdLWPXOOVfA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*9B6fCWYBzrIMdLWPXOOVfA.png 1100w, https://miro.medium.com/v2/resize:fit:1018/1*9B6fCWYBzrIMdLWPXOOVfA.png 1018w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/509/1*9B6fCWYBzrIMdLWPXOOVfA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The first LSTM performs the task of learning what movement the player needs to make. Thus, it’s a multi-class classification model. The second LSTM gets the same input and has to decide what action to take out of cross, through, pass and shoot: another multi-class classification model. The outputs from these two classification problems are then converted to key presses to control the actions in the game.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>These networks have been trained on data collected by manually playing the game and recording the input image and the target key press. One of the few instances where gathering labelled data does not feel like a chore!</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Evaluating the bot’s performance</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I don’t know what accuracy measure to use in order to judge the bot’s performance, other than to let it just go out there and play the game. Based on only 400 minutes of training, the bot has learned to make runs towards the opponent’s goal, make forward passes and take shots when it detects the goal. In the beginner mode of FIFA 18, it has already scored 4 goals in about 6 games, 1 more than Paul Pogba has in the 17/18 season as of time of writing.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Video clips of the bot playing against the inbuilt bot can be found on my YouTube channel, with the video embedded below.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:80%;"><iframe  scrolling="auto" width="854.0" height="480.0" frameborder="0" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FvZFNzwv61Fk%3Fstart%3D47%26feature%3Doembed%26start%3D47&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DvZFNzwv61Fk&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FvZFNzwv61Fk%2Fhqdefault.jpg&key=d04bfffea46d4aeda930ec88cc64b87c&type=text%2Fhtml&schema=youtube" allowfullscreen=""></iframe></div><br><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Conclusion</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">My initial impressions on this approach of building game bots are certainly positive. With limited training, the bot has already picked up on basic rules of the game: making movements towards the goal and putting the ball in the back of the net. I believe it can get very close to human level performance with many more hours of training data, something that would be easy for the game developer to collect. Moreover, extending the model training to learn from real world footage of matches played would enable the game developers to make the bot’s behavior much more natural and realistic. Now if only anyone from EA sports was reading this…</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I published a follow-up article on this project, using Reinforcement Learning. Check it out <a href="https://medium.com/using-deep-q-learning-in-fifa-18-to-perfect-the-art-of-free-kicks-f2e4e979ee66" target="_self">at this link</a>. Thanks!</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>