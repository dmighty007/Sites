<!DOCTYPE html>
                <html>
                <head>
                    <title>Snagging Parking Spaces with Mask R-CNN and Python</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/@ageitgey/snagging-parking-spaces-with-mask-r-cnn-and-python-955f2231c400"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@ageitgey?source=post_page-----955f2231c400--------------------------------">Author : Adam Geitgey</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Snagging Parking Spaces with Mask R-CNN and Python</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">Using Deep Learning to Solve Minor Annoyances</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*0cAbvfaNHlTMbnvJGLZs2g.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*0cAbvfaNHlTMbnvJGLZs2g.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*0cAbvfaNHlTMbnvJGLZs2g.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*0cAbvfaNHlTMbnvJGLZs2g.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*0cAbvfaNHlTMbnvJGLZs2g.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*0cAbvfaNHlTMbnvJGLZs2g.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*0cAbvfaNHlTMbnvJGLZs2g.gif 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*0cAbvfaNHlTMbnvJGLZs2g.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*0cAbvfaNHlTMbnvJGLZs2g.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*0cAbvfaNHlTMbnvJGLZs2g.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*0cAbvfaNHlTMbnvJGLZs2g.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*0cAbvfaNHlTMbnvJGLZs2g.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*0cAbvfaNHlTMbnvJGLZs2g.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*0cAbvfaNHlTMbnvJGLZs2g.gif 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*0cAbvfaNHlTMbnvJGLZs2g.gif"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I live in a great city. But like in most cities, finding a parking space here is always frustrating. Spots get snapped up quickly and even if you have a dedicated parking space for yourself, it’s hard for friends to drop by since they can’t find a place to park.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">My solution was to point a camera out the window and use deep learning to have my computer text me when a new parking spot opens up:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*azJXBB8-50gnjj809DRD0Q.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*azJXBB8-50gnjj809DRD0Q.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*azJXBB8-50gnjj809DRD0Q.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*azJXBB8-50gnjj809DRD0Q.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*azJXBB8-50gnjj809DRD0Q.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*azJXBB8-50gnjj809DRD0Q.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*azJXBB8-50gnjj809DRD0Q.gif 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*azJXBB8-50gnjj809DRD0Q.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*azJXBB8-50gnjj809DRD0Q.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*azJXBB8-50gnjj809DRD0Q.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*azJXBB8-50gnjj809DRD0Q.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*azJXBB8-50gnjj809DRD0Q.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*azJXBB8-50gnjj809DRD0Q.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*azJXBB8-50gnjj809DRD0Q.gif 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*azJXBB8-50gnjj809DRD0Q.gif"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This might sound pretty complicated, but building a working version of this with deep learning is actually pretty quick and easy. All the tools are available — it is just a matter of knowing where to find the tools and how to put them together.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So let’s spend a few minutes and build a high-accuracy parking space notification system with Python and Deep Learning!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Breaking Down the Problem</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>When we have a complicated problem that we want to solve with machine learning, the first step is to break down the problem into a sequence for simple tasks. Then, using our breakdown as a guide, we can pull different tools from our machine learning toolbox to solve each of the smaller tasks. By chaining together several small solutions into a pipeline, we’ll have a system that can do something complicated.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here’s how I broke down the problem of detecting open parking spaces into a pipeline:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*5_RhEVdNRA4_ZXJF9ZGL3w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*5_RhEVdNRA4_ZXJF9ZGL3w.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The input to the machine learning pipeline is a video stream from a normal webcam pointed out the window:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*pLdJRvle28NOboyLHMlM8A.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*pLdJRvle28NOboyLHMlM8A.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*pLdJRvle28NOboyLHMlM8A.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*pLdJRvle28NOboyLHMlM8A.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*pLdJRvle28NOboyLHMlM8A.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*pLdJRvle28NOboyLHMlM8A.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*pLdJRvle28NOboyLHMlM8A.gif 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*pLdJRvle28NOboyLHMlM8A.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*pLdJRvle28NOboyLHMlM8A.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*pLdJRvle28NOboyLHMlM8A.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*pLdJRvle28NOboyLHMlM8A.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*pLdJRvle28NOboyLHMlM8A.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*pLdJRvle28NOboyLHMlM8A.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*pLdJRvle28NOboyLHMlM8A.gif 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*pLdJRvle28NOboyLHMlM8A.gif"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Sample video from my webcam</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We‘ll pass each frame of video through the pipeline, one frame at a time.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The first step in the pipeline is to detect all possible parking spaces in a frame of video. Obviously we need to know which parts of the image are parking spaces before we can detect which parking spaces are unoccupied.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The second step is to detect all the cars in each frame of video. This will let us track the movement of each car from frame to frame.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The third step is to determine which of the parking spaces are currently occupied by cars and which aren’t. This requires combining the results of the first and second steps.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And the last step is to send a notification when a parking space becomes newly available. This will be based on changes in car positions between frames of video.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can accomplish each of these steps a number of different ways using a variety of technologies. There’s no single right or wrong way to build this pipeline and different approaches will have different advantages and disadvantages. Let’s walk through each step!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Step 1: Detecting Parking Spaces in an Image</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here’s what our camera view looks like:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*z_W-Rth43WWUzMOaMyVdfw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*z_W-Rth43WWUzMOaMyVdfw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*z_W-Rth43WWUzMOaMyVdfw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*z_W-Rth43WWUzMOaMyVdfw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*z_W-Rth43WWUzMOaMyVdfw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*z_W-Rth43WWUzMOaMyVdfw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*z_W-Rth43WWUzMOaMyVdfw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*z_W-Rth43WWUzMOaMyVdfw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*z_W-Rth43WWUzMOaMyVdfw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*z_W-Rth43WWUzMOaMyVdfw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*z_W-Rth43WWUzMOaMyVdfw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*z_W-Rth43WWUzMOaMyVdfw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*z_W-Rth43WWUzMOaMyVdfw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*z_W-Rth43WWUzMOaMyVdfw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*z_W-Rth43WWUzMOaMyVdfw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We need be able to scan that image and get back a list of areas that are valid to park in, like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*RiKDMpeyeCDcF-n7M_eU6Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*RiKDMpeyeCDcF-n7M_eU6Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*RiKDMpeyeCDcF-n7M_eU6Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*RiKDMpeyeCDcF-n7M_eU6Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*RiKDMpeyeCDcF-n7M_eU6Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*RiKDMpeyeCDcF-n7M_eU6Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*RiKDMpeyeCDcF-n7M_eU6Q.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*RiKDMpeyeCDcF-n7M_eU6Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*RiKDMpeyeCDcF-n7M_eU6Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*RiKDMpeyeCDcF-n7M_eU6Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*RiKDMpeyeCDcF-n7M_eU6Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*RiKDMpeyeCDcF-n7M_eU6Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*RiKDMpeyeCDcF-n7M_eU6Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*RiKDMpeyeCDcF-n7M_eU6Q.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*RiKDMpeyeCDcF-n7M_eU6Q.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Valid parking locations on this city street.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The lazy approach would be hardcoding the locations of each parking space into the program by hand instead of trying to detect the parking spaces automatically. But then if we ever move the camera or want to detect parking spaces on a different street, we’d have to hardcode the parking space locations again by hand. That sucks, so let’s find an automatic way to detect parking spaces.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One idea might be to look for parking meters and assume that each meter has a parking space beside it:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:47%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 359px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*JOlCu0CqvGOyWz2S-oYUMw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*JOlCu0CqvGOyWz2S-oYUMw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*JOlCu0CqvGOyWz2S-oYUMw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*JOlCu0CqvGOyWz2S-oYUMw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*JOlCu0CqvGOyWz2S-oYUMw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*JOlCu0CqvGOyWz2S-oYUMw.png 1100w, https://miro.medium.com/v2/resize:fit:718/format:webp/1*JOlCu0CqvGOyWz2S-oYUMw.png 718w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 359px" srcset="https://miro.medium.com/v2/resize:fit:640/1*JOlCu0CqvGOyWz2S-oYUMw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*JOlCu0CqvGOyWz2S-oYUMw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*JOlCu0CqvGOyWz2S-oYUMw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*JOlCu0CqvGOyWz2S-oYUMw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*JOlCu0CqvGOyWz2S-oYUMw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*JOlCu0CqvGOyWz2S-oYUMw.png 1100w, https://miro.medium.com/v2/resize:fit:718/1*JOlCu0CqvGOyWz2S-oYUMw.png 718w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/359/1*JOlCu0CqvGOyWz2S-oYUMw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Detecting parking meters in an image.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But there are some complications with this approach. First, not every parking spot has a parking meter — in fact, we are most interested in finding spots that we don’t have to pay for! And second, just knowing the location of a parking meter doesn’t tell us exactly where the parking space is. It just gets us a little closer.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Another idea is to build an object detection model that looks for the parking space hash marks drawn on the road, like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*nO_-GoAw6Bk7qGeKgihP0w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*nO_-GoAw6Bk7qGeKgihP0w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*nO_-GoAw6Bk7qGeKgihP0w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*nO_-GoAw6Bk7qGeKgihP0w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*nO_-GoAw6Bk7qGeKgihP0w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*nO_-GoAw6Bk7qGeKgihP0w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*nO_-GoAw6Bk7qGeKgihP0w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*nO_-GoAw6Bk7qGeKgihP0w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*nO_-GoAw6Bk7qGeKgihP0w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*nO_-GoAw6Bk7qGeKgihP0w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*nO_-GoAw6Bk7qGeKgihP0w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*nO_-GoAw6Bk7qGeKgihP0w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*nO_-GoAw6Bk7qGeKgihP0w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*nO_-GoAw6Bk7qGeKgihP0w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*nO_-GoAw6Bk7qGeKgihP0w.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Notice the tiny yellow marks — those are where the boundaries of each parking space are drawn on the road.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But this approach is also painful. First of all, the parking space line markers in my city are really small and hard to see from a distance, so they will also be hard to detect with a computer. And second, the street is full of all kinds of unrelated lines and marks. It will be difficult to separate out which lines are parking spaces and which lines are lane dividers or crosswalks.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Whenever you have a problem that seems difficult, take a few minutes to see if you can think of a different way to approach the problem that sidesteps some of the technical challenges. What exactly <em>is</em> a parking space anyway? A parking space is just a place where a car parks for a long time. So maybe we don’t need to detect parking spaces at all. Why can’t we just detect cars that don’t move for a long time and assume that they are in parking spaces?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In other words, valid parking spaces are just places containing non-moving cars:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*7l9i7J4YlxsrlR1J3XmcLw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*7l9i7J4YlxsrlR1J3XmcLw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*7l9i7J4YlxsrlR1J3XmcLw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*7l9i7J4YlxsrlR1J3XmcLw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*7l9i7J4YlxsrlR1J3XmcLw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*7l9i7J4YlxsrlR1J3XmcLw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*7l9i7J4YlxsrlR1J3XmcLw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*7l9i7J4YlxsrlR1J3XmcLw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*7l9i7J4YlxsrlR1J3XmcLw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*7l9i7J4YlxsrlR1J3XmcLw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*7l9i7J4YlxsrlR1J3XmcLw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*7l9i7J4YlxsrlR1J3XmcLw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*7l9i7J4YlxsrlR1J3XmcLw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*7l9i7J4YlxsrlR1J3XmcLw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*7l9i7J4YlxsrlR1J3XmcLw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">The bounding box of each car here is actually a parking space! We don’t need to actually detect parking spaces if we can detect stationary cars.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So if we can detect cars and figure out which ones aren’t moving between frames of video, we can infer the locations of parking spaces. Easy enough–-let’s move on to detecting the cars!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Detecting Cars in an Image</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Detecting cars in a frame of video is a textbook object detection problem. There are lots of machine learning approaches we could use to detect an object in an image. Here are some of the most common object detection algorithms, in order from “old school” to “new school”:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Train a <strong>HOG (Histogram of Oriented Gradients)</strong> object detector and slide it over our image to find all the cars. This older, non-deep-learning approach is relatively fast to run, but it won’t handle cars rotated in different orientations very well.</li><li class="ff3" style="font-size:22px;">Train a <strong>CNN (Convolutional Neural Network)</strong> object detector and slide it over our image until we find all the cars. This approach is accurate, but not that efficient since we have to scan the same image multiple times with the CNN to find all the cars throughout the image. And while it can easily find cars rotated in different orientations, it requires a lot more training data than a HOG-based object detector.</li><li class="ff3" style="font-size:22px;">Use a newer deep learning approach like <strong>Mask R-CNN</strong>, <strong>Faster R-CNN</strong> or <strong>YOLO</strong> that combines the accuracy of CNNs with clever design and efficiency tricks that greatly speed up the detection process. This will run relatively fast (on a GPU) as long as we have a lot of training data to train the model.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In general, we want to choose the simplest solution that will get the job done with the least amount of training data and not assume that we need the newest, flashiest algorithm. But in this specific case, <strong>Mask R-CNN</strong> is a reasonable choice despite being fairly flashy and new.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The Mask R-CNN architecture is designed in such a way where it detects objects across the entire image in a computationally efficient manner without using a sliding window approach. In other words, it runs fairly quickly. With a modern GPU, we should be able to detect objects in high-res videos at several frames a second. That should be fine for this project.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In addition, Mask R-CNN gives us lots of information about each detected object. Most object detection algorithms only return the bounding box of each object. But Mask R-CNN will not only give us the location of each object, but it will also give us an object outline (or <em>mask</em>), like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*lmk0-MXrBPYfW2y9pG9BhA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*lmk0-MXrBPYfW2y9pG9BhA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*lmk0-MXrBPYfW2y9pG9BhA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*lmk0-MXrBPYfW2y9pG9BhA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*lmk0-MXrBPYfW2y9pG9BhA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lmk0-MXrBPYfW2y9pG9BhA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*lmk0-MXrBPYfW2y9pG9BhA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*lmk0-MXrBPYfW2y9pG9BhA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*lmk0-MXrBPYfW2y9pG9BhA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*lmk0-MXrBPYfW2y9pG9BhA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*lmk0-MXrBPYfW2y9pG9BhA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*lmk0-MXrBPYfW2y9pG9BhA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*lmk0-MXrBPYfW2y9pG9BhA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*lmk0-MXrBPYfW2y9pG9BhA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*lmk0-MXrBPYfW2y9pG9BhA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To train Mask R-CNN, we need lots of pictures of the kinds objects that we want to detect. We could go outside and take pictures of cars and trace out all the cars in those images, but that would take a couple days of work. Luckily, cars are common objects that lots of people want to detect, so several public datasets of car images already exist.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There’s a popular dataset called <a href="http://cocodataset.org" target="_self">COCO (short for Common Objects In Context)</a> that has images annotated with object masks. In this dataset, there are over 12,000 images with cars already outlined. Here’s one of the images in the COCO dataset:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*zOCgfPEw0TKJunIaNOzz-Q.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">An image in the COCO dataset with the objects already outlined.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This data is perfect for training a Mask R-CNN model.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But wait, things get even better! Since it’s so common to want to build object detection models using the COCO dataset, lots of people have already done it and shared their results. So instead of training our own model, we can start with a pre-trained model that can detect cars out of the box. For this project, we’ll use the <a href="https://github.com/matterport/Mask_RCNN" target="_self">great open source Mask R-CNN implementation from Matterport</a> which comes with a pre-trained model.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Side note:</strong> Don’t be afraid of training a custom Mask R-CNN object detector! It’s time consuming to annotate the data, but it is not that difficult. If you want to walk through training a custom Mask R-CNN model using your own data, <a href="https://machinelearningisfun.com/get-the-book" target="_self">check out my book</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If we run the pre-trained model on our camera image, this is what is detected out of the box:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*xPP1LCICnQX6fSWbXQ-YPw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*xPP1LCICnQX6fSWbXQ-YPw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*xPP1LCICnQX6fSWbXQ-YPw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*xPP1LCICnQX6fSWbXQ-YPw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*xPP1LCICnQX6fSWbXQ-YPw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*xPP1LCICnQX6fSWbXQ-YPw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*xPP1LCICnQX6fSWbXQ-YPw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*xPP1LCICnQX6fSWbXQ-YPw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*xPP1LCICnQX6fSWbXQ-YPw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*xPP1LCICnQX6fSWbXQ-YPw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*xPP1LCICnQX6fSWbXQ-YPw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*xPP1LCICnQX6fSWbXQ-YPw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*xPP1LCICnQX6fSWbXQ-YPw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*xPP1LCICnQX6fSWbXQ-YPw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*xPP1LCICnQX6fSWbXQ-YPw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Our image with the default COCO objects identified — cars, people, traffic lights and a tree.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Not only do we get the cars identified, but we get things like traffic lights and people too. And hilariously, it identified one of the trees as a “potted plant.”</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For each object detected in the image, we get back four things from the Mask R-CNN model:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;">The type of object that was detected (as an integer). The pre-trained COCO model knows how to detect 80 different common objects like cars and trucks. <a href="https://gist.github.com/ageitgey/b143ee809bf08e4927dd59bace44db0d" target="_self">Here is a full list of them</a>.</li><li class="ff3" style="font-size:22px;">A confidence score of the object detection. The higher the number, the more certain the model is that it correctly identified the object.</li><li class="ff3" style="font-size:22px;">The bounding box of the object in the image, given as X/Y pixel locations.</li><li class="ff3" style="font-size:22px;">A bitmap “mask” that tells which pixels within the bounding box are part of the object and which aren’t. With the mask data, we can also work out the outline of the object.</li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here’s the Python code to detect the bounding boxes of cars using the pre-trained model from Matterport’s Mask R-CNN implementation together with OpenCV:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import os
import numpy as np
import cv2
import mrcnn.config
import mrcnn.utils
from mrcnn.model import MaskRCNN
from pathlib import Path


# Configuration that will be used by the Mask-RCNN library
class MaskRCNNConfig(mrcnn.config.Config):
    NAME = "coco_pretrained_model_config"
    IMAGES_PER_GPU = 1
    GPU_COUNT = 1
    NUM_CLASSES = 1 + 80  # COCO dataset has 80 classes + one background class
    DETECTION_MIN_CONFIDENCE = 0.6


# Filter a list of Mask R-CNN detection results to get only the detected cars / trucks
def get_car_boxes(boxes, class_ids):
    car_boxes = []

    for i, box in enumerate(boxes):
        # If the detected object isn't a car / truck, skip it
        if class_ids[i] in [3, 8, 6]:
            car_boxes.append(box)

    return np.array(car_boxes)


# Root directory of the project
ROOT_DIR = Path(".")

# Directory to save logs and trained model
MODEL_DIR = os.path.join(ROOT_DIR, "logs")

# Local path to trained weights file
COCO_MODEL_PATH = os.path.join(ROOT_DIR, "mask_rcnn_coco.h5")

# Download COCO trained weights from Releases if needed
if not os.path.exists(COCO_MODEL_PATH):
    mrcnn.utils.download_trained_weights(COCO_MODEL_PATH)

# Directory of images to run detection on
IMAGE_DIR = os.path.join(ROOT_DIR, "images")

# Video file or camera to process - set this to 0 to use your webcam instead of a video file
VIDEO_SOURCE = "test_images/parking.mp4"

# Create a Mask-RCNN model in inference mode
model = MaskRCNN(mode="inference", model_dir=MODEL_DIR, config=MaskRCNNConfig())

# Load pre-trained model
model.load_weights(COCO_MODEL_PATH, by_name=True)

# Location of parking spaces
parked_car_boxes = None

# Load the video file we want to run detection on
video_capture = cv2.VideoCapture(VIDEO_SOURCE)

# Loop over each frame of video
while video_capture.isOpened():
    success, frame = video_capture.read()
    if not success:
        break

    # Convert the image from BGR color (which OpenCV uses) to RGB color
    rgb_image = frame[:, :, ::-1]

    # Run the image through the Mask R-CNN model to get results.
    results = model.detect([rgb_image], verbose=0)

    # Mask R-CNN assumes we are running detection on multiple images.
    # We only passed in one image to detect, so only grab the first result.
    r = results[0]

    # The r variable will now have the results of detection:
    # - r['rois'] are the bounding box of each detected object
    # - r['class_ids'] are the class id (type) of each detected object
    # - r['scores'] are the confidence scores for each detection
    # - r['masks'] are the object masks for each detected object (which gives you the object outline)

    # Filter the results to only grab the car / truck bounding boxes
    car_boxes = get_car_boxes(r['rois'], r['class_ids'])

    print("Cars found in frame of video:")

    # Draw each box on the frame
    for box in car_boxes:
        print("Car: ", box)

        y1, x1, y2, x2 = box

        # Draw the box
        cv2.rectangle(frame, (x1, y1), (x2, y2), (0, 255, 0), 1)

    # Show the frame of video on the screen
    cv2.imshow('Video', frame)

    # Hit 'q' to quit
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# Clean up everything when finished
video_capture.release()
cv2.destroyAllWindows()
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When you run that script, you’ll get an image on the screen with a box around each detected car, like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*AuLCpUbCkY0z9RO_iF8n8A.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Each detected car has a green box around it.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And you’ll also get the pixel coordinates of each detected car printed in the console, like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Cars found in frame of video:<br/>Car:  [492 871 551 961]<br/>Car:  [450 819 509 913]<br/>Car:  [411 774 470 856]</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With all that, we have successfully detected cars in an image. On to the next step!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Detecting Empty Parking Spaces</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We know the pixel location of each car in our image. And by looking at multiple frames of video in succession, we can easily work out which cars haven’t moved and assume those areas are parking spaces. But how do we detect when a car leaves a parking space?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The problem is that the bounding boxes of the cars in our image partially overlap:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*HPUWxbV-pkBbRc6dkQuFJg.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Even for cars in different parking spaces, the bounding boxes of each car overlap a little bit.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So if we assume that each of those bounding boxes represents a parking space, it’s possible that the box can be partially occupied by a car even when the space is empty. We need a way to measure how much two objects overlap so we can check for “mostly empty” boxes.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The measure we will use is called<strong> Intersection Over Union </strong>or<strong> IoU</strong>. IoU calculated by finding the amount of pixels where two objects overlap and dividing it by the amount of pixels covered by both objects, like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*B5ozS7W14d68ycjlLZDDkg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*B5ozS7W14d68ycjlLZDDkg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*B5ozS7W14d68ycjlLZDDkg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*B5ozS7W14d68ycjlLZDDkg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*B5ozS7W14d68ycjlLZDDkg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*B5ozS7W14d68ycjlLZDDkg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*B5ozS7W14d68ycjlLZDDkg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*B5ozS7W14d68ycjlLZDDkg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*B5ozS7W14d68ycjlLZDDkg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*B5ozS7W14d68ycjlLZDDkg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*B5ozS7W14d68ycjlLZDDkg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*B5ozS7W14d68ycjlLZDDkg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*B5ozS7W14d68ycjlLZDDkg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*B5ozS7W14d68ycjlLZDDkg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*B5ozS7W14d68ycjlLZDDkg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This will give us a measure of how much a car’s bounding box is overlapping a parking spot’s bounding box. With this, we can easily work out if a car is in a parking space or not. If the IoU measure is low, like 0.15, that means the car isn’t really occupying much of the parking space. But if the measure is high, like 0.6, that means the car is occupying the majority of the parking space area so we can be sure that the space is occupied.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Since IoU is such a common measurement in computer vision, often the libraries you are using will already have an implementation of it. And in fact, the Matterport Mask R-CNN library includes it as a function called <code>mrcnn.utils.compute_overlaps()</code>, so we can just use that funciton.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Assuming we have a list of bounding boxes representing parking areas in our image, checking if the detected cars are inside of those bounding boxes is as simple as adding a line or two of code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>    # Filter the results to only grab the car / truck bounding boxes
    car_boxes = get_car_boxes(r['rois'], r['class_ids'])

    # See how much cars overlap with the known parking spaces
    overlaps = mrcnn.utils.compute_overlaps(car_boxes, parking_areas)

    print(overlaps)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The result looks like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>[<br/> [1.         0.07040032 0.         0.]<br/> [0.07040032 1.         0.07673165 0.]<br/> [0.         0.         0.02332112 0.]<br/>]</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In that 2D array, each row represents one of the parking space bounding boxes. Likewise, each column represents how much that parking space was overlapped by one of the detected cars. A 1.0 score means the car completely occupies the space and a low score like 0.02 means the car touches the space but doesn’t occupy most of the area.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To find unoccupied parking spaces, we just need to check each row in this array. If all the numbers are zero or really small, that means nothing is occupying that space and thus it must be free!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But keep in mind that object detection doesn’t always work perfectly with live video. Even though Mask R-CNN is highly accurate, occasionally it can miss a car or two in a single frame of video. So before flagging a parking space as free, we should make sure it remains free for a little while — maybe 5 or 10 sequential frames of video. That will prevent the system from incorrectly detecting open parking spaces just because object detection had a temporary hiccup on one frame of video. But as soon as we see that we have at least one parking space free for several sequentially frames of video, we are ready to send a text!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Sending a Text</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The last step of our pipeline is to send an SMS alert when we notice that a parking space has been free for several frames of video.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Sending an SMS message from Python is very simple using <a href="https://www.twilio.com/" target="_self">Twilio</a>. Twilio is a popular API that lets you send an SMS message from basically any programming language with a few lines of code. Of course, if you prefer to use a different service SMS provider, you could use that instead. I have no stake in Twilio. It is just the first thing to comes to mind.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To use Twilio, sign up for a <a href="https://www.twilio.com/try-twilio" target="_self">trial account</a>, create a Twilio phone number and get your account credentials. Then, you need to install the Twilio Python client library:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>pip3 install twilio</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With that installed, this is the entire code to send an SMS message in Python (just replace the values with your own account details):</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from twilio.rest import Client

# Twilio account details
twilio_account_sid = 'Your Twilio SID here'
twilio_auth_token = 'Your Twilio Auth Token here'
twilio_source_phone_number = 'Your Twilio phone number here'

# Create a Twilio client object instance
client = Client(twilio_account_sid, twilio_auth_token)

# Send an SMS
message = client.messages.create(
    body="This is my SMS message!",
    from_=twilio_source_phone_number,
    to="Destination phone number here"
)
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To add SMS sending capabilities to our script, we can just drop that code right in. But we need to be careful that we don’t keep sending ourselves text messages on every frame of new video where a free parking space is still free. So we’ll need to have a flag to track if we have already sent an SMS and make sure we don’t send another one until either a certain amount of time has passed or until a different parking space is detected to be open.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Putting it All Together</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s assemble each step of our pipeline into a single Python script. Here’s the complete code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import os
import numpy as np
import cv2
import mrcnn.config
import mrcnn.utils
from mrcnn.model import MaskRCNN
from pathlib import Path
from twilio.rest import Client


# Configuration that will be used by the Mask-RCNN library
class MaskRCNNConfig(mrcnn.config.Config):
    NAME = "coco_pretrained_model_config"
    IMAGES_PER_GPU = 1
    GPU_COUNT = 1
    NUM_CLASSES = 1 + 80  # COCO dataset has 80 classes + one background class
    DETECTION_MIN_CONFIDENCE = 0.6


# Filter a list of Mask R-CNN detection results to get only the detected cars / trucks
def get_car_boxes(boxes, class_ids):
    car_boxes = []

    for i, box in enumerate(boxes):
        # If the detected object isn't a car / truck, skip it
        if class_ids[i] in [3, 8, 6]:
            car_boxes.append(box)

    return np.array(car_boxes)


# Twilio config
twilio_account_sid = 'YOUR_TWILIO_SID'
twilio_auth_token = 'YOUR_TWILIO_AUTH_TOKEN'
twilio_phone_number = 'YOUR_TWILIO_SOURCE_PHONE_NUMBER'
destination_phone_number = 'THE_PHONE_NUMBER_TO_TEXT'
client = Client(twilio_account_sid, twilio_auth_token)


# Root directory of the project
ROOT_DIR = Path(".")

# Directory to save logs and trained model
MODEL_DIR = os.path.join(ROOT_DIR, "logs")

# Local path to trained weights file
COCO_MODEL_PATH = os.path.join(ROOT_DIR, "mask_rcnn_coco.h5")

# Download COCO trained weights from Releases if needed
if not os.path.exists(COCO_MODEL_PATH):
    mrcnn.utils.download_trained_weights(COCO_MODEL_PATH)

# Directory of images to run detection on
IMAGE_DIR = os.path.join(ROOT_DIR, "images")

# Video file or camera to process - set this to 0 to use your webcam instead of a video file
VIDEO_SOURCE = "test_images/parking.mp4"

# Create a Mask-RCNN model in inference mode
model = MaskRCNN(mode="inference", model_dir=MODEL_DIR, config=MaskRCNNConfig())

# Load pre-trained model
model.load_weights(COCO_MODEL_PATH, by_name=True)

# Location of parking spaces
parked_car_boxes = None

# Load the video file we want to run detection on
video_capture = cv2.VideoCapture(VIDEO_SOURCE)

# How many frames of video we've seen in a row with a parking space open
free_space_frames = 0

# Have we sent an SMS alert yet?
sms_sent = False

# Loop over each frame of video
while video_capture.isOpened():
    success, frame = video_capture.read()
    if not success:
        break

    # Convert the image from BGR color (which OpenCV uses) to RGB color
    rgb_image = frame[:, :, ::-1]

    # Run the image through the Mask R-CNN model to get results.
    results = model.detect([rgb_image], verbose=0)

    # Mask R-CNN assumes we are running detection on multiple images.
    # We only passed in one image to detect, so only grab the first result.
    r = results[0]

    # The r variable will now have the results of detection:
    # - r['rois'] are the bounding box of each detected object
    # - r['class_ids'] are the class id (type) of each detected object
    # - r['scores'] are the confidence scores for each detection
    # - r['masks'] are the object masks for each detected object (which gives you the object outline)

    if parked_car_boxes is None:
        # This is the first frame of video - assume all the cars detected are in parking spaces.
        # Save the location of each car as a parking space box and go to the next frame of video.
        parked_car_boxes = get_car_boxes(r['rois'], r['class_ids'])
    else:
        # We already know where the parking spaces are. Check if any are currently unoccupied.

        # Get where cars are currently located in the frame
        car_boxes = get_car_boxes(r['rois'], r['class_ids'])

        # See how much those cars overlap with the known parking spaces
        overlaps = mrcnn.utils.compute_overlaps(parked_car_boxes, car_boxes)

        # Assume no spaces are free until we find one that is free
        free_space = False

        # Loop through each known parking space box
        for parking_area, overlap_areas in zip(parked_car_boxes, overlaps):

            # For this parking space, find the max amount it was covered by any
            # car that was detected in our image (doesn't really matter which car)
            max_IoU_overlap = np.max(overlap_areas)

            # Get the top-left and bottom-right coordinates of the parking area
            y1, x1, y2, x2 = parking_area

            # Check if the parking space is occupied by seeing if any car overlaps
            # it by more than 0.15 using IoU
            if max_IoU_overlap < 0.15:
                # Parking space not occupied! Draw a green box around it
                cv2.rectangle(frame, (x1, y1), (x2, y2), (0, 255, 0), 3)
                # Flag that we have seen at least one open space
                free_space = True
            else:
                # Parking space is still occupied - draw a red box around it
                cv2.rectangle(frame, (x1, y1), (x2, y2), (0, 0, 255), 1)

            # Write the IoU measurement inside the box
            font = cv2.FONT_HERSHEY_DUPLEX
            cv2.putText(frame, f"{max_IoU_overlap:0.2}", (x1 + 6, y2 - 6), font, 0.3, (255, 255, 255))

        # If at least one space was free, start counting frames
        # This is so we don't alert based on one frame of a spot being open.
        # This helps prevent the script triggered on one bad detection.
        if free_space:
            free_space_frames += 1
        else:
            # If no spots are free, reset the count
            free_space_frames = 0

        # If a space has been free for several frames, we are pretty sure it is really free!
        if free_space_frames > 10:
            # Write SPACE AVAILABLE!! at the top of the screen
            font = cv2.FONT_HERSHEY_DUPLEX
            cv2.putText(frame, f"SPACE AVAILABLE!", (10, 150), font, 3.0, (0, 255, 0), 2, cv2.FILLED)

            # If we haven't sent an SMS yet, sent it!
            if not sms_sent:
                print("SENDING SMS!!!")
                message = client.messages.create(
                    body="Parking space open - go go go!",
                    from_=twilio_phone_number,
                    to=destination_phone_number
                )
                sms_sent = True

        # Show the frame of video on the screen
        cv2.imshow('Video', frame)

    # Hit 'q' to quit
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# Clean up everything when finished
video_capture.release()
cv2.destroyAllWindows()
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To run this code, you’ll need to first install Python 3.6+, <a href="https://github.com/matterport/Mask_RCNN" target="_self">Matterport Mask R-CNN</a> and <a href="https://pypi.org/project/opencv-python/" target="_self">OpenCV</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I’ve purposely kept the code as barebones as possible. For example, it just assumes whatever cars are present in the first frame of video are the parked cars. Try playing around with it and seeing if you can improve its reliability.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Don’t be afraid to adapt the code to work in different scenarios. Just by changing the object ids that the model looks for, you can turn the code into something else entirely. For example, imagine that you worked at a ski resort. With a few tweaks, you could turn this script into a system that automatically detects snow boarders jumping off a ramp and creates highlight reels of cool snowboard jumps. Or if you work on a game reserve, you could turn this into a system that counts zebras seen in the wild. The only limit is your imagination. Have fun!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you liked this article, consider signing up for my <a href="https://www.machinelearningisfun.com/" target="_self">Machine Learning is Fun!</a> newsletter:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><a href="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fupscri.be%2F947d84%3Fas_embed%3Dtrue&url=https%3A%2F%2Fupscri.be%2F947d84%2F&image=https%3A%2F%2Fupscri.be%2Fmedia%2Fform.jpg&key=d04bfffea46d4aeda930ec88cc64b87c&type=text%2Fhtml&schema=upscri">Click Here!</a></p></div></div></div></section><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can also follow me on Twitter at <a href="https://twitter.com/ageitgey" target="_self">@ageitgey</a>, <a href="mailto:ageitgey@gmail.com" target="_self">email me directly</a> or <a href="https://www.linkedin.com/in/ageitgey" target="_self">find me on LinkedIn</a>. I’d love to hear from you if I can help you or your team with machine learning. And don’t forget to <a href="https://machinelearningisfun.com/get-the-book" target="_self">check out my new book</a>!</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>