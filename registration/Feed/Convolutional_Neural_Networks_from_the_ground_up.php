<!DOCTYPE html>
                <html>
                <head>
                    <title>Convolutional Neural Networks from the ground up</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/convolutional-neural-networks-from-the-ground-up-c67bb41454e1"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@alejandroescontrela?source=post_page-----c67bb41454e1--------------------------------">Author : Alejandro Escontrela</a> </h5></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*dOv2a1ctNrHDo8Zks30Bbw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*dOv2a1ctNrHDo8Zks30Bbw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*dOv2a1ctNrHDo8Zks30Bbw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*dOv2a1ctNrHDo8Zks30Bbw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*dOv2a1ctNrHDo8Zks30Bbw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*dOv2a1ctNrHDo8Zks30Bbw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*dOv2a1ctNrHDo8Zks30Bbw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*dOv2a1ctNrHDo8Zks30Bbw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*dOv2a1ctNrHDo8Zks30Bbw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*dOv2a1ctNrHDo8Zks30Bbw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*dOv2a1ctNrHDo8Zks30Bbw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*dOv2a1ctNrHDo8Zks30Bbw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*dOv2a1ctNrHDo8Zks30Bbw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*dOv2a1ctNrHDo8Zks30Bbw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*dOv2a1ctNrHDo8Zks30Bbw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Visualization of a convolutional neural network. <a href="https://www.kdnuggets.com/2018/02/8-neural-network-architectures-machine-learning-researchers-need-learn.html" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Convolutional Neural Networks from the ground up</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">A NumPy implementation of the famed Convolutional Neural Network: one of the most influential neural network architectures to date.</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When Yann LeCun published his work on the development of a new kind of neural network architecture [1], the Convolutional Neural Network (CNN), his work went largely unnoticed. It took 14 years and a team of researchers from The University of Toronto to bring CNN’s into the public’s view during the 2012 ImageNet Computer Vision competition. Their entry, which they named AlexNet after chief architect Alex Krizhevsky, achieved an error of only 15.8% when tasked with classifying millions of images from thousands of categories [2]. Fast forward to 2018 and the current state-of-the-art Convolutional Neural Networks achieve accuracies that surpass human-level performance [3].</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*CLthIRA4-MQZjJi1.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*CLthIRA4-MQZjJi1.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*CLthIRA4-MQZjJi1.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*CLthIRA4-MQZjJi1.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*CLthIRA4-MQZjJi1.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*CLthIRA4-MQZjJi1.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/0*CLthIRA4-MQZjJi1.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*CLthIRA4-MQZjJi1.png 640w, https://miro.medium.com/v2/resize:fit:720/0*CLthIRA4-MQZjJi1.png 720w, https://miro.medium.com/v2/resize:fit:750/0*CLthIRA4-MQZjJi1.png 750w, https://miro.medium.com/v2/resize:fit:786/0*CLthIRA4-MQZjJi1.png 786w, https://miro.medium.com/v2/resize:fit:828/0*CLthIRA4-MQZjJi1.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*CLthIRA4-MQZjJi1.png 1100w, https://miro.medium.com/v2/resize:fit:1400/0*CLthIRA4-MQZjJi1.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*CLthIRA4-MQZjJi1.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">ImageNet top-5 error 2010–2015. <a href="https://devblogs.nvidia.com/mocha-jl-deep-learning-julia/" target="_self">source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Motivated by these promising results, I set out to understand how CNN’s function, and how it is that they perform so well. As Richard Feynman pointed out, <em>“What I cannot build, I do not understand”</em>, and so to gain a well-rounded understanding of this advancement in AI, I built a convolutional neural network from scratch in NumPy. After finishing this project I feel that there’s a disconnect between how complex convolutional neural networks appear to be, and how complex they really are. Hopefully, you too will share this feeling after building your own network from scratch.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Code for this project can be found <a href="https://github.com/Alescontrela/Numpy-CNN" target="_self">here</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">The Challenge</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">CNN’s are best known for their ability to recognize patterns present in images, and so the task chosen for the network described in this post was that of image classification. One of the most common benchmarks for gauging how well a computer vision algorithm performs is to train it on the <a href="http://yann.lecun.com/exdb/mnist/" target="_self">MNIST handwritten digit database</a>: a collection of 70,000 handwritten digits and their corresponding labels. The goal is to train a CNN to be as accurate as possible when labeling handwritten digits (ranging from 0–9). After about five hours of training and two loops over the training set, the network presented here was able to achieve an accuracy of 98% on the test data, meaning it could correctly guess almost every handwritten digit shown to it.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/format:webp/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 640w, https://miro.medium.com/v2/format:webp/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 720w, https://miro.medium.com/v2/format:webp/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 750w, https://miro.medium.com/v2/format:webp/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 786w, https://miro.medium.com/v2/format:webp/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 828w, https://miro.medium.com/v2/format:webp/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 1100w, https://miro.medium.com/v2/format:webp/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 640w, https://miro.medium.com/v2/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 720w, https://miro.medium.com/v2/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 750w, https://miro.medium.com/v2/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 786w, https://miro.medium.com/v2/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 828w, https://miro.medium.com/v2/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 1100w, https://miro.medium.com/v2/1*9Mjoc_J0JR294YwHGXwCeg.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/proxy/1*9Mjoc_J0JR294YwHGXwCeg.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Example of digits from the MNIST dataset. <a href="https://codeburst.io/use-tensorflow-dnnclassifier-estimator-to-classify-mnist-dataset-a7222bf9f940?gi=4a1246898237" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s go over the individual components that form the network and how they link together to form predictions from the input data. After explaining each component, we will code its functionality. In the last section of this post, we’ll program every piece of the network and train it using NumPy (Code <a href="https://github.com/Alescontrela/Numpy-CNN" target="_self">here</a>). It is important to note that this section assumes at least a working knowledge of linear algebra and calculus, as well as familiarity with the Python programming language. If you are unfamiliar with these domains or are in need of a tune-up, check out <a href="https://arxiv.org/pdf/1802.01528.pdf" target="_self">this publication</a> to learn about linear algebra in the scope of machine learning and <a href="https://www.codecademy.com/learn/learn-python" target="_self">this resource</a> to start programming with Python. Without further ado, let’s get into it.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">How Convolutional Neural Networks learn</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Convolutions</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">CNN’s make use of <strong>filters </strong>(also known as kernels), to detect what features, such as edges, are present throughout an image. A filter is just a matrix of values, called weights, that are trained to detect specific features. The filter moves over each part of the image to check if the feature it is meant to detect is present. To provide a value representing how confident it is that a specific feature is present, the filter carries out a <strong>convolution operation</strong>, which is an element-wise product and sum between two matrices.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/format:webp/0*dRD6PhKOnnCIhz15.jpg 640w, https://miro.medium.com/v2/format:webp/0*dRD6PhKOnnCIhz15.jpg 720w, https://miro.medium.com/v2/format:webp/0*dRD6PhKOnnCIhz15.jpg 750w, https://miro.medium.com/v2/format:webp/0*dRD6PhKOnnCIhz15.jpg 786w, https://miro.medium.com/v2/format:webp/0*dRD6PhKOnnCIhz15.jpg 828w, https://miro.medium.com/v2/format:webp/0*dRD6PhKOnnCIhz15.jpg 1100w, https://miro.medium.com/v2/format:webp/0*dRD6PhKOnnCIhz15.jpg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/0*dRD6PhKOnnCIhz15.jpg 640w, https://miro.medium.com/v2/0*dRD6PhKOnnCIhz15.jpg 720w, https://miro.medium.com/v2/0*dRD6PhKOnnCIhz15.jpg 750w, https://miro.medium.com/v2/0*dRD6PhKOnnCIhz15.jpg 786w, https://miro.medium.com/v2/0*dRD6PhKOnnCIhz15.jpg 828w, https://miro.medium.com/v2/0*dRD6PhKOnnCIhz15.jpg 1100w, https://miro.medium.com/v2/0*dRD6PhKOnnCIhz15.jpg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/proxy/0*dRD6PhKOnnCIhz15.jpg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="http://technodocbox.com/3D_Graphics/70716176-Deep-neural-networks-applications-in-handwriting-recognition.html" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When the feature is present in part of an image, the convolution operation between the filter and that part of the image results in a real number with a high value. If the feature is not present, the resulting value is low.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the following example, a filter that is in charge of checking for right-hand curves is passed over a part of the image. Since that part of the image contains the same curve that the filter is looking for, the result of the convolution operation is a large number (6600).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*rrqwVqUBLgyK6PFWqSI7lA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*rrqwVqUBLgyK6PFWqSI7lA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*rrqwVqUBLgyK6PFWqSI7lA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*rrqwVqUBLgyK6PFWqSI7lA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*rrqwVqUBLgyK6PFWqSI7lA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*rrqwVqUBLgyK6PFWqSI7lA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*rrqwVqUBLgyK6PFWqSI7lA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*rrqwVqUBLgyK6PFWqSI7lA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*rrqwVqUBLgyK6PFWqSI7lA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*rrqwVqUBLgyK6PFWqSI7lA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*rrqwVqUBLgyK6PFWqSI7lA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*rrqwVqUBLgyK6PFWqSI7lA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*rrqwVqUBLgyK6PFWqSI7lA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*rrqwVqUBLgyK6PFWqSI7lA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*rrqwVqUBLgyK6PFWqSI7lA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="https://adeshpande3.github.io/A-Beginner%27s-Guide-To-Understanding-Convolutional-Neural-Networks/" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But when that same filter is passed over a part of the image with a considerably different set of edges, the convolution’s output is small, meaning that there was no strong presence of a right hand curve.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ev0jRDBf0JwPS8C3VuYGHg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ev0jRDBf0JwPS8C3VuYGHg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ev0jRDBf0JwPS8C3VuYGHg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ev0jRDBf0JwPS8C3VuYGHg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ev0jRDBf0JwPS8C3VuYGHg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ev0jRDBf0JwPS8C3VuYGHg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ev0jRDBf0JwPS8C3VuYGHg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ev0jRDBf0JwPS8C3VuYGHg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ev0jRDBf0JwPS8C3VuYGHg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ev0jRDBf0JwPS8C3VuYGHg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ev0jRDBf0JwPS8C3VuYGHg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ev0jRDBf0JwPS8C3VuYGHg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ev0jRDBf0JwPS8C3VuYGHg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ev0jRDBf0JwPS8C3VuYGHg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ev0jRDBf0JwPS8C3VuYGHg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="https://adeshpande3.github.io/A-Beginner%27s-Guide-To-Understanding-Convolutional-Neural-Networks/" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The result of passing this filter over the entire image is an output matrix that stores the convolutions of this filter over various parts of the image. The filter must have the same number of channels as the input image so that the element-wise multiplication can take place. For instance, if the input image contains three channels (RGB, for example), then the filter must contain three channels as well.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The convolution of a filter over a 2D image:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:71%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 526px" srcset="https://miro.medium.com/v2/resize:fit:640/0*WW3aJq2B8V2gLzd3. 640w, https://miro.medium.com/v2/resize:fit:720/0*WW3aJq2B8V2gLzd3. 720w, https://miro.medium.com/v2/resize:fit:750/0*WW3aJq2B8V2gLzd3. 750w, https://miro.medium.com/v2/resize:fit:786/0*WW3aJq2B8V2gLzd3. 786w, https://miro.medium.com/v2/resize:fit:828/0*WW3aJq2B8V2gLzd3. 828w, https://miro.medium.com/v2/resize:fit:1100/0*WW3aJq2B8V2gLzd3. 1100w, https://miro.medium.com/v2/resize:fit:1052/0*WW3aJq2B8V2gLzd3. 1052w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 526px" srcset="https://miro.medium.com/v2/resize:fit:640/0*WW3aJq2B8V2gLzd3. 640w, https://miro.medium.com/v2/resize:fit:720/0*WW3aJq2B8V2gLzd3. 720w, https://miro.medium.com/v2/resize:fit:750/0*WW3aJq2B8V2gLzd3. 750w, https://miro.medium.com/v2/resize:fit:786/0*WW3aJq2B8V2gLzd3. 786w, https://miro.medium.com/v2/resize:fit:828/0*WW3aJq2B8V2gLzd3. 828w, https://miro.medium.com/v2/resize:fit:1100/0*WW3aJq2B8V2gLzd3. 1100w, https://miro.medium.com/v2/resize:fit:1052/0*WW3aJq2B8V2gLzd3. 1052w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/526/0*WW3aJq2B8V2gLzd3."></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="https://rubikscode.net/2018/02/26/introduction-to-convolutional-neural-networks/" target="_self">Introduction to Convolutional Neural Networks</a> by rubikscode</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Additionally, a filter can be slid over the input image at varying intervals, using a <strong>stride</strong> value. The stride value dictates by how much the filter should move at each step. The output dimensions of a strided convolution can be calculated using the following equation:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 640w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 720w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 750w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 786w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 828w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 1100w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 640w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 720w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 750w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 786w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 828w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 1100w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/proxy/1*tbB1gTKkwPznAgSCcf3KTA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Where <code>n_in</code> denotes the dimension of the input image, <code>f</code> denotes the window size, and <code>s</code> denotes the stride.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So that the Convolutional Neural Network can learn the values for a filter that detect features present in the input data, the filter must be passed through a non-linear mapping. The output of the convolution operation between the filter and the input image is summed with a bias term and passed through a <strong>non-linear activation function</strong>. The purpose of the activation function is to introduce non-linearity into our network. Since our input data is non-linear (it is infeasible to model the pixels that form a handwritten signature linearly), our model needs to account for that. To do so, we use the Rectified Linear Unit (ReLU) activation function:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/format:webp/1*oePAhrm74RNnNEolprmTaQ.png 640w, https://miro.medium.com/v2/format:webp/1*oePAhrm74RNnNEolprmTaQ.png 720w, https://miro.medium.com/v2/format:webp/1*oePAhrm74RNnNEolprmTaQ.png 750w, https://miro.medium.com/v2/format:webp/1*oePAhrm74RNnNEolprmTaQ.png 786w, https://miro.medium.com/v2/format:webp/1*oePAhrm74RNnNEolprmTaQ.png 828w, https://miro.medium.com/v2/format:webp/1*oePAhrm74RNnNEolprmTaQ.png 1100w, https://miro.medium.com/v2/format:webp/1*oePAhrm74RNnNEolprmTaQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/1*oePAhrm74RNnNEolprmTaQ.png 640w, https://miro.medium.com/v2/1*oePAhrm74RNnNEolprmTaQ.png 720w, https://miro.medium.com/v2/1*oePAhrm74RNnNEolprmTaQ.png 750w, https://miro.medium.com/v2/1*oePAhrm74RNnNEolprmTaQ.png 786w, https://miro.medium.com/v2/1*oePAhrm74RNnNEolprmTaQ.png 828w, https://miro.medium.com/v2/1*oePAhrm74RNnNEolprmTaQ.png 1100w, https://miro.medium.com/v2/1*oePAhrm74RNnNEolprmTaQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/proxy/1*oePAhrm74RNnNEolprmTaQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="https://medium.com/@kanchansarkar/relu-not-a-differentiable-function-why-used-in-gradient-based-optimization-7fef3a4cecec" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see, the ReLU function is quite simple; values that are less than or equal to zero become zero and all positive values remain the same.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Usually, a network utilizes more than one filter per layer. When that is the case, the outputs of each filter’s convolution over the input image are concatenated along the last axis, forming a final 3D output.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>The Code</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Using NumPy, we can program the convolution operation quite easily. The convolution function makes use of a for-loop to convolve all the filters over the image. Within each iteration of the for-loop, two while-loops are used to pass the filter over the image. At each step, the filter is multipled element-wise(<code>*</code>) with a section of the input image. The result of this element-wise multiplication is then summed to obtain a single value using NumPy’s <a href="https://www.google.com/search?q=numpy+sum&rlz=1C5CHFA_enUS741US741&oq=numpy+sum&aqs=chrome..69i57j0l5.1102j0j4&sourceid=chrome&ie=UTF-8" target="_self">sum</a> method, and then added with a bias term.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def convolution(image, filt, bias, s=1):
    '''
    Confolves `filt` over `image` using stride `s`
    '''
    (n_f, n_c_f, f, _) = filt.shape # filter dimensions
    n_c, in_dim, _ = image.shape # image dimensions
    
    out_dim = int((in_dim - f)/s)+1 # calculate output dimensions
    
    # ensure that the filter dimensions match the dimensions of the input image
    assert n_c == n_c_f, "Dimensions of filter must match dimensions of input image"
    
    out = np.zeros((n_f,out_dim,out_dim)) # create the matrix to hold the values of the convolution operation
    
    # convolve each filter over the image
    for curr_f in range(n_f):
        curr_y = out_y = 0
        # move filter vertically across the image
        while curr_y + f <= in_dim:
            curr_x = out_x = 0
            # move filter horizontally across the image 
            while curr_x + f <= in_dim:
                # perform the convolution operation and add the bias
                out[curr_f, out_y, out_x] = np.sum(filt[curr_f] * image[:,curr_y:curr_y+f, curr_x:curr_x+f]) + bias[curr_f]
                curr_x += s
                out_x += 1
            curr_y += s
            out_y += 1
        
    return out</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">convolution operation</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The <code>filt</code> input is initialized using a standard normal distribution and <code>bias</code> is initialized to be a vector of zeros.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After one or two convolutional layers, it is common to reduce the size of the representation produced by the convolutional layer. This reduction in the representation’s size is known as <strong>downsampling.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Downsampling</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To speed up the training process and reduce the amount of memory consumed by the network, we try to reduce the redundancy present in the input feature. There are a couple of ways we can downsample an image, but for this post, we will look at the most common one: <strong>max pooling</strong>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In max pooling, a window passes over an image according to a set stride (how many units to move on each pass). At each step, the maximum value within the window is pooled into an output matrix, hence the name max pooling.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the following visual, a window of size f=2 passes over an image with a stride of 2. f denotes the dimensions of the max pooling window (red box) and s denotes the number of units the window moves in the x and y-direction. At each step, the maximum value within the window is chosen:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:71%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 529px" srcset="https://miro.medium.com/v2/resize:fit:640/0*wH3GmU0JP9zQeODt.gif 640w, https://miro.medium.com/v2/resize:fit:720/0*wH3GmU0JP9zQeODt.gif 720w, https://miro.medium.com/v2/resize:fit:750/0*wH3GmU0JP9zQeODt.gif 750w, https://miro.medium.com/v2/resize:fit:786/0*wH3GmU0JP9zQeODt.gif 786w, https://miro.medium.com/v2/resize:fit:828/0*wH3GmU0JP9zQeODt.gif 828w, https://miro.medium.com/v2/resize:fit:1100/0*wH3GmU0JP9zQeODt.gif 1100w, https://miro.medium.com/v2/resize:fit:1058/0*wH3GmU0JP9zQeODt.gif 1058w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 529px" srcset="https://miro.medium.com/v2/resize:fit:640/0*wH3GmU0JP9zQeODt.gif 640w, https://miro.medium.com/v2/resize:fit:720/0*wH3GmU0JP9zQeODt.gif 720w, https://miro.medium.com/v2/resize:fit:750/0*wH3GmU0JP9zQeODt.gif 750w, https://miro.medium.com/v2/resize:fit:786/0*wH3GmU0JP9zQeODt.gif 786w, https://miro.medium.com/v2/resize:fit:828/0*wH3GmU0JP9zQeODt.gif 828w, https://miro.medium.com/v2/resize:fit:1100/0*wH3GmU0JP9zQeODt.gif 1100w, https://miro.medium.com/v2/resize:fit:1058/0*wH3GmU0JP9zQeODt.gif 1058w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/529/0*wH3GmU0JP9zQeODt.gif"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="https://zhuanlan.zhihu.com/p/32442184" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Max pooling significantly reduces the representation size, in turn reducing the amount of memory required and the number of operations performed later in the network. The output size of the max pooling operation can be calculated using the following equation:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 640w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 720w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 750w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 786w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 828w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 1100w, https://miro.medium.com/v2/format:webp/1*tbB1gTKkwPznAgSCcf3KTA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 640w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 720w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 750w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 786w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 828w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 1100w, https://miro.medium.com/v2/1*tbB1gTKkwPznAgSCcf3KTA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/proxy/1*tbB1gTKkwPznAgSCcf3KTA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Where <code>n_in</code> denotes the dimension of the input image, <code>f</code> denotes the window size, and <code>s</code> denotes the stride.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>An added benefit of max pooling is that it forces the network to focus on a few neurons instead of all of them which has a regularizing effect on the network, making it less likely to overfit the training data and hopefully generalize well.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>The Code</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The max pooling operation boils down to a for loop and a couple of while loops. The for-loop is used pass through each layer of the input image, and the while-loops slide the window over every part of the image. At each step, we use NumPy’s <a href="https://docs.scipy.org/doc/numpy-1.14.0/reference/generated/numpy.maximum.html" target="_self">max</a> method to obtain the maximum value:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def maxpool(image, f=2, s=2):
    ```
    Downsample input `image` using a kernel size of `f` and a stride of `s`
    ```
    n_c, h_prev, w_prev = image.shape
    
    # calculate output dimensions after the maxpooling operation.
    h = int((h_prev - f)/s)+1 
    w = int((w_prev - f)/s)+1
    
    # create a matrix to hold the values of the maxpooling operation.
    downsampled = np.zeros((n_c, h, w)) 
    
    # slide the window over every part of the image using stride s. Take the maximum value at each step.
    for i in range(n_c):
        curr_y = out_y = 0
        # slide the max pooling window vertically across the image
        while curr_y + f <= h_prev:
            curr_x = out_x = 0
            # slide the max pooling window horizontally across the image
            while curr_x + f <= w_prev:
                # choose the maximum value within the window at each step and store it to the output matrix
                downsampled[i, out_y, out_x] = np.max(image[i, curr_y:curr_y+f, curr_x:curr_x+f])
                curr_x += s
                out_x += 1
            curr_y += s
            out_y += 1
    return downsampled</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">max pooling operation</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After multiple convolutional layers and downsampling operations, the 3D image representation is converted into a feature vector that is passed into a Multi-Layer Perceptron, which merely is a neural network with at least three layers. This is referred to as a <strong>Fully-Connected Layer.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Fully-Connected Layer</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the fully-connected operation of a neural network, the input representation is flattened into a feature vector and passed through a network of neurons to predict the output probabilities. The following image describes the flattening operation:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Lzx2pNLpHjGTKcofsaSH1g.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Lzx2pNLpHjGTKcofsaSH1g.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Lzx2pNLpHjGTKcofsaSH1g.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Lzx2pNLpHjGTKcofsaSH1g.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Lzx2pNLpHjGTKcofsaSH1g.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Lzx2pNLpHjGTKcofsaSH1g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Lzx2pNLpHjGTKcofsaSH1g.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Lzx2pNLpHjGTKcofsaSH1g.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Lzx2pNLpHjGTKcofsaSH1g.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Lzx2pNLpHjGTKcofsaSH1g.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Lzx2pNLpHjGTKcofsaSH1g.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Lzx2pNLpHjGTKcofsaSH1g.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Lzx2pNLpHjGTKcofsaSH1g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Lzx2pNLpHjGTKcofsaSH1g.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Lzx2pNLpHjGTKcofsaSH1g.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="https://rubikscode.net/2018/02/26/introduction-to-convolutional-neural-networks/" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The rows are concatenated to form a long feature vector. If multiple input layers are present, its rows are also concatenated to form an even longer feature vector.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The feature vector is then passed through multiple dense layers. At each dense layer, the feature vector is multiplied by the layer’s weights, summed with its biases, and passed through a non-linearity.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The following image visualizes the fully connected operation and dense layers:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*6qFBUoRbA6X7aAVjq-6SfA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*6qFBUoRbA6X7aAVjq-6SfA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*6qFBUoRbA6X7aAVjq-6SfA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*6qFBUoRbA6X7aAVjq-6SfA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*6qFBUoRbA6X7aAVjq-6SfA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*6qFBUoRbA6X7aAVjq-6SfA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*6qFBUoRbA6X7aAVjq-6SfA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*6qFBUoRbA6X7aAVjq-6SfA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*6qFBUoRbA6X7aAVjq-6SfA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*6qFBUoRbA6X7aAVjq-6SfA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*6qFBUoRbA6X7aAVjq-6SfA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*6qFBUoRbA6X7aAVjq-6SfA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*6qFBUoRbA6X7aAVjq-6SfA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*6qFBUoRbA6X7aAVjq-6SfA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*6qFBUoRbA6X7aAVjq-6SfA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><a href="https://cambridgespark.com/content/tutorials/convolutional-neural-networks-with-keras/index.html" target="_self">image source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It is worth noting that, <a href="https://www.facebook.com/yann.lecun/posts/10152820758292143" target="_self">according to this Facebook post by Yann LeCun</a>, “there is no such thing as a fully connected layer,” and he’s right. When thinking back to the convolutional layer, one realizes that a fully connected layer is a convolutional operation with a 1x1 output kernel. That is, If we pass 128 n-by-n filters over an image of dimensions n-by-n, what we would end up with is a vector of length 128.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>The Code</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">NumPy makes it quite simple to program the fully connected layer of a CNN. As a matter of fact, you can do it in a single line of code using NumPy’s <a href="https://docs.scipy.org/doc/numpy-1.14.0/reference/generated/numpy.reshape.html" target="_self">reshape</a> method:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>(nf2, dim2, _) = pooled.shape
fc = pooled.reshape((nf2 * dim2 * dim2, 1)) # flatten pooled layer</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">fully connected</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this code snippet, we gather the dimensions of the previous layer (number of channels and height/width) then use them to flatten the previous layer into a fully connected layer. This fully connected layer is proceeded by multiple <strong>dense layer</strong>s of neurons that eventually produce raw predictions:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>z = w3.dot(fc) + b3 # first dense layer
z[z<=0] = 0 # pass through ReLU non-linearity
out = w4.dot(z) + b4 # second dense layer</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">dense layers</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Output Layer</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The output layer of a CNN is in charge of producing the probability of each class (each digit) given the input image. To obtain these probabilities, we initialize our final Dense layer to contain the same number of neurons as there are classes. The output of this dense layer then passes through the <strong>Softmax activation function</strong>, which maps all the final dense layer outputs to a vector whose elements sum up to one:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:60%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 454px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Pbt-s4dnDKJlsHHPZwlF2A.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Pbt-s4dnDKJlsHHPZwlF2A.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Pbt-s4dnDKJlsHHPZwlF2A.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Pbt-s4dnDKJlsHHPZwlF2A.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Pbt-s4dnDKJlsHHPZwlF2A.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Pbt-s4dnDKJlsHHPZwlF2A.png 1100w, https://miro.medium.com/v2/resize:fit:908/format:webp/1*Pbt-s4dnDKJlsHHPZwlF2A.png 908w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 454px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Pbt-s4dnDKJlsHHPZwlF2A.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Pbt-s4dnDKJlsHHPZwlF2A.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Pbt-s4dnDKJlsHHPZwlF2A.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Pbt-s4dnDKJlsHHPZwlF2A.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Pbt-s4dnDKJlsHHPZwlF2A.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Pbt-s4dnDKJlsHHPZwlF2A.png 1100w, https://miro.medium.com/v2/resize:fit:908/1*Pbt-s4dnDKJlsHHPZwlF2A.png 908w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/454/1*Pbt-s4dnDKJlsHHPZwlF2A.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Where x denotes each element in the final layer’s outputs.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>The Code</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Once again, the softmax function can be written in a few lines of simple code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def softmax(raw_preds):
    '''
    pass raw predictions through softmax activation function
    '''
    out = np.exp(raw_preds) # exponentiate vector of raw predictions
    return out/np.sum(out) # divide the exponentiated vector by its sum. All values in the output sum to 1.</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">softmax activation function</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Calculating the Loss</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To measure how accurate our network was in predicting the handwritten digit from the input image, we make use of a <strong>loss function</strong>. The loss function assigns a real-valued number to define the model’s accuracy when predicting the output digit. A common loss function to use when predicting multiple output classes is the <strong>Categorical Cross-Entropy Loss function, </strong>defined as follows:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*NoKI9qWu3C_hE8BNgAFJ4w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*NoKI9qWu3C_hE8BNgAFJ4w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*NoKI9qWu3C_hE8BNgAFJ4w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*NoKI9qWu3C_hE8BNgAFJ4w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*NoKI9qWu3C_hE8BNgAFJ4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*NoKI9qWu3C_hE8BNgAFJ4w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*NoKI9qWu3C_hE8BNgAFJ4w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*NoKI9qWu3C_hE8BNgAFJ4w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*NoKI9qWu3C_hE8BNgAFJ4w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*NoKI9qWu3C_hE8BNgAFJ4w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*NoKI9qWu3C_hE8BNgAFJ4w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*NoKI9qWu3C_hE8BNgAFJ4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*NoKI9qWu3C_hE8BNgAFJ4w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*NoKI9qWu3C_hE8BNgAFJ4w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*NoKI9qWu3C_hE8BNgAFJ4w.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here, ŷ is the CNN’s prediction, and y is the desired output label. When making predictions over multiple examples, we take the average of the loss over all examples.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>The Code</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The Categorical Cross-Entropy loss function can be easily programmed using two simple lines of code, which are a mirror of the equation shown above:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def categoricalCrossEntropy(probs, label):
    '''
    calculate the categorical cross-entropy loss of the predictions
    '''
    return -np.sum(label * np.log(probs)) # Multiply the desired output label by the log of the prediction, then sum all values in the vector
</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">categorical cross-entropy loss</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This about wraps up the operations that compose a convolutional neural network. Let us join these operations to construct the CNN.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">The Network</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Given the relatively low amount of classes (10 in total) and the small size of each training image (28x28px.), a simple network architecture was chosen to solve the task of digit recognition. The network uses two consecutive convolutional layers followed by a max pooling operation to extract features from the input image. After the max pooling operation, the representation is flattened and passed through a Multi-Layer Perceptron (MLP) to carry out the task of classification.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*wLgJSUcscDDg6nMMChxeTg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*wLgJSUcscDDg6nMMChxeTg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*wLgJSUcscDDg6nMMChxeTg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*wLgJSUcscDDg6nMMChxeTg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*wLgJSUcscDDg6nMMChxeTg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*wLgJSUcscDDg6nMMChxeTg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*wLgJSUcscDDg6nMMChxeTg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*wLgJSUcscDDg6nMMChxeTg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*wLgJSUcscDDg6nMMChxeTg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*wLgJSUcscDDg6nMMChxeTg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*wLgJSUcscDDg6nMMChxeTg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*wLgJSUcscDDg6nMMChxeTg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*wLgJSUcscDDg6nMMChxeTg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*wLgJSUcscDDg6nMMChxeTg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*wLgJSUcscDDg6nMMChxeTg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Network Architecture</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Programming the CNN</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that we have gone over the elementary operations that form a Convolutional Neural Network, let’s create it.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Feel free to use <a href="https://github.com/Alescontrela/Numpy-CNN" target="_self">this repo</a> when following along.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Step 1: Getting the Data</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The MNIST handwritten digit training and test data can be obtained <a href="http://yann.lecun.com/exdb/mnist/" target="_self">here</a>. The files store image and label data as tensors, so the files must be read through their bytestream. We define two helper methods to perform the extraction:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def extract_data(filename, num_images, IMAGE_WIDTH):
    '''
    Extract images by reading the file bytestream. Reshape the read values into a 3D matrix of dimensions [m, h, w], where m 
    is the number of training examples.
    '''
    print('Extracting', filename)
    with gzip.open(filename) as bytestream:
        bytestream.read(16)
        buf = bytestream.read(IMAGE_WIDTH * IMAGE_WIDTH * num_images)
        data = np.frombuffer(buf, dtype=np.uint8).astype(np.float32)
        data = data.reshape(num_images, IMAGE_WIDTH*IMAGE_WIDTH)
        return data

def extract_labels(filename, num_images):
    '''
    Extract label into vector of integer values of dimensions [m, 1], where m is the number of images.
    '''
    print('Extracting', filename)
    with gzip.open(filename) as bytestream:
        bytestream.read(8)
        buf = bytestream.read(1 * num_images)
        labels = np.frombuffer(buf, dtype=np.uint8).astype(np.int64)
    return labels</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">extract train and test data</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Step 2: Initialize parameters</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We first define methods to initialize both the filters for the convolutional layers and the weights for the dense layers. To make for a smoother training process, we initialize each filter with a mean of 0 and a standard deviation of 1.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def initializeFilter(size, scale = 1.0):
    '''
    Initialize filter using a normal distribution with and a 
    standard deviation inversely proportional the square root of the number of units
    '''
    stddev = scale/np.sqrt(np.prod(size))
    return np.random.normal(loc = 0, scale = stddev, size = size)

def initializeWeight(size):
    '''
    Initialize weights with a random normal distribution
    '''
    return np.random.standard_normal(size=size) * 0.01</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">methods to initialize the network’s parameters</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Step 3: Define the backpropagation operations</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To compute the gradients that will force the network to update its weights and optimize its objective, we need to define methods that backpropagate gradients through the convolutional and max pooling layers. To keep this post (relatively) short, I won’t go into the derivation of these gradients but, If you would like me to make a post that describes backpropagation through a convolutional neural network, leave a comment below.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def convolutionBackward(dconv_prev, conv_in, filt, s):
    '''
    Backpropagation through a convolutional layer. 
    '''
    (n_f, n_c, f, _) = filt.shape
    (_, orig_dim, _) = conv_in.shape
    ## initialize derivatives
    dout = np.zeros(conv_in.shape) 
    dfilt = np.zeros(filt.shape)
    dbias = np.zeros((n_f,1))
    for curr_f in range(n_f):
        # loop through all filters
        curr_y = out_y = 0
        while curr_y + f <= orig_dim:
            curr_x = out_x = 0
            while curr_x + f <= orig_dim:
                # loss gradient of filter (used to update the filter)
                dfilt[curr_f] += dconv_prev[curr_f, out_y, out_x] * conv_in[:, curr_y:curr_y+f, curr_x:curr_x+f]
                # loss gradient of the input to the convolution operation (conv1 in the case of this network)
                dout[:, curr_y:curr_y+f, curr_x:curr_x+f] += dconv_prev[curr_f, out_y, out_x] * filt[curr_f] 
                curr_x += s
                out_x += 1
            curr_y += s
            out_y += 1
        # loss gradient of the bias
        dbias[curr_f] = np.sum(dconv_prev[curr_f])
    
    return dout, dfilt, dbias

def nanargmax(arr):
    '''
    return index of the largest non-nan value in the array. Output is an ordered pair tuple
    '''
    idx = np.nanargmax(arr)
    idxs = np.unravel_index(idx, arr.shape)
    return idxs 

def maxpoolBackward(dpool, orig, f, s):
    '''
    Backpropagation through a maxpooling layer. The gradients are passed through the indices of greatest value in the original maxpooling during the forward step.
    '''
    (n_c, orig_dim, _) = orig.shape
    
    dout = np.zeros(orig.shape)
    
    for curr_c in range(n_c):
        curr_y = out_y = 0
        while curr_y + f <= orig_dim:
            curr_x = out_x = 0
            while curr_x + f <= orig_dim:
                # obtain index of largest value in input for current window
                (a, b) = nanargmax(orig[curr_c, curr_y:curr_y+f, curr_x:curr_x+f])
                dout[curr_c, curr_y+a, curr_x+b] = dpool[curr_c, out_y, out_x]
                
                curr_x += s
                out_x += 1
            curr_y += s
            out_y += 1
        
    return dout</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Step 4: Building the network</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the spirit abstraction, we now define a method that combines the forward and backward operations of a convolutional neural network. It takes the network’s parameters and hyperparameters as inputs and spits out the gradients:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def conv(image, label, params, conv_s, pool_f, pool_s):
    
    [f1, f2, w3, w4, b1, b2, b3, b4] = params 
    
    ################################################
    ############## Forward Operation ###############
    ################################################
    conv1 = convolution(image, f1, b1, conv_s) # convolution operation
    conv1[conv1<=0] = 0 # pass through ReLU non-linearity
    
    conv2 = convolution(conv1, f2, b2, conv_s) # second convolution operation
    conv2[conv2<=0] = 0 # pass through ReLU non-linearity
    
    pooled = maxpool(conv2, pool_f, pool_s) # maxpooling operation
    
    (nf2, dim2, _) = pooled.shape
    fc = pooled.reshape((nf2 * dim2 * dim2, 1)) # flatten pooled layer
    
    z = w3.dot(fc) + b3 # first dense layer
    z[z<=0] = 0 # pass through ReLU non-linearity
    
    out = w4.dot(z) + b4 # second dense layer
     
    probs = softmax(out) # predict class probabilities with the softmax activation function
    
    ################################################
    #################### Loss ######################
    ################################################
    
    loss = categoricalCrossEntropy(probs, label) # categorical cross-entropy loss
        
    ################################################
    ############# Backward Operation ###############
    ################################################
    dout = probs - label # derivative of loss w.r.t. final dense layer output
    dw4 = dout.dot(z.T) # loss gradient of final dense layer weights
    db4 = np.sum(dout, axis = 1).reshape(b4.shape) # loss gradient of final dense layer biases
    
    dz = w4.T.dot(dout) # loss gradient of first dense layer outputs 
    dz[z<=0] = 0 # backpropagate through ReLU 
    dw3 = dz.dot(fc.T)
    db3 = np.sum(dz, axis = 1).reshape(b3.shape)
    
    dfc = w3.T.dot(dz) # loss gradients of fully-connected layer (pooling layer)
    dpool = dfc.reshape(pooled.shape) # reshape fully connected into dimensions of pooling layer
    
    dconv2 = maxpoolBackward(dpool, conv2, pool_f, pool_s) # backprop through the max-pooling layer(only neurons with highest activation in window get updated)
    dconv2[conv2<=0] = 0 # backpropagate through ReLU
    
    dconv1, df2, db2 = convolutionBackward(dconv2, conv1, f2, conv_s) # backpropagate previous gradient through second convolutional layer.
    dconv1[conv1<=0] = 0 # backpropagate through ReLU
    
    dimage, df1, db1 = convolutionBackward(dconv1, image, f1, conv_s) # backpropagate previous gradient through first convolutional layer.
    
    grads = [df1, df2, dw3, dw4, db1, db2, db3, db4] 
    
    return grads, loss</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">convolutional neural network forward and backward operation</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Step 5: Training the network</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To efficiently force the network’s parameters to learn meaningful representations, we use the <strong>Adam optimization algorithm</strong>. I won’t go into much detail regarding this algorithm, but it can be thought of this way: if stochastic gradient descent is a drunk college student stumbling down a hill, then Adam is a bowling ball beaming down that same hill. A better explanation of Adam found <a href="https://machinelearningmastery.com/adam-optimization-algorithm-for-deep-learning/" target="_self">here</a>.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def adamGD(batch, num_classes, lr, dim, n_c, beta1, beta2, params, cost):
    '''
    update the parameters through Adam gradient descnet.
    '''
    [f1, f2, w3, w4, b1, b2, b3, b4] = params
    
    X = batch[:,0:-1] # get batch inputs
    X = X.reshape(len(batch), n_c, dim, dim)
    Y = batch[:,-1] # get batch labels
    
    cost_ = 0
    batch_size = len(batch)
    
    # initialize gradients and momentum,RMS params
    df1 = np.zeros(f1.shape)
    df2 = np.zeros(f2.shape)
    dw3 = np.zeros(w3.shape)
    dw4 = np.zeros(w4.shape)
    db1 = np.zeros(b1.shape)
    db2 = np.zeros(b2.shape)
    db3 = np.zeros(b3.shape)
    db4 = np.zeros(b4.shape)
    
    v1 = np.zeros(f1.shape)
    v2 = np.zeros(f2.shape)
    v3 = np.zeros(w3.shape)
    v4 = np.zeros(w4.shape)
    bv1 = np.zeros(b1.shape)
    bv2 = np.zeros(b2.shape)
    bv3 = np.zeros(b3.shape)
    bv4 = np.zeros(b4.shape)
    
    s1 = np.zeros(f1.shape)
    s2 = np.zeros(f2.shape)
    s3 = np.zeros(w3.shape)
    s4 = np.zeros(w4.shape)
    bs1 = np.zeros(b1.shape)
    bs2 = np.zeros(b2.shape)
    bs3 = np.zeros(b3.shape)
    bs4 = np.zeros(b4.shape)
    
    for i in range(batch_size):
        
        x = X[i]
        y = np.eye(num_classes)[int(Y[i])].reshape(num_classes, 1) # convert label to one-hot
        
        # Collect Gradients for training example
        grads, loss = conv(x, y, params, 1, 2, 2)
        [df1_, df2_, dw3_, dw4_, db1_, db2_, db3_, db4_] = grads
        
        df1+=df1_
        db1+=db1_
        df2+=df2_
        db2+=db2_
        dw3+=dw3_
        db3+=db3_
        dw4+=dw4_
        db4+=db4_

        cost_+= loss

    # Parameter Update  
        
    v1 = beta1*v1 + (1-beta1)*df1/batch_size # momentum update
    s1 = beta2*s1 + (1-beta2)*(df1/batch_size)**2 # RMSProp update
    f1 -= lr * v1/np.sqrt(s1+1e-7) # combine momentum and RMSProp to perform update with Adam
    
    bv1 = beta1*bv1 + (1-beta1)*db1/batch_size
    bs1 = beta2*bs1 + (1-beta2)*(db1/batch_size)**2
    b1 -= lr * bv1/np.sqrt(bs1+1e-7)
   
    v2 = beta1*v2 + (1-beta1)*df2/batch_size
    s2 = beta2*s2 + (1-beta2)*(df2/batch_size)**2
    f2 -= lr * v2/np.sqrt(s2+1e-7)
                       
    bv2 = beta1*bv2 + (1-beta1) * db2/batch_size
    bs2 = beta2*bs2 + (1-beta2)*(db2/batch_size)**2
    b2 -= lr * bv2/np.sqrt(bs2+1e-7)
    
    v3 = beta1*v3 + (1-beta1) * dw3/batch_size
    s3 = beta2*s3 + (1-beta2)*(dw3/batch_size)**2
    w3 -= lr * v3/np.sqrt(s3+1e-7)
    
    bv3 = beta1*bv3 + (1-beta1) * db3/batch_size
    bs3 = beta2*bs3 + (1-beta2)*(db3/batch_size)**2
    b3 -= lr * bv3/np.sqrt(bs3+1e-7)
    
    v4 = beta1*v4 + (1-beta1) * dw4/batch_size
    s4 = beta2*s4 + (1-beta2)*(dw4/batch_size)**2
    w4 -= lr * v4 / np.sqrt(s4+1e-7)
    
    bv4 = beta1*bv4 + (1-beta1)*db4/batch_size
    bs4 = beta2*bs4 + (1-beta2)*(db4/batch_size)**2
    b4 -= lr * bv4 / np.sqrt(bs4+1e-7)
    

    cost_ = cost_/batch_size
    cost.append(cost_)

    params = [f1, f2, w3, w4, b1, b2, b3, b4]
    
    return params, cost

#####################################################
##################### Training ######################
#####################################################

def train(num_classes = 10, lr = 0.01, beta1 = 0.95, beta2 = 0.99, img_dim = 28, img_depth = 1, f = 5, num_filt1 = 8, num_filt2 = 8, batch_size = 32, num_epochs = 2, save_path = 'params.pkl'):

    # Get training data
    m =50000
    X = extract_data('train-images-idx3-ubyte.gz', m, img_dim)
    y_dash = extract_labels('train-labels-idx1-ubyte.gz', m).reshape(m,1)
    X-= int(np.mean(X))
    X/= int(np.std(X))
    train_data = np.hstack((X,y_dash))

    np.random.shuffle(train_data)

    ## Initializing all the parameters
    f1, f2, w3, w4 = (num_filt1 ,img_depth,f,f), (num_filt2 ,num_filt1,f,f), (128,800), (10, 128)
    f1 = initializeFilter(f1)
    f2 = initializeFilter(f2)
    w3 = initializeWeight(w3)
    w4 = initializeWeight(w4)

    b1 = np.zeros((f1.shape[0],1))
    b2 = np.zeros((f2.shape[0],1))
    b3 = np.zeros((w3.shape[0],1))
    b4 = np.zeros((w4.shape[0],1))

    params = [f1, f2, w3, w4, b1, b2, b3, b4]

    cost = []

    print("LR:"+str(lr)+", Batch Size:"+str(batch_size))

    for epoch in range(num_epochs):
        np.random.shuffle(train_data)
        batches = [train_data[k:k + batch_size] for k in range(0, train_data.shape[0], batch_size)]

        t = tqdm(batches)
        for x,batch in enumerate(t):
            params, cost = adamGD(batch, num_classes, lr, img_dim, img_depth, beta1, beta2, params, cost)
            t.set_description("Cost: %.2f" % (cost[-1]))
            

    with open(save_path, 'wb') as file:
        pickle.dump(params, file)
        
    return cost</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">training the network with Adam optimization</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That about wraps up the development of the network. To train it locally, download <a href="https://github.com/Alescontrela/Numpy-CNN" target="_self">this repo</a> and run the following command in the terminal:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ python3 train_cnn.py '&lt;file_name&gt;.pkl'</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Replace <code>&lt;file_name&gt;</code> with whatever file name you would like. The terminal should display the following progress bar to training progress, as well as the cost for the current training batch.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*qtKoIlQmt3rlJcDhA2TTmQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*qtKoIlQmt3rlJcDhA2TTmQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*qtKoIlQmt3rlJcDhA2TTmQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*qtKoIlQmt3rlJcDhA2TTmQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*qtKoIlQmt3rlJcDhA2TTmQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*qtKoIlQmt3rlJcDhA2TTmQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*qtKoIlQmt3rlJcDhA2TTmQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*qtKoIlQmt3rlJcDhA2TTmQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*qtKoIlQmt3rlJcDhA2TTmQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*qtKoIlQmt3rlJcDhA2TTmQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*qtKoIlQmt3rlJcDhA2TTmQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*qtKoIlQmt3rlJcDhA2TTmQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*qtKoIlQmt3rlJcDhA2TTmQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*qtKoIlQmt3rlJcDhA2TTmQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*qtKoIlQmt3rlJcDhA2TTmQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">a training process with a (very) long way to go</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After the CNN has finished training, a .pkl file containing the network’s parameters is saved to the directory where the script was run.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The network takes about 5 hours to train on my macbook pro. I included the trained params in the GitHub repo under the name <code>params.pkl</code>. To use them, replace <code>&lt;file_name&gt;</code> with <code>params.pkl</code>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To measure the network’s accuracy, run the following command in the terminal:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ python3 measure_performance.py '&lt;file_name&gt;.pkl'</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This command will use the trained parameters to run predictions on all 10,000 digits in the test dataset. After all predictions are made, a value displaying the network’s accuracy will appear in the command prompt:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*4Pzz9MSQS-YTdRb6n7qP5A.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*4Pzz9MSQS-YTdRb6n7qP5A.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*4Pzz9MSQS-YTdRb6n7qP5A.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*4Pzz9MSQS-YTdRb6n7qP5A.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*4Pzz9MSQS-YTdRb6n7qP5A.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*4Pzz9MSQS-YTdRb6n7qP5A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*4Pzz9MSQS-YTdRb6n7qP5A.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*4Pzz9MSQS-YTdRb6n7qP5A.png 640w, https://miro.medium.com/v2/resize:fit:720/1*4Pzz9MSQS-YTdRb6n7qP5A.png 720w, https://miro.medium.com/v2/resize:fit:750/1*4Pzz9MSQS-YTdRb6n7qP5A.png 750w, https://miro.medium.com/v2/resize:fit:786/1*4Pzz9MSQS-YTdRb6n7qP5A.png 786w, https://miro.medium.com/v2/resize:fit:828/1*4Pzz9MSQS-YTdRb6n7qP5A.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*4Pzz9MSQS-YTdRb6n7qP5A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*4Pzz9MSQS-YTdRb6n7qP5A.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*4Pzz9MSQS-YTdRb6n7qP5A.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">network performance</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you run into any issues regarding dependencies, the following command can be used to install the required packages:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>$ pip install -r requirements.txt</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Results</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After two epochs over the training set, the network’s accuracy on the test set averaged 98%, which I would say is quite decent. After extending the training time by 2–3 epochs, I found that the test set performance decreased. I speculate that on the third to fourth training loop, the network begins overfitting the training set and is no longer generalizing.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Because we were passing in batches of data, the network had to account for the variability in every new batch, which is why the cost fluctuated so heavily during training time:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*qTSie_CaV1YkBEtTQK6eXw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*qTSie_CaV1YkBEtTQK6eXw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*qTSie_CaV1YkBEtTQK6eXw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*qTSie_CaV1YkBEtTQK6eXw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*qTSie_CaV1YkBEtTQK6eXw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*qTSie_CaV1YkBEtTQK6eXw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*qTSie_CaV1YkBEtTQK6eXw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*qTSie_CaV1YkBEtTQK6eXw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*qTSie_CaV1YkBEtTQK6eXw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*qTSie_CaV1YkBEtTQK6eXw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*qTSie_CaV1YkBEtTQK6eXw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*qTSie_CaV1YkBEtTQK6eXw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*qTSie_CaV1YkBEtTQK6eXw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*qTSie_CaV1YkBEtTQK6eXw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*qTSie_CaV1YkBEtTQK6eXw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">cost vs. number of iterations</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Additionally, we measure the network’s <strong>recall </strong>to understand how well it is able to predict each digit. Recall is a measure of accuracy, and it can be understood with the following example: of all the digits labeled ‘7’(or any other digit) in our test set, how many did our network correctly predict?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The following bar graph displays the recall for each digit:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*RTz-uLMlw7p3TewwhexlAQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*RTz-uLMlw7p3TewwhexlAQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*RTz-uLMlw7p3TewwhexlAQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*RTz-uLMlw7p3TewwhexlAQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*RTz-uLMlw7p3TewwhexlAQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*RTz-uLMlw7p3TewwhexlAQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*RTz-uLMlw7p3TewwhexlAQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*RTz-uLMlw7p3TewwhexlAQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*RTz-uLMlw7p3TewwhexlAQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*RTz-uLMlw7p3TewwhexlAQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*RTz-uLMlw7p3TewwhexlAQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*RTz-uLMlw7p3TewwhexlAQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*RTz-uLMlw7p3TewwhexlAQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*RTz-uLMlw7p3TewwhexlAQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*RTz-uLMlw7p3TewwhexlAQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This indicates that our network learned meaningful representations for all the digits. Overall, the CNN generalized well.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Conclusion</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Hopefully this post provided you with a richer understanding of convolutional neural networks, and perhaps even removed their perceived complexity. If you have any questions or would like to know a bit more, drop a comment below :)</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">References</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">[1]: Lecun, Y., et al. “Gradient-Based Learning Applied to Document Recognition.” <em>Proceedings of the IEEE</em>, vol. 86, no. 11, 1998, pp. 2278–2324., doi:10.1109/5.726791.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">[2]: Krizhevsky, Alex, et al. “ImageNet Classification with Deep Convolutional Neural Networks.” <em>Communications of the ACM</em>, vol. 60, no. 6, 2017, pp. 84–90., doi:10.1145/3065386.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">[3]: He, Kaiming, et al. “Delving Deep into Rectifiers: Surpassing Human-Level Performance on ImageNet Classification.” <em>2015 IEEE International Conference on Computer Vision (ICCV)</em>, 2015, doi:10.1109/iccv.2015.123.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>