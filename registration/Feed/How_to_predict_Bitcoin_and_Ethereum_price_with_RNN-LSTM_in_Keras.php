<!DOCTYPE html>
                <html>
                <head>
                    <title>How to predict Bitcoin and Ethereum price with RNN-LSTM in Keras</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/@siavash_37715/how-to-predict-bitcoin-and-ethereum-price-with-rnn-lstm-in-keras-a6d8ee8a5109"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@siavash_37715?source=post_page-----a6d8ee8a5109--------------------------------">Author : Siavash Fahimi</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>How to predict Bitcoin and Ethereum price with RNN-LSTM in Keras</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*AO9CkwUY8pcly7yIElQ0pQ.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">2017 was a great year for Artificial Intelligence and Cryptocurrency. There have been many researches and breakthroughs in AI industry and definitely AI is one of the trendiest technology these days and even more in the future. One thing that I personally did not see it coming to the mainstream in 2017 was cryptocurrencies. It was a massive bull run with some insane returns on investment on cryptocurrencies such as Bitcoin, Ethereum, Litecoin, Ripple and so on.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I have started diving into details of Machine Learning techniques in early 2017 and as many other ML experts and enthusiasts, applying these technics into cryptocurrency market is very tempting. The interesting part is variety of ways and methods that ML and Deep Learning models can be used in stock market or in our case crypto market.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I found building a single point prediction model could be a great start point to explore deep learning with time-series such as price data. Off course it doesn’t end here, there is always room for improvement and adding more input data. My favorite is to use Deep Reinforcement Learning for automated trading agents. Which I’m working on it currently, however, learning to use LSTM networks and building a good prediction model is going to be the first step.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Pre-requisites and Development Environment</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I assume you have some coding skills in Python and basic knowledge of Machine Learning, in particular Deep Learning. If not, please check out <a href="https://medium.freecodecamp.org/want-to-know-how-deep-learning-works-heres-a-quick-guide-for-everyone-1aedeca88076" target="_self">this post</a> for a quick overview.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">My choice for the development environment is google’s <a href="https://colab.research.google.com" target="_self">Colab</a><em>. </em>I chose Colab because of simplicity of the environment setup and the access to free GPU which makes a big difference in training time. <a href="https://medium.com/deep-learning-turkey/google-colab-free-gpu-tutorial-e113627b9f5d" target="_self">Here is a tutorial for how to setup and use colab in your Google Drive</a>. You can find my full <a href="https://drive.google.com/file/d/1DqC-A484fIkliDMwCgvX5BiUe0vK8Dum/view?usp=sharing" target="_self">Colab Notebook here</a><em> </em>and <a href="https://github.com/SiaFahim/lstm-crypto-predictor/blob/master/lstm_crypto_price_prediction.ipynb" target="_self">here on GitHub</a><em>.</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In case you wish to setup AWS environment, I also wrote a tutorial a while ago on how to setup AWS instance with Docker on GPU. <a href="https://towardsdatascience.com/how-to-set-up-deep-learning-machine-on-aws-gpu-instance-3bb18b0a2579" target="_self">Here is the link</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I will be using Keras library with TensorFlow backend to build the model and train on historical data.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">What is Recurrent Neural Network?</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To explain Recurrent Neural Networks, let’s first go back to a simple perceptron network with one hidden layer. Such a network will do an OK job for simple classification problems. By adding more hidden layers, the network will be capable of inferencing more complex patterns in our input data and increase the accuracy of the predictions. However, these types of networks are good for tasks that are independent of the history where the temporal order does not matter. For example image classification which the prior sample in the training set does not affect the next sample. In another word, perceptrons have no memory of the past. This is the same for Convolutional Neural Networks which are more complicated architecture of perceptrons designed for image recognition.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:67%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 500px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*QhWJfzyxF0ChHOU4hcDaog.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*QhWJfzyxF0ChHOU4hcDaog.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*QhWJfzyxF0ChHOU4hcDaog.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*QhWJfzyxF0ChHOU4hcDaog.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*QhWJfzyxF0ChHOU4hcDaog.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*QhWJfzyxF0ChHOU4hcDaog.png 1100w, https://miro.medium.com/v2/resize:fit:1000/format:webp/1*QhWJfzyxF0ChHOU4hcDaog.png 1000w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 500px" srcset="https://miro.medium.com/v2/resize:fit:640/1*QhWJfzyxF0ChHOU4hcDaog.png 640w, https://miro.medium.com/v2/resize:fit:720/1*QhWJfzyxF0ChHOU4hcDaog.png 720w, https://miro.medium.com/v2/resize:fit:750/1*QhWJfzyxF0ChHOU4hcDaog.png 750w, https://miro.medium.com/v2/resize:fit:786/1*QhWJfzyxF0ChHOU4hcDaog.png 786w, https://miro.medium.com/v2/resize:fit:828/1*QhWJfzyxF0ChHOU4hcDaog.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*QhWJfzyxF0ChHOU4hcDaog.png 1100w, https://miro.medium.com/v2/resize:fit:1000/1*QhWJfzyxF0ChHOU4hcDaog.png 1000w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/500/1*QhWJfzyxF0ChHOU4hcDaog.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">A simple perceptron neural network with one hidden layer and two outputs</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">RNNs are type of neural network that solve the problem of past memory for perceptrons by looping in the hidden state of the previous time-step into the network in conjunction with the current input sample.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let me elaborate more on this, at every time-step when a new sample comes in, the network will forget what was the sample in the previous step, one way to solve this problem for time-series is to feed-in the previous input sample with the current sample so our network can have an idea what happened previously, however, in this way we won’t be able to capture the full history of the time-series before the previous step. A better approach will be to take resulting hidden layer <em>(the weight matrix of the hidden layer)</em> from the previous input sample and feed it into our network alongside the current input sample.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I look at the hidden layer’s weight matrix as the state of the mind for the network, if we look at it this way, the hidden layer has already captured the past in the form of weight distribution over all of its neurons which is much richer representation of the past for our network. Below image from <a href="http://colah.github.io/posts/2015-08-Understanding-LSTMs/" target="_self">colah’s blog</a> will provide a good visualization of what happens in a RNN.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*DmpOxDUK3mbUCEEmQFfCJw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*DmpOxDUK3mbUCEEmQFfCJw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*DmpOxDUK3mbUCEEmQFfCJw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*DmpOxDUK3mbUCEEmQFfCJw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*DmpOxDUK3mbUCEEmQFfCJw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*DmpOxDUK3mbUCEEmQFfCJw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*DmpOxDUK3mbUCEEmQFfCJw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*DmpOxDUK3mbUCEEmQFfCJw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*DmpOxDUK3mbUCEEmQFfCJw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*DmpOxDUK3mbUCEEmQFfCJw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*DmpOxDUK3mbUCEEmQFfCJw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*DmpOxDUK3mbUCEEmQFfCJw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*DmpOxDUK3mbUCEEmQFfCJw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*DmpOxDUK3mbUCEEmQFfCJw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*DmpOxDUK3mbUCEEmQFfCJw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">when Xt comes in, the hidden state from Xt-1 will be concatenated with Xt and become the input for the Network at time t. This process will be repeated for every sample in a time-series.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I tried to keep it as simple as possible. There are great resources if you’d like to dive deeper into RNNs which I strongly recommend you to do so. Here are some good resources about RNNs:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><a href="http://www.wildml.com/2015/09/recurrent-neural-networks-tutorial-part-1-introduction-to-rnns/" target="_self">Introduction to RNNs</a></li><li class="ff3" style="font-size:22px;"><a href="https://medium.com/@camrongodbout/recurrent-neural-networks-for-beginners-7aca4e933b82" target="_self">Recurrent Neural Networks for Beginners</a></li><li class="ff3" style="font-size:22px;"><a href="http://karpathy.github.io/2015/05/21/rnn-effectiveness/" target="_self">The Unreasonable Effectiveness of Recurrent Neural Networks</a></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">What is Long-Short Term Memory?</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Before I tell you what is LSTM let me tell you about the biggest problem with RNNs. So far everything looks good about RNNs until we train it via back-propagation. As the gradient of our training samples gets propagated backward through our network, it gets weaker and weaker, by the time it gets to those neurons that represent older data points in our time-series it has no juice to adjust them properly. This problem is called <a href="https://medium.com/@anishsingh20/the-vanishing-gradient-problem-48ae7f501257" target="_self">Vanishing Gradient</a><em>. </em>A LSTM cell is a type of RNN which stores important information about the past and forgets the unimportant pieces. In this way, when gradient back-propagates, it won’t be consumed by unnecessary information.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Think about yourself when you read a book, often after finishing a chapter, although you can remember what was the previous chapter about, you may not be able to remember all the important points about it. One way to solve this problem, we highlight and take notes of those points which are important to remember and disregard the explanations and and fillers which are not critical to the subject. <a href="http://colah.github.io/posts/2015-08-Understanding-LSTMs/" target="_self">Understanding LSTM Networks</a><em> </em>by Christopher Olah is a great resource for an in-depth understanding of LSTMs.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Let’s Code</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">First things first, let’s import libraries which we need for our project.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><mark>import gc<br/>import datetime<br/>import pandas as pd<br/>import numpy as np<br/>import matplotlib.pyplot as plt<br/><br/>import keras<br/>from keras.models import Sequential<br/>from keras.layers import Activation, Dense<br/>from keras.layers import LSTM<br/>from keras.layers import Dropout</mark></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Historical Data</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I have used historical data from <a href="http://www.coinmarketcap.com" target="_self">www.coinmarketcap.com</a>, you may use any other source, but I found it very simple and straight forward for this post. We will be getting the daily price data for Bitcoin. However, in the colab notebook you will see the code for Ethereum as well. I wrote the code in a way to be reusable for other cryptocurrencies.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now let’s write a function for getting the market data.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def get_market_data(market, tag=True):
  """
  market: the full name of the cryptocurrency as spelled on coinmarketcap.com. eg.: 'bitcoin'
  tag: eg.: 'btc', if provided it will add a tag to the name of every column.
  returns: panda DataFrame
  This function will use the coinmarketcap.com url for provided coin/token page. 
  Reads the OHLCV and Market Cap.
  Converts the date format to be readable. 
  Makes sure that the data is consistant by converting non_numeric values to a number very close to 0.
  And finally tags each columns if provided.
  """
  market_data = pd.read_html("https://coinmarketcap.com/currencies/" + market + 
                             "/historical-data/?start=20130428&end="+time.strftime("%Y%m%d"), flavor='html5lib')[0]
  market_data = market_data.assign(Date=pd.to_datetime(market_data['Date']))  
  market_data['Volume'] = (pd.to_numeric(market_data['Volume'], errors='coerce').fillna(0))
  if tag:
    market_data.columns = [market_data.columns[0]] + [tag + '_' + i for i in market_data.columns[1:]]
  return market_data</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now let’s get the data for Bitcoin and load it to the variable ‘‘‘btc_data’’’ and show the first five rows of our data.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>btc_data = get_market_data("bitcoin", tag='BTC')<br/>btc_data.head()</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Un1KfWOovLF8O9GBJiaMWg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Un1KfWOovLF8O9GBJiaMWg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Un1KfWOovLF8O9GBJiaMWg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Un1KfWOovLF8O9GBJiaMWg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Un1KfWOovLF8O9GBJiaMWg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Un1KfWOovLF8O9GBJiaMWg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Un1KfWOovLF8O9GBJiaMWg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Un1KfWOovLF8O9GBJiaMWg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Un1KfWOovLF8O9GBJiaMWg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Un1KfWOovLF8O9GBJiaMWg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Un1KfWOovLF8O9GBJiaMWg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Un1KfWOovLF8O9GBJiaMWg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Un1KfWOovLF8O9GBJiaMWg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Un1KfWOovLF8O9GBJiaMWg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Un1KfWOovLF8O9GBJiaMWg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">market data for BTC</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s take a look at Bitcoin’s ‘Close’ price and its daily volume over time</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>show_plot(btc_data, tag='BTC')</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*-hm2uMduXmxotcDWAJpSHg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*-hm2uMduXmxotcDWAJpSHg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*-hm2uMduXmxotcDWAJpSHg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*-hm2uMduXmxotcDWAJpSHg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*-hm2uMduXmxotcDWAJpSHg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*-hm2uMduXmxotcDWAJpSHg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*-hm2uMduXmxotcDWAJpSHg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*-hm2uMduXmxotcDWAJpSHg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*-hm2uMduXmxotcDWAJpSHg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*-hm2uMduXmxotcDWAJpSHg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*-hm2uMduXmxotcDWAJpSHg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*-hm2uMduXmxotcDWAJpSHg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*-hm2uMduXmxotcDWAJpSHg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*-hm2uMduXmxotcDWAJpSHg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*-hm2uMduXmxotcDWAJpSHg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Data Prepration</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A big part of building any Deep Learning model is to prepare our data to be consumed by neural network for training or prediction. This step is called Pre-Processing which could include multiple steps depending on the type of data we are using. In our case we will be doing below tasks as a part of our preprocessing:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Data cleaning, filling up missing data points</li><li class="ff3" style="font-size:22px;">Merging multiple data channels. Bitcoin and Ethereum in one Data Frame</li><li class="ff3" style="font-size:22px;">Remove unnecessary columns</li><li class="ff3" style="font-size:22px;">Sort our data in ascending order based on date</li><li class="ff3" style="font-size:22px;">Split the data for Training and Test</li><li class="ff3" style="font-size:22px;">Create input samples and normalize them between 0 and 1</li><li class="ff3" style="font-size:22px;">Create target outputs for the training and test sets and normalize them between 0 and 1</li><li class="ff3" style="font-size:22px;">Convert our data to numpy array to be consumed by our model</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The data cleaning part has been already done in our first function where we loaded the data. Below you can find necessary functions to do above tasks:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def merge_data(a, b, from_date=merge_date):
  """
  a: first DataFrame
  b: second DataFrame
  from_date: includes the data from the provided date and drops the any data before that date.
  returns merged data as Pandas DataFrame
  """
  merged_data = pd.merge(a, b, on=['Date'])
  merged_data = merged_data[merged_data['Date'] >= from_date]
  return merged_data


def add_volatility(data, coins=['BTC', 'ETH']):
  """
  data: input data, pandas DataFrame
  coins: default is for 'btc and 'eth'. It could be changed as needed
  This function calculates the volatility and close_off_high of each given coin in 24 hours, 
  and adds the result as new columns to the DataFrame.
  Return: DataFrame with added columns
  """
  for coin in coins:
    # calculate the daily change
    kwargs = {coin + '_change': lambda x: (x[coin + '_Close'] - x[coin + '_Open']) / x[coin + '_Open'],
             coin + '_close_off_high': lambda x: 2*(x[coin + '_High'] - x[coin + '_Close']) / (x[coin + '_High'] - x[coin + '_Low']) - 1,
             coin + '_volatility': lambda x: (x[coin + '_High'] - x[coin + '_Low']) / (x[coin + '_Open'])}
    data = data.assign(**kwargs)
  return data


def create_model_data(data):
  """
  data: pandas DataFrame
  This function drops unnecessary columns and reverses the order of DataFrame based on decending dates.
  Return: pandas DataFrame
  """
  #data = data[['Date']+[coin+metric for coin in ['btc_', 'eth_'] for metric in ['Close','Volume','close_off_high','volatility']]]
  data = data[['Date']+[coin+metric for coin in ['BTC_', 'ETH_'] for metric in ['Close','Volume']]]
  data = data.sort_values(by='Date')
  return data


def split_data(data, training_size=0.8):
  """
  data: Pandas Dataframe
  training_size: proportion of the data to be used for training
  This function splits the data into training_set and test_set based on the given training_size
  Return: train_set and test_set as pandas DataFrame
  """
  return data[:int(training_size*len(data))], data[int(training_size*len(data)):]


def create_inputs(data, coins=['BTC', 'ETH'], window_len=window_len):
  """
  data: pandas DataFrame, this could be either training_set or test_set
  coins: coin datas which will be used as the input. Default is 'btc', 'eth'
  window_len: is an intiger to be used as the look back window for creating a single input sample.
  This function will create input array X from the given dataset and will normalize 'Close' and 'Volume' between 0 and 1
  Return: X, the input for our model as a python list which later needs to be converted to numpy array.
  """
  norm_cols = [coin + metric for coin in coins for metric in ['_Close', '_Volume']]
  inputs = []
  for i in range(len(data) - window_len):
    temp_set = data[i:(i + window_len)].copy()
    inputs.append(temp_set)
    for col in norm_cols:
      inputs[i].loc[:, col] = inputs[i].loc[:, col] / inputs[i].loc[:, col].iloc[0] - 1  
  return inputs


def create_outputs(data, coin, window_len=window_len):
  """
  data: pandas DataFrame, this could be either training_set or test_set
  coin: the target coin in which we need to create the output labels for
  window_len: is an intiger to be used as the look back window for creating a single input sample.
  This function will create the labels array for our training and validation and normalize it between 0 and 1
  Return: Normalized numpy array for 'Close' prices of the given coin
  """
  return (data[coin + '_Close'][window_len:].values / data[coin + '_Close'][:-window_len].values) - 1


def to_array(data):
  """
  data: DataFrame
  This function will convert list of inputs to a numpy array
  Return: numpy array
  """
  x = [np.array(data[i]) for i in range (len(data))]
  return np.array(x)
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here is the code for plotting functions and creating date labels</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def show_plot(data, tag):
  fig, (ax1, ax2) = plt.subplots(2,1, gridspec_kw = {'height_ratios':[3, 1]})
  ax1.set_ylabel('Closing Price ($)',fontsize=12)
  ax2.set_ylabel('Volume ($ bn)',fontsize=12)
  ax2.set_yticks([int('%d000000000'%i) for i in range(10)])
  ax2.set_yticklabels(range(10))
  ax1.set_xticks([datetime.date(i,j,1) for i in range(2013,2019) for j in [1,7]])
  ax1.set_xticklabels('')
  ax2.set_xticks([datetime.date(i,j,1) for i in range(2013,2019) for j in [1,7]])
  ax2.set_xticklabels([datetime.date(i,j,1).strftime('%b %Y')  for i in range(2013,2019) for j in [1,7]])
  ax1.plot(data['Date'].astype(datetime.datetime),data[tag +'_Open'])
  ax2.bar(data['Date'].astype(datetime.datetime).values, data[tag +'_Volume'].values)
  fig.tight_layout()
  plt.show()
  

def date_labels():
  last_date = market_data.iloc[0, 0]
  date_list = [last_date - datetime.timedelta(days=x) for x in range(len(X_test))]
  return[date.strftime('%m/%d/%Y') for date in date_list][::-1]


def plot_results(history, model, Y_target, coin):
  plt.figure(figsize=(25, 20))
  plt.subplot(311)
  plt.plot(history.epoch, history.history['loss'], )
  plt.plot(history.epoch, history.history['val_loss'])
  plt.xlabel('Number of Epochs')
  plt.ylabel('Loss')
  plt.title(coin + ' Model Loss')
  plt.legend(['Training', 'Test'])

  plt.subplot(312)
  plt.plot(Y_target)
  plt.plot(model.predict(X_train))
  plt.xlabel('Dates')
  plt.ylabel('Price')
  plt.title(coin + ' Single Point Price Prediction on Training Set')
  plt.legend(['Actual','Predicted'])

  ax1 = plt.subplot(313)
  plt.plot(test_set[coin + '_Close'][window_len:].values.tolist())
  plt.plot(((np.transpose(model.predict(X_test)) + 1) * test_set[coin + '_Close'].values[:-window_len])[0])
  plt.xlabel('Dates')
  plt.ylabel('Price')
  plt.title(coin + ' Single Point Price Prediction on Test Set')
  plt.legend(['Actual','Predicted'])
  
  date_list = date_labels()
  ax1.set_xticks([x for x in range(len(date_list))])
  for label in ax1.set_xticklabels([date for date in date_list], rotation='vertical')[::2]:
    label.set_visible(False)

  plt.show()</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here we will be calling above functions in order to create the final datasets for our model.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>train_set = train_set.drop('Date', 1)<br/>test_set = test_set.drop('Date', 1)</span><span>X_train = create_inputs(train_set)<br/>Y_train_btc = create_outputs(train_set, coin='BTC')<br/>X_test = create_inputs(test_set)<br/>Y_test_btc = create_outputs(test_set, coin='BTC')</span><span>Y_train_eth = create_outputs(train_set, coin='ETH')<br/>Y_test_eth = create_outputs(test_set, coin='ETH')</span><span>X_train, X_test = to_array(X_train), to_array(X_test)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now let’s build our LSTM-RNN model. In this model I have used 3 layers of LSTM with 512 neurons per layer followed by 0.25 Dropout after each LSTM layer to prevent over-fitting and finally a Dense layer to produce our outputs.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def build_model(inputs, output_size, neurons, activ_func=activation_function, dropout=dropout, loss=loss, optimizer=optimizer):
  """
  inputs: input data as numpy array
  output_size: number of predictions per input sample
  neurons: number of neurons/ units in the LSTM layer
  active_func: Activation function to be used in LSTM layers and Dense layer
  dropout: dropout ration, default is 0.25
  loss: loss function for calculating the gradient
  optimizer: type of optimizer to backpropagate the gradient
  This function will build 3 layered RNN model with LSTM cells with dripouts after each LSTM layer 
  and finally a dense layer to produce the output using keras' sequential model.
  Return: Keras sequential model and model summary
  """
  model = Sequential()
  model.add(LSTM(neurons, return_sequences=True, input_shape=(inputs.shape[1], inputs.shape[2]), activation=activ_func))
  model.add(Dropout(dropout))
  model.add(LSTM(neurons, return_sequences=True, activation=activ_func))
  model.add(Dropout(dropout))
  model.add(LSTM(neurons, activation=activ_func))
  model.add(Dropout(dropout))
  model.add(Dense(units=output_size))
  model.add(Activation(activ_func))
  model.compile(loss=loss, optimizer=optimizer, metrics=['mae'])
  model.summary()
  return model</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*3HM0a1IY--w4AdPWCghoOQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*3HM0a1IY--w4AdPWCghoOQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*3HM0a1IY--w4AdPWCghoOQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*3HM0a1IY--w4AdPWCghoOQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*3HM0a1IY--w4AdPWCghoOQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*3HM0a1IY--w4AdPWCghoOQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*3HM0a1IY--w4AdPWCghoOQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*3HM0a1IY--w4AdPWCghoOQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*3HM0a1IY--w4AdPWCghoOQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*3HM0a1IY--w4AdPWCghoOQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*3HM0a1IY--w4AdPWCghoOQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*3HM0a1IY--w4AdPWCghoOQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*3HM0a1IY--w4AdPWCghoOQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*3HM0a1IY--w4AdPWCghoOQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*3HM0a1IY--w4AdPWCghoOQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">TensorFlow computation graph exported from TensorBoard</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I have used ‘tanh’ for my activation function and Mean Squared Error for my loss and ‘adam’ as my optimizer. I’d suggest to play around with different choices of these functions and see how they affect the performance of your model.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here is our model summary:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*FBmTAtuS7LYgeTGdEBVLNw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*FBmTAtuS7LYgeTGdEBVLNw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*FBmTAtuS7LYgeTGdEBVLNw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*FBmTAtuS7LYgeTGdEBVLNw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*FBmTAtuS7LYgeTGdEBVLNw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*FBmTAtuS7LYgeTGdEBVLNw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*FBmTAtuS7LYgeTGdEBVLNw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*FBmTAtuS7LYgeTGdEBVLNw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*FBmTAtuS7LYgeTGdEBVLNw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*FBmTAtuS7LYgeTGdEBVLNw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*FBmTAtuS7LYgeTGdEBVLNw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*FBmTAtuS7LYgeTGdEBVLNw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*FBmTAtuS7LYgeTGdEBVLNw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*FBmTAtuS7LYgeTGdEBVLNw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*FBmTAtuS7LYgeTGdEBVLNw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I have decleared my hyperparameters for the full code in the begining of the code to make changes for different variation easier from one place. Here are my hyperparameters:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>neurons = 512                 <br/>activation_function = 'tanh'  <br/>loss = 'mse'                  <br/>optimizer="adam"              <br/>dropout = 0.25                 <br/>batch_size = 12               <br/>epochs = 53                   <br/>window_len = 7               <br/>training_size = 0.8<br/>merge_date = '2016-01-01'</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now it’s time for training our model on the data that we have collected</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span># clean up the memory<br/>gc.collect()</span><span># random seed for reproducibility<br/>np.random.seed(202)</span><span># initialise model architecture<br/>btc_model = build_model(X_train, output_size=1, neurons=neurons)</span><span># train model on data<br/>btc_history = btc_model.fit(X_train, Y_train_btc, epochs=epochs, batch_size=batch_size, verbose=1, validation_data=(X_test, Y_test_btc), shuffle=False)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The above code may take a while to finish depending on your computing power and when it is done, your trained model is done too :)</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s check out the results for BTC and ETH</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*LcoUCvtemyEBY-3Ea1UIZw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*LcoUCvtemyEBY-3Ea1UIZw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*LcoUCvtemyEBY-3Ea1UIZw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*LcoUCvtemyEBY-3Ea1UIZw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*LcoUCvtemyEBY-3Ea1UIZw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*LcoUCvtemyEBY-3Ea1UIZw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*LcoUCvtemyEBY-3Ea1UIZw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*LcoUCvtemyEBY-3Ea1UIZw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*LcoUCvtemyEBY-3Ea1UIZw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*LcoUCvtemyEBY-3Ea1UIZw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*LcoUCvtemyEBY-3Ea1UIZw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*LcoUCvtemyEBY-3Ea1UIZw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*LcoUCvtemyEBY-3Ea1UIZw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*LcoUCvtemyEBY-3Ea1UIZw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*LcoUCvtemyEBY-3Ea1UIZw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*HoEVB_iOqQqt8Ydl4k4bOw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*HoEVB_iOqQqt8Ydl4k4bOw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*HoEVB_iOqQqt8Ydl4k4bOw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*HoEVB_iOqQqt8Ydl4k4bOw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*HoEVB_iOqQqt8Ydl4k4bOw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*HoEVB_iOqQqt8Ydl4k4bOw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*HoEVB_iOqQqt8Ydl4k4bOw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*HoEVB_iOqQqt8Ydl4k4bOw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*HoEVB_iOqQqt8Ydl4k4bOw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*HoEVB_iOqQqt8Ydl4k4bOw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*HoEVB_iOqQqt8Ydl4k4bOw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*HoEVB_iOqQqt8Ydl4k4bOw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*HoEVB_iOqQqt8Ydl4k4bOw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*HoEVB_iOqQqt8Ydl4k4bOw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*HoEVB_iOqQqt8Ydl4k4bOw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Not bad for starter :)</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There is a great blog post written by David Sheehan where I first learned about how to use LSTMs for cryptocurrency price prediction. <a href="https://dashee87.github.io/deep%20learning/python/predicting-cryptocurrency-prices-with-deep-learning/" target="_self">Here is the link to his blog.</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Update 1:</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Removed add_volatility as it did not affect the performance</li><li class="ff3" style="font-size:22px;">Created plot_results() and added date labels to the figure</li><li class="ff3" style="font-size:22px;">replaced MAE with MSE as loss function</li><li class="ff3" style="font-size:22px;">Increased batch size from 64 to 128</li><li class="ff3" style="font-size:22px;">Added TF computational graph diagram</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Update 2:</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">I could slightly improve the performance (reducing the loss) by reducing the window length from 7 days to 3 days and number of neurons to 1024.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I hope you enjoyed this post!</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>