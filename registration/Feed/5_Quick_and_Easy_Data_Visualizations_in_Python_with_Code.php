<!DOCTYPE html>
                <html>
                <head>
                    <title>5 Quick and Easy Data Visualizations in Python with Code</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/5-quick-and-easy-data-visualizations-in-python-with-code-a2284bae952f"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@george.seif94?source=post_page-----a2284bae952f--------------------------------">Author : George Seif</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>5 Quick and Easy Data Visualizations in Python with Code</h3></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Want to be inspired? Come join my <a href="https://www.superquotes.co/?utm_source=mediumtech&utm_medium=web&utm_campaign=sharing" target="_self">Super Quotes newsletter</a>. 😎</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Data Visualization is a big part of a data scientist’s jobs. In the early stages of a project, you’ll often be doing an Exploratory Data Analysis (EDA) to gain some insights into your data. Creating visualizations really helps make things clearer and easier to understand, especially with larger, high dimensional datasets. Towards the end of your project, it’s important to be able to present your final results in a clear, concise, and compelling manner that your audience, whom are often non-technical clients, can understand.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Matplotlib is a popular Python library that can be used to create your Data Visualizations quite easily. However, setting up the data, parameters, figures, and plotting can get quite messy and tedious to do every time you do a new project. In this blog post, we’re going to look at 5 data visualizations and write some quick and easy functions for them with Python’s Matplotlib.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Just before we jump in, check out the <a href="https://aismart.substack.com/subscribe" target="_self">AI Smart Newsletter</a><strong> </strong>to read the latest and greatest on AI, Machine Learning, and Data Science!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Scatter Plots</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Scatter plots are great for showing the relationship between two variables since you can directly see the raw distribution of the data. You can also view this relationship for different groups of data simple by colour coding the groups as seen in the first figure below. Want to visualise the relationship between three variables? No problemo! Just use another parameters, like point size, to encode that third variable as we can see in the second figure below. All of these points we just discussed also line right up with the first chart.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*gEbHy7bu6hjP3WmWdEf6ZA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*gEbHy7bu6hjP3WmWdEf6ZA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*gEbHy7bu6hjP3WmWdEf6ZA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*gEbHy7bu6hjP3WmWdEf6ZA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*gEbHy7bu6hjP3WmWdEf6ZA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*gEbHy7bu6hjP3WmWdEf6ZA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*gEbHy7bu6hjP3WmWdEf6ZA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*gEbHy7bu6hjP3WmWdEf6ZA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*gEbHy7bu6hjP3WmWdEf6ZA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*gEbHy7bu6hjP3WmWdEf6ZA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*gEbHy7bu6hjP3WmWdEf6ZA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*gEbHy7bu6hjP3WmWdEf6ZA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*gEbHy7bu6hjP3WmWdEf6ZA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*gEbHy7bu6hjP3WmWdEf6ZA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*gEbHy7bu6hjP3WmWdEf6ZA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Scatter plot with colour groupings</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*F9gf07Uzo9RyLdg52yDeNQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*F9gf07Uzo9RyLdg52yDeNQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*F9gf07Uzo9RyLdg52yDeNQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*F9gf07Uzo9RyLdg52yDeNQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*F9gf07Uzo9RyLdg52yDeNQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*F9gf07Uzo9RyLdg52yDeNQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*F9gf07Uzo9RyLdg52yDeNQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*F9gf07Uzo9RyLdg52yDeNQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*F9gf07Uzo9RyLdg52yDeNQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*F9gf07Uzo9RyLdg52yDeNQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*F9gf07Uzo9RyLdg52yDeNQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*F9gf07Uzo9RyLdg52yDeNQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*F9gf07Uzo9RyLdg52yDeNQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*F9gf07Uzo9RyLdg52yDeNQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*F9gf07Uzo9RyLdg52yDeNQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Scatter plot with colour groupings and size encoding for the third variable of country size</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now for the code. We first import Matplotlib’s pyplot with the alias “plt”. To create a new plot figure we call <code>plt.subplots()</code> . We pass the x-axis and y-axis data to the function and then pass those to <code>ax.scatter()</code> to plot the scatter plot. We can also set the point size, point color, and alpha transparency. You can even set the y-axis to have a logarithmic scale. The title and axis labels are then set specifically for the figure. That’s an easy to use function that creates a scatter plot end to end!</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import matplotlib.pyplot as plt
import numpy as np

def scatterplot(x_data, y_data, x_label="", y_label="", title="", color = "r", yscale_log=False):

    # Create the plot object
    _, ax = plt.subplots()

    # Plot the data, set the size (s), color and transparency (alpha)
    # of the points
    ax.scatter(x_data, y_data, s = 10, color = color, alpha = 0.75)

    if yscale_log == True:
        ax.set_yscale('log')

    # Label the axes and provide a title
    ax.set_title(title)
    ax.set_xlabel(x_label)
    ax.set_ylabel(y_label)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Line Plots</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Line plots are best used when you can clearly see that one variable varies greatly with another i.e they have a high covariance. Lets take a look at the figure below to illustrate. We can clearly see that there is a large amount of variation in the percentages over time for all majors. Plotting these with a scatter plot would be extremely cluttered and quite messy, making it hard to really understand and see what’s going on. Line plots are perfect for this situation because they basically give us a quick summary of the covariance of the two variables (percentage and time). Again, we can also use grouping by colour encoding. Line charts fall into the “over-time” category from our first chart.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*NjNFPl45qq6yBgRgpF_hOA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*NjNFPl45qq6yBgRgpF_hOA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*NjNFPl45qq6yBgRgpF_hOA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*NjNFPl45qq6yBgRgpF_hOA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*NjNFPl45qq6yBgRgpF_hOA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*NjNFPl45qq6yBgRgpF_hOA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*NjNFPl45qq6yBgRgpF_hOA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*NjNFPl45qq6yBgRgpF_hOA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*NjNFPl45qq6yBgRgpF_hOA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*NjNFPl45qq6yBgRgpF_hOA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*NjNFPl45qq6yBgRgpF_hOA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*NjNFPl45qq6yBgRgpF_hOA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*NjNFPl45qq6yBgRgpF_hOA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*NjNFPl45qq6yBgRgpF_hOA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*NjNFPl45qq6yBgRgpF_hOA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Example line plot</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here’s the code for the line plot. It’s quite similar to the scatter above. with just some minor variations in variables.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def lineplot(x_data, y_data, x_label="", y_label="", title=""):
    # Create the plot object
    _, ax = plt.subplots()

    # Plot the best fit line, set the linewidth (lw), color and
    # transparency (alpha) of the line
    ax.plot(x_data, y_data, lw = 2, color = '#539caf', alpha = 1)

    # Label the axes and provide a title
    ax.set_title(title)
    ax.set_xlabel(x_label)
    ax.set_ylabel(y_label)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Histograms</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Histograms are useful for viewing (or really discovering)the distribution of data points. Check out the histogram below where we plot the frequency vs IQ histogram. We can clearly see the concentration towards the center and what the median is. We can also see that it follows a Gaussian distribution. Using the bars (rather than scatter points, for example) really gives us a clearly visualization of the relative difference between the frequency of each bin. The use of bins (discretization) really helps us see the “bigger picture” where as if we use all of the data points without discrete bins, there would probably be a lot of noise in the visualization, making it hard to see what is really going on.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*krJWEpIt3YDuE5TRhHe1xA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*krJWEpIt3YDuE5TRhHe1xA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*krJWEpIt3YDuE5TRhHe1xA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*krJWEpIt3YDuE5TRhHe1xA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*krJWEpIt3YDuE5TRhHe1xA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*krJWEpIt3YDuE5TRhHe1xA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*krJWEpIt3YDuE5TRhHe1xA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*krJWEpIt3YDuE5TRhHe1xA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*krJWEpIt3YDuE5TRhHe1xA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*krJWEpIt3YDuE5TRhHe1xA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*krJWEpIt3YDuE5TRhHe1xA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*krJWEpIt3YDuE5TRhHe1xA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*krJWEpIt3YDuE5TRhHe1xA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*krJWEpIt3YDuE5TRhHe1xA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*krJWEpIt3YDuE5TRhHe1xA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Histogram example</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The code for the histogram in Matplotlib is shown below. There are two parameters to take note of. Firstly, the <code>n_bins</code> parameters controls how many discrete bins we want for our histogram. More bins will give us finer information but may also introduce noise and take us away from the bigger picture; on the other hand, less bins gives us a more “birds eye view” and a bigger picture of what’s going on without the finer details. Secondly, the <code>cumulative</code> parameter is a boolean which allows us to select whether our histogram is cumulative or not. This is basically selecting either the Probability Density Function (PDF) or the Cumulative Density Function (CDF).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def histogram(data, n_bins, cumulative=False, x_label = "", y_label = "", title = ""):
    _, ax = plt.subplots()
    ax.hist(data, n_bins = n_bins, cumulative = cumulative, color = '#539caf')
    ax.set_ylabel(y_label)
    ax.set_xlabel(x_label)
    ax.set_title(title)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Imagine we want to compare the distribution of two variables in our data. One might think that you’d have to make two separate histograms and put them side-by-side to compare them. But, there’s actually a better way: we can overlay the histograms with varying transparency. Check out the figure below. The Uniform distribution is set to have a transparency of 0.5 so that we can see what’s behind it. This allows use to directly view the two distributions on the same figure.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*GJ3AZmA__KbTJWjYxGIN_Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*GJ3AZmA__KbTJWjYxGIN_Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*GJ3AZmA__KbTJWjYxGIN_Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*GJ3AZmA__KbTJWjYxGIN_Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*GJ3AZmA__KbTJWjYxGIN_Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*GJ3AZmA__KbTJWjYxGIN_Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*GJ3AZmA__KbTJWjYxGIN_Q.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*GJ3AZmA__KbTJWjYxGIN_Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*GJ3AZmA__KbTJWjYxGIN_Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*GJ3AZmA__KbTJWjYxGIN_Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*GJ3AZmA__KbTJWjYxGIN_Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*GJ3AZmA__KbTJWjYxGIN_Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*GJ3AZmA__KbTJWjYxGIN_Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*GJ3AZmA__KbTJWjYxGIN_Q.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*GJ3AZmA__KbTJWjYxGIN_Q.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Overlaid Histogram</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are a few things to set up in code for the overlaid histograms. First, we set the horizontal range to accommodate both variable distributions. According to this range and the desired number of bins we can actually computer the width of each bin. Finally, we plot the two histograms on the same plot, with one of them being slightly more transparent.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Overlay 2 histograms to compare them
def overlaid_histogram(data1, data2, n_bins = 0, data1_name="", data1_color="#539caf", data2_name="", data2_color="#7663b0", x_label="", y_label="", title=""):
    # Set the bounds for the bins so that the two distributions are fairly compared
    max_nbins = 10
    data_range = [min(min(data1), min(data2)), max(max(data1), max(data2))]
    binwidth = (data_range[1] - data_range[0]) / max_nbins


    if n_bins == 0
    	bins = np.arange(data_range[0], data_range[1] + binwidth, binwidth)
    else: 
    	bins = n_bins

    # Create the plot
    _, ax = plt.subplots()
    ax.hist(data1, bins = bins, color = data1_color, alpha = 1, label = data1_name)
    ax.hist(data2, bins = bins, color = data2_color, alpha = 0.75, label = data2_name)
    ax.set_ylabel(y_label)
    ax.set_xlabel(x_label)
    ax.set_title(title)
    ax.legend(loc = 'best')</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Bar Plots</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Bar plots are most effective when you are trying to visualize categorical data that has few (probably &lt; 10) categories. If we have too many categories then the bars will be very cluttered in the figure and hard to understand. They’re nice for categorical data because you can easily see the difference between the categories based on the size of the bar (i.e magnitude); categories are also easily divided and colour coded too. There are 3 different types of bar plots we’re going to look at: regular, grouped, and stacked. Check out the code below the figures as we go along.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The regular barplot is in the first figure below. In the <code>barplot()</code> function, <code>x_data</code> represents the tickers on the x-axis and <code>y_data</code> represents the bar height on the y-axis. The error bar is an extra line centered on each bar that can be drawn to show the standard deviation.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Grouped bar plots allow us to compare multiple categorical variables. Check out the second bar plot below. The first variable we are comparing is how the scores vary by group (groups G1, G2, ... etc). We are also comparing the genders themselves with the colour codes. Taking a look at the code, the <code>y_data_list</code> variable is now actually a list of lists, where each sublist represents a different group. We then loop through each group, and for each group we draw the bar for each tick on the x-axis; each group is also colour coded.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Stacked bar plots are great for visualizing the categorical make-up of different variables. In the stacked bar plot figure below we are comparing the server load from day-to-day. With the colour coded stacks, we can easily see and understand which servers are worked the most on each day and how the loads compare to the other servers on all days. The code for this follows the same style as the grouped bar plot. We loop through each group, except this time we draw the new bars on top of the old ones rather than beside them.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*KH2IUzjWtvv5vE16MmUqkA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*KH2IUzjWtvv5vE16MmUqkA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*KH2IUzjWtvv5vE16MmUqkA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*KH2IUzjWtvv5vE16MmUqkA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*KH2IUzjWtvv5vE16MmUqkA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*KH2IUzjWtvv5vE16MmUqkA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*KH2IUzjWtvv5vE16MmUqkA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*KH2IUzjWtvv5vE16MmUqkA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*KH2IUzjWtvv5vE16MmUqkA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*KH2IUzjWtvv5vE16MmUqkA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*KH2IUzjWtvv5vE16MmUqkA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*KH2IUzjWtvv5vE16MmUqkA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*KH2IUzjWtvv5vE16MmUqkA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*KH2IUzjWtvv5vE16MmUqkA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*KH2IUzjWtvv5vE16MmUqkA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Regular Bar Plot</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:74%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 550px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*eFUevHu9wMgnwSlcOSnSFw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*eFUevHu9wMgnwSlcOSnSFw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*eFUevHu9wMgnwSlcOSnSFw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*eFUevHu9wMgnwSlcOSnSFw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*eFUevHu9wMgnwSlcOSnSFw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*eFUevHu9wMgnwSlcOSnSFw.png 1100w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*eFUevHu9wMgnwSlcOSnSFw.png 1100w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 550px" srcset="https://miro.medium.com/v2/resize:fit:640/1*eFUevHu9wMgnwSlcOSnSFw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*eFUevHu9wMgnwSlcOSnSFw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*eFUevHu9wMgnwSlcOSnSFw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*eFUevHu9wMgnwSlcOSnSFw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*eFUevHu9wMgnwSlcOSnSFw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*eFUevHu9wMgnwSlcOSnSFw.png 1100w, https://miro.medium.com/v2/resize:fit:1100/1*eFUevHu9wMgnwSlcOSnSFw.png 1100w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/550/1*eFUevHu9wMgnwSlcOSnSFw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Grouped Bar Plot</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:67%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 500px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*XS1QXGy8CzIPYrrC7bFFEA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*XS1QXGy8CzIPYrrC7bFFEA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*XS1QXGy8CzIPYrrC7bFFEA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*XS1QXGy8CzIPYrrC7bFFEA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*XS1QXGy8CzIPYrrC7bFFEA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*XS1QXGy8CzIPYrrC7bFFEA.png 1100w, https://miro.medium.com/v2/resize:fit:1000/format:webp/1*XS1QXGy8CzIPYrrC7bFFEA.png 1000w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 500px" srcset="https://miro.medium.com/v2/resize:fit:640/1*XS1QXGy8CzIPYrrC7bFFEA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*XS1QXGy8CzIPYrrC7bFFEA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*XS1QXGy8CzIPYrrC7bFFEA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*XS1QXGy8CzIPYrrC7bFFEA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*XS1QXGy8CzIPYrrC7bFFEA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*XS1QXGy8CzIPYrrC7bFFEA.png 1100w, https://miro.medium.com/v2/resize:fit:1000/1*XS1QXGy8CzIPYrrC7bFFEA.png 1000w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/500/1*XS1QXGy8CzIPYrrC7bFFEA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Stacked Bar Plot</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def barplot(x_data, y_data, error_data, x_label="", y_label="", title=""):
    _, ax = plt.subplots()
    # Draw bars, position them in the center of the tick mark on the x-axis
    ax.bar(x_data, y_data, color = '#539caf', align = 'center')
    # Draw error bars to show standard deviation, set ls to 'none'
    # to remove line between points
    ax.errorbar(x_data, y_data, yerr = error_data, color = '#297083', ls = 'none', lw = 2, capthick = 2)
    ax.set_ylabel(y_label)
    ax.set_xlabel(x_label)
    ax.set_title(title)



def stackedbarplot(x_data, y_data_list, colors, y_data_names="", x_label="", y_label="", title=""):
    _, ax = plt.subplots()
    # Draw bars, one category at a time
    for i in range(0, len(y_data_list)):
        if i == 0:
            ax.bar(x_data, y_data_list[i], color = colors[i], align = 'center', label = y_data_names[i])
        else:
            # For each category after the first, the bottom of the
            # bar will be the top of the last category
            ax.bar(x_data, y_data_list[i], color = colors[i], bottom = y_data_list[i - 1], align = 'center', label = y_data_names[i])
    ax.set_ylabel(y_label)
    ax.set_xlabel(x_label)
    ax.set_title(title)
    ax.legend(loc = 'upper right')



def groupedbarplot(x_data, y_data_list, colors, y_data_names="", x_label="", y_label="", title=""):
    _, ax = plt.subplots()
    # Total width for all bars at one x location
    total_width = 0.8
    # Width of each individual bar
    ind_width = total_width / len(y_data_list)
    # This centers each cluster of bars about the x tick mark
    alteration = np.arange(-(total_width/2), total_width/2, ind_width)

    # Draw bars, one category at a time
    for i in range(0, len(y_data_list)):
        # Move the bar to the right on the x-axis so it doesn't
        # overlap with previously drawn ones
        ax.bar(x_data + alteration[i], y_data_list[i], color = colors[i], label = y_data_names[i], width = ind_width)
    ax.set_ylabel(y_label)
    ax.set_xlabel(x_label)
    ax.set_title(title)
    ax.legend(loc = 'upper right')
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Box Plots</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We previously looked at histograms which were great for visualizing the distribution of variables. But what if we need more information than that? Perhaps we want a clearer view of the standard deviation? Perhaps the median is quite different from the mean and thus we have many outliers? What if there is so skew and many of the values are concentrated to one side?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That’s where boxplots come in. Box plots give us all of the information above. The bottom and top of the solid-lined box are always the first and third quartiles (i.e 25% and 75% of the data), and the band inside the box is always the second <a href="https://en.wikipedia.org/wiki/Quartile" target="_self">quartile</a> (the <a href="https://en.wikipedia.org/wiki/Median" target="_self">median</a>). The whiskers (i.e the dashed lines with the bars on the end) extend from the box to show the range of the data.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Since the box plot is drawn for each group/variable it’s quite easy to set up. The <code>x_data</code> is a list of the groups/variables. The Matplotlib function <code>boxplot()</code> makes a box plot for each column of the <code>y_data</code> or each vector in sequence <code>y_data</code>; thus each value in <code>x_data</code> corresponds to a column/vector in <code>y_data</code>. All we have to set then are the aesthetics of the plot.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*8A1IjE7jZjd5hw8bwVaJYA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*8A1IjE7jZjd5hw8bwVaJYA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*8A1IjE7jZjd5hw8bwVaJYA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*8A1IjE7jZjd5hw8bwVaJYA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*8A1IjE7jZjd5hw8bwVaJYA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*8A1IjE7jZjd5hw8bwVaJYA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*8A1IjE7jZjd5hw8bwVaJYA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*8A1IjE7jZjd5hw8bwVaJYA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*8A1IjE7jZjd5hw8bwVaJYA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*8A1IjE7jZjd5hw8bwVaJYA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*8A1IjE7jZjd5hw8bwVaJYA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*8A1IjE7jZjd5hw8bwVaJYA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*8A1IjE7jZjd5hw8bwVaJYA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*8A1IjE7jZjd5hw8bwVaJYA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*8A1IjE7jZjd5hw8bwVaJYA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Box plot example</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def boxplot(x_data, y_data, base_color="#539caf", median_color="#297083", x_label="", y_label="", title=""):
    _, ax = plt.subplots()

    # Draw boxplots, specifying desired style
    ax.boxplot(y_data
               # patch_artist must be True to control box fill
               , patch_artist = True
               # Properties of median line
               , medianprops = {'color': median_color}
               # Properties of box
               , boxprops = {'color': base_color, 'facecolor': base_color}
               # Properties of whiskers
               , whiskerprops = {'color': base_color}
               # Properties of whisker caps
               , capprops = {'color': base_color})

    # By default, the tick label starts at 1 and increments by 1 for
    # each box drawn. This sets the labels to the ones we want
    ax.set_xticklabels(x_data)
    ax.set_ylabel(y_label)
    ax.set_xlabel(x_label)
    ax.set_title(title)</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Box plot code</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Conclusion</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are your 5 quick and easy data visualisations using Matplotlib. Abstracting things into functions always makes your code easier to read and use! I hope you enjoyed this post and learned something new and useful.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>