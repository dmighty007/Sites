<!DOCTYPE html>
                <html>
                <head>
                    <title>A Radical New Neural Network Design Could Overcome Big Challenges in AI</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/mit-technology-review/a-radical-new-neural-network-design-could-overcome-big-challenges-in-ai-56b6af3fe9a5"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@MITTechReview?source=post_page-----56b6af3fe9a5--------------------------------">Author : MIT Technology Review</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>A Radical New Neural Network Design Could Overcome Big Challenges in AI</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">Researchers borrowed equations from calculus to redesign the core machinery of deep learning so it can model continuous processes like changes in health</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*aw5fJCnQlo0BfNxt1u1slA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*aw5fJCnQlo0BfNxt1u1slA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*aw5fJCnQlo0BfNxt1u1slA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*aw5fJCnQlo0BfNxt1u1slA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*aw5fJCnQlo0BfNxt1u1slA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*aw5fJCnQlo0BfNxt1u1slA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*aw5fJCnQlo0BfNxt1u1slA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*aw5fJCnQlo0BfNxt1u1slA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*aw5fJCnQlo0BfNxt1u1slA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*aw5fJCnQlo0BfNxt1u1slA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*aw5fJCnQlo0BfNxt1u1slA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*aw5fJCnQlo0BfNxt1u1slA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*aw5fJCnQlo0BfNxt1u1slA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*aw5fJCnQlo0BfNxt1u1slA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*aw5fJCnQlo0BfNxt1u1slA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">An ordinary differential equation. Image: David Duvenaud</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>By Karen Hao</em></p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>