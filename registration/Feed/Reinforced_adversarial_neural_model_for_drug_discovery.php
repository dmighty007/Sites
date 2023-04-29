<!DOCTYPE html>
                <html>
                <head>
                    <title>Reinforced adversarial neural model for drug discovery</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/insilicomedicine/reinforced-adversarial-neural-model-for-drug-discovery-f3ce5cfdf386"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@longevity?source=post_page-----f3ce5cfdf386--------------------------------">Author : Alex Zhavoronkov, PhD</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Reinforced adversarial neural model for drug discovery</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Today, we are happy to announce the publication of our new research paper titled “<a href="https://www.eurekalert.org/pub_releases/2018-06/v" target="_self">Reinforced Adversarial Neural Computer for De Novo Molecular Design</a>” in The<a href="https://pubs.acs.org/journal/jcisd8" target="_self"> Journal of Chemical Information and Modeling</a><em>. </em>It is one of the coolest specialized journals in the field of computational chemistry. In this paper we presented an original deep neural network architecture called the Reinforced Adversarial Neural Computer (RANC) for the de novo design of novel small-molecule organic structures utilizing the generative adversarial network (GAN) and reinforcement learning (RL) methods.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this work, we introduced RANC architecture for de novo molecular design. Our engine generates more unique and diverse structures as well as clusters with the lengths close to the reference samples, keeping the distributions of key molecular descriptors as in the training sets. As a result, many of the generated structures meet the crucial criteria used in medicinal chemistry of today and are able to pass medical chemistry filters. I hope this approach will become a starting point to making perfect molecules for specific targets and multiple targets that will have a much higher chance of becoming great drugs. Here is a brief graphical depiction of the approach:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*7HTOr-meUii3WbJtyfajvA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*7HTOr-meUii3WbJtyfajvA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*7HTOr-meUii3WbJtyfajvA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*7HTOr-meUii3WbJtyfajvA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*7HTOr-meUii3WbJtyfajvA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*7HTOr-meUii3WbJtyfajvA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*7HTOr-meUii3WbJtyfajvA.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*7HTOr-meUii3WbJtyfajvA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*7HTOr-meUii3WbJtyfajvA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*7HTOr-meUii3WbJtyfajvA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*7HTOr-meUii3WbJtyfajvA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*7HTOr-meUii3WbJtyfajvA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*7HTOr-meUii3WbJtyfajvA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*7HTOr-meUii3WbJtyfajvA.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*7HTOr-meUii3WbJtyfajvA.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In silico modeling is a crucial milestone in modern drug design & development. Although computer-aided approaches in this field are well-studied, the application of deep learning methods in this research area is at the beginning facing a lot of challenges.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The comparative results have shown that RANC trained on the SMILES string representation of the molecules outperforms the other methods by several metrics relevant to drug discovery: the number of unique structures, passing medicinal chemistry filters, Muegge criteria and high quantitative estimate of drug-likeness scores. RANC is able to generate structures that match the distributions of the key chemical features/descriptors (e.g. MW, logP, TPSA) and lengths of the SMILES strings in the training dataset. Therefore, RANC can be reasonably regarded as a promising starting point to develop novel molecules with activity against different biological targets or pathways.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This work was carried out in collaboration with one of the most prominent groups in AI-enabled chemistry and quantum chemistry, lead by Prof. <a href="https://twitter.com/a_aspuru_guzik?lang=en" target="_self">Alan Aspuru-Guzik</a>. One of the co-authors of the paper is <a href="https://scholar.google.es/citations?user=-91dFcMAAAAJ&hl=en" target="_self">Benjamin Sanchez-Lengeling</a> — the author of the Objective-Reinforced Generative Adversarial Networks (ORGAN), one of the first objective — reinforced molecular generators.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">From a medicinal chemistry perspective, it would be very interesting to investigate how the results of modeling depend on the carefully selected reference compounds as well as the application of the model for the generation of structures with biological activity toward specific targets.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As many of our followers know, Insilico Medicine is a commercial company and we publish only the proofs of concept where the publication would not erode shareholder value. Internally we are using a different representation of the molecular structure and this model, while a valuable proof of concept, is not likely to yield the perfect drug leads. Please stay tuned for our major results in this area to be published soon.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">###</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Check out my previous posts on Medium:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><a href="https://medium.com/@longevity/the-new-era-for-ai-powered-drug-discovery-and-longevity-biotechnology-begins-for-insilico-following-c93e6efab423" target="_self">The new era for AI-powered drug discovery and longevity biotechnology begins for Insilico following partnership with WuXi AppTec and others</a></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><a href="https://medium.com/swlh/we-are-an-industry-now-the-emergence-of-ai-powered-longevity-biotechnology-industry-1508a0596d3c" target="_self">We are an industry now: the emergence of AI-powered longevity biotechnology industry</a></h4></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>