<!DOCTYPE html>
                <html>
                <head>
                    <title>Building RNNs is Fun with PyTorch and Google Colab</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/dair-ai/building-rnns-is-fun-with-pytorch-and-google-colab-3903ea9a3a79"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@ibelmopan?source=post_page-----3903ea9a3a79--------------------------------">Author : elvis</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Building RNNs is Fun with PyTorch and Google Colab</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*YFCVPYFudH-Kq8-apUOuPQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*YFCVPYFudH-Kq8-apUOuPQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*YFCVPYFudH-Kq8-apUOuPQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*YFCVPYFudH-Kq8-apUOuPQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*YFCVPYFudH-Kq8-apUOuPQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YFCVPYFudH-Kq8-apUOuPQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*YFCVPYFudH-Kq8-apUOuPQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*YFCVPYFudH-Kq8-apUOuPQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*YFCVPYFudH-Kq8-apUOuPQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*YFCVPYFudH-Kq8-apUOuPQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*YFCVPYFudH-Kq8-apUOuPQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*YFCVPYFudH-Kq8-apUOuPQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*YFCVPYFudH-Kq8-apUOuPQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*YFCVPYFudH-Kq8-apUOuPQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*YFCVPYFudH-Kq8-apUOuPQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this tutorial, I will first teach you how to build a recurrent neural network (RNN) with a single layer, consisting of one single neuron, with PyTorch and Google Colab. I will also show you how to implement a simple RNN-based model for image classification.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This work is heavily inspired by Aurélien Géron’s book called <a href="https://www.oreilly.com/library/view/hands-on-machine-learning/9781491962282/" target="_self">“Hand-On Machine Learning with Scikit-Learn and TensorFlow”</a>. Although his neural network implementations are purely in TensorFlow, I adopted/reused some notations/variables names and implemented things using PyTorch only. I really enjoyed his book and learned a lot from his explanations. His work inspired this tutorial and I strongly recommend the book.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will be using <a href="https://colab.research.google.com" target="_self">Google Colab</a> so we need to manually install the PyTorch library first. You can do this by using the following command:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>!pip3 install torch torchvision</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now we can import the necessary libraries we will use in the tutorial:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import torch
import torch.nn as nn
import torch.nn.functional as F
import os
import numpy as np</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">RNN with A Single Neuron</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The idea of this tutorial is to show you the basic operations necessary for building an RNN architecture using PyTorch. This guide assumes you have knowledge of basic RNNs and that you have read the tutorial on <a href="https://medium.com/dair-ai/a-simple-neural-network-from-scratch-with-pytorch-and-google-colab-c7f3830618e0" target="_self">building neural networks from scratch using PyTorch</a>. I will try to review RNNs wherever possible for those that need a refresher but I will keep it minimal.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">First, let’s build the computation graph for a single-layer RNN. Again, we are not concerned with the math for now, I just want to show you the PyTorch operations needed to build your RNN models.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For illustration purposes, this is the architecture we are building:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*o65pRKyHxhw7m8LgMbVERg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*o65pRKyHxhw7m8LgMbVERg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*o65pRKyHxhw7m8LgMbVERg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*o65pRKyHxhw7m8LgMbVERg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*o65pRKyHxhw7m8LgMbVERg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*o65pRKyHxhw7m8LgMbVERg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*o65pRKyHxhw7m8LgMbVERg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*o65pRKyHxhw7m8LgMbVERg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*o65pRKyHxhw7m8LgMbVERg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*o65pRKyHxhw7m8LgMbVERg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*o65pRKyHxhw7m8LgMbVERg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*o65pRKyHxhw7m8LgMbVERg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*o65pRKyHxhw7m8LgMbVERg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*o65pRKyHxhw7m8LgMbVERg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*o65pRKyHxhw7m8LgMbVERg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And here is the code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class SingleRNN(nn.Module):
    def __init__(self, n_inputs, n_neurons):
        super(SingleRNN, self).__init__()
        
        self.Wx = torch.randn(n_inputs, n_neurons) # 4 X 1
        self.Wy = torch.randn(n_neurons, n_neurons) # 1 X 1
        
        self.b = torch.zeros(1, n_neurons) # 1 X 4
    
    def forward(self, X0, X1):
        self.Y0 = torch.tanh(torch.mm(X0, self.Wx) + self.b) # 4 X 1
        
        self.Y1 = torch.tanh(torch.mm(self.Y0, self.Wy) +
                            torch.mm(X1, self.Wx) + self.b) # 4 X 1
        
        return self.Y0, self.Y1</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the above code, I have implemented a simple one layer, one neuron RNN. I initialized two weight matrices, <code>Wx</code> and <code>Wy</code> with values from a normal distribution. <code>Wx</code>contains connection weights for the inputs of the current time step, while <code>Wy</code> contains connection weights for the outputs of the previous time step. We also added a bias <code>b</code>. The <code>forward</code> function computes two outputs — one for each time step (two overall). Note that we are using <code>tanh</code> as the non-linearity (activation function) via <code>torch.tanh(...)</code>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As for the input, we are providing 4 instances, with each instance containing two input sequences.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For illustration purposes, this is how the data is being fed into the RNN model:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*xCj9h3f2kekfqN_dMCpcag.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*xCj9h3f2kekfqN_dMCpcag.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*xCj9h3f2kekfqN_dMCpcag.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*xCj9h3f2kekfqN_dMCpcag.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*xCj9h3f2kekfqN_dMCpcag.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*xCj9h3f2kekfqN_dMCpcag.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*xCj9h3f2kekfqN_dMCpcag.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*xCj9h3f2kekfqN_dMCpcag.png 640w, https://miro.medium.com/v2/resize:fit:720/1*xCj9h3f2kekfqN_dMCpcag.png 720w, https://miro.medium.com/v2/resize:fit:750/1*xCj9h3f2kekfqN_dMCpcag.png 750w, https://miro.medium.com/v2/resize:fit:786/1*xCj9h3f2kekfqN_dMCpcag.png 786w, https://miro.medium.com/v2/resize:fit:828/1*xCj9h3f2kekfqN_dMCpcag.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*xCj9h3f2kekfqN_dMCpcag.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*xCj9h3f2kekfqN_dMCpcag.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*xCj9h3f2kekfqN_dMCpcag.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And this is the code to test the model:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>N_INPUT = 4
N_NEURONS = 1

X0_batch = torch.tensor([[0,1,2,0], [3,4,5,0], 
                         [6,7,8,0], [9,0,1,0]],
                        dtype = torch.float) #t=0 => 4 X 4

X1_batch = torch.tensor([[9,8,7,0], [0,0,0,0], 
                         [6,5,4,0], [3,2,1,0]],
                        dtype = torch.float) #t=1 => 4 X 4

model = SingleRNN(N_INPUT, N_NEURONS)

Y0_val, Y1_val = model(X0_batch, X1_batch)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After we have fed the input into the computation graph, we obtain outputs for each time step (<code>Y0</code>, <code>Y1</code>), each of size <code>4X1</code> which represents the size of batch and hidden units, respectively. (See output below)</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>tensor([[0.6741],
        [0.9680],
        [0.9973],
        [0.9993]])
tensor([[ 0.9889],
        [-0.4191],
        [ 0.8347],
        [-0.0384]])</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Increasing Neurons in RNN Layer</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Next, I will show you how to generalize the RNN we have just build to let the single layer support an <code>n</code> amount of neurons. In terms of the architecture, nothing really changes since we have already parameterized the number of neurons in the computation graph we have built. However, the size of the output changes since we have changed the size of number of units (i.e., neurons) in the RNN layer.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here is an illustration of what we will build:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*KLBXIeszx_cqkYs3-EXHwg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*KLBXIeszx_cqkYs3-EXHwg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*KLBXIeszx_cqkYs3-EXHwg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*KLBXIeszx_cqkYs3-EXHwg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*KLBXIeszx_cqkYs3-EXHwg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*KLBXIeszx_cqkYs3-EXHwg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*KLBXIeszx_cqkYs3-EXHwg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*KLBXIeszx_cqkYs3-EXHwg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*KLBXIeszx_cqkYs3-EXHwg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*KLBXIeszx_cqkYs3-EXHwg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*KLBXIeszx_cqkYs3-EXHwg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*KLBXIeszx_cqkYs3-EXHwg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*KLBXIeszx_cqkYs3-EXHwg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*KLBXIeszx_cqkYs3-EXHwg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*KLBXIeszx_cqkYs3-EXHwg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And here is the code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class BasicRNN(nn.Module):
    def __init__(self, n_inputs, n_neurons):
        super(BasicRNN, self).__init__()
        
        self.Wx = torch.randn(n_inputs, n_neurons) # n_inputs X n_neurons
        self.Wy = torch.randn(n_neurons, n_neurons) # n_neurons X n_neurons
        
        self.b = torch.zeros(1, n_neurons) # 1 X n_neurons
    
    def forward(self, X0, X1):
        self.Y0 = torch.tanh(torch.mm(X0, self.Wx) + self.b) # batch_size X n_neurons
        
        self.Y1 = torch.tanh(torch.mm(self.Y0, self.Wy) +
                            torch.mm(X1, self.Wx) + self.b) # batch_size X n_neurons
        
        return self.Y0, self.Y1</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>N_INPUT = 3 # number of features in input
N_NEURONS = 5 # number of units in layer

X0_batch = torch.tensor([[0,1,2], [3,4,5], 
                         [6,7,8], [9,0,1]],
                        dtype = torch.float) #t=0 => 4 X 3

X1_batch = torch.tensor([[9,8,7], [0,0,0], 
                         [6,5,4], [3,2,1]],
                        dtype = torch.float) #t=1 => 4 X 3

model = BasicRNN(N_INPUT, N_NEURONS)

Y0_val, Y1_val = model(X0_batch, X1_batch)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now when we print the outputs produced for each time step, it is of size (<code>4 X 5</code>), which represents the batch size and number of neurons, respectively.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>print(Y0_val)
print(Y1_val)

### output
'''
tensor([[-0.9963, -0.9877,  0.9999, -0.1916,  0.3522],
        [-0.9979, -1.0000,  1.0000,  0.7448, -0.8681],
        [-0.9988, -1.0000,  1.0000,  0.9714, -0.9952],
        [ 0.9948, -1.0000, -1.0000,  0.9981, -1.0000]])
tensor([[-0.7492, -1.0000,  1.0000,  0.9997, -0.9985],
        [-0.9906, -0.5056,  0.0457, -0.2558,  0.9825],
        [ 0.0144, -1.0000,  0.9983,  0.9698, -0.8716],
        [ 1.0000, -1.0000,  0.9886, -0.8680, -0.8603]])
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">PyTorch Built-in RNN Cell</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you take a closer look at the <code>BasicRNN</code> computation graph we have just built, it has a serious flaw. What if we wanted to build an architecture that supports extremely large inputs and outputs. The way it is currently built, it would require us to individually compute the outputs for every time step, increasing the lines of code needed to implement the desired computation graph. Below I will show you how to consolidate and implement this more efficiently and cleanly using the built-in <code>RNNCell</code> module.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s first try to implement this informally to analyze the role <code>RNNCell</code> plays:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>rnn = nn.RNNCell(3, 5) # n_input X n_neurons

X_batch = torch.tensor([[[0,1,2], [3,4,5], 
                         [6,7,8], [9,0,1]],
                        [[9,8,7], [0,0,0], 
                         [6,5,4], [3,2,1]]
                       ], dtype = torch.float) # X0 and X1

hx = torch.randn(4, 5) # m X n_neurons
output = []

# for each time step
for i in range(2):
    hx = rnn(X_batch[i], hx)
    output.append(hx)

print(output)

### output
'''
[tensor([[-0.4872,  0.4388, -0.3683, -0.2402, -0.7824],
        [-0.9869, -0.9002, -0.9990, -0.5977, -0.9543],
        [-0.9989, -0.9978, -0.9999, -0.3553, -0.9991],
        [-0.9998, -0.9889, -0.9749, -0.9821, -0.5408]],
       grad_fn=<TanhBackward>), tensor([[-0.9998, -0.9983, -0.9999, -0.3426, -0.9987],
        [ 0.2678,  0.8609, -0.3364, -0.0767,  0.4827],
        [-0.9897, -0.9457, -0.9979, -0.2552, -0.9282],
        [-0.6595, -0.2529, -0.8555, -0.1959, -0.2725]],
       grad_fn=<TanhBackward>)]
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With the above code, we have basically implemented the same model that was implemented in <code>BasicRNN</code>. <code>torch.RNNCell(...)</code>does all the magic of creating and maintaining the necessary weights and biases for us. <code>torch.RNNCell</code> accepts a tensor as input and outputs the next hidden state for each element in the batch. Read more about this module <a href="https://pytorch.org/docs/stable/nn.html?highlight=rnncell#torch.nn.RNNCell" target="_self">here</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now, let’s formally build the computation graph using the same information we used above.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class CleanBasicRNN(nn.Module):
    def __init__(self, batch_size, n_inputs, n_neurons):
        super(CleanBasicRNN, self).__init__()
        
        self.rnn = nn.RNNCell(n_inputs, n_neurons)
        self.hx = torch.randn(batch_size, n_neurons) # initialize hidden state
        
    def forward(self, X):
        output = []

        # for each time step
        for i in range(2):
            self.hx = self.rnn(X[i], self.hx)
            output.append(self.hx)
        
        return output, self.hx

FIXED_BATCH_SIZE = 4 # our batch size is fixed for now
N_INPUT = 3
N_NEURONS = 5

X_batch = torch.tensor([[[0,1,2], [3,4,5], 
                         [6,7,8], [9,0,1]],
                        [[9,8,7], [0,0,0], 
                         [6,5,4], [3,2,1]]
                       ], dtype = torch.float) # X0 and X1


model = CleanBasicRNN(FIXED_BATCH_SIZE, N_INPUT, N_NEURONS)
output_val, states_val = model(X_batch)
print(output_val) # contains all output for all timesteps
print(states_val) # contains values for final state or final timestep, i.e., t=1</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The output of the above code is as follows:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>'''
[tensor([[ 0.7728,  0.5515, -0.6296,  0.7153, -0.4945],
        [-0.9922, -0.8795, -0.9972, -0.3248, -0.9954],
        [-0.9994, -0.9798, -0.9995, -0.2330, -0.9987],
        [-0.9997, -0.9992, -0.9671, -0.9958, -0.4567]],
       grad_fn=<TanhBackward>), tensor([[-1.0000, -0.9981, -0.9999, -0.7502, -0.9987],
        [ 0.2000,  0.8616, -0.4312, -0.1248,  0.4995],
        [-0.9904, -0.9462, -0.9981, -0.2781, -0.9275],
        [-0.6522, -0.2911, -0.8473, -0.2088, -0.2840]],
       grad_fn=<TanhBackward>)]
tensor([[-1.0000, -0.9981, -0.9999, -0.7502, -0.9987],
        [ 0.2000,  0.8616, -0.4312, -0.1248,  0.4995],
        [-0.9904, -0.9462, -0.9981, -0.2781, -0.9275],
        [-0.6522, -0.2911, -0.8473, -0.2088, -0.2840]],
       grad_fn=<TanhBackward>)
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can see how the code is much cleaner since we don’t need to explicitly operate on the weights as shown in the previous code snippet — everything is handled implicitly and eloquently behind the scenes by PyTorch.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">RNN for Image Classification</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*wFYZpxTTiXVqncOLQd_CIQ.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that you have learned how to build a simple RNN from scratch and using the built-in <code>RNNCell</code> module provided in PyTorch, let’s do something more sophisticated and special.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s try to build an image classifier using the MNIST dataset. The MNIST dataset consists of images that contain hand-written numbers from 1–10. Essentially, we want to build a classifier to predict the numbers displayed by a set of images. I know this sounds strange but you will be surprised by how well RNNs perform on this image classification task.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In addition, we will also be using the <code>RNN</code> module instead of the <code>RNNCell</code> module since we want to generalize the computation graph to be able to support an <code>n</code> number of layers as well. We will only use one layer in the following computation graph, but you can experiment with the code later on by adding more layers.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Importing the dataset</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Before building the RNN-based computation graph, let’s import the MNIST dataset, split it into test and train portions, do a few transformations, and further explore it. You will need the following PyTorch libraries and lines of code to download and import the MNIST dataset to Google Colab.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import torchvision
import torchvision.transforms as transforms

BATCH_SIZE = 64

# list all transformations
transform = transforms.Compose(
    [transforms.ToTensor()])

# download and load training dataset
trainset = torchvision.datasets.MNIST(root='./data', train=True,
                                        download=True, transform=transform)
trainloader = torch.utils.data.DataLoader(trainset, batch_size=BATCH_SIZE,
                                          shuffle=True, num_workers=2)

# download and load testing dataset
testset = torchvision.datasets.MNIST(root='./data', train=False,
                                       download=True, transform=transform)
testloader = torch.utils.data.DataLoader(testset, batch_size=BATCH_SIZE,
                                         shuffle=False, num_workers=2)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The code above loads and prepares the dataset to be fed into the computation graph we will build later on. Take a few minutes to play around with the code and understand what is happening. Notice that we needed to provide a batch size. This is because <code>trainloader</code> and <code>testloader</code> are iterators which will make it easier when we are iterating on the dataset and training our RNN model with minibatches.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Exploring the dataset</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here is a few lines of code to explore the dataset. I won’t cover much of what’s going on here, but you can take some time and look at it by yourself.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import matplotlib.pyplot as plt
import numpy as np

# functions to show an image
def imshow(img):
    #img = img / 2 + 0.5     # unnormalize
    npimg = img.numpy()
    plt.imshow(np.transpose(npimg, (1, 2, 0)))

# get some random training images
dataiter = iter(trainloader)
images, labels = dataiter.next()

# show images
imshow(torchvision.utils.make_grid(images))</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And the output of the code is a batch of images displayed on a grid:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:44%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 337px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*A3sywXKrPT4WtZ0K9wAEJw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*A3sywXKrPT4WtZ0K9wAEJw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*A3sywXKrPT4WtZ0K9wAEJw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*A3sywXKrPT4WtZ0K9wAEJw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*A3sywXKrPT4WtZ0K9wAEJw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*A3sywXKrPT4WtZ0K9wAEJw.png 1100w, https://miro.medium.com/v2/resize:fit:674/format:webp/1*A3sywXKrPT4WtZ0K9wAEJw.png 674w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 337px" srcset="https://miro.medium.com/v2/resize:fit:640/1*A3sywXKrPT4WtZ0K9wAEJw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*A3sywXKrPT4WtZ0K9wAEJw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*A3sywXKrPT4WtZ0K9wAEJw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*A3sywXKrPT4WtZ0K9wAEJw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*A3sywXKrPT4WtZ0K9wAEJw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*A3sywXKrPT4WtZ0K9wAEJw.png 1100w, https://miro.medium.com/v2/resize:fit:674/1*A3sywXKrPT4WtZ0K9wAEJw.png 674w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/337/1*A3sywXKrPT4WtZ0K9wAEJw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Model</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s construct the computation graph. Below are the parameters:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># parameters 
N_STEPS = 28
N_INPUTS = 28
N_NEURONS = 150
N_OUTPUTS = 10
N_EPHOCS = 10</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And finally, here is a figure of the RNN-based classification model we are building:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*vhAfRLlaeOXZ-bruv7Ostg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*vhAfRLlaeOXZ-bruv7Ostg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*vhAfRLlaeOXZ-bruv7Ostg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*vhAfRLlaeOXZ-bruv7Ostg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*vhAfRLlaeOXZ-bruv7Ostg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*vhAfRLlaeOXZ-bruv7Ostg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*vhAfRLlaeOXZ-bruv7Ostg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*vhAfRLlaeOXZ-bruv7Ostg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*vhAfRLlaeOXZ-bruv7Ostg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*vhAfRLlaeOXZ-bruv7Ostg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*vhAfRLlaeOXZ-bruv7Ostg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*vhAfRLlaeOXZ-bruv7Ostg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*vhAfRLlaeOXZ-bruv7Ostg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*vhAfRLlaeOXZ-bruv7Ostg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*vhAfRLlaeOXZ-bruv7Ostg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And here is the code for the model:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class ImageRNN(nn.Module):
    def __init__(self, batch_size, n_steps, n_inputs, n_neurons, n_outputs):
        super(ImageRNN, self).__init__()
        
        self.n_neurons = n_neurons
        self.batch_size = batch_size
        self.n_steps = n_steps
        self.n_inputs = n_inputs
        self.n_outputs = n_outputs
        
        self.basic_rnn = nn.RNN(self.n_inputs, self.n_neurons) 
        
        self.FC = nn.Linear(self.n_neurons, self.n_outputs)
        
    def init_hidden(self,):
        # (num_layers, batch_size, n_neurons)
        return (torch.zeros(1, self.batch_size, self.n_neurons))
        
    def forward(self, X):
        # transforms X to dimensions: n_steps X batch_size X n_inputs
        X = X.permute(1, 0, 2) 
        
        self.batch_size = X.size(1)
        self.hidden = self.init_hidden()
        
        lstm_out, self.hidden = self.basic_rnn(X, self.hidden)      
        out = self.FC(self.hidden)
        
        return out.view(-1, self.n_outputs) # batch_size X n_output</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The <code>ImageRNN</code> model is doing the following:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">The initialization function <code>__init__(...)</code> declares a few variables, and then a basic RNN layer <code>basic_rnn</code> followed by a fully-connected layer<code>self.FC</code>.</li><li class="ff3" style="font-size:22px;">The <code>init_hidden</code> function initializes hidden weights with zero values. The <code>forward</code> function accepts an input of size <code>n_steps X batch_size X n_neurons</code>. The data flows through the RNN layer and then through the fully-connected layer.</li><li class="ff3" style="font-size:22px;">The output represent the <em>log probabilities</em> of the model.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Testing the model with some samples</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A very good practice encouraged by PyTorch developers throughout their documentation, and which I really like and highly recommend, is to always <em>test the model</em> with a portion of the dataset before actual training. This is to ensure that you have the correct dimensions specified and that the model is producing the information you expect. Below I show an example of how to test your model:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>dataiter = iter(trainloader)
images, labels = dataiter.next()
model = ImageRNN(BATCH_SIZE, N_STEPS, N_INPUTS, N_NEURONS, N_OUTPUTS)
logits = model(images.view(-1, 28,28))
print(logits[0:10])

### output
'''
tensor([[-0.0197,  0.0082,  0.0248,  0.0758, -0.0110,  0.0521, -0.0261,  0.0217,
         -0.0083,  0.0866],
        [-0.0214,  0.0173,  0.0255,  0.0715, -0.0092,  0.0486, -0.0253,  0.0214,
         -0.0141,  0.0909],
        ...
        [-0.0187,  0.0199,  0.0317,  0.0743, -0.0061,  0.0488, -0.0273,  0.0223,
         -0.0152,  0.0881],
        [ 0.0012,  0.0542,  0.0261,  0.0561, -0.0549,  0.0510,  0.0108,  0.0414,
         -0.0394,  0.0897]], grad_fn=<SliceBackward>)
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Training</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now let’s look at the code for training the image classification model. But first, let’s declare a few<em> helper functions</em> needed to train the model:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import torch.optim as optim

# Device
device = torch.device("cuda:0" if torch.cuda.is_available() else "cpu")

# Model instance
model = ImageRNN(BATCH_SIZE, N_STEPS, N_INPUTS, N_NEURONS, N_OUTPUTS)
criterion = nn.CrossEntropyLoss()
optimizer = optim.Adam(model.parameters(), lr=0.001)

def get_accuracy(logit, target, batch_size):
    ''' Obtain accuracy for training round '''
    corrects = (torch.max(logit, 1)[1].view(target.size()).data == target.data).sum()
    accuracy = 100.0 * corrects/batch_size
    return accuracy.item()</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Before training a model in PyTorch, you can programatically specify what device you want to use during training; the <code>torch.device(...)</code> function tells the program that we want to use the GPU if one is available, otherwise the CPU will be the default device.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Then we create an instance of the model, <code>ImageRNN(...)</code>, with the proper parameters. The <em>criterion </em>represents the function we will use to compute the loss of the model. The <code>nn.CrossEntropyLoss()</code> function basically applies a <em>log softmax</em> followed by a <em>negative log likelihood loss</em> operation over the output of the model. To compute the loss, the function needs both the log probabilities and targets. We will see later in our code how to provide this to the criterion.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For training, we also need an optimization algorithm which helps to update weights based on the current loss. This is achieved with the <code>optim.Adam</code> optimization function, which requires the <em>model parameters</em> and a <em>learning rate</em>. Alternatively, you can also use <code>optim.SGD</code> or any other optimization algorithm that's available.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The <code>get_accuracy(...)</code> function simply computes the accuracy of the model given the log probabilities and target values. As an exercise, you can write code to test this function as we did with the model before.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s put everything together and train our image classification model:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>for epoch in range(N_EPHOCS):  # loop over the dataset multiple times
    train_running_loss = 0.0
    train_acc = 0.0
    model.train()
    
    # TRAINING ROUND
    for i, data in enumerate(trainloader):
         # zero the parameter gradients
        optimizer.zero_grad()
        
        # reset hidden states
        model.hidden = model.init_hidden() 
        
        # get the inputs
        inputs, labels = data
        inputs = inputs.view(-1, 28,28) 

        # forward + backward + optimize
        outputs = model(inputs)

        loss = criterion(outputs, labels)
        loss.backward()
        optimizer.step()

        train_running_loss += loss.detach().item()
        train_acc += get_accuracy(outputs, labels, BATCH_SIZE)
         
    model.eval()
    print('Epoch:  %d | Loss: %.4f | Train Accuracy: %.2f' 
          %(epoch, train_running_loss / i, train_acc/i))
### output
'''
Epoch:  0 | Loss: 0.7149 | Train Accuracy: 75.81
Epoch:  1 | Loss: 0.2770 | Train Accuracy: 91.46
Epoch:  2 | Loss: 0.2099 | Train Accuracy: 93.58
Epoch:  3 | Loss: 0.1766 | Train Accuracy: 94.50
Epoch:  4 | Loss: 0.1638 | Train Accuracy: 94.94
Epoch:  5 | Loss: 0.1457 | Train Accuracy: 95.44
Epoch:  6 | Loss: 0.1347 | Train Accuracy: 95.81
Epoch:  7 | Loss: 0.1299 | Train Accuracy: 95.87
Epoch:  8 | Loss: 0.1228 | Train Accuracy: 96.06
Epoch:  9 | Loss: 0.1140 | Train Accuracy: 96.45
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can also compute accuracy on the testing dataset to test how well the model performs on the image classification task. As you can see below, our RNN model is performing very well on the MNIST classification task.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>test_acc = 0.0
for i, data in enumerate(testloader, 0):
    inputs, labels = data
    inputs = inputs.view(-1, 28, 28)

    outputs = model(inputs)

    test_acc += get_accuracy(outputs, labels, BATCH_SIZE)
        
print('Test Accuracy: %.2f'%( test_acc/i))

### output
'''
Test Accuracy: 96.97
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Final Words</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Please notice that we are not using GPU in this tutorial since the models we are building are relatively simple. As an exercise, you can take a look at the <a href="https://pytorch.org/docs/stable/notes/cuda.html" target="_self">PyTorch documentation</a> to learn how to program specific operations to execute on the GPU. You can then try to optimize the code to run on the GPU. If you need help with this, reach out to me on <a href="https://twitter.com/omarsar0" target="_self">Twitter</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That’s it for this tutorial. Congratulations! You are now able to implement a basic RNN in PyTorch. You also learned how to apply RNNs to solve a real-world, image classification problem. I have also implemented this on Google Colab already so you can take a look at the result <a href="https://colab.research.google.com/drive/1NVuWLZ0cuXPAtwV4Fs2KZ2MNla0dBUas" target="_self">here</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the next tutorial, we will do more advanced things with RNNs and try to solve even more complex problems, such as <em>sarcasm detection</em> and <em>sentiment classification</em>. Until next time!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Update Log:</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Fixed the output of the SingleRNN model; initially added the wrong output. Thanks to <a href="https://twitter.com/keratin7" target="_self">Arnav</a> for capturing this.</li><li class="ff3" style="font-size:22px;"><strong>(27/Feb/2020)</strong> In CleanBasicRNN, we changed <code>rnn</code> to <code>self.rnn</code>. This was a bug in the code. Thanks to folks in the comment section that caught this one.</li><li class="ff3" style="font-size:22px;"><strong>(28/Feb/2020) </strong>The Colab notebook was updated to reflect the changes above.</li></ul></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>