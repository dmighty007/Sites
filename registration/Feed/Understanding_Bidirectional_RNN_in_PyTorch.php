<!DOCTYPE html>
                <html>
                <head>
                    <title>Understanding Bidirectional RNN in PyTorch</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/understanding-bidirectional-rnn-in-pytorch-5bd25a5dd66"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@ceshine?source=post_page-----5bd25a5dd66--------------------------------">Author : Ceshine Lee</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Understanding Bidirectional RNN in PyTorch</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">Quick Recap</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*6QnPUSv_t9BY9Fv8_aLb-Q.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*6QnPUSv_t9BY9Fv8_aLb-Q.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig 1: General Structure of Bidirectional Recurrent Neural Networks. <a href="http://colah.github.io/posts/2015-09-NN-Types-FP/" target="_self">Source: colah’s blog</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Bidirectional recurrent neural networks(RNN) are really just putting two independent RNNs together. The input sequence is fed in normal time order for one network, and in reverse time order for another. The outputs of the two networks are usually concatenated at each time step, though there are other options, e.g. summation.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>This structure allows the networks to have both backward and forward information about the sequence at every time step.</mark> The concept seems easy enough. But when it comes to actually implementing a neural network which utilizes bidirectional structure, confusion arises…</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">The Confusion</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The first confusion is about <strong>the way to forward the outputs of a bidirectional RNN to a dense neural network</strong>. For normal RNNs we could just forward the outputs at the last time step, and the following picture I found via Google shows similar technique on a bidirectional RNN.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:52%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 395px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:790/format:webp/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 790w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 395px" srcset="https://miro.medium.com/v2/resize:fit:640/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:790/1*GRQ91HNASB7MAJPTTlVvfw.jpeg 790w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/395/1*GRQ91HNASB7MAJPTTlVvfw.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Fig 2: A confusing formulation. <a href="http://doc.paddlepaddle.org/develop/doc/_images/bi_lstm.jpg" target="_self">Image Source</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But wait… if we pick the output at the last time step, the reverse RNN will have only seen the last input (x_3 in the picture). It’ll hardly provide any predictive power.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The second confusion is about the <strong>returned hidden states</strong>. In seq2seq models, we’ll want hidden states from the encoder to initialize the hidden states of the decoder. Intuitively, if we can only choose hidden states at one time step(as in PyTorch), we’d want the one at which the RNN just consumed the last input in the sequence. But <strong>if </strong>the hidden states of time step <em>n</em> (the last one) are returned, as before, we’ll have the hidden states of the reversed RNN with only one step of inputs seen.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Check Out Keras Implementation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Keras provides a wrapper for bidirectional RNNs. If you take a look at line <em>292</em> in wrappers.py:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://github.com/fchollet/keras/blob/4edd0379e14c7b502b3c81c95c7319b5df2af65c/keras/layers/wrappers.py#L292"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">fchollet/keras</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">keras - Deep Learning library for Python. Runs on TensorFlow, Theano, or CNTK.</h3><p>github.com</p></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You’d find that by default the outputs of the reversed RNN is ordered backward as time step (<em>n…1</em>). Keras will reverse it when <code>return_sequences</code> is true (it’s false by default). So if we’re taking one time step output, Keras will take the one at time step <em>n </em>for normal RNN and the one at time step <em>1 </em>for reverse RNN. <strong>This pretty much confirms that figure 2 shows flawed structure.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">How Does It Work in PyTorch</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With the first confusion sorted out. We are now interested in how to use bidirectional RNNs correctly in PyTorch:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>{
 "cells": [
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# Figuring How Bidirectional RNN works in Pytorch"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 1,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "import numpy as np\n",
    "import torch, torch.nn as nn\n",
    "from torch.autograd import Variable"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "### Initialize Input Sequence Randomly\n",
    "For demonstration purpose, we are going to feed RNNs only one sequence of length 5 with only one dimension."
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 2,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "Variable containing:\n",
       "-0.1308\n",
       "-0.4986\n",
       "-0.2581\n",
       " 1.7486\n",
       " 1.4340\n",
       "[torch.FloatTensor of size 5]"
      ]
     },
     "execution_count": 2,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "random_input = Variable(torch.FloatTensor(5, 1, 1).normal_(), requires_grad=False)\n",
    "random_input[:, 0, 0]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "### Initialize a Bidirectional GRU Layer"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 3,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "bi_grus = torch.nn.GRU(input_size=1, hidden_size=1, num_layers=1, batch_first=False, bidirectional=True)"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "### Initialize a GRU Layer ( for Feeding the Sequence Reversely)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 4,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "reverse_gru = torch.nn.GRU(input_size=1, hidden_size=1, num_layers=1, batch_first=False, bidirectional=False)"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "Now make sure the weights of the reverse gru layer match ones of the (reversed) bidirectional's:"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 5,
   "metadata": {},
   "outputs": [],
   "source": [
    "reverse_gru.weight_ih_l0 = bi_grus.weight_ih_l0_reverse\n",
    "reverse_gru.weight_hh_l0 = bi_grus.weight_hh_l0_reverse\n",
    "reverse_gru.bias_ih_l0 = bi_grus.bias_ih_l0_reverse\n",
    "reverse_gru.bias_hh_l0 = bi_grus.bias_hh_l0_reverse"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "### Feed Input Sequence into Both Networks"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 6,
   "metadata": {},
   "outputs": [],
   "source": [
    "bi_output, bi_hidden = bi_grus(random_input)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 7,
   "metadata": {},
   "outputs": [],
   "source": [
    "reverse_output, reverse_hidden = reverse_gru(random_input[np.arange(4, -1, -1), :, :])"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "### Check Outputs"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 8,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "Variable containing:\n",
       " 0.7001\n",
       " 0.8531\n",
       " 0.4716\n",
       " 0.4065\n",
       " 0.4960\n",
       "[torch.FloatTensor of size 5]"
      ]
     },
     "execution_count": 8,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "reverse_output[:, 0, 0]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "The outputs of the reverse GRUs sit in the [latter half of the output](https://discuss.pytorch.org/t/get-forward-and-backward-output-seperately-from-bidirectional-rnn/2523)(in the last dimension):"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 9,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "Variable containing:\n",
       " 0.4960\n",
       " 0.4065\n",
       " 0.4716\n",
       " 0.8531\n",
       " 0.7001\n",
       "[torch.FloatTensor of size 5]"
      ]
     },
     "execution_count": 9,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "bi_output[:, 0, 1]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "### Check Hidden States"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 10,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "Variable containing:\n",
       "(0 ,.,.) = \n",
       "  0.4960\n",
       "[torch.FloatTensor of size 1x1x1]"
      ]
     },
     "execution_count": 10,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "reverse_hidden"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "The hidden states of the reversed GRUs sits in [the odd indices in the first dimension](https://discuss.pytorch.org/t/how-can-i-know-which-part-of-h-n-of-bidirectional-rnn-is-for-backward-process/3883/4)."
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 11,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "Variable containing:\n",
       " 0.4960\n",
       "[torch.FloatTensor of size 1x1]"
      ]
     },
     "execution_count": 11,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "bi_hidden[1]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## Conclusion\n",
    "\n",
    "1. The returned outputs of bidirectional RNN at timestep t is just the output after feeding input to both the reverse and normal RNN unit at timestep t. (where normal RNN has seen inputs 1...t and reverse RNN has seen inputs t...n, n being the length of the sequence)\n",
    "2. The returned hidden state of bidirectional RNN is the hidden state after the whole sequence is consume. For normal RNN it's after timestep n; for reverse RNN it's after timestep 1."
   ]
  }
 ],
 "metadata": {
  "kernelspec": {
   "display_name": "Python 3",
   "language": "python",
   "name": "python3"
  },
  "language_info": {
   "codemirror_mode": {
    "name": "ipython",
    "version": 3
   },
   "file_extension": ".py",
   "mimetype": "text/x-python",
   "name": "python",
   "nbconvert_exporter": "python",
   "pygments_lexer": "ipython3",
   "version": "3.6.1"
  }
 },
 "nbformat": 4,
 "nbformat_minor": 2
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The above notebook answered the two confusions we had (assuming <code>batch_first</code>is false):</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;">We should take <code>output[-1, :, :hidden_size]</code> (normal RNN) and <code>output[0, :, hidden_size:]</code> (reverse RNN), concatenate them, and feed the result to the subsequent dense neural network.</li><li class="ff3" style="font-size:22px;">The returned hidden states are the ones after consuming the whole sequence. They can be safely passed to the decoder.</li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">(Side note) <a href="http://pytorch.org/docs/master/nn.html#torch.nn.GRU" target="_self">The output shape of GRU in PyTorch</a> when <code>batch_first</code>is false:</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4"><strong>output</strong> (seq_len, batch, hidden_size * num_directions)<strong>h_n</strong> (num_layers * num_directions, batch, hidden_size)</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The LSTM’s one is similar, but return an additional cell state variable shaped the same as <strong>h_n.</strong></p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>