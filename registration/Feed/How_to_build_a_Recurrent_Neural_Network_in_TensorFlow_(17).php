<!DOCTYPE html>
                <html>
                <head>
                    <title>How to build a Recurrent Neural Network in TensorFlow (1/7)</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/@erikhallstrm/hello-world-rnn-83cd7105b767"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@erikhallstrm?source=post_page-----83cd7105b767--------------------------------">Author : Erik Hallström</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>How to build a Recurrent Neural Network in TensorFlow (1/7)</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Dear reader,</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This article has been republished at <a href="https://educaora.com/@erikhallstrom/How_to_build_a_Recurrent_Neural_Network_in_TensorFlow" target="_self">Educaora</a> and has also been <a href="https://github.com/3h4/tutorials" target="_self">open sourced</a>. Unfortunately TensorFlow 2.0 changed the API so it is broken for later versions. Any help to make the tutorials up to date are greatly appreciated. I also recommend you looking into PyTorch.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this tutorial I’ll explain how to build a simple working Recurrent Neural Network in TensorFlow. This is the first in a series of seven parts where various aspects and techniques of building Recurrent Neural Networks in TensorFlow are covered. A short introduction to TensorFlow is <a href="https://medium.com/@erikhallstrm/hello-world-tensorflow-649b15aed18c#.kogbhxazp" target="_self">available here</a>. For now, let’s get started with the RNN!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">What is a RNN?</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It is short for “Recurrent Neural Network”, and is basically a neural network that can be used when your data is treated as a sequence, where the particular order of the data-points matter. More importantly, this sequence can be of <em>arbitrary length</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The most straight-forward example is perhaps a time-series of numbers, where the task is to predict the next value given previous values. The input to the RNN at every time-step is the <em>current value</em> as well as a <em>state vector</em> which represent what the network has “seen” at time-steps before. This state-vector is the encoded memory of the RNN, initially set to zero.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*UkI9za9zTR-HL8uM15Wmzw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*UkI9za9zTR-HL8uM15Wmzw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*UkI9za9zTR-HL8uM15Wmzw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*UkI9za9zTR-HL8uM15Wmzw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*UkI9za9zTR-HL8uM15Wmzw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*UkI9za9zTR-HL8uM15Wmzw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*UkI9za9zTR-HL8uM15Wmzw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*UkI9za9zTR-HL8uM15Wmzw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*UkI9za9zTR-HL8uM15Wmzw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*UkI9za9zTR-HL8uM15Wmzw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*UkI9za9zTR-HL8uM15Wmzw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*UkI9za9zTR-HL8uM15Wmzw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*UkI9za9zTR-HL8uM15Wmzw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*UkI9za9zTR-HL8uM15Wmzw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*UkI9za9zTR-HL8uM15Wmzw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Schematic of a RNN processing sequential data over time.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The best and most comprehensive article explaining RNN:s I’ve found so far is <a href="https://arxiv.org/pdf/1506.00019.pdf" target="_self">this article</a> by researchers at UCSD, highly recommended. For now you only need to understand the basics, read it until the “Modern RNN architectures”-section. That will be covered later.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Although this article contains some explanations, it is mostly focused on the practical part, how to build it. You are encouraged to look up more theory on the Internet, there are plenty of good explanations.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Setup</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will build a simple Echo-RNN that remembers the input data and then echoes it after a few time-steps. First let’s set some constants we’ll need, what they mean will become clear in a moment.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from __future__ import print_function, division
import numpy as np
import tensorflow as tf
import matplotlib.pyplot as plt

num_epochs = 100
total_series_length = 50000
truncated_backprop_length = 15
state_size = 4
num_classes = 2
echo_step = 3
batch_size = 5
num_batches = total_series_length//batch_size//truncated_backprop_length

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Generate data</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now generate the training data, the input is basically a random binary vector. The output will be the “echo” of the input, shifted <code>echo_step</code> steps to the right.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def generateData():
    x = np.array(np.random.choice(2, total_series_length, p=[0.5, 0.5]))
    y = np.roll(x, echo_step)
    y[0:echo_step] = 0

    x = x.reshape((batch_size, -1))  # The first index changing slowest, subseries as rows
    y = y.reshape((batch_size, -1))

    return (x, y)

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Notice the reshaping of the data into a matrix with <code>batch_size</code> rows. Neural networks are trained by approximating the gradient of loss function with respect to the neuron-weights, by looking at only a small subset of the data, also known as a <em>mini-batch</em>. The theoretical reason for doing this is further elaborated in <a href="https://www.quora.com/In-deep-learning-why-dont-we-use-the-whole-training-set-to-compute-the-gradient/answer/Ian-Goodfellow?srid=9KXj" target="_self">this question</a>. The reshaping takes the whole dataset and puts it into a matrix, that later will be sliced up into these mini-batches.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*aFtwuFsboLV8z5PkEzNLXA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*aFtwuFsboLV8z5PkEzNLXA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*aFtwuFsboLV8z5PkEzNLXA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*aFtwuFsboLV8z5PkEzNLXA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*aFtwuFsboLV8z5PkEzNLXA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*aFtwuFsboLV8z5PkEzNLXA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*aFtwuFsboLV8z5PkEzNLXA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*aFtwuFsboLV8z5PkEzNLXA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*aFtwuFsboLV8z5PkEzNLXA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*aFtwuFsboLV8z5PkEzNLXA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*aFtwuFsboLV8z5PkEzNLXA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*aFtwuFsboLV8z5PkEzNLXA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*aFtwuFsboLV8z5PkEzNLXA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*aFtwuFsboLV8z5PkEzNLXA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*aFtwuFsboLV8z5PkEzNLXA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Schematic of the reshaped data-matrix, arrow curves shows adjacent time-steps that ended up on different rows. Light-gray rectangle represent a “zero” and dark-gray a “one”.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Building the computational graph</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">TensorFlow works by first building up a computational graph, that specifies what operations will be done. The input and output of this graph is typically multidimensional arrays, also known as tensors. The graph, or parts of it can then be executed iteratively in a session, this can either be done on the CPU, GPU or even a resource on a remote server.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Variables and placeholders</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The two basic TensorFlow data-structures that will be used in this example are <em>placeholders</em> and <em>variables. </em><mark>On each run the batch data is fed to the placeholders, which are “starting nodes” of the computational graph</mark>. Also the RNN-state is supplied in a placeholder, which is saved from the output of the previous run.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>batchX_placeholder = tf.placeholder(tf.float32, [batch_size, truncated_backprop_length])
batchY_placeholder = tf.placeholder(tf.int32, [batch_size, truncated_backprop_length])

init_state = tf.placeholder(tf.float32, [batch_size, state_size])

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The weights and biases of the network are declared as TensorFlow <em>variables</em>, which makes them persistent across runs and enables them to be updated incrementally for each batch.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>W = tf.Variable(np.random.rand(state_size+1, state_size), dtype=tf.float32)
b = tf.Variable(np.zeros((1,state_size)), dtype=tf.float32)

W2 = tf.Variable(np.random.rand(state_size, num_classes),dtype=tf.float32)
b2 = tf.Variable(np.zeros((1,num_classes)), dtype=tf.float32)

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The figure below shows the input data-matrix, and the current batch <code>batchX_placeholder</code> is in the dashed rectangle. As we will see later, this “batch window” is slided <code>truncated_backprop_length</code> steps to the right at each run, hence the arrow. In our example below <code>batch_size = 3</code>, <code>truncated_backprop_length = 3</code>, and <code>total_series_length = 36</code>. Note that these numbers are just for visualization purposes, the values are different in the code. The series order index is shown as numbers in a few of the data-points.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*n45uYnAfTDrBvG87J-poCA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*n45uYnAfTDrBvG87J-poCA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*n45uYnAfTDrBvG87J-poCA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*n45uYnAfTDrBvG87J-poCA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*n45uYnAfTDrBvG87J-poCA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*n45uYnAfTDrBvG87J-poCA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*n45uYnAfTDrBvG87J-poCA.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*n45uYnAfTDrBvG87J-poCA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*n45uYnAfTDrBvG87J-poCA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*n45uYnAfTDrBvG87J-poCA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*n45uYnAfTDrBvG87J-poCA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*n45uYnAfTDrBvG87J-poCA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*n45uYnAfTDrBvG87J-poCA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*n45uYnAfTDrBvG87J-poCA.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*n45uYnAfTDrBvG87J-poCA.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Schematic of the training data, the current batch is sliced out in the dashed rectangle. The time-step index of the datapoint is displayed.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Unpacking</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now it’s time to build the part of the graph that resembles the actual RNN computation, first we want to split the batch data into adjacent time-steps.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Unpack columns
inputs_series = tf.unpack(batchX_placeholder, axis=1)
labels_series = tf.unpack(batchY_placeholder, axis=1)

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see in the picture below that is done by unpacking the columns (<code>axis = 1</code>) of the batch into a Python list. The RNN will simultaneously be training on different parts in the time-series; steps 4 to 6, 16 to 18 and 28 to 30 in the current batch-example. The reason for using the variable names <code>“plural”_”series”</code> is to emphasize that the variable is a list that represent a time-series with multiple entries at each step.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*f2iL4zOkBUBGOpVE7kyajg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*f2iL4zOkBUBGOpVE7kyajg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*f2iL4zOkBUBGOpVE7kyajg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*f2iL4zOkBUBGOpVE7kyajg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*f2iL4zOkBUBGOpVE7kyajg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*f2iL4zOkBUBGOpVE7kyajg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*f2iL4zOkBUBGOpVE7kyajg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*f2iL4zOkBUBGOpVE7kyajg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*f2iL4zOkBUBGOpVE7kyajg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*f2iL4zOkBUBGOpVE7kyajg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*f2iL4zOkBUBGOpVE7kyajg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*f2iL4zOkBUBGOpVE7kyajg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*f2iL4zOkBUBGOpVE7kyajg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*f2iL4zOkBUBGOpVE7kyajg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*f2iL4zOkBUBGOpVE7kyajg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Schematic of the current batch split into columns, the order index is shown on each data-point and arrows show adjacent time-steps.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The fact that the training is done on three places simultaneously in our time-series, requires us to save three instances of states when propagating forward. That has already been accounted for, as you see that the <code>init_state</code> placeholder has <code>batch_size</code> rows.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Forward pass</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Next let’s build the part of the graph that does the actual RNN computation.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Forward pass
current_state = init_state
states_series = []
for current_input in inputs_series:
    current_input = tf.reshape(current_input, [batch_size, 1])
    input_and_state_concatenated = tf.concat(1, [current_input, current_state])  # Increasing number of columns

    next_state = tf.tanh(tf.matmul(input_and_state_concatenated, W) + b)  # Broadcasted addition
    states_series.append(next_state)
    current_state = next_state

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Notice the concatenation on line 6, what we actually want to do is calculate the sum of two affine transforms <code>current_input * Wa + current_state * Wb</code> in the figure below. By concatenating those two tensors you will only use one matrix multiplication. The addition of the bias <code>b</code> is <a href="https://docs.scipy.org/doc/numpy/user/basics.broadcasting.html" target="_self">broadcasted</a> on all samples in the batch.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*fdwNNJ5UOE3Sx0R_Cyfmyg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Schematic of the computations of the matrices on line 8 in the code example above, the non-linear transform arctan is omitted.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You may wonder the variable name <code>truncated_backprop_length</code> is supposed to mean. When a RNN is trained, it is actually treated as a deep neural network with reoccurring weights in every layer. These layers will not be unrolled to the beginning of time, that would be too computationally expensive, and are therefore truncated at a limited number of time-steps. In our sample schematics above, the error is backpropagated three steps in our batch.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Calculating loss</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is the final part of the graph, a fully connected softmax layer from the state to the output that will make the classes <em>one-hot encoded</em>,<em> </em>and then calculating the loss of the batch.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>logits_series = [tf.matmul(state, W2) + b2 for state in states_series] #Broadcasted addition
predictions_series = [tf.nn.softmax(logits) for logits in logits_series]

losses = [tf.nn.sparse_softmax_cross_entropy_with_logits(logits, labels) for logits, labels in zip(logits_series,labels_series)]
total_loss = tf.reduce_mean(losses)

train_step = tf.train.AdagradOptimizer(0.3).minimize(total_loss)
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The last line is adding the training functionality, TensorFlow will perform back-propagation for us automatically — the computation graph is executed once for each mini-batch and the network-weights are updated incrementally.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Notice the API call to <code>sparse_softmax_cross_entropy_with_logits</code>, it automatically calculates the softmax internally and then computes the cross-entropy. In our example the classes are mutually exclusive (they are either zero or one), which is the reason for using the “Sparse-softmax”, you can read more about it in <a href="https://www.tensorflow.org/versions/r0.11/api_docs/python/nn.html#sparse_softmax_cross_entropy_with_logits" target="_self">the API</a>. The usage is to have<code>logits</code> is of shape <code>[batch_size, num_classes]</code> and <code>labels</code> of shape <code>[batch_size]</code>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Visualizing the training</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There is a visualization function so we can se what’s going on in the network as we train. It will plot the loss over the time, show training input, training output and the current predictions by the network on different sample series in a training batch.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def plot(loss_list, predictions_series, batchX, batchY):
    plt.subplot(2, 3, 1)
    plt.cla()
    plt.plot(loss_list)

    for batch_series_idx in range(5):
        one_hot_output_series = np.array(predictions_series)[:, batch_series_idx, :]
        single_output_series = np.array([(1 if out[0] < 0.5 else 0) for out in one_hot_output_series])

        plt.subplot(2, 3, batch_series_idx + 2)
        plt.cla()
        plt.axis([0, truncated_backprop_length, 0, 2])
        left_offset = range(truncated_backprop_length)
        plt.bar(left_offset, batchX[batch_series_idx, :], width=1, color="blue")
        plt.bar(left_offset, batchY[batch_series_idx, :] * 0.5, width=1, color="red")
        plt.bar(left_offset, single_output_series * 0.3, width=1, color="green")

    plt.draw()
    plt.pause(0.0001)

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Running a training session</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s time to wrap up and train the network, in TensorFlow the graph is executed in a session. New data is generated on each epoch (not the usual way to do it, but it works in this case since everything is predictable).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>with tf.Session() as sess:
    sess.run(tf.initialize_all_variables())
    plt.ion()
    plt.figure()
    plt.show()
    loss_list = []

    for epoch_idx in range(num_epochs):
        x,y = generateData()
        _current_state = np.zeros((batch_size, state_size))

        print("New data, epoch", epoch_idx)

        for batch_idx in range(num_batches):
            start_idx = batch_idx * truncated_backprop_length
            end_idx = start_idx + truncated_backprop_length

            batchX = x[:,start_idx:end_idx]
            batchY = y[:,start_idx:end_idx]

            _total_loss, _train_step, _current_state, _predictions_series = sess.run(
                [total_loss, train_step, current_state, predictions_series],
                feed_dict={
                    batchX_placeholder:batchX,
                    batchY_placeholder:batchY,
                    init_state:_current_state
                })

            loss_list.append(_total_loss)

            if batch_idx%100 == 0:
                print("Step",batch_idx, "Loss", _total_loss)
                plot(loss_list, _predictions_series, batchX, batchY)

plt.ioff()
plt.show()
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can see that we are moving <code>truncated_backprop_length</code> steps forward on each iteration (line 15–19), but it is possible have different strides. This subject is further elaborated in <a href="http://r2rt.com/styles-of-truncated-backpropagation.html" target="_self">this article</a>. The downside with doing this is that <code>truncated_backprop_length</code> need to be significantly larger than the time dependencies (three steps in our case) in order to encapsulate the relevant training data. Otherwise there might a lot of “misses”, as you can see on the figure below.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*uKuUKp_m55zAPCzaIemucA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*uKuUKp_m55zAPCzaIemucA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*uKuUKp_m55zAPCzaIemucA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*uKuUKp_m55zAPCzaIemucA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*uKuUKp_m55zAPCzaIemucA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*uKuUKp_m55zAPCzaIemucA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*uKuUKp_m55zAPCzaIemucA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*uKuUKp_m55zAPCzaIemucA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*uKuUKp_m55zAPCzaIemucA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*uKuUKp_m55zAPCzaIemucA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*uKuUKp_m55zAPCzaIemucA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*uKuUKp_m55zAPCzaIemucA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*uKuUKp_m55zAPCzaIemucA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*uKuUKp_m55zAPCzaIemucA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*uKuUKp_m55zAPCzaIemucA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Time series of squares, the elevated black square symbolizes an echo-output, which is activated three steps from the echo input (black square). The sliding batch window is also striding three steps at each run, which in our sample case means that no batch will encapsulate the dependency, so it can not train.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Also realize that this is just simple example to explain how a RNN works, this functionality could easily be programmed in just a few lines of code. The network will be able to exactly learn the echo behavior so there is no need for testing data.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The program will update the plot as training progresses, shown in the picture below. Blue bars denote a training input signal (binary one), red bars show echos in the training output and green bars are the echos the net is generating. The different bar plots show different sample series in the current batch.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Our algorithm will fairly quickly learn the task. The graph in the top-left corner shows the output of the loss function, but why are there spikes in the curve? Think of it for a moment, answer is below.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ytquMdmGMJo0-3kxMCi1Gg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ytquMdmGMJo0-3kxMCi1Gg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ytquMdmGMJo0-3kxMCi1Gg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ytquMdmGMJo0-3kxMCi1Gg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ytquMdmGMJo0-3kxMCi1Gg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ytquMdmGMJo0-3kxMCi1Gg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ytquMdmGMJo0-3kxMCi1Gg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ytquMdmGMJo0-3kxMCi1Gg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ytquMdmGMJo0-3kxMCi1Gg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ytquMdmGMJo0-3kxMCi1Gg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ytquMdmGMJo0-3kxMCi1Gg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ytquMdmGMJo0-3kxMCi1Gg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ytquMdmGMJo0-3kxMCi1Gg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ytquMdmGMJo0-3kxMCi1Gg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ytquMdmGMJo0-3kxMCi1Gg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Visualization of the loss, input and output training data (blue, red) as well as the prediction (green).</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The reason for the spikes is that we are starting on a new epoch, and generating new data. Since the matrix is reshaped, the first element on each row is adjacent to the last element in the previous row. The first few elements on all rows (except the first) have dependencies that will not be included in the state, so the net will always perform badly on the first batch.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Whole program</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is the whole runnable program, just copy-paste and run. After each part in the article series the whole runnable program will be presented. If a line is referenced by number, these are the line numbers that we mean.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from __future__ import print_function, division
import numpy as np
import tensorflow as tf
import matplotlib.pyplot as plt

num_epochs = 100
total_series_length = 50000
truncated_backprop_length = 15
state_size = 4
num_classes = 2
echo_step = 3
batch_size = 5
num_batches = total_series_length//batch_size//truncated_backprop_length

def generateData():
    x = np.array(np.random.choice(2, total_series_length, p=[0.5, 0.5]))
    y = np.roll(x, echo_step)
    y[0:echo_step] = 0

    x = x.reshape((batch_size, -1))  # The first index changing slowest, subseries as rows
    y = y.reshape((batch_size, -1))

    return (x, y)

batchX_placeholder = tf.placeholder(tf.float32, [batch_size, truncated_backprop_length])
batchY_placeholder = tf.placeholder(tf.int32, [batch_size, truncated_backprop_length])

init_state = tf.placeholder(tf.float32, [batch_size, state_size])

W = tf.Variable(np.random.rand(state_size+1, state_size), dtype=tf.float32)
b = tf.Variable(np.zeros((1,state_size)), dtype=tf.float32)

W2 = tf.Variable(np.random.rand(state_size, num_classes),dtype=tf.float32)
b2 = tf.Variable(np.zeros((1,num_classes)), dtype=tf.float32)

# Unpack columns
inputs_series = tf.unpack(batchX_placeholder, axis=1)
labels_series = tf.unpack(batchY_placeholder, axis=1)

# Forward pass
current_state = init_state
states_series = []
for current_input in inputs_series:
    current_input = tf.reshape(current_input, [batch_size, 1])
    input_and_state_concatenated = tf.concat(1, [current_input, current_state])  # Increasing number of columns

    next_state = tf.tanh(tf.matmul(input_and_state_concatenated, W) + b)  # Broadcasted addition
    states_series.append(next_state)
    current_state = next_state

logits_series = [tf.matmul(state, W2) + b2 for state in states_series] #Broadcasted addition
predictions_series = [tf.nn.softmax(logits) for logits in logits_series]

losses = [tf.nn.sparse_softmax_cross_entropy_with_logits(logits, labels) for logits, labels in zip(logits_series,labels_series)]
total_loss = tf.reduce_mean(losses)

train_step = tf.train.AdagradOptimizer(0.3).minimize(total_loss)

def plot(loss_list, predictions_series, batchX, batchY):
    plt.subplot(2, 3, 1)
    plt.cla()
    plt.plot(loss_list)

    for batch_series_idx in range(5):
        one_hot_output_series = np.array(predictions_series)[:, batch_series_idx, :]
        single_output_series = np.array([(1 if out[0] < 0.5 else 0) for out in one_hot_output_series])

        plt.subplot(2, 3, batch_series_idx + 2)
        plt.cla()
        plt.axis([0, truncated_backprop_length, 0, 2])
        left_offset = range(truncated_backprop_length)
        plt.bar(left_offset, batchX[batch_series_idx, :], width=1, color="blue")
        plt.bar(left_offset, batchY[batch_series_idx, :] * 0.5, width=1, color="red")
        plt.bar(left_offset, single_output_series * 0.3, width=1, color="green")

    plt.draw()
    plt.pause(0.0001)


with tf.Session() as sess:
    sess.run(tf.initialize_all_variables())
    plt.ion()
    plt.figure()
    plt.show()
    loss_list = []

    for epoch_idx in range(num_epochs):
        x,y = generateData()
        _current_state = np.zeros((batch_size, state_size))

        print("New data, epoch", epoch_idx)

        for batch_idx in range(num_batches):
            start_idx = batch_idx * truncated_backprop_length
            end_idx = start_idx + truncated_backprop_length

            batchX = x[:,start_idx:end_idx]
            batchY = y[:,start_idx:end_idx]

            _total_loss, _train_step, _current_state, _predictions_series = sess.run(
                [total_loss, train_step, current_state, predictions_series],
                feed_dict={
                    batchX_placeholder:batchX,
                    batchY_placeholder:batchY,
                    init_state:_current_state
                })

            loss_list.append(_total_loss)

            if batch_idx%100 == 0:
                print("Step",batch_idx, "Loss", _total_loss)
                plot(loss_list, _predictions_series, batchX, batchY)

plt.ioff()
plt.show()</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Next step</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In <a href="https://medium.com/@erikhallstrm/tensorflow-rnn-api-2bb31821b185#.u3wew5ck0" target="_self">the next post</a> in this series we will be simplify the computational graph creation by using the native TensorFlow RNN API.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>