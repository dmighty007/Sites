<!DOCTYPE html>
                <html>
                <head>
                    <title>DeepMind & Google Graph Matching Network Outperforms GNN</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/syncedreview/deepmind-google-graph-matching-network-outperforms-gnn-c277d3ca6f75"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@synced?source=post_page-----c277d3ca6f75--------------------------------">Author : Synced</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>DeepMind & Google Graph Matching Network Outperforms GNN</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*kJaiFM3NmW99rMGEmVVI9A.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*kJaiFM3NmW99rMGEmVVI9A.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*kJaiFM3NmW99rMGEmVVI9A.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*kJaiFM3NmW99rMGEmVVI9A.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*kJaiFM3NmW99rMGEmVVI9A.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*kJaiFM3NmW99rMGEmVVI9A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*kJaiFM3NmW99rMGEmVVI9A.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*kJaiFM3NmW99rMGEmVVI9A.png 640w, https://miro.medium.com/v2/resize:fit:720/1*kJaiFM3NmW99rMGEmVVI9A.png 720w, https://miro.medium.com/v2/resize:fit:750/1*kJaiFM3NmW99rMGEmVVI9A.png 750w, https://miro.medium.com/v2/resize:fit:786/1*kJaiFM3NmW99rMGEmVVI9A.png 786w, https://miro.medium.com/v2/resize:fit:828/1*kJaiFM3NmW99rMGEmVVI9A.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*kJaiFM3NmW99rMGEmVVI9A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*kJaiFM3NmW99rMGEmVVI9A.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*kJaiFM3NmW99rMGEmVVI9A.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">DeepMind and Google researchers have proposed a powerful new graph matching network (GMN) model for the retrieval and matching of graph structured objects. <mark>GMN uses similarity learning for graph structured objects and outperforms graph neural network (GNN) models on graph similarity learning (GSL) tasks.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Solving GSL problems has many important applications, especially for similarity-based search in a graph database. Researchers studied the use of GNN, and demonstrated how to train a GNN to generate graph embedding in vector spaces that performs efficient similarity reasoning.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Researchers further proposed GMN, a GNN extension for performing similarity learning. Instead of calculating each graph representation separately, this new GMN model calculates similarity scores through a cross-graph attention mechanism to correlate the nodes between the graphs and identify the differences. The model relies on paired graphs to compute graph representations. It is more powerful than embedding models and provides a good trade-off between accuracy and computation.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Researchers evaluated the performance of the GSL framework and compared the GNN embedding model and the GMN on three tasks.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Learning Graph Edit Distances</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Researchers determined that the GSL models trained on graphs with few specific distributions performed better than generic baselines; while the GMN models consistently outperformed the embedding model (GNNs) as expected</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*WyWGLdwEN1DDMRA2.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*WyWGLdwEN1DDMRA2.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*WyWGLdwEN1DDMRA2.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*WyWGLdwEN1DDMRA2.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*WyWGLdwEN1DDMRA2.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*WyWGLdwEN1DDMRA2.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/0*WyWGLdwEN1DDMRA2.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*WyWGLdwEN1DDMRA2.png 640w, https://miro.medium.com/v2/resize:fit:720/0*WyWGLdwEN1DDMRA2.png 720w, https://miro.medium.com/v2/resize:fit:750/0*WyWGLdwEN1DDMRA2.png 750w, https://miro.medium.com/v2/resize:fit:786/0*WyWGLdwEN1DDMRA2.png 786w, https://miro.medium.com/v2/resize:fit:828/0*WyWGLdwEN1DDMRA2.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*WyWGLdwEN1DDMRA2.png 1100w, https://miro.medium.com/v2/resize:fit:1400/0*WyWGLdwEN1DDMRA2.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*WyWGLdwEN1DDMRA2.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><em>Comparing graph embedding (GNN) and matching (GMN) models trained on graphs from different distributions with the baseline, measuring pair AUC / triplet accuracy (×100).</em></p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*P6OJ9bP_5Hh6uOIS 640w, https://miro.medium.com/v2/resize:fit:720/0*P6OJ9bP_5Hh6uOIS 720w, https://miro.medium.com/v2/resize:fit:750/0*P6OJ9bP_5Hh6uOIS 750w, https://miro.medium.com/v2/resize:fit:786/0*P6OJ9bP_5Hh6uOIS 786w, https://miro.medium.com/v2/resize:fit:828/0*P6OJ9bP_5Hh6uOIS 828w, https://miro.medium.com/v2/resize:fit:1100/0*P6OJ9bP_5Hh6uOIS 1100w, https://miro.medium.com/v2/resize:fit:1400/0*P6OJ9bP_5Hh6uOIS 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*P6OJ9bP_5Hh6uOIS 640w, https://miro.medium.com/v2/resize:fit:720/0*P6OJ9bP_5Hh6uOIS 720w, https://miro.medium.com/v2/resize:fit:750/0*P6OJ9bP_5Hh6uOIS 750w, https://miro.medium.com/v2/resize:fit:786/0*P6OJ9bP_5Hh6uOIS 786w, https://miro.medium.com/v2/resize:fit:828/0*P6OJ9bP_5Hh6uOIS 828w, https://miro.medium.com/v2/resize:fit:1100/0*P6OJ9bP_5Hh6uOIS 1100w, https://miro.medium.com/v2/resize:fit:1400/0*P6OJ9bP_5Hh6uOIS 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*P6OJ9bP_5Hh6uOIS"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><em>Visualization of cross-graph attention for GMNs after 5 propagation layers. In each pair of graphs the left figure shows the attention from left graph to the right, the right figure shows the opposite.</em></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Control Flow Graph Based Binary Function Similarity Search</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*Swz6C85gdjcu4HXj.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*Swz6C85gdjcu4HXj.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*Swz6C85gdjcu4HXj.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*Swz6C85gdjcu4HXj.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*Swz6C85gdjcu4HXj.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*Swz6C85gdjcu4HXj.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/0*Swz6C85gdjcu4HXj.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*Swz6C85gdjcu4HXj.png 640w, https://miro.medium.com/v2/resize:fit:720/0*Swz6C85gdjcu4HXj.png 720w, https://miro.medium.com/v2/resize:fit:750/0*Swz6C85gdjcu4HXj.png 750w, https://miro.medium.com/v2/resize:fit:786/0*Swz6C85gdjcu4HXj.png 786w, https://miro.medium.com/v2/resize:fit:828/0*Swz6C85gdjcu4HXj.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*Swz6C85gdjcu4HXj.png 1100w, https://miro.medium.com/v2/resize:fit:1400/0*Swz6C85gdjcu4HXj.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*Swz6C85gdjcu4HXj.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><em>Performance (×100) of different models on the binary function similarity search task.</em></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Control flow graph based binary function similarity search plays a key role in the retrieval of software system vulnerabilities. The above graph shows the performance of different models with different propagation steps and different data settings on binary function similarity search tasks. The GMN is superior to the GNN embedding model in all setup and propagation steps.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">More Baselines and Ablation Studies</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*BfOeeCfSTAcSMwbL.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*BfOeeCfSTAcSMwbL.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*BfOeeCfSTAcSMwbL.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*BfOeeCfSTAcSMwbL.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*BfOeeCfSTAcSMwbL.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*BfOeeCfSTAcSMwbL.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/0*BfOeeCfSTAcSMwbL.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*BfOeeCfSTAcSMwbL.png 640w, https://miro.medium.com/v2/resize:fit:720/0*BfOeeCfSTAcSMwbL.png 720w, https://miro.medium.com/v2/resize:fit:750/0*BfOeeCfSTAcSMwbL.png 750w, https://miro.medium.com/v2/resize:fit:786/0*BfOeeCfSTAcSMwbL.png 786w, https://miro.medium.com/v2/resize:fit:828/0*BfOeeCfSTAcSMwbL.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*BfOeeCfSTAcSMwbL.png 1100w, https://miro.medium.com/v2/resize:fit:1400/0*BfOeeCfSTAcSMwbL.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*BfOeeCfSTAcSMwbL.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><em>More results on the function similarity search task and the extra COIL-DEL dataset.</em></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Researchers examined the effects of different components in GMN and compared the GMN model to the Siamese version of the Graph Convolutional Network (GCN), GNN, and GNN/GCN embedded models. GMN proved superior to the Siamese model, indicating the importance of communicating cross-graph information early in the calculation process.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The experiment results show that the GMN model can not only utilize structure in the context of similarity learning, but also outperform the domain-specific baseline system hand-engineered for these problems.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">GMN can be a more powerful alternative to GNN because they compare at all levels across the pair of graphs in addition to the embedding computation, rather than independently mapping each graph to an embedding. The trade-off is added computation cost especially for large graphs. Moreover, GMN cannot directly be used for indexing and searching through large graph databases.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Researchers conclude that GMN are best used when the only concern is the similarity between individual pairs, or “in a retrieval setting together with a faster filtering model like the graph embedding model or standard graph similarity search methods, to narrow down the search to a smaller candidate set, and then use the more expensive matching model to rerank the candidates to improve precision.”</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The paper <em>Graph Matching Networks for Learning the Similarity of Graph Structured Objects</em> has been accepted by ICML 2019 and is on <a href="https://arxiv.org/pdf/1904.12787.pdf" target="_self">arXiv</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Author</strong>: Yuqing Li | <strong>Editor</strong>: Michael Sarazen</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><a href="https://syncedreview.com/2018-500-company-ai-adaptivity-report/" target="_self">2018 Fortune Global 500 Public Company AI Adaptivity Report</a><strong> </strong>is out!<br></br>Purchase a Kindle-formatted report on <a href="https://goo.gl/deesY3" target="_self">Amazon</a><strong>. </strong><br></br>Apply for <a href="https://goo.gl/fLLXcX" target="_self">Insight Partner Program</a> to get a complimentary full PDF report.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*5XgE_aWphMrdjv1yONWPsQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*5XgE_aWphMrdjv1yONWPsQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*5XgE_aWphMrdjv1yONWPsQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*5XgE_aWphMrdjv1yONWPsQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*5XgE_aWphMrdjv1yONWPsQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*5XgE_aWphMrdjv1yONWPsQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*5XgE_aWphMrdjv1yONWPsQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*5XgE_aWphMrdjv1yONWPsQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*5XgE_aWphMrdjv1yONWPsQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*5XgE_aWphMrdjv1yONWPsQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*5XgE_aWphMrdjv1yONWPsQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*5XgE_aWphMrdjv1yONWPsQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*5XgE_aWphMrdjv1yONWPsQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*5XgE_aWphMrdjv1yONWPsQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*5XgE_aWphMrdjv1yONWPsQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Follow us on Twitter </strong><a href="https://twitter.com/Synced_Global" target="_self">@Synced_Global</a><strong> for daily AI news!</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We know you don’t want to miss any stories.<strong> Subscribe to our popular </strong><a href="https://syncedreview.us16.list-manage.com/subscribe?u=be5fb1018253daed916c9fd29&id=8306cfe064" target="_self">Synced Global AI Weekly</a> <strong>to get weekly AI updates.</strong></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*L6k7ueTcS2e-An76axTKLQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*L6k7ueTcS2e-An76axTKLQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*L6k7ueTcS2e-An76axTKLQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*L6k7ueTcS2e-An76axTKLQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*L6k7ueTcS2e-An76axTKLQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*L6k7ueTcS2e-An76axTKLQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*L6k7ueTcS2e-An76axTKLQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*L6k7ueTcS2e-An76axTKLQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*L6k7ueTcS2e-An76axTKLQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*L6k7ueTcS2e-An76axTKLQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*L6k7ueTcS2e-An76axTKLQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*L6k7ueTcS2e-An76axTKLQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*L6k7ueTcS2e-An76axTKLQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*L6k7ueTcS2e-An76axTKLQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*L6k7ueTcS2e-An76axTKLQ.png"></picture></div><br></div></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>