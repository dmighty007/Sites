<!DOCTYPE html>
                <html>
                <head>
                    <title>Deep Learning CNN’s in Tensorflow with GPUs</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/hackernoon/deep-learning-cnns-in-tensorflow-with-gpus-cba6efe0acc2"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@ColeMurray?source=post_page-----cba6efe0acc2--------------------------------">Author : Cole Murray</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Deep Learning CNN’s in Tensorflow with GPUs</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*4-9rcFvShvsA4mhCpRHaSg.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*4-9rcFvShvsA4mhCpRHaSg.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In <a href="https://medium.com/google-cloud/keras-inception-v3-on-google-compute-engine-a54918b0058" target="_self">my last tutorial</a>, you created a complex convolutional neural <a href="https://hackernoon.com/tagged/network" target="_self">network</a> from a pre-trained inception v3 model.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this tutorial, you’ll learn the architecture of a convolutional neural network (CNN), how to create a CNN in Tensorflow, and provide predictions on labels of images. Finally, you’ll learn how to run the model on a GPU so you can spend your time creating better models, not waiting for them to converge.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:67%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 500px" srcset="https://miro.medium.com/v2/resize:fit:640/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 1100w, https://miro.medium.com/v2/resize:fit:1000/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 1000w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 500px" srcset="https://miro.medium.com/v2/resize:fit:640/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 1100w, https://miro.medium.com/v2/resize:fit:1000/1*yoZCHE1TOfCNbCXoNYx3Tw.gif 1000w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/500/1*yoZCHE1TOfCNbCXoNYx3Tw.gif"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><strong>Overview</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Introduction to CNN’s</li><li class="ff3" style="font-size:22px;">Creating your first CNN and training on CPU</li><li class="ff3" style="font-size:22px;">Training on a GPU</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Prerequisites</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Basic machine learning understanding</li><li class="ff3" style="font-size:22px;">Basic Tensorflow understanding</li><li class="ff3" style="font-size:22px;">AWS account (for gpu)</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Convolutional Neural Networks</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Convolutional neural networks are the current state-of-art architecture for image classification. They’re used in practice today in facial recognition, self driving cars, and detecting whether an object is a hot-dog.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Basic Architecture</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The basics of a CNN architecture consist of 3 components. A convolution, pooling, and fully connected layer. These components work together to learn a dense feature representation of an input.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Convolution</strong></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:52%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 395px" srcset="https://miro.medium.com/v2/resize:fit:640/1*1VJDP6qDY9-ExTuQVEOlVg.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*1VJDP6qDY9-ExTuQVEOlVg.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*1VJDP6qDY9-ExTuQVEOlVg.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*1VJDP6qDY9-ExTuQVEOlVg.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*1VJDP6qDY9-ExTuQVEOlVg.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*1VJDP6qDY9-ExTuQVEOlVg.gif 1100w, https://miro.medium.com/v2/resize:fit:790/1*1VJDP6qDY9-ExTuQVEOlVg.gif 790w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 395px" srcset="https://miro.medium.com/v2/resize:fit:640/1*1VJDP6qDY9-ExTuQVEOlVg.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*1VJDP6qDY9-ExTuQVEOlVg.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*1VJDP6qDY9-ExTuQVEOlVg.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*1VJDP6qDY9-ExTuQVEOlVg.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*1VJDP6qDY9-ExTuQVEOlVg.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*1VJDP6qDY9-ExTuQVEOlVg.gif 1100w, https://miro.medium.com/v2/resize:fit:790/1*1VJDP6qDY9-ExTuQVEOlVg.gif 790w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/395/1*1VJDP6qDY9-ExTuQVEOlVg.gif"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Image from <a href="https://github.com/vdumoulin/conv_arithmetic" target="_self">https://github.com/vdumoulin/conv_arithmetic</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A convolution consists of a <strong>kernel </strong><em>(green square above)</em>, also called filter, that is applied in a sliding window fashion to extract features from the input. This filter is shifted after each operation across the input by an amount called <strong>strides. </strong>At each operation, a matrix multiply of the kernel and current region of input is calculated. Filters can be stacked to create high-dimensional representations of the input.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">What happens if the filter doesn’t evenly map to the size of the input ?</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are two ways of handling differing filter size and input size, known as <strong>same</strong> padding and <strong>valid </strong>padding<strong>.</strong> Same padding will pad the input border with zeros (as seen above) to ensure the input width and height are preserved. Valid padding does not pad.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>Typically, you’ll want to use same padding or you’ll rapidly reduce the dimensionality of your input.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Finally, an activation function (typically a <a href="https://en.wikipedia.org/wiki/Rectifier_(neural_networks)" target="_self">ReLU</a>) is applied to give the convolution non-linearity. ReLU’s are a bit different from other activation functions, such as sigmoid or tanh, as ReLUs are one-sided. This one-sided property allows the network to create sparse representation (zero value for hidden units), increasing computational efficiency.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:35%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 277px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*5dklg6CDKStDhmkL2SPfmA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*5dklg6CDKStDhmkL2SPfmA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*5dklg6CDKStDhmkL2SPfmA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*5dklg6CDKStDhmkL2SPfmA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*5dklg6CDKStDhmkL2SPfmA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*5dklg6CDKStDhmkL2SPfmA.png 1100w, https://miro.medium.com/v2/resize:fit:554/format:webp/1*5dklg6CDKStDhmkL2SPfmA.png 554w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 277px" srcset="https://miro.medium.com/v2/resize:fit:640/1*5dklg6CDKStDhmkL2SPfmA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*5dklg6CDKStDhmkL2SPfmA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*5dklg6CDKStDhmkL2SPfmA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*5dklg6CDKStDhmkL2SPfmA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*5dklg6CDKStDhmkL2SPfmA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*5dklg6CDKStDhmkL2SPfmA.png 1100w, https://miro.medium.com/v2/resize:fit:554/1*5dklg6CDKStDhmkL2SPfmA.png 554w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/277/1*5dklg6CDKStDhmkL2SPfmA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">ReLU</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Pooling</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Pooling is an operation to reduce dimensionality. It applies a function summarizing neighboring information. Two common functions are max pooling and average pooling. By calculating the max of an input region, the output summarizes intensity of surrounding values.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Pooling layers also have a kernel, padding and are moved in strides. To calculate the output size of a pooling operation, you can use the formula</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span> (Input Width - kernel width + 2 * padding) / strides + 1. </span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Ixw2W_3ZPiaerKNOrEcXig.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Fully Connected Layer</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Fully connected layers you are likely familiar with from neural networks. Each neuron in the input is connected to each neuron in the output; fully-connected. Due to this connectivity, each neuron in the output will be used at most one time.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:8%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 88px" srcset="https://miro.medium.com/v2/resize:fit:640/1*JnvYW8ehgC92BYY9v9ZXZg.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*JnvYW8ehgC92BYY9v9ZXZg.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*JnvYW8ehgC92BYY9v9ZXZg.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*JnvYW8ehgC92BYY9v9ZXZg.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*JnvYW8ehgC92BYY9v9ZXZg.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*JnvYW8ehgC92BYY9v9ZXZg.gif 1100w, https://miro.medium.com/v2/resize:fit:176/1*JnvYW8ehgC92BYY9v9ZXZg.gif 176w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 88px" srcset="https://miro.medium.com/v2/resize:fit:640/1*JnvYW8ehgC92BYY9v9ZXZg.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*JnvYW8ehgC92BYY9v9ZXZg.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*JnvYW8ehgC92BYY9v9ZXZg.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*JnvYW8ehgC92BYY9v9ZXZg.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*JnvYW8ehgC92BYY9v9ZXZg.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*JnvYW8ehgC92BYY9v9ZXZg.gif 1100w, https://miro.medium.com/v2/resize:fit:176/1*JnvYW8ehgC92BYY9v9ZXZg.gif 176w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/88/1*JnvYW8ehgC92BYY9v9ZXZg.gif"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:43%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 333px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Kdnux0Kw1yQ4D8dq__mYCA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Kdnux0Kw1yQ4D8dq__mYCA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Kdnux0Kw1yQ4D8dq__mYCA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Kdnux0Kw1yQ4D8dq__mYCA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Kdnux0Kw1yQ4D8dq__mYCA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Kdnux0Kw1yQ4D8dq__mYCA.png 1100w, https://miro.medium.com/v2/resize:fit:666/format:webp/1*Kdnux0Kw1yQ4D8dq__mYCA.png 666w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 333px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Kdnux0Kw1yQ4D8dq__mYCA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Kdnux0Kw1yQ4D8dq__mYCA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Kdnux0Kw1yQ4D8dq__mYCA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Kdnux0Kw1yQ4D8dq__mYCA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Kdnux0Kw1yQ4D8dq__mYCA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Kdnux0Kw1yQ4D8dq__mYCA.png 1100w, https://miro.medium.com/v2/resize:fit:666/1*Kdnux0Kw1yQ4D8dq__mYCA.png 666w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/333/1*Kdnux0Kw1yQ4D8dq__mYCA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fully connected neural network</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In a CNN, the input is fed from the pooling layer into the fully connected layer. Depending on the task, a regression or classification algorithm can be applied to create the desired output.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Review</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You’ve now learned about what makes up a convolutional neural network. By passing input through a convolution, you extract highly-dimensional features. Pooling summarizes spatial information and reduces dimensionality. Lastly, this feature representation is passed through fully connected layers to a classifier or regressor.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*XbuW8WuRrAY5pC4t-9DZAQ.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Full CNN Architecture (<a href="https://www.mathworks.com/content/mathworks/www/en/discovery/convolutional-neural-network/jcr:content/mainParsys/image_copy.adapt.full.high.jpg/1492406018870.jpg" target="_self">source</a>)</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Creating a CNN in Tensorflow</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that you have the idea behind a convolutional neural network, you’ll code one in Tensorflow.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You’ll be creating a CNN to train against the <a href="https://pjreddie.com/projects/mnist-in-csv/" target="_self">MNIST (Images of handwritten digits) dataset</a>. After training, you’ll achieve ~98.0% accuracy @ 10k iterations.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Setup Environment</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">First you’ll need to setup your environment. Additionally, you’ll create a setup.py file. Anaconda environment files for python3.5 and python2.7 are listed below.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>name: mnist-conv2d-tutorial
channels:
- conda-forge
- defaults
dependencies:
- mock=2.0.0=py35_0
- pbr=3.0.1=py35_0
- protobuf=3.3.0=py35_0
- six=1.10.0=py35_1
- tensorflow=1.0.0=py35_0
- mkl=2017.0.1=0
- numpy=1.12.1=py35_0
- openssl=1.0.2l=0
- pip=9.0.1=py35_1
- python=3.5.3=1
- readline=6.2=2
- setuptools=27.2.0=py35_0
- sqlite=3.13.0=0
- tk=8.5.18=0
- wheel=0.29.0=py35_0
- xz=5.2.2=1
- zlib=1.2.8=3
prefix: /Users/user/anaconda3/envs/mnist-conv2d-tutorial

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>name: mnist-conv2d-tutorial
channels:
- conda-forge
- defaults
dependencies:
- funcsigs=1.0.2=py27_0
- mock=2.0.0=py27_0
- pbr=3.0.1=py27_0
- protobuf=3.3.0=py27_0
- six=1.10.0=py27_1
- tensorflow=1.0.0=py27_0
- mkl=2017.0.1=0
- numpy=1.12.1=py27_0
- openssl=1.0.2l=0
- pip=9.0.1=py27_1
- python=2.7.13=0
- readline=6.2=2
- setuptools=27.2.0=py27_0
- sqlite=3.13.0=0
- tk=8.5.18=0
- wheel=0.29.0=py27_0
- zlib=1.2.8=3
- pip:
  - mnist-conv2d-medium-tutorial==0.0.0
prefix: /Users/user/anaconda3/envs/mnist-conv2d-tutorial

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you do not use anaconda, you can install tensorflow via pip:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ pip install tensorflow</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from setuptools import setup, find_packages

setup(name='mnist_conv2d_medium_tutorial',
      packages=find_packages(exclude=['tests']),
      zip_safe=False,
      keywords=['convolutional neural network', 'neural network', 'tensorflow', 'mnist'])</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Run:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>python3 setup.py develop</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">The Data</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*llfCENtH771mzqPs3SGabA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*llfCENtH771mzqPs3SGabA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*llfCENtH771mzqPs3SGabA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*llfCENtH771mzqPs3SGabA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*llfCENtH771mzqPs3SGabA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*llfCENtH771mzqPs3SGabA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*llfCENtH771mzqPs3SGabA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*llfCENtH771mzqPs3SGabA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*llfCENtH771mzqPs3SGabA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*llfCENtH771mzqPs3SGabA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*llfCENtH771mzqPs3SGabA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*llfCENtH771mzqPs3SGabA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*llfCENtH771mzqPs3SGabA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*llfCENtH771mzqPs3SGabA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*llfCENtH771mzqPs3SGabA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Mnist Data</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here, you’ll create 3 separate inputs; a training set, validation set, and test set. A validation set allows you to better train your model by providing additional data to tune hyper parameters against.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Download the Data</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The data can be retrieved with this command:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ curl <a href="https://pjreddie.com/media/files/mnist_train.csv" rel="noopener ugc nofollow" target="_blank">https://pjreddie.com/media/files/mnist_train.csv</a> -o data/mnist_train.csv # 104 MB</span><span>$ curl <a href="https://pjreddie.com/media/files/mnist_test.csv" rel="noopener ugc nofollow" target="_blank">https://pjreddie.com/media/files/mnist_test.csv</a> -o data/mnist_test.csv # 17.4 MB</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import numpy as np

IMAGE_SIZE = 28


def load_train_data(data_path, validation_size=500):
    """
    Load mnist data. Each row in csv is formatted (label, input)
    :return: 3D Tensor input of train and validation set with 2D Tensor of one hot encoded image labels
    """
    # Data format: 1 byte label, 28 * 28 input
    train_data = np.genfromtxt(data_path, delimiter=',', dtype=np.float32)
    x_train = train_data[:, 1:]

    # Get label and one-hot encode
    y_train = train_data[:, 0]
    y_train = (np.arange(10) == y_train[:, None]).astype(np.float32)

    # get a validation set and remove it from the train set
    x_train, x_val, y_train, y_val = x_train[0:(len(x_train) - validation_size), :], x_train[(
        len(x_train) - validation_size):len(x_train), :], \
                                     y_train[0:(len(y_train) - validation_size), :], y_train[(
        len(y_train) - validation_size):len(y_train), :]

    # reformat the data so it's not flat
    x_train = x_train.reshape(len(x_train), IMAGE_SIZE, IMAGE_SIZE, 1)
    x_val = x_val.reshape(len(x_val), IMAGE_SIZE, IMAGE_SIZE, 1)

    return x_train, x_val, y_train, y_val


def load_test_data(data_path):
    """
    Load mnist test data
    :return: 3D Tensor input of train and validation set with 2D Tensor of one hot encoded image labels
    """
    test_data = np.genfromtxt(data_path, delimiter=',', dtype=np.float32)
    x_test = test_data[:, 1:]

    y_test = np.array(test_data[:, 0])
    y_test = (np.arange(10) == y_test[:, None]).astype(np.float32)

    x_test = x_test.reshape(len(x_test), IMAGE_SIZE, IMAGE_SIZE, 1)

    return x_test, y_test
</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">mnist.py</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Architecture</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here, you’ll create a few helper functions for creating the network. These functions are used to create the individual components discussed earlier.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Helper Functions / Model definition:</strong></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import tensorflow as tf


class Model(object):
    def __init__(self, batch_size=128, learning_rate=1e-4, num_labels=10):
        self._batch_size = batch_size
        self._learning_rate = learning_rate
        self._num_labels = num_labels

    def inference(self, images, keep_prob):
        pass

    def train(self, loss, global_step):
        pass

    def loss(self, logits, labels):
        pass
    
    def accuracy(self, logits, labels):
        pass

    def _create_conv2d(self, x, W):
        return tf.nn.conv2d(input=x,
                            filter=W,
                            strides=[1, 1, 1, 1],
                            padding='SAME')

    def _create_max_pool_2x2(self, input):
        return tf.nn.max_pool(value=input,
                              ksize=[1, 2, 2, 1],
                              strides=[1, 2, 2, 1],
                              padding='SAME')

    def _create_weights(self, shape):
        return tf.Variable(tf.truncated_normal(shape=shape, stddev=0.1, dtype=tf.float32))

    def _create_bias(self, shape):
        return tf.Variable(tf.constant(1., shape=shape, dtype=tf.float32))

    def _activation_summary(self, x):
        tensor_name = x.op.name
        tf.summary.histogram(tensor_name + '/activations', x)
        tf.summary.scalar(tensor_name + '/sparsity', tf.nn.zero_fraction(x))
</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Helper Functions and Model Definition</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Model</strong></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*fUR04A6OBbjmgQ-QJ87-Lg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*fUR04A6OBbjmgQ-QJ87-Lg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*fUR04A6OBbjmgQ-QJ87-Lg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*fUR04A6OBbjmgQ-QJ87-Lg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*fUR04A6OBbjmgQ-QJ87-Lg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*fUR04A6OBbjmgQ-QJ87-Lg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*fUR04A6OBbjmgQ-QJ87-Lg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*fUR04A6OBbjmgQ-QJ87-Lg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*fUR04A6OBbjmgQ-QJ87-Lg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*fUR04A6OBbjmgQ-QJ87-Lg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*fUR04A6OBbjmgQ-QJ87-Lg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*fUR04A6OBbjmgQ-QJ87-Lg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*fUR04A6OBbjmgQ-QJ87-Lg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*fUR04A6OBbjmgQ-QJ87-Lg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*fUR04A6OBbjmgQ-QJ87-Lg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Tensorflow Graph of Model</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here’s the code for training the model. The three public functions are explained below:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import tensorflow as tf


class Model(object):
    def __init__(self, batch_size=128, learning_rate=1e-4, num_labels=10):
        self._batch_size = batch_size
        self._learning_rate = learning_rate
        self._num_labels = num_labels

    def inference(self, images, keep_prob):
        with tf.variable_scope('conv1') as scope:
            kernel = self._create_weights([5, 5, 1, 32])
            conv = self._create_conv2d(images, kernel)
            bias = self._create_bias([32])
            preactivation = tf.nn.bias_add(conv, bias)
            conv1 = tf.nn.relu(preactivation, name=scope.name)
            self._activation_summary(conv1)

        # pool 1
        h_pool1 = self._create_max_pool_2x2(conv1)

        with tf.variable_scope('conv2') as scope:
            kernel = self._create_weights([5, 5, 32, 64])
            conv = self._create_conv2d(h_pool1, kernel)
            bias = self._create_bias([64])
            preactivation = tf.nn.bias_add(conv, bias)
            conv2 = tf.nn.relu(preactivation, name=scope.name)
            self._activation_summary(conv2)

        # pool 2
        h_pool2 = self._create_max_pool_2x2(conv2)

        with tf.variable_scope('local1') as scope:
            reshape = tf.reshape(h_pool2, [-1, 7 * 7 * 64])
            W_fc1 = self._create_weights([7 * 7 * 64, 1024])
            b_fc1 = self._create_bias([1024])
            local1 = tf.nn.relu(tf.matmul(reshape, W_fc1) + b_fc1, name=scope.name)
            self._activation_summary(local1)

        with tf.variable_scope('local2_linear') as scope:
            W_fc2 = self._create_weights([1024, self._num_labels])
            b_fc2 = self._create_bias([self._num_labels])
            local1_drop = tf.nn.dropout(local1, keep_prob)
            local2 = tf.nn.bias_add(tf.matmul(local1_drop, W_fc2), b_fc2, name=scope.name)
            self._activation_summary(local2)
        return local2

    def train(self, loss, global_step):
        tf.summary.scalar('learning_rate', self._learning_rate)
        train_op = tf.train.AdamOptimizer(self._learning_rate).minimize(loss, global_step=global_step)
        return train_op

    def loss(self, logits, labels):
        with tf.variable_scope('loss') as scope:
            cross_entropy = tf.nn.softmax_cross_entropy_with_logits(logits=logits, labels=labels)
            cost = tf.reduce_mean(cross_entropy, name=scope.name)
            tf.summary.scalar('cost', cost)

        return cost

    def accuracy(self, logits, labels):
        with tf.variable_scope('accuracy') as scope:
            accuracy = tf.reduce_mean(tf.cast(tf.equal(tf.argmax(logits, 1), tf.argmax(labels, 1)), dtype=tf.float32),
                                      name=scope.name)
            tf.summary.scalar('accuracy', accuracy)
        return accuracy

    def _create_conv2d(self, x, W):
        return tf.nn.conv2d(input=x,
                            filter=W,
                            strides=[1, 1, 1, 1],
                            padding='SAME')

    def _create_max_pool_2x2(self, input):
        return tf.nn.max_pool(value=input,
                              ksize=[1, 2, 2, 1],
                              strides=[1, 2, 2, 1],
                              padding='SAME')

    def _create_weights(self, shape):
        return tf.Variable(tf.truncated_normal(shape=shape, stddev=0.1, dtype=tf.float32))

    def _create_bias(self, shape):
        return tf.Variable(tf.constant(1., shape=shape, dtype=tf.float32))

    def _activation_summary(self, x):
        tensor_name = x.op.name
        tf.summary.histogram(tensor_name + '/activations', x)
        tf.summary.scalar(tensor_name + '/sparsity', tf.nn.zero_fraction(x))
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Code is available here: <a href="https://github.com/ColeMurray/tensorflow-cnn-tutorial/tree/add_model_functions" target="_self">https://github.com/ColeMurray/tensorflow-cnn-tutorial/tree/add_model_functions</a></p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Inference.</strong><em> </em>This function is responsible for creating a prediction it believes the input represents. Here, it will return a 1x10 tensor for each input. Values contained in this tensor will be passed to the loss function to determine how far off this prediction is from ground truth.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As indicated by the batch_size hyper parameter, you are processing 128 images at a time. This technique is known as mini-batch. By processing inputs in smaller batches, as opposed to the entire dataset, input can be fit in memory. Additionally, the model will converge more rapidly due to updating the weights after each batch rather than after processing all examples.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Loss. </strong>Here, you’ll use the softmax cross entropy function to perform an N way classification. The softmax function is used to normalize (summing the tensor adds to one) the input produced from the inference function.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With this normalized tensor, cross entropy is calculated against the one hot encoded labels. Cross entropy gives a measure of how far off the prediction is from the ground truth. Each iteration, an optimizer is applied to minimize this cross entropy.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:16%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 140px" srcset="https://miro.medium.com/v2/resize:fit:640/1*yoVaLBlsQhytzMDbfx300g.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*yoVaLBlsQhytzMDbfx300g.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*yoVaLBlsQhytzMDbfx300g.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*yoVaLBlsQhytzMDbfx300g.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*yoVaLBlsQhytzMDbfx300g.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*yoVaLBlsQhytzMDbfx300g.gif 1100w, https://miro.medium.com/v2/resize:fit:280/1*yoVaLBlsQhytzMDbfx300g.gif 280w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 140px" srcset="https://miro.medium.com/v2/resize:fit:640/1*yoVaLBlsQhytzMDbfx300g.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*yoVaLBlsQhytzMDbfx300g.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*yoVaLBlsQhytzMDbfx300g.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*yoVaLBlsQhytzMDbfx300g.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*yoVaLBlsQhytzMDbfx300g.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*yoVaLBlsQhytzMDbfx300g.gif 1100w, https://miro.medium.com/v2/resize:fit:280/1*yoVaLBlsQhytzMDbfx300g.gif 280w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/140/1*yoVaLBlsQhytzMDbfx300g.gif"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">cross entropy</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*0U4IG8NWW3c1W3XbG-09jA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*0U4IG8NWW3c1W3XbG-09jA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*0U4IG8NWW3c1W3XbG-09jA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*0U4IG8NWW3c1W3XbG-09jA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*0U4IG8NWW3c1W3XbG-09jA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*0U4IG8NWW3c1W3XbG-09jA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*0U4IG8NWW3c1W3XbG-09jA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*0U4IG8NWW3c1W3XbG-09jA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*0U4IG8NWW3c1W3XbG-09jA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*0U4IG8NWW3c1W3XbG-09jA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*0U4IG8NWW3c1W3XbG-09jA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*0U4IG8NWW3c1W3XbG-09jA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*0U4IG8NWW3c1W3XbG-09jA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*0U4IG8NWW3c1W3XbG-09jA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*0U4IG8NWW3c1W3XbG-09jA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Loss after training</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Train & Evaluate</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Below you’ll train the model for 10k iterations. Each 1000 iterations, you’ll test the model against the validation set to get an idea of the accuracy. Finally, you’ll evaluate the trained model against the test dataset to get a measure of out-of-sample accuracy. At 10k iterations, you should see accuracy around 98.0%.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To execute this code, run this command:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ python3 mnist_conv2d_medium_tutorial/train.py</span><span><em>(Building the computational graph can take a few seconds depending on hardware)</em></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import tensorflow as tf

import mnist_conv2d_medium_tutorial.mnist as mnist
from mnist_conv2d_medium_tutorial.model import Model

FLAGS = tf.app.flags.FLAGS
NUM_LABELS = 10


def train():
    model = Model()

    with tf.Graph().as_default():
        images, val_images, labels, val_labels = mnist.load_train_data(FLAGS.train_data)

        x = tf.placeholder(shape=[None, mnist.IMAGE_SIZE, mnist.IMAGE_SIZE, 1], dtype=tf.float32, name='x')
        y = tf.placeholder(shape=[None, NUM_LABELS], dtype=tf.float32, name='y')
        keep_prob = tf.placeholder(tf.float32, name='dropout_prob')
        global_step = tf.contrib.framework.get_or_create_global_step()

        logits = model.inference(x, keep_prob=keep_prob)
        loss = model.loss(logits=logits, labels=y)

        accuracy = model.accuracy(logits, y)
        summary_op = tf.summary.merge_all()
        train_op = model.train(loss, global_step=global_step)

        init = tf.global_variables_initializer()
        saver = tf.train.Saver()

        with tf.Session(config=tf.ConfigProto(log_device_placement=True)) as sess:
            writer = tf.summary.FileWriter(FLAGS.summary_dir, sess.graph)
            sess.run(init)
            for i in range(FLAGS.num_iter):
                offset = (i * FLAGS.batch_size) % (len(images) - FLAGS.batch_size)
                batch_x, batch_y = images[offset:(offset + FLAGS.batch_size), :], labels[
                                                                                  offset:(offset + FLAGS.batch_size), :]

                _, cur_loss, summary = sess.run([train_op, loss, summary_op],
                                                feed_dict={x: batch_x, y: batch_y, keep_prob: 0.5})
                writer.add_summary(summary, i)
                print(i, cur_loss)
                if i % 1000 == 0:
                    validation_accuracy = accuracy.eval(feed_dict={x: val_images, y: val_labels, keep_prob: 1.0})
                    print('Iter {} Accuracy: {}'.format(i, validation_accuracy))

                if i == FLAGS.num_iter - 1:
                    saver.save(sess, FLAGS.checkpoint_file_path, global_step)


def main(argv=None):
    train()


if __name__ == '__main__':
    tf.app.flags.DEFINE_integer('batch_size', 128, 'size of training batches')
    tf.app.flags.DEFINE_integer('num_iter', 10000, 'number of training iterations')
    tf.app.flags.DEFINE_string('checkpoint_file_path', 'checkpoints/model.ckpt-10000', 'path to checkpoint file')
    tf.app.flags.DEFINE_string('train_data', 'data/mnist_train.csv', 'path to train and test data')
    tf.app.flags.DEFINE_string('summary_dir', 'graphs', 'path to directory for storing summaries')

    tf.app.run()
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With the model trained, you’ll now evaluate it on the test set from the last checkpoint.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import tensorflow as tf

from mnist_conv2d_medium_tutorial import mnist
from mnist_conv2d_medium_tutorial.model import Model

FLAGS = tf.app.flags.FLAGS


def evaluate():
    with tf.Graph().as_default():
        images, labels = mnist.load_test_data(FLAGS.test_data)
        model = Model()

        logits = model.inference(images, keep_prob=1.0)
        accuracy = model.accuracy(logits, labels)

        saver = tf.train.Saver()

        with tf.Session() as sess:
            tf.global_variables_initializer().run()
            saver.restore(sess, FLAGS.checkpoint_file_path)

            total_accuracy = sess.run([accuracy])
            print('Test accuracy: {}'.format(total_accuracy))


def main(argv=None):
    evaluate()


if __name__ == '__main__':
    tf.app.flags.DEFINE_string('checkpoint_file_path', 'checkpoints/model.ckpt-10000', 'path to checkpoint file')
    tf.app.flags.DEFINE_string('test_data', 'data/mnist_test.csv', 'path to test data')

    tf.app.run()
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ python3 mnist_conv2d_medium_tutorial/evaluate.py</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Code up to this point: <a href="https://github.com/ColeMurray/tensorflow-cnn-tutorial/tree/train_and_evaluate" target="_self">https://github.com/ColeMurray/tensorflow-cnn-tutorial/tree/train_and_evaluate</a></p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can visualize your results by running:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ tensorboard --logdir=graphs/ --port=6006</span><span>navigate in browser: localhost:6006</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Training on a GPU</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you noticed, training a CNN can be quite slow due to the amount of computations required for each iteration. You’ll now use GPU’s to speed up the computation.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Tensorflow, by default, gives higher priority to GPU’s when placing operations if both CPU and GPU are available for the given operation. For simplifying the tutorial, you won’t explicitly define operation placement. You can read more about how to do this <a href="https://www.tensorflow.org/tutorials/using_gpu" target="_self">here</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Create a GPU Box</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For this tutorial, you’ll use a community AMI. Head over to the AWS console and launch a new EC2 instance. At the AMI screen, select community and enter this AMI id: <strong>ami-5e853c48. </strong>This AMI comes with Tensorflow and Nvidia drivers with CUDA pre-installed.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ht_GJ2WfTCf1RwlJFwO0zg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ht_GJ2WfTCf1RwlJFwO0zg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ht_GJ2WfTCf1RwlJFwO0zg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ht_GJ2WfTCf1RwlJFwO0zg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ht_GJ2WfTCf1RwlJFwO0zg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ht_GJ2WfTCf1RwlJFwO0zg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ht_GJ2WfTCf1RwlJFwO0zg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ht_GJ2WfTCf1RwlJFwO0zg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ht_GJ2WfTCf1RwlJFwO0zg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ht_GJ2WfTCf1RwlJFwO0zg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ht_GJ2WfTCf1RwlJFwO0zg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ht_GJ2WfTCf1RwlJFwO0zg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ht_GJ2WfTCf1RwlJFwO0zg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ht_GJ2WfTCf1RwlJFwO0zg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ht_GJ2WfTCf1RwlJFwO0zg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Ami id: <strong>ami-5e853c48</strong></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For instance type, select G2.2xlarge. After selecting an instance type, be sure to create a key-pair. This key-pair will allow you to <a href="https://en.wikipedia.org/wiki/Secure_Shell" target="_self">ssh</a> into the instance and copy/execute your code.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*QSxuckLyy7-lDNnE6r269g.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*QSxuckLyy7-lDNnE6r269g.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*QSxuckLyy7-lDNnE6r269g.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*QSxuckLyy7-lDNnE6r269g.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*QSxuckLyy7-lDNnE6r269g.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*QSxuckLyy7-lDNnE6r269g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*QSxuckLyy7-lDNnE6r269g.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*QSxuckLyy7-lDNnE6r269g.png 640w, https://miro.medium.com/v2/resize:fit:720/1*QSxuckLyy7-lDNnE6r269g.png 720w, https://miro.medium.com/v2/resize:fit:750/1*QSxuckLyy7-lDNnE6r269g.png 750w, https://miro.medium.com/v2/resize:fit:786/1*QSxuckLyy7-lDNnE6r269g.png 786w, https://miro.medium.com/v2/resize:fit:828/1*QSxuckLyy7-lDNnE6r269g.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*QSxuckLyy7-lDNnE6r269g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*QSxuckLyy7-lDNnE6r269g.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*QSxuckLyy7-lDNnE6r269g.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">G2.2xlarge</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Sync Your Code</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that your instance is created, you’ll need to copy your code and dataset onto it. The easiest way to do this is with rsync. <a href="https://linux.die.net/man/1/rsync" target="_self">Rsync</a> is a unix command built on top of ssh that allows for efficient file transfer. It’s highly flexible, offering multiple options to directly alter the behavior. Below, the command will copy your project directory to your gpu instance user’s home directory.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>rsync -trucv mnist_conv2d_medium_tutorial <strong>ip-address-of-your-gpu-box:/home/ubuntu/</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Run the code</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Below, you’ll ssh into the instance and install the package. After installation, run the train command. After running the train command, you’ll see output indicating where the operations are being placed. As shown below, operations are being placed onto the gpu as expected.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ ssh ubuntu@ip-address-of-your-gpu-box<br/>$ cd mnist-conv2d-medium-tutorial<br/>$ pip3 install .<br/>$ python3 mnist_conv2d_medium_tutorial/train.py</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*mJDHnJWa5pbNwAbulk3hxg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*mJDHnJWa5pbNwAbulk3hxg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*mJDHnJWa5pbNwAbulk3hxg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*mJDHnJWa5pbNwAbulk3hxg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*mJDHnJWa5pbNwAbulk3hxg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*mJDHnJWa5pbNwAbulk3hxg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*mJDHnJWa5pbNwAbulk3hxg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*mJDHnJWa5pbNwAbulk3hxg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*mJDHnJWa5pbNwAbulk3hxg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*mJDHnJWa5pbNwAbulk3hxg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*mJDHnJWa5pbNwAbulk3hxg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*mJDHnJWa5pbNwAbulk3hxg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*mJDHnJWa5pbNwAbulk3hxg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*mJDHnJWa5pbNwAbulk3hxg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*mJDHnJWa5pbNwAbulk3hxg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Operations being placed on GPU</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After ~20 mins, training will complete and you can run the evaluate command to test against the test set.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ python3 mnist_conv2d_medium_tutorial/evaluate.py</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Conclusion</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this tutorial you learned the concept behind convolutional neural networks. Additionally, you learned the Tensorflow implementation of a basic CNN to achieve ~98.0% accuracy. Finally, you learned how to run your code on a GPU for performance improvement.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Complete Code here:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://github.com/ColeMurray/tensorflow-cnn-tutorial"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">ColeMurray/tensorflow-cnn-tutorial</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">tensorflow-cnn-tutorial - Tensorflow tutorial on convolutional neural networks.</h3><p>github.com</p></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Next Steps:</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Play with hyperparameters (batch size, <a href="https://hackernoon.com/tagged/learning" target="_self">learning</a> rate, kernel size, number of iterations) to see how it affects model performance</li><li class="ff3" style="font-size:22px;">Train and evaluate your model against other datasets (<a href="https://www.cs.toronto.edu/~kriz/cifar.html" target="_self">CIFAR-10</a>)</li><li class="ff3" style="font-size:22px;">Go deeper</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><strong>Call to Action:</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">If you enjoyed this tutorial, follow and recommend!Interested in learning more about Deep Learning / Machine Learning? Check out my other tutorials:<a href="https://medium.com/google-cloud/keras-inception-v3-on-google-compute-engine-a54918b0058" target="_self">- Deep learning with Keras on Google Compute Engine</a><a href="https://medium.com/google-cloud/recommendation-systems-with-spark-on-google-dataproc-bbb276c0dafd" target="_self">- Recommendation Systems with Apache Spark on Google Compute Engine</a>Other places you can find me:- Twitter: <a href="https://twitter.com/_ColeMurray" target="_self">https://twitter.com/_ColeMurray</a></p></div></div></section><section data-bs-version="5.1" class="gallery3 cid-ttaWMCQCls" id="gallery3-7" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container" style="width:60%;"><div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper" >
                    <div class="item-img"><img src ="https://miro.medium.com/v2/resize:fit:668/format:webp/1*0hqOaABQ7XGPT-OYNgiUBg.png" style="height:auto; max-width: 100%;"></div></div></div><br>
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper" >
                    <div class="item-img"><img src ="https://miro.medium.com/v2/resize:fit:668/format:webp/1*Vgw1jkA6hgnvwzTsfMlnpg.png" style="height:auto; max-width: 100%;"></div></div></div><br>
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper" >
                    <div class="item-img"><img src ="https://miro.medium.com/v2/resize:fit:668/format:webp/1*gKBpq1ruUi0FVK2UM_I4tQ.png" style="height:auto; max-width: 100%;"></div></div></div><br></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4"><a href="http://bit.ly/Hackernoon" target="_self">Hacker Noon</a> is how hackers start their afternoons. We’re a part of the <a href="http://bit.ly/atAMIatAMI" target="_self">@AMI</a> family. We are now <a href="http://bit.ly/hackernoonsubmission" target="_self">accepting submissions</a> and happy to <a href="mailto:partners@amipublications.com" target="_self">discuss advertising & sponsorship</a> opportunities.If you enjoyed this story, we recommend reading our <a href="http://bit.ly/hackernoonlatestt" target="_self">latest tech stories</a> and <a href="https://hackernoon.com/trending" target="_self">trending tech stories</a>. Until next time, don’t take the realities of the world for granted!</p></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*35tCjoPcvq6LbB3I6Wegqw.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*35tCjoPcvq6LbB3I6Wegqw.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><a href="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fupscri.be%2Fdde502%3Fas_embed%3Dtrue&dntp=1&url=https%3A%2F%2Fupscri.be%2Fhackernoon%2F&key=a19fcc184b9711e1b4764040d3dc5c07&type=text%2Fhtml&schema=upscri">Click Here!</a></p></div></div></div></section><br></div></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>