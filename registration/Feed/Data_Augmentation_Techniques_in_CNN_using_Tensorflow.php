<!DOCTYPE html>
                <html>
                <head>
                    <title>Data Augmentation Techniques in CNN using Tensorflow</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/ymedialabs-innovation/data-augmentation-techniques-in-cnn-using-tensorflow-371ae43d5be9"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@prasad-pai?source=post_page-----371ae43d5be9--------------------------------">Author : Prasad Pai</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Data Augmentation Techniques in CNN using Tensorflow</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Recently, I have started learning about Artificial Intelligence as it is creating a lot of buzz in industry. Within these diverse fields of AI applications, the area of vision based domain has attracted me a lot. For that, I have been experimenting with deep learning mechanisms primarily involving usage of Convolutional Neural Network(CNN). The primary thing with all the experiments I have done till date has taught me that data which is used during training plays the most important role. In fact, it will not be wrong to state that AI has emerged again (after several <a href="https://en.wikipedia.org/wiki/AI_winter" target="_self">AI winters</a>) only because of availability of huge computing power(GPUs) and vast amount of data in Internet. More luckily for me, much of the data is available in the form of images and videos.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Inspite of all the data availability, fetching the right type of data which matches the exact use-case of our experiment is a daunting task. Moreover, the data has to have good diversity as the object of interest needs to be present in varying sizes, lighting conditions and poses if we desire that our network generalizes well during the testing (or deployment) phase. To overcome this problem of limited quantity and limited diversity of data, we generate(manufacture) our own data with the existing data which we have. This methodology of generating our own data is known as data augmentation.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I have been experimenting with various deep learning frameworks and all My additional question is has anyone done some study on what is the maximum number of classes it gives good performance. Consider, data can be generated with good amount of diversity for each class and time of training is not a factor.these frameworks are giving in-built packages for data augmentation. To state a few of the frameworks, <mark>Keras has </mark><mark>ImageDataGenerator</mark><mark> (needs least amount of work from us), Tensorflow has </mark><mark>TFLearn’s DataAugmentation</mark><mark> and MXNet has </mark><mark>Augmenter</mark><mark> classes.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this article, let us explore few of the most commonly used image augmentation techniques with code examples and visualisation of images after augmentation. From here onwards, data will be referred to as images. We will be using Tensorflow or OpenCV written in Python in all our examples. Here is the index of techniques we will be using in our article:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><a href="#8be0" target="_self">Scaling</a></li><li class="ff3" style="font-size:22px;"><a href="#f50b" target="_self">Translation</a></li><li class="ff3" style="font-size:22px;"><a href="#2f4a" target="_self">Rotation (at 90 degrees)</a></li><li class="ff3" style="font-size:22px;"><a href="#f8ea" target="_self">Rotation (at finer angles)</a></li><li class="ff3" style="font-size:22px;"><a href="#c3f1" target="_self">Flipping</a></li><li class="ff3" style="font-size:22px;"><a href="#a7b0" target="_self">Adding Salt and Pepper noise</a></li><li class="ff3" style="font-size:22px;"><a href="#8a8f" target="_self">Lighting condition</a></li><li class="ff3" style="font-size:22px;"><a href="#194b" target="_self">Perspective transform</a></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>But before any technique: Image Resizing:</strong><br></br>Images gathered from Internet will be of varying sizes. Due to presence of fully connected layers in most of the neural networks, the images being fed to network will be required of a fixed size (unless you are using Spatial Pyramid Pooling before passing to dense layers). Because of this, before the image augmentation happens, let us preprocess the images to the size which our network needs. With the fixed sized image, we get the benefits of processing them in batches.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import tensorflow as tf
import matplotlib.image as mpimg
import numpy as np

IMAGE_SIZE = 224

def tf_resize_images(X_img_file_paths):
    X_data = []
    tf.reset_default_graph()
    X = tf.placeholder(tf.float32, (None, None, 3))
    tf_img = tf.image.resize_images(X, (IMAGE_SIZE, IMAGE_SIZE), 
                                    tf.image.ResizeMethod.NEAREST_NEIGHBOR)
    with tf.Session() as sess:
        sess.run(tf.global_variables_initializer())
        
        # Each image is resized individually as different image may be of different size.
        for index, file_path in enumerate(X_img_file_paths):
            img = mpimg.imread(file_path)[:, :, :3] # Do not read alpha channel.
            resized_img = sess.run(tf_img, feed_dict = {X: img})
            X_data.append(resized_img)

    X_data = np.array(X_data, dtype = np.float32) # Convert to numpy
    return X_data</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*8BKGMVDVTEP5Y6syyP2AAQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*8BKGMVDVTEP5Y6syyP2AAQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*8BKGMVDVTEP5Y6syyP2AAQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*8BKGMVDVTEP5Y6syyP2AAQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*8BKGMVDVTEP5Y6syyP2AAQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*8BKGMVDVTEP5Y6syyP2AAQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*8BKGMVDVTEP5Y6syyP2AAQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*8BKGMVDVTEP5Y6syyP2AAQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*8BKGMVDVTEP5Y6syyP2AAQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*8BKGMVDVTEP5Y6syyP2AAQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*8BKGMVDVTEP5Y6syyP2AAQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*8BKGMVDVTEP5Y6syyP2AAQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*8BKGMVDVTEP5Y6syyP2AAQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*8BKGMVDVTEP5Y6syyP2AAQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*8BKGMVDVTEP5Y6syyP2AAQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Scaling:</strong><br></br>Having differently scaled object of interest in the images is the most important aspect of image diversity. When your network is in hands of real users, the object in the image can be tiny or large. Also, sometimes, object can cover the entire image and yet will not be present totally in image (i.e cropped at edges of object). The code shows scaling of image centrally.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def central_scale_images(X_imgs, scales):
    # Various settings needed for Tensorflow operation
    boxes = np.zeros((len(scales), 4), dtype = np.float32)
    for index, scale in enumerate(scales):
        x1 = y1 = 0.5 - 0.5 * scale # To scale centrally
        x2 = y2 = 0.5 + 0.5 * scale
        boxes[index] = np.array([y1, x1, y2, x2], dtype = np.float32)
    box_ind = np.zeros((len(scales)), dtype = np.int32)
    crop_size = np.array([IMAGE_SIZE, IMAGE_SIZE], dtype = np.int32)
    
    X_scale_data = []
    tf.reset_default_graph()
    X = tf.placeholder(tf.float32, shape = (1, IMAGE_SIZE, IMAGE_SIZE, 3))
    # Define Tensorflow operation for all scales but only one base image at a time
    tf_img = tf.image.crop_and_resize(X, boxes, box_ind, crop_size)
    with tf.Session() as sess:
        sess.run(tf.global_variables_initializer())
        
        for img_data in X_imgs:
            batch_img = np.expand_dims(img_data, axis = 0)
            scaled_imgs = sess.run(tf_img, feed_dict = {X: batch_img})
            X_scale_data.extend(scaled_imgs)
    
    X_scale_data = np.array(X_scale_data, dtype = np.float32)
    return X_scale_data
	
# Produce each image at scaling of 90%, 75% and 60% of original image.
scaled_imgs = central_scale_images(X_imgs, [0.90, 0.75, 0.60])</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:82%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 602px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*SYxMSwLhqXu4ExDoSAzyiA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*SYxMSwLhqXu4ExDoSAzyiA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*SYxMSwLhqXu4ExDoSAzyiA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*SYxMSwLhqXu4ExDoSAzyiA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*SYxMSwLhqXu4ExDoSAzyiA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*SYxMSwLhqXu4ExDoSAzyiA.png 1100w, https://miro.medium.com/v2/resize:fit:1204/format:webp/1*SYxMSwLhqXu4ExDoSAzyiA.png 1204w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 602px" srcset="https://miro.medium.com/v2/resize:fit:640/1*SYxMSwLhqXu4ExDoSAzyiA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*SYxMSwLhqXu4ExDoSAzyiA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*SYxMSwLhqXu4ExDoSAzyiA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*SYxMSwLhqXu4ExDoSAzyiA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*SYxMSwLhqXu4ExDoSAzyiA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*SYxMSwLhqXu4ExDoSAzyiA.png 1100w, https://miro.medium.com/v2/resize:fit:1204/1*SYxMSwLhqXu4ExDoSAzyiA.png 1204w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/602/1*SYxMSwLhqXu4ExDoSAzyiA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Translation:</strong><br></br>We would like our network to recognize the object present in any part of the image. Also, the object can be present partially in the corner or edges of the image. For this reason, we shift the object to various parts of the image. This may also result in addition of a background noise. The code snippet shows translating the image at four sides retaining 80 percent of the base image.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from math import ceil, floor

def get_translate_parameters(index):
    if index == 0: # Translate left 20 percent
        offset = np.array([0.0, 0.2], dtype = np.float32)
        size = np.array([IMAGE_SIZE, ceil(0.8 * IMAGE_SIZE)], dtype = np.int32)
        w_start = 0
        w_end = int(ceil(0.8 * IMAGE_SIZE))
        h_start = 0
        h_end = IMAGE_SIZE
    elif index == 1: # Translate right 20 percent
        offset = np.array([0.0, -0.2], dtype = np.float32)
        size = np.array([IMAGE_SIZE, ceil(0.8 * IMAGE_SIZE)], dtype = np.int32)
        w_start = int(floor((1 - 0.8) * IMAGE_SIZE))
        w_end = IMAGE_SIZE
        h_start = 0
        h_end = IMAGE_SIZE
    elif index == 2: # Translate top 20 percent
        offset = np.array([0.2, 0.0], dtype = np.float32)
        size = np.array([ceil(0.8 * IMAGE_SIZE), IMAGE_SIZE], dtype = np.int32)
        w_start = 0
        w_end = IMAGE_SIZE
        h_start = 0
        h_end = int(ceil(0.8 * IMAGE_SIZE)) 
    else: # Translate bottom 20 percent
        offset = np.array([-0.2, 0.0], dtype = np.float32)
        size = np.array([ceil(0.8 * IMAGE_SIZE), IMAGE_SIZE], dtype = np.int32)
        w_start = 0
        w_end = IMAGE_SIZE
        h_start = int(floor((1 - 0.8) * IMAGE_SIZE))
        h_end = IMAGE_SIZE 
        
    return offset, size, w_start, w_end, h_start, h_end

def translate_images(X_imgs):
    offsets = np.zeros((len(X_imgs), 2), dtype = np.float32)
    n_translations = 4
    X_translated_arr = []
    
    tf.reset_default_graph()
    with tf.Session() as sess:
        sess.run(tf.global_variables_initializer())
        for i in range(n_translations):
            X_translated = np.zeros((len(X_imgs), IMAGE_SIZE, IMAGE_SIZE, 3), 
				    dtype = np.float32)
            X_translated.fill(1.0) # Filling background color
            base_offset, size, w_start, w_end, h_start, h_end = get_translate_parameters(i)
            offsets[:, :] = base_offset 
            glimpses = tf.image.extract_glimpse(X_imgs, size, offsets)
            
            glimpses = sess.run(glimpses)
            X_translated[:, h_start: h_start + size[0], \
			 w_start: w_start + size[1], :] = glimpses
            X_translated_arr.extend(X_translated)
    X_translated_arr = np.array(X_translated_arr, dtype = np.float32)
    return X_translated_arr
	
translated_imgs = translate_images(X_imgs)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*H0V8WAX9nLEmiD7cd1twow.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*H0V8WAX9nLEmiD7cd1twow.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*H0V8WAX9nLEmiD7cd1twow.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*H0V8WAX9nLEmiD7cd1twow.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*H0V8WAX9nLEmiD7cd1twow.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*H0V8WAX9nLEmiD7cd1twow.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*H0V8WAX9nLEmiD7cd1twow.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*H0V8WAX9nLEmiD7cd1twow.png 640w, https://miro.medium.com/v2/resize:fit:720/1*H0V8WAX9nLEmiD7cd1twow.png 720w, https://miro.medium.com/v2/resize:fit:750/1*H0V8WAX9nLEmiD7cd1twow.png 750w, https://miro.medium.com/v2/resize:fit:786/1*H0V8WAX9nLEmiD7cd1twow.png 786w, https://miro.medium.com/v2/resize:fit:828/1*H0V8WAX9nLEmiD7cd1twow.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*H0V8WAX9nLEmiD7cd1twow.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*H0V8WAX9nLEmiD7cd1twow.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*H0V8WAX9nLEmiD7cd1twow.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Background color white of image blends with added background color white</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*46d-k6AWjP29FWcmQmyryg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*46d-k6AWjP29FWcmQmyryg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*46d-k6AWjP29FWcmQmyryg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*46d-k6AWjP29FWcmQmyryg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*46d-k6AWjP29FWcmQmyryg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*46d-k6AWjP29FWcmQmyryg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*46d-k6AWjP29FWcmQmyryg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*46d-k6AWjP29FWcmQmyryg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*46d-k6AWjP29FWcmQmyryg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*46d-k6AWjP29FWcmQmyryg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*46d-k6AWjP29FWcmQmyryg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*46d-k6AWjP29FWcmQmyryg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*46d-k6AWjP29FWcmQmyryg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*46d-k6AWjP29FWcmQmyryg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*46d-k6AWjP29FWcmQmyryg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Added background color white doesn’t blend with image thereby adding noise</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Rotation (at 90 degrees):</strong><br></br>The network has to recognize the object present in any orientation. Assuming the image is square, rotating the image at 90 degrees will not add any background noise in the image.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def rotate_images(X_imgs):
    X_rotate = []
    tf.reset_default_graph()
    X = tf.placeholder(tf.float32, shape = (IMAGE_SIZE, IMAGE_SIZE, 3))
    k = tf.placeholder(tf.int32)
    tf_img = tf.image.rot90(X, k = k)
    with tf.Session() as sess:
        sess.run(tf.global_variables_initializer())
        for img in X_imgs:
            for i in range(3):  # Rotation at 90, 180 and 270 degrees
                rotated_img = sess.run(tf_img, feed_dict = {X: img, k: i + 1})
                X_rotate.append(rotated_img)
        
    X_rotate = np.array(X_rotate, dtype = np.float32)
    return X_rotate
	
rotated_imgs = rotate_images(X_imgs)
    </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:82%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 602px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*y1h9X9e8CFrgh73_7eTkkQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*y1h9X9e8CFrgh73_7eTkkQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*y1h9X9e8CFrgh73_7eTkkQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*y1h9X9e8CFrgh73_7eTkkQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*y1h9X9e8CFrgh73_7eTkkQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*y1h9X9e8CFrgh73_7eTkkQ.png 1100w, https://miro.medium.com/v2/resize:fit:1204/format:webp/1*y1h9X9e8CFrgh73_7eTkkQ.png 1204w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 602px" srcset="https://miro.medium.com/v2/resize:fit:640/1*y1h9X9e8CFrgh73_7eTkkQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*y1h9X9e8CFrgh73_7eTkkQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*y1h9X9e8CFrgh73_7eTkkQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*y1h9X9e8CFrgh73_7eTkkQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*y1h9X9e8CFrgh73_7eTkkQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*y1h9X9e8CFrgh73_7eTkkQ.png 1100w, https://miro.medium.com/v2/resize:fit:1204/1*y1h9X9e8CFrgh73_7eTkkQ.png 1204w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/602/1*y1h9X9e8CFrgh73_7eTkkQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Rotation (at finer angles):</strong><br></br>Depending upon the requirement, there maybe a necessity to orient the object at minute angles. However problem with this approach is, it will add background noise. If the background in image is of a fixed color (say white or black), the newly added background can blend with the image. However, if the newly added background color doesn’t blend, the network may consider it as to be a feature and learn unnecessary features.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from math import pi

def rotate_images(X_imgs, start_angle, end_angle, n_images):
    X_rotate = []
    iterate_at = (end_angle - start_angle) / (n_images - 1)
    
    tf.reset_default_graph()
    X = tf.placeholder(tf.float32, shape = (None, IMAGE_SIZE, IMAGE_SIZE, 3))
    radian = tf.placeholder(tf.float32, shape = (len(X_imgs)))
    tf_img = tf.contrib.image.rotate(X, radian)
    with tf.Session() as sess:
        sess.run(tf.global_variables_initializer())
    
        for index in range(n_images):
            degrees_angle = start_angle + index * iterate_at
            radian_value = degrees_angle * pi / 180  # Convert to radian
            radian_arr = [radian_value] * len(X_imgs)
            rotated_imgs = sess.run(tf_img, feed_dict = {X: X_imgs, radian: radian_arr})
            X_rotate.extend(rotated_imgs)

    X_rotate = np.array(X_rotate, dtype = np.float32)
    return X_rotate
	
# Start rotation at -90 degrees, end at 90 degrees and produce totally 14 images
rotated_imgs = rotate_images(X_imgs, -90, 90, 14)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*1FMKI3BuS-ZQFvF4FElxIQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*1FMKI3BuS-ZQFvF4FElxIQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*1FMKI3BuS-ZQFvF4FElxIQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*1FMKI3BuS-ZQFvF4FElxIQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*1FMKI3BuS-ZQFvF4FElxIQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*1FMKI3BuS-ZQFvF4FElxIQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*1FMKI3BuS-ZQFvF4FElxIQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*1FMKI3BuS-ZQFvF4FElxIQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*1FMKI3BuS-ZQFvF4FElxIQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*1FMKI3BuS-ZQFvF4FElxIQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*1FMKI3BuS-ZQFvF4FElxIQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*1FMKI3BuS-ZQFvF4FElxIQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*1FMKI3BuS-ZQFvF4FElxIQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*1FMKI3BuS-ZQFvF4FElxIQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*1FMKI3BuS-ZQFvF4FElxIQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Notice the background noise added in the imageset</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Flipping:</strong><br></br>This scenario is more important for network to remove biasness of assuming certain features of the object is available in only a particular side. Consider the case shown in image example. You don’t want network to learn that tilt of banana happens only in right side as observed in the base image. Also notice that flipping produces different set of images from rotation at multiple of 90 degrees.My additional question is has anyone done some study on what is the maximum number of classes it gives good performance. Consider, data can be generated with good amount of diversity for each class and time of training is not a factor.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def flip_images(X_imgs):
    X_flip = []
    tf.reset_default_graph()
    X = tf.placeholder(tf.float32, shape = (IMAGE_SIZE, IMAGE_SIZE, 3))
    tf_img1 = tf.image.flip_left_right(X)
    tf_img2 = tf.image.flip_up_down(X)
    tf_img3 = tf.image.transpose_image(X)
    with tf.Session() as sess:
        sess.run(tf.global_variables_initializer())
        for img in X_imgs:
            flipped_imgs = sess.run([tf_img1, tf_img2, tf_img3], feed_dict = {X: img})
            X_flip.extend(flipped_imgs)
    X_flip = np.array(X_flip, dtype = np.float32)
    return X_flip
	
flipped_images = flip_images(X_imgs)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:82%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 602px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*RfPEUcjywJWA1T5_NlD3HA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*RfPEUcjywJWA1T5_NlD3HA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*RfPEUcjywJWA1T5_NlD3HA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*RfPEUcjywJWA1T5_NlD3HA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*RfPEUcjywJWA1T5_NlD3HA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*RfPEUcjywJWA1T5_NlD3HA.png 1100w, https://miro.medium.com/v2/resize:fit:1204/format:webp/1*RfPEUcjywJWA1T5_NlD3HA.png 1204w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 602px" srcset="https://miro.medium.com/v2/resize:fit:640/1*RfPEUcjywJWA1T5_NlD3HA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*RfPEUcjywJWA1T5_NlD3HA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*RfPEUcjywJWA1T5_NlD3HA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*RfPEUcjywJWA1T5_NlD3HA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*RfPEUcjywJWA1T5_NlD3HA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*RfPEUcjywJWA1T5_NlD3HA.png 1100w, https://miro.medium.com/v2/resize:fit:1204/1*RfPEUcjywJWA1T5_NlD3HA.png 1204w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/602/1*RfPEUcjywJWA1T5_NlD3HA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Adding Salt and Pepper noise:</strong><br></br>Salt and Pepper noise refers to addition of white and black dots in the image. Though this may seem unnecessary, it is important to remember that a general user who is taking image to feed into your network may not be a professional photographer. His camera can produce blurry images with lots of white and black dots. This augmentation aides the above mentioned users.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def add_salt_pepper_noise(X_imgs):
    # Need to produce a copy as to not modify the original image
    X_imgs_copy = X_imgs.copy()
    row, col, _ = X_imgs_copy[0].shape
    salt_vs_pepper = 0.2
    amount = 0.004
    num_salt = np.ceil(amount * X_imgs_copy[0].size * salt_vs_pepper)
    num_pepper = np.ceil(amount * X_imgs_copy[0].size * (1.0 - salt_vs_pepper))
    
    for X_img in X_imgs_copy:
        # Add Salt noise
        coords = [np.random.randint(0, i - 1, int(num_salt)) for i in X_img.shape]
        X_img[coords[0], coords[1], :] = 1

        # Add Pepper noise
        coords = [np.random.randint(0, i - 1, int(num_pepper)) for i in X_img.shape]
        X_img[coords[0], coords[1], :] = 0
    return X_imgs_copy
  
salt_pepper_noise_imgs = add_salt_pepper_noise(X_imgs)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:81%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 601px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*jmZ0DkWo6ySOLWp2acLQbA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*jmZ0DkWo6ySOLWp2acLQbA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*jmZ0DkWo6ySOLWp2acLQbA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*jmZ0DkWo6ySOLWp2acLQbA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*jmZ0DkWo6ySOLWp2acLQbA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*jmZ0DkWo6ySOLWp2acLQbA.png 1100w, https://miro.medium.com/v2/resize:fit:1202/format:webp/1*jmZ0DkWo6ySOLWp2acLQbA.png 1202w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 601px" srcset="https://miro.medium.com/v2/resize:fit:640/1*jmZ0DkWo6ySOLWp2acLQbA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*jmZ0DkWo6ySOLWp2acLQbA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*jmZ0DkWo6ySOLWp2acLQbA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*jmZ0DkWo6ySOLWp2acLQbA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*jmZ0DkWo6ySOLWp2acLQbA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*jmZ0DkWo6ySOLWp2acLQbA.png 1100w, https://miro.medium.com/v2/resize:fit:1202/1*jmZ0DkWo6ySOLWp2acLQbA.png 1202w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/601/1*jmZ0DkWo6ySOLWp2acLQbA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Lighting condition:</strong><br></br>This is a very important type of diversity needed in the image dataset not only for the network to learn properly the object of interest but also to simulate the practical scenario of images being taken by the user. The lighting condition of the images are varied by adding Gaussian noise in the image.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import cv2

def add_gaussian_noise(X_imgs):
    gaussian_noise_imgs = []
    row, col, _ = X_imgs[0].shape
    # Gaussian distribution parameters
    mean = 0
    var = 0.1
    sigma = var ** 0.5
    
    for X_img in X_imgs:
        gaussian = np.random.random((row, col, 1)).astype(np.float32)
        gaussian = np.concatenate((gaussian, gaussian, gaussian), axis = 2)
        gaussian_img = cv2.addWeighted(X_img, 0.75, 0.25 * gaussian, 0.25, 0)
        gaussian_noise_imgs.append(gaussian_img)
    gaussian_noise_imgs = np.array(gaussian_noise_imgs, dtype = np.float32)
    return gaussian_noise_imgs
  
gaussian_noise_imgs = add_gaussian_noise(X_imgs)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:81%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 601px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 1100w, https://miro.medium.com/v2/resize:fit:1202/format:webp/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 1202w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 601px" srcset="https://miro.medium.com/v2/resize:fit:640/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 1100w, https://miro.medium.com/v2/resize:fit:1202/1*C1xZY9Qzp3Nc7LwBhKRVfg.png 1202w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/601/1*C1xZY9Qzp3Nc7LwBhKRVfg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Perspective transform:</strong><br></br>In perspective transform, we try to project image from a different point of view. For this, the position of object should be known in advance. Merely calculating perspective transform without knowing the position of the object can lead to degradation of the dataset. Hence, this type of augmentation has to be performed selectively. The greatest advantage with this augmentation is that it can emphasize on parts of object in image which the network needs to learn.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def get_mask_coord(imshape):
    vertices = np.array([[(0.09 * imshape[1], 0.99 * imshape[0]), 
                          (0.43 * imshape[1], 0.32 * imshape[0]), 
                          (0.56 * imshape[1], 0.32 * imshape[0]),
                          (0.85 * imshape[1], 0.99 * imshape[0])]], dtype = np.int32)
    return vertices

def get_perspective_matrices(X_img):
    offset = 15
    img_size = (X_img.shape[1], X_img.shape[0])

    # Estimate the coordinates of object of interest inside the image.
    src = np.float32(get_mask_coord(X_img.shape))
    dst = np.float32([[offset, img_size[1]], [offset, 0], [img_size[0] - offset, 0], 
                      [img_size[0] - offset, img_size[1]]])
    
    perspective_matrix = cv2.getPerspectiveTransform(src, dst)
    return perspective_matrix

def perspective_transform(X_img):
    # Doing only for one type of example
    perspective_matrix = get_perspective_matrices(X_img)
    warped_img = cv2.warpPerspective(X_img, perspective_matrix,
                                     (X_img.shape[1], X_img.shape[0]),
                                     flags = cv2.INTER_LINEAR)
    return warped_img
  
perspective_img = perspective_transform(X_img)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*-sPdSrN7TsWPA-xtCcybNQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*-sPdSrN7TsWPA-xtCcybNQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*-sPdSrN7TsWPA-xtCcybNQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*-sPdSrN7TsWPA-xtCcybNQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*-sPdSrN7TsWPA-xtCcybNQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*-sPdSrN7TsWPA-xtCcybNQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*-sPdSrN7TsWPA-xtCcybNQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*-sPdSrN7TsWPA-xtCcybNQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*-sPdSrN7TsWPA-xtCcybNQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*-sPdSrN7TsWPA-xtCcybNQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*-sPdSrN7TsWPA-xtCcybNQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*-sPdSrN7TsWPA-xtCcybNQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*-sPdSrN7TsWPA-xtCcybNQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*-sPdSrN7TsWPA-xtCcybNQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*-sPdSrN7TsWPA-xtCcybNQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Though the above list of image augmentation methods is not exhaustive, it comprises of many widely used methods. Also, based on the use-case of the problem you are trying to solve and the type of dataset you are already having, you may use only those types of augmentations which add value to your dataset. You can combine these augmentations to produce even more number of images.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I would like to conclude here that using the limited quantity and limited diversity in dataset we have produced adequate amount of images with variations such that our network can learn meaningful features from the image dataset. You can check the code used in this article directly in the <a href="https://github.com/Prasad9/ImageAugmentationTypes" target="_self">Github repository</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Do let me know if you use some other type of image augmentation which is simple and widely used by you through the comments. Also feel free to make any suggestions or mistakes you find in my approach.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>