<!DOCTYPE html>
                <html>
                <head>
                    <title>DeepMind Uses GNNs to Boost Google Maps ETA Accuracy by up to 50%</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/syncedreview/deepmind-uses-gnns-to-boost-google-maps-eta-accuracy-by-up-to-50-4f482a1e8f89"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@synced?source=post_page-----4f482a1e8f89--------------------------------">Author : Synced</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>DeepMind Uses GNNs to Boost Google Maps ETA Accuracy by up to 50%</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*BpjHHwArjwrlDFiq_i0HzA.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*BpjHHwArjwrlDFiq_i0HzA.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Launched 15 years ago, Google Maps is the world’s most popular navigation app by a wide margin, according to German online portal <a href="https://www.statista.com/statistics/865413/most-popular-us-mapping-apps-ranked-by-audience/" target="_self">Statista</a>. In a Google Cloud blog <a href="https://cloud.google.com/blog/products/maps-platform/9-things-know-about-googles-maps-data-beyond-map" target="_self">post</a> published last September, Google Maps Director of Product Ethan Russell said more than a billion people use Google Maps every month and some five million active apps and websites access Google Maps Platform core products each week.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The ever-industrious DeepMind researchers meanwhile have been working on further improving Google Maps, and this week the UK-based AI company and research lab <a href="https://deepmind.com/blog/article/traffic-prediction-with-advanced-graph-neural-networks" target="_self">unveiled</a> a partnership with Google Maps that has leveraged advanced Graph Neural Networks (GNNs) to improve estimated time of arrival (ETA) accuracy.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The coordinated efforts have boosted the accuracy of real-time ETAs by up to 50 percent in cities such as Berlin, Jakarta, São Paulo, Sydney, Tokyo and Washington DC.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*UagWXILAALslAONJ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*UagWXILAALslAONJ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*UagWXILAALslAONJ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*UagWXILAALslAONJ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*UagWXILAALslAONJ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*UagWXILAALslAONJ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/0*UagWXILAALslAONJ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*UagWXILAALslAONJ.png 640w, https://miro.medium.com/v2/resize:fit:720/0*UagWXILAALslAONJ.png 720w, https://miro.medium.com/v2/resize:fit:750/0*UagWXILAALslAONJ.png 750w, https://miro.medium.com/v2/resize:fit:786/0*UagWXILAALslAONJ.png 786w, https://miro.medium.com/v2/resize:fit:828/0*UagWXILAALslAONJ.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*UagWXILAALslAONJ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/0*UagWXILAALslAONJ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*UagWXILAALslAONJ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">ETAs and traffic predictions are useful tools that enable users to efficiently plan departure times, avoid traffic jams, and notify friends and family of unexpected late arrivals. These features are also critical for businesses such as rideshare companies and delivery platforms.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To calculate ETAs, Google Maps analyses global live traffic data for relevant road segments. While this provides an accurate picture of current conditions, it doesn’t account for what a driver may encounter 10, 20, or even 50 minutes into their trip.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To accurately predict future traffic, Google Maps uses machine learning to combine live traffic conditions with historical traffic patterns for roads. This is a complex process due to variations in road quality, speed limits, accidents, construction and road closures, and for example the timing of rush hours in different locations.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">While Google Maps’ predictive ETAs have been shown to be accurate for some 97 percent of trips, the DeepMind researchers set out to minimize the remaining inaccuracies. To do this at a global scale, they used GNNs — a generalized machine learning architecture — to conduct spatiotemporal reasoning by incorporating relational learning biases to model the connectivity structure of real-world road networks.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The researchers divided road networks into “Supersegments” consisting of multiple adjacent segments of road that share significant traffic volumes. Their model treats the local road network as a graph, where each route segment corresponds to a node and edges exist between segments that are consecutive on the same road or connected through an intersection. These Supersegments as road subgraphs are sampled at random in proportion to traffic density.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In a GNN, a message-passing algorithm is executed where the messages and their effect on edge and node states are learned by neural networks. A single model can therefore be trained using the sampled subgraphs and deployed at scale.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">While the ultimate goal of the new modelling system is to reduce errors in travel estimates, the researchers also found that making use of a linear combination of multiple loss functions (weighted appropriately) greatly increased the model’s generalization ability.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One big challenge the researchers faced was GNNs’ sensitivity to changes in the training curriculum. When training ML systems, the learning rate is often reduced over time, as there is a tradeoff between learning new things and forgetting important features already learned. The researchers developed a novel reinforcement learning technique that enabled their model to learn its own optimal learning rate schedule, producing more stable results and enabling them to deploy it more quickly.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Reporter</strong>: Yuan Yuan | <strong>Editor</strong>: Michael Sarazen</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 640w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 720w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 750w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 786w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 828w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 1100w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 640w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 720w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 750w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 786w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 828w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 1100w, https://miro.medium.com/v2/0*PsYA8hkiaWVkNWN7 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/proxy/0*PsYA8hkiaWVkNWN7"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Synced Report | </strong><a href="https://payhip.com/b/Mdme" target="_self">A Survey of China’s Artificial Intelligence Solutions in Response to the COVID-19 Pandemic — 87 Case Studies from 700+ AI Vendors</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This report offers a look at how China has leveraged artificial intelligence technologies in the battle against COVID-19. It is also available on <a href="https://www.amazon.com/Artificial-Intelligence-Solutions-Response-COVID-19-ebook/dp/B08C373G1B/ref=sr_1_1?dchild=1&keywords=synced+global&qid=1594150418&s=digital-text&sr=1-1" target="_self">Amazon Kindle</a>. <strong>Along with this report, we also introduced a </strong><a href="https://payhip.com/b/i5bN" target="_self">database</a><strong> covering additional 1428 artificial intelligence solutions from 12 pandemic scenarios.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Click <a href="https://payhip.com/SyncedReview" target="_self">here</a> to find more reports from us.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We know you don’t want to miss any story. <strong>Subscribe to our popular </strong><a href="https://mailchi.mp/2fb3aa308ad3/welcome-to-synced-global-ai-weekly-newsletter" target="_self">Synced Global AI Weekly</a><strong> to get weekly AI updates.</strong></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 640w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 720w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 750w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 786w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 828w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 1100w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 640w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 720w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 750w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 786w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 828w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 1100w, https://miro.medium.com/v2/0*JKRwl2n_SruPxc28 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/proxy/0*JKRwl2n_SruPxc28"></picture></div><br></div></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>