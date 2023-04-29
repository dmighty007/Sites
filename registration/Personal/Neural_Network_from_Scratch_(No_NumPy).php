<!DOCTYPE html>
                <html>
                <head>
                    <title>Neural Network from Scratch (No NumPy)</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/neural-network-from-scratch-no-numpy-part-i-7c3609308ed8"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@pmlachert?source=post_page-----7c3609308ed8--------------------------------">Author : Piotr Lachert</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Neural Network from Scratch (No NumPy)</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">Simple implementation of neural networks using standard Python library</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*ixDXFlpeM6R32NFa 640w, https://miro.medium.com/v2/resize:fit:720/0*ixDXFlpeM6R32NFa 720w, https://miro.medium.com/v2/resize:fit:750/0*ixDXFlpeM6R32NFa 750w, https://miro.medium.com/v2/resize:fit:786/0*ixDXFlpeM6R32NFa 786w, https://miro.medium.com/v2/resize:fit:828/0*ixDXFlpeM6R32NFa 828w, https://miro.medium.com/v2/resize:fit:1100/0*ixDXFlpeM6R32NFa 1100w, https://miro.medium.com/v2/resize:fit:1400/0*ixDXFlpeM6R32NFa 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*ixDXFlpeM6R32NFa 640w, https://miro.medium.com/v2/resize:fit:720/0*ixDXFlpeM6R32NFa 720w, https://miro.medium.com/v2/resize:fit:750/0*ixDXFlpeM6R32NFa 750w, https://miro.medium.com/v2/resize:fit:786/0*ixDXFlpeM6R32NFa 786w, https://miro.medium.com/v2/resize:fit:828/0*ixDXFlpeM6R32NFa 828w, https://miro.medium.com/v2/resize:fit:1100/0*ixDXFlpeM6R32NFa 1100w, https://miro.medium.com/v2/resize:fit:1400/0*ixDXFlpeM6R32NFa 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/0*ixDXFlpeM6R32NFa"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@kvncnls?utm_source=medium&utm_medium=referral" target="_self">Kevin Canlas</a> on <a href="https://unsplash.com?utm_source=medium&utm_medium=referral" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Motivation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">AI has been developing at an alarming rate for the last several years. There are already plenty of high-level frameworks that enable you to build the model and run the training without having to worry about all the technical details. That’s great news. Not only does it make things easier, it also makes AI algorithms available to more people. On the other hand, it comes at a price. We don’t have to deeply understand the details of neural networks (NNs) anymore and this may pose a threat. In order to be great at what you do you need to go deeper. Just to be clear — I don’t mean we should all go back to the beginning and code everything by ourselves. What I mean is we should go back to the basics from time to time and make sure that we understand what is actually going on when we train our models. In my opinion the best way to check if you really understand how neural networks learn is to implement the whole process all by yourself.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The article is going to describe the process of implementing some basic neural networks in Python. I intentionally limited myself to use only standard Python library. I wanted the article to be valuable also to those who are not familiar with linear algebra, so they can gain intuition about how neural networks learn. Let’s get started.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Basics</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Before we dive into details, let’s mention some basic facts about neural networks:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">a neural network consists of layers that perform certain calculations on the input and pass the calculated values to the next layer.</li><li class="ff3" style="font-size:22px;">the calculations performed in the layers are dependent on some numbers called weights</li><li class="ff3" style="font-size:22px;">the weights can be modified in a process called training in order to change the transformation of the input in such a way that the output fits the training data better in terms of some objective</li><li class="ff3" style="font-size:22px;">the objective is called Loss function. It tells us how wrong the model is e.g. when training a model to predict person’s age based on their voice the loss could be the mean absolute error in years over the training samples.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you’re unfamiliar with these concepts or want to learn more I recommend a great <a href="https://www.youtube.com/watch?v=aircAruvnKk&t=4s" target="_self">series on Deep Learning</a> by 3Blue1Brown.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Implementation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The code is available <a href="https://github.com/plachert/deeplearning-from-scratch" target="_self">here</a>. I wanted the implementation to be easy to follow in terms of the scope that is discussed in the article. It is highly inefficient as there is no vectorization and linear algebra involved.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Forward pass</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s start with building everything that is needed to perform calculations on the input. Neural networks are made up of layers, so we definitely are going to need an object to represent a layer. Let’s make it an abstract class. By doing so we don’t have to think how to implement things in details yet.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from abc import ABCMeta, abstractmethod


class Layer(metaclass=ABCMeta):

    @abstractmethod
    def __call__(self, input_):
        """"We think of a layer as a function that processes input in a certain way."""
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As we already defined a template of a layer we can create a model (Neural Network).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from typing import List
from layer import Layer


class Model:
    def __init__(self, layers: List[Layer]):
        self.layers = layers
        self.outputs = [] # stores activations after forward pass
    
    def forward_pass(self, input_):
        self.outputs = [] # reset
        self.outputs.append(input_) # treat input features as the first activation
        for layer in self.layers:
            output = layer(input_)
            self.outputs.append(output)
            input_ = output
        return output
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For now the model can only perform the forward pass on the input and return the output. The output of each layer is stored in attribute <em>outputs. </em>It is going to be needed later.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One more thing that we need to do is to implement a layer as we only have a template. As you might expect we are going to create a linear layer. Before diving in the code, let’s recap what a linear layer does:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*EvkDnmz3437b7w_cuQd5Dg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*EvkDnmz3437b7w_cuQd5Dg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*EvkDnmz3437b7w_cuQd5Dg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*EvkDnmz3437b7w_cuQd5Dg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*EvkDnmz3437b7w_cuQd5Dg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*EvkDnmz3437b7w_cuQd5Dg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*EvkDnmz3437b7w_cuQd5Dg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*EvkDnmz3437b7w_cuQd5Dg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*EvkDnmz3437b7w_cuQd5Dg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*EvkDnmz3437b7w_cuQd5Dg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*EvkDnmz3437b7w_cuQd5Dg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*EvkDnmz3437b7w_cuQd5Dg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*EvkDnmz3437b7w_cuQd5Dg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*EvkDnmz3437b7w_cuQd5Dg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*EvkDnmz3437b7w_cuQd5Dg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig. 1: Linear layer with 2 inputs and 2 outputs</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see we need to define the size of the input (how many numbers are going to be passed to the layer) and the size of the output. We can also make a distinction between the parameters by which the inputs are being multiplied (<em>wjk</em>) and the parameters that are being added to the output (<em>bk</em>). We are going to call the former <strong>weights</strong> and the later <strong>biases</strong>. Let’s also stick to the commonly used index convention: <em>wjk </em>is the weight between j-th input neuron and k-th output neuron<em>. </em>With all that in mind we are ready to code the linear layer.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from abc import ABCMeta, abstractmethod
import random


class Layer(metaclass=ABCMeta):

    @abstractmethod
    def __call__(self, input_):
        """"We think of a layer as a function that processes input in a certain way."""
 
 
class LinearLayer(Layer):

    def __init__(self, input_features: int, output_features: int):
        self.n_input_features = input_features
        self.n_output_features = output_features
        self.weights = []
        self.biases = []
        for j in range(input_features):
            W_j = [] # weights for j-th feature
            for k in range(output_features):
                W_jk = random.uniform(-0.1, 0.1) # weight that represents j-th feature affects k-th neuron 
                W_j.append(W_jk)
            self.weights.append(W_j)
        for k in range(output_features):
            bias_k = random.uniform(0, 1) # number that should be added to the k-th neuron
            self.biases.append(bias_k)
            
    def __call__(self, input_):
        output = []
        for k in range(self.n_output_features):
            output_k = 0
            for j in range(self.n_input_features):
                output_k += self.weights[j][k] * input_[j]
            # add bias 
            output_k += self.biases[k]
            output.append(output_k)
        return output
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The above code does two things:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">initializes weights (random numbers in range (-0.1, 0.1)) and biases (random number from 0 to 1).</li><li class="ff3" style="font-size:22px;">computes the output of the layer by applying linear transformation (see Fig. 1)</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now we can already create a model that consists of linear layers. However, it’s not really useful until we can train it. Let’s implement backpropagation.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Backpropagation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Again, before moving on to the implementation, let’s think about this remarkable idea which makes training neural networks possible — <strong>backpropagation. </strong>Well, it may not be 100% correct to talk about backpropagation algorithm in isolation from linear algebra, but for educational purposes let’s assume we will. Although I think it’s generally a good idea to get familiar with some basics of linear algebra, it may be easier to understand the backpropagation by looking at one parameter at a time. Let’s get started.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*mERoiAERooxhjSVrjsCfrw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*mERoiAERooxhjSVrjsCfrw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*mERoiAERooxhjSVrjsCfrw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*mERoiAERooxhjSVrjsCfrw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*mERoiAERooxhjSVrjsCfrw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*mERoiAERooxhjSVrjsCfrw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*mERoiAERooxhjSVrjsCfrw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*mERoiAERooxhjSVrjsCfrw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*mERoiAERooxhjSVrjsCfrw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*mERoiAERooxhjSVrjsCfrw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*mERoiAERooxhjSVrjsCfrw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*mERoiAERooxhjSVrjsCfrw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*mERoiAERooxhjSVrjsCfrw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*mERoiAERooxhjSVrjsCfrw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*mERoiAERooxhjSVrjsCfrw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig. 2: Simple neural network with 3 parameters (without biases).</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For simplicity, let’s consider a very simple neural network that expects one number (feature), performs three linear transformations (with bias=0) and outputs one number (see Fig.2). Also, let’s consider only one training sample (X=1, Y=12).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I like to think about backpropagation as a tool that enables you to disassemble the neural network and look at one layer at a time. The first step in the algorithm is to take the loss and see how it would change if we changed the output of the model (O3):</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*UhP14-6cm1O1ye9v9jpEFg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*UhP14-6cm1O1ye9v9jpEFg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*UhP14-6cm1O1ye9v9jpEFg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*UhP14-6cm1O1ye9v9jpEFg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*UhP14-6cm1O1ye9v9jpEFg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*UhP14-6cm1O1ye9v9jpEFg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*UhP14-6cm1O1ye9v9jpEFg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*UhP14-6cm1O1ye9v9jpEFg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*UhP14-6cm1O1ye9v9jpEFg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*UhP14-6cm1O1ye9v9jpEFg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*UhP14-6cm1O1ye9v9jpEFg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*UhP14-6cm1O1ye9v9jpEFg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*UhP14-6cm1O1ye9v9jpEFg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*UhP14-6cm1O1ye9v9jpEFg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*UhP14-6cm1O1ye9v9jpEFg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig.3 Starting backpropagation with calculating the error at the last layer</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">What does <em>dL/dO3</em> tell us? It tells us that if we increased <em>O3</em> by a small amount, the loss would decrease 12 times more. Notice that if <em>O3</em> was higher than <em>Y</em> <em>dL/dO3</em> would be positive. We need this information to know if <em>O3</em> should be increased or decreased. Also, if <em>O3</em> is equal to <em>Y</em> the derivative (<em>dL/dO3</em>) is 0 — the model is perfect and <em>O3</em> is just right. OK, Let’s implement this part:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from abc import ABCMeta, abstractmethod


class Loss(metaclass=ABCMeta):
    
    @abstractmethod
    def compute_loss_grad(self, y_hat, y):
        """Computes dL/dy_hat"""
    
    @abstractmethod
    def compute_cost(self, y_hat, y):
        """Computes loss."""


class MSELoss:

    def compute_loss_grad(self, y_hat, y):
        return [2 * (y_hat[0] - y[0])]

    def compute_cost(self, y_hat, y):
        return (y[0] - y_hat[0]) ** 2</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see, loss object needs two methods:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><em>compute_cost </em>that returns the value of loss function for given prediction <em>(y_hat)</em></li><li class="ff3" style="font-size:22px;"><em>compute_loss_grad </em>which is the same as <em>dL/O3 </em>(see fig. 3)</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Notice that we take the first index of <em>y </em>and <em>y_hat. </em>This is because in current implementation linear layers output lists even when it’s only one number. For consistency the target (<em>y</em>) is also passed as a one element list. As we are going to train with batch_size=1, it’s OK. In proper implementation they would probably be arrays or tensors and the results would be averaged.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s move on to the next step in backpropagation:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*sfyFHvYlIjrjBjiDM5r3dw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*sfyFHvYlIjrjBjiDM5r3dw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*sfyFHvYlIjrjBjiDM5r3dw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*sfyFHvYlIjrjBjiDM5r3dw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*sfyFHvYlIjrjBjiDM5r3dw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*sfyFHvYlIjrjBjiDM5r3dw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*sfyFHvYlIjrjBjiDM5r3dw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*sfyFHvYlIjrjBjiDM5r3dw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*sfyFHvYlIjrjBjiDM5r3dw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*sfyFHvYlIjrjBjiDM5r3dw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*sfyFHvYlIjrjBjiDM5r3dw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*sfyFHvYlIjrjBjiDM5r3dw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*sfyFHvYlIjrjBjiDM5r3dw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*sfyFHvYlIjrjBjiDM5r3dw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*sfyFHvYlIjrjBjiDM5r3dw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig.4: Calculating gradients in the last layer</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We already know that <em>O3</em> should be increased in order to decrease the loss. Let’s now think about how <em>O3</em> can be changed. It can be affected in two ways: by changing the input (<em>I3</em>) or by modyfing the weight (<em>w3</em>). Let’s conider how these changes affect the loss:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:55%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 419px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*HTi92dHid9er5CG1BguoAw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*HTi92dHid9er5CG1BguoAw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*HTi92dHid9er5CG1BguoAw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*HTi92dHid9er5CG1BguoAw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*HTi92dHid9er5CG1BguoAw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*HTi92dHid9er5CG1BguoAw.png 1100w, https://miro.medium.com/v2/resize:fit:838/format:webp/1*HTi92dHid9er5CG1BguoAw.png 838w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 419px" srcset="https://miro.medium.com/v2/resize:fit:640/1*HTi92dHid9er5CG1BguoAw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*HTi92dHid9er5CG1BguoAw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*HTi92dHid9er5CG1BguoAw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*HTi92dHid9er5CG1BguoAw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*HTi92dHid9er5CG1BguoAw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*HTi92dHid9er5CG1BguoAw.png 1100w, https://miro.medium.com/v2/resize:fit:838/1*HTi92dHid9er5CG1BguoAw.png 838w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:419/1*HTi92dHid9er5CG1BguoAw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig. 5: Derivatives of the loss function with respect to the input to the third layer and its weight.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see we can determine how the loss would change with respect to the weight and input in a layer by looking at the “error” of the following layer and the input. This is the core idea behing the backpropagation algorithm. The derivative <em>dL/dw</em> tells us how the weight should be updated. We keep this information for later. The other one <em>(dL/dI)</em> is being passed to the previous layer in the same manner as before — we need it to calculate derivatives in the next step (in the previous layer). Putting it all together:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9BrVREeJm1r7a-pV4Jfoxg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9BrVREeJm1r7a-pV4Jfoxg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9BrVREeJm1r7a-pV4Jfoxg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9BrVREeJm1r7a-pV4Jfoxg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9BrVREeJm1r7a-pV4Jfoxg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9BrVREeJm1r7a-pV4Jfoxg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*9BrVREeJm1r7a-pV4Jfoxg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9BrVREeJm1r7a-pV4Jfoxg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*9BrVREeJm1r7a-pV4Jfoxg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*9BrVREeJm1r7a-pV4Jfoxg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*9BrVREeJm1r7a-pV4Jfoxg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*9BrVREeJm1r7a-pV4Jfoxg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*9BrVREeJm1r7a-pV4Jfoxg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*9BrVREeJm1r7a-pV4Jfoxg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*9BrVREeJm1r7a-pV4Jfoxg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig. 6: Derivatives used in backpropagation.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The derivatives on the right-hand side are used to update the weights. This is the final step of backpropagation algorithm. As you can see the derivatives are pretty big, e.g. <em>dL/dw(1)</em> tells us that if we increased <em>w(1) </em>by some value, the loss function would decrease by 72 times that value. That’s why we use small learning rates to update the weights:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*G-xrdvsT7ci0oEkEKwA3og.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*G-xrdvsT7ci0oEkEKwA3og.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*G-xrdvsT7ci0oEkEKwA3og.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*G-xrdvsT7ci0oEkEKwA3og.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*G-xrdvsT7ci0oEkEKwA3og.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*G-xrdvsT7ci0oEkEKwA3og.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*G-xrdvsT7ci0oEkEKwA3og.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*G-xrdvsT7ci0oEkEKwA3og.png 640w, https://miro.medium.com/v2/resize:fit:720/1*G-xrdvsT7ci0oEkEKwA3og.png 720w, https://miro.medium.com/v2/resize:fit:750/1*G-xrdvsT7ci0oEkEKwA3og.png 750w, https://miro.medium.com/v2/resize:fit:786/1*G-xrdvsT7ci0oEkEKwA3og.png 786w, https://miro.medium.com/v2/resize:fit:828/1*G-xrdvsT7ci0oEkEKwA3og.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*G-xrdvsT7ci0oEkEKwA3og.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*G-xrdvsT7ci0oEkEKwA3og.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*G-xrdvsT7ci0oEkEKwA3og.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig. 7: Updating the weights. The loss decreased from 36 to 29.16.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s go back to the implementation of the layer object and add 3 more methods:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><em>compute_input_errors </em>(<em>dL/dI</em>)</li><li class="ff3" style="font-size:22px;"><em>compute_gradients </em>(<em>dL/dw </em>(for weights)<em>, dL/db </em>(for biases))</li><li class="ff3" style="font-size:22px;"><em>update_params </em>—for simplicity let layers handle updating their parameters provided the gradients (<em>dL/dw</em>) and learning rate (see Fig. 7)</li></ul></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from abc import ABCMeta, abstractmethod
import random


class Layer(metaclass=ABCMeta):

    @abstractmethod
    def compute_input_errors(self, output_errors):
        """Checks how the input to the layer should change to improve the output.
        The result of this function tells us how the input 
        (the output of the previous layer) should be 
        modified to reduce the output errors.
        Args:
            output_errors: errors for each output of the layer 
            calculated in the next layer.
        Returns:
            A list of input errors - this tells the previous layer how it should be 
            modified to improve the output
        """
    
    @abstractmethod
    def compute_gradients(self, input_, output_errors):
        """Compute gradients over the parameters. This tells how much each parameter
        affects the output_errors.
        """
    
    @abstractmethod
    def update_params(self, gradients, learning_rate):
        """Update parameters of the layer."""
    
    @abstractmethod
    def __call__(self, input_):
        """"We think of a layer as a function that process input in a certain way."""
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Updated LinearLayer:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class LinearLayer(Layer):
    def __init__(self, input_features: int, output_features: int):
        self.n_input_features = input_features
        self.n_output_features = output_features
        self.weights = []
        self.biases = []
        for j in range(input_features):
            W_j = [] # weights for j-th feature
            for k in range(output_features):
                W_jk = random.uniform(-0.1, 0.1) # weight that represents j-th feature affects k-th neuron 
                W_j.append(W_jk)
            self.weights.append(W_j)
        for k in range(output_features):
            bias_k = random.uniform(0, 1) # number that should be added to the k-th neuron
            self.biases.append(bias_k)
            
    def compute_input_errors(self, output_errors):
        assert len(output_errors) == self.n_output_features
        input_errors = []
        for j in range(self.n_input_features):
            grad_j = 0
            for k in range(self.n_output_features):
                grad_j += output_errors[k] * self.weights[j][k]
            input_errors.append(grad_j)
        return input_errors

    def compute_gradients(self, input_, output_errors):
        assert len(output_errors) == self.n_output_features
        dW = []
        db = []
        for j in range(self.n_input_features):
            dW_j = []
            for k in range(self.n_output_features):
                dW_jk = output_errors[k] * input_[j]
                dW_j.append(dW_jk)
            dW.append(dW_j)
        for k in range(self.n_output_features):
            db_k = output_errors[k]
            db.append(db_k)
        return dW, db

    def update_params(self, gradients, learning_rate):
        # gradients: (dW, db)
        dW = gradients[0]
        db = gradients[1]
        for j in range(self.n_input_features):
            for k in range(self.n_output_features):
                self.weights[j][k] -= dW[j][k] * learning_rate
        for k in range(self.n_output_features):
            self.biases[k] -= db[k] * learning_rate
        
    def __call__(self, input_):
        output = []
        for k in range(self.n_output_features):
            output_k = 0
            for j in range(self.n_input_features):
                output_k += self.weights[j][k] * input_[j]
            # add bias 
            output_k += self.biases[k]
            output.append(output_k)
        return output</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see <em>compute_input_errors </em>requires output_errors <em>dL/dI </em>(see Fig. 6) and calculates its own errors with respect to the input. The only difference is that in general it can have more than one input neuron, so the error has to be calculated with respect to each input node separately. Notice, that each input neuron affects all ouput nodes, so the effect has to be added (line no 23). Bias term is not relevant here, because it is added to the output neurons — it has nothing to do with the input.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s also take a closer look at <em>compute_gradients. </em>One thing that was not yet discussed is the bias term. It is pretty easy, though. As the bias is simply added to the output neuron, <em>dL/db</em> will be equal to the error for that neuron.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One last thing that we need to do is add some methods to the model object:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from typing import List
from layer import Layer
from loss import Loss

class Model:

    def __init__(self, layers: List[Layer], loss: Loss, learning_rate: float = 0.001):
        self.layers = layers
        self.loss = loss
        self.learning_rate = learning_rate
        self.outputs = [] # stores activations after forward pass
    
    def forward_pass(self, input_):
        self.outputs = [] # reset
        self.outputs.append(input_) # treat input features as the first activation
        for layer in self.layers:
            output = layer(input_)
            self.outputs.append(output)
            input_ = output
        return output

    def backpropagation_step(self, target):
        output_errors = self.loss.compute_loss_grad(self.outputs[-1], target)
        layers_grads = []
        for i, (layer, output) in enumerate(zip(self.layers[::-1], self.outputs[::-1])):
            input_errors = layer.compute_input_errors(output_errors)
            input_ = self.outputs[::-1][i+1] # output of the previous layer
            grads = layer.compute_gradients(input_, output_errors)
            output_errors = input_errors
            layers_grads.append((layer, grads))
        return layers_grads
    
    def update_layers(self, layers_grads):
        for layer, grads in layers_grads:
            layer.update_params(grads, self.learning_rate)
    
    def fit(self, X, y, epochs=10):
        for epoch in range(epochs):
            loss_avg = 0
            for X_, y_ in zip(X, y):
                y_hat = self.forward_pass(X_)
                layers_grads = self.backpropagation_step(y_)
                self.update_layers(layers_grads)
                loss = self.loss.compute_cost(y_hat, y_)
                loss_avg += loss
            loss_avg /= len(y)
            print(f"Loss after epoch {epoch}: {loss_avg}")</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s go through the code starting from the <em>fit </em>method. In order to train a network we usually need to go through the dataset many times. We call each run an epoch. In this implementation we can only provide one sample at a time. That’s what we are doing in line no. 40. We start with a forward pass that gives us our first prediction (<em>y_hat</em>). Notice that all the outputs generated in the forward pass are stored for later use. We use them in <em>backpropagation_step. </em>We start with computing the loss gradient and enter the loop where we go one layer at a time and calculate gradients. Just as discussed earlier. For each layer we store gradients that are needed to update parameters. In case of linear layers (for now they’re the only ones) they are <em>dL/dw</em> and <em>dL/db</em>. The gradients are used with<em> update_layers </em>method that goes through each layer and modifies its parameters. Lastly, the loss over the whole dataset is calculated to see if the training converges.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Adding nonlinearity</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Stacking linear layers doesn’t make much sense. Let’s equip our model with a simple activation function — ReLU:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class ReLU(Layer):
    def __init__(self, n_features: int):
        self.n_features = n_features
        
    def compute_input_errors(self, output_errors, output):
        assert len(output_errors) == self.n_features
        input_errors = []
        for j in range(self.n_features):
            output_errors_j = output_errors[j]
            outputs_j = output[j]
            input_errors_j = output_errors_j * (outputs_j > 0) # if it was 0
            input_errors.append(input_errors_j)
        return input_errors

    def compute_gradients(self, input_, output_errors):
        pass # This Layer has no parameters
    
    def update_params(self, gradients, learning_rate):
        pass # This Layer has no parameters
    
    def __call__(self, input_):
        output = []
        for j in range(self.n_features):
            input_j = input_[j]
            if input_j < 0:
                output_j = 0
            else:
                output_j = input_j
            output.append(output_j)
        return output</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The layer will pass only the inputs that are greater or equal to zero (see the <em>if/else</em> statement in the<em> __call__</em> method). This layer has no parameters so we only need to tell how the output of the layer is affected by the input (see <em>compute_input_errors</em>). This is fairly simple as the output is the same as the input unless the input was less than 0 (see line 11).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*zz5BLj4nNkERfq0QDaFORA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*zz5BLj4nNkERfq0QDaFORA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*zz5BLj4nNkERfq0QDaFORA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*zz5BLj4nNkERfq0QDaFORA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*zz5BLj4nNkERfq0QDaFORA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*zz5BLj4nNkERfq0QDaFORA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*zz5BLj4nNkERfq0QDaFORA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*zz5BLj4nNkERfq0QDaFORA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*zz5BLj4nNkERfq0QDaFORA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*zz5BLj4nNkERfq0QDaFORA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*zz5BLj4nNkERfq0QDaFORA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*zz5BLj4nNkERfq0QDaFORA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*zz5BLj4nNkERfq0QDaFORA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*zz5BLj4nNkERfq0QDaFORA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*zz5BLj4nNkERfq0QDaFORA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Learning nonlinear function with ReLU activation functions/</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see the model can already learn a simple non linear function.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Summary</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I hope that now you have a much better understanding of how neural networks work. Although the code is highly inefficient as all the calculations are made on lists (one element at a time), I think it is worth to do it once this way.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Thanks for reading! I hope you found the article useful.I write articles on data science, Python and digital signal processing (DSP). I also share some fun coding projects. If you’re interested, please consider following me on <a href="https://medium.com/@pmlachert" target="_self">Medium</a>.</p></blockquote></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>All images unless otherwise noted are by the author.</em></p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>