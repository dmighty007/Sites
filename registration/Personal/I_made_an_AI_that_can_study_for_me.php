<!DOCTYPE html>
                <html>
                <head>
                    <title>I made an AI that can study for me.</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/geekculture/i-made-an-ai-that-can-study-for-me-7c9329c54dae"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@eeman.majumder?source=post_page-----7c9329c54dae--------------------------------">Author : Eeman Majumder</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>I made an AI that can study for me.</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*x9HwdV_VSFO_vWeNJzcp9w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*x9HwdV_VSFO_vWeNJzcp9w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*x9HwdV_VSFO_vWeNJzcp9w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*x9HwdV_VSFO_vWeNJzcp9w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*x9HwdV_VSFO_vWeNJzcp9w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*x9HwdV_VSFO_vWeNJzcp9w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*x9HwdV_VSFO_vWeNJzcp9w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*x9HwdV_VSFO_vWeNJzcp9w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*x9HwdV_VSFO_vWeNJzcp9w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*x9HwdV_VSFO_vWeNJzcp9w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*x9HwdV_VSFO_vWeNJzcp9w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*x9HwdV_VSFO_vWeNJzcp9w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*x9HwdV_VSFO_vWeNJzcp9w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*x9HwdV_VSFO_vWeNJzcp9w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*x9HwdV_VSFO_vWeNJzcp9w.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, there are loads of time when I have a big amount of text and I now it has the data that I need but way too lazy to read through it to find the thing I need. So, one day I thought what if I made an AI that can study the content for me and answer the questions I directly ask it and here we are.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, after some research I decided to use the the roBERTa model for the job. It is a a pre trained model made using MLM( Masked Language Modeling ) on the english language. Which basically means that it is and AI that can find keywords in a large amount of text and then recognise it based on the question that is given.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Lets get started with the code.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">First lets make a requirements.txt file:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>streamlit==1.13.0
transformers==4.22.2
torch==1.10.2</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now for the colab notebook download PyTorch:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Pytorch install
!pip install torch==1.10.2+cu113 torchvision==0.11.3+cu113 torchaudio===0.10.2+cu113 -f https://download.pytorch.org/whl/cu113/torch_stable.html</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now install transformers:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Install transformers
!pip install transformers</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now start loading the model by importing roberta model dependencies:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Importing the dependencies for the RoBERTa model
from transformers import AutoModelForQuestionAnswering, AutoTokenizer, pipeline</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Make a Q/A Pipeline:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Make contextual text corpus data:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Contextual text or corpus
wikipedia_text = """
Spider-Man is a superhero appearing in American comic books published by Marvel Comics. Created by writer-editor Stan Lee and artist Steve Ditko, he first appeared in the anthology comic book Amazing Fantasy #15 (August 1962) in the Silver Age of Comic Books. He has since been featured in movies, television shows, video games, and plays. Spider-Man is the alias of Peter Parker, an orphan raised by his Aunt May and Uncle Ben in New York City after his parents Richard and Mary Parker died in a plane crash. Lee and Ditko had the character deal with the struggles of adolescence and financial issues and gave him many supporting characters, such as Flash Thompson, J. Jonah Jameson and Harry Osborn, romantic interests Gwen Stacy, Mary Jane Watson and the Black Cat, and foes such as Doctor Octopus, the Green Goblin and Venom. In his origin story, he gets spider-related abilities from a bite from a radioactive spider; these include clinging to surfaces, superhuman strength and agility, and detecting danger with his "spider-sense." He also builds wrist-mounted "web-shooter" devices that shoot artificial spider webs of his own design.

When Spider-Man first appeared in the early 1960s, teenagers in superhero comic books were usually relegated to the role of sidekick to the protagonist. The Spider-Man series broke ground by featuring Peter Parker, a high school student from Queens behind Spider-Man's secret identity and with whose "self-obsessions with rejection, inadequacy, and loneliness" young readers could relate.[9] While Spider-Man had all the makings of a sidekick, unlike previous teen heroes such as Bucky and Robin, Spider-Man had no superhero mentor like Captain America and Batman; he thus had to learn for himself that "with great power there must also come great responsibility"—a line included in a text box in the final panel of the first Spider-Man story but later retroactively attributed to his guardian, his late Uncle Ben Parker.
"""</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Make a question set:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Define question set
question_set = {
                'question':'Who is Spiderman\'s enemy?', 
                'context':wikipedia_text
               }</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now run the question set on the AI:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>results = nlp(question_set)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Print the answer:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>results['answer']</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And with that the code is done.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, I made this into an app so that you guys can use it. Here is the code for it.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import streamlit as st
import os 


# st.title('Ask Me Anything 📚')
st.markdown("<h1 style='text-align: center; color: white;'>Ask Me Anything 🎓</h1>", unsafe_allow_html=True)
st.markdown('')
st.markdown('')

st.session_state['new']=True
# if st.session_state.new==True:
#     os.system('!pip install torch==1.10.2+cu113 torchvision==0.11.3+cu113 torchaudio===0.10.2+cu113 -f https://download.pytorch.org/whl/cu113/torch_stable.html')
#     os.system('!pip install transformers')
#     st.session_state.new=False 

from transformers import AutoModelForQuestionAnswering, AutoTokenizer, pipeline

form = st.form(key='my_form')

# creating the q/a pipeline
nlp = pipeline('question-answering', model='deepset/roberta-base-squad2', tokenizer='deepset/roberta-base-squad2')

text = form.text_area('Gimme Stuff To Study 📚')

submit_button = form.form_submit_button(label='Study This')

st.markdown('---')
ques=st.text_input('Ask Me Anything From The Information You Have Given')

#forming a question directory 
ques_dict = {
                'question':ques, 
                'context':text
               }

butt = st.button('Ask 🤷🏻')

if butt==True:
    results = nlp(ques_dict)
    st.markdown('---')
    st.subheader('Here Is Your Answer')
    st.success(results['answer'])
    st.balloons()

</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here is the app:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://huggingface.co/spaces/Eemansleepdeprived/Study_For_Me_AI"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">Study For Me AI - a Hugging Face Space by Eemansleepdeprived</h2></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Do try it.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Lets see some outputs:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*MyJneGikWZb6hWP0ItEg9A.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*MyJneGikWZb6hWP0ItEg9A.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*MyJneGikWZb6hWP0ItEg9A.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*MyJneGikWZb6hWP0ItEg9A.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*MyJneGikWZb6hWP0ItEg9A.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*MyJneGikWZb6hWP0ItEg9A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*MyJneGikWZb6hWP0ItEg9A.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*MyJneGikWZb6hWP0ItEg9A.png 640w, https://miro.medium.com/v2/resize:fit:720/1*MyJneGikWZb6hWP0ItEg9A.png 720w, https://miro.medium.com/v2/resize:fit:750/1*MyJneGikWZb6hWP0ItEg9A.png 750w, https://miro.medium.com/v2/resize:fit:786/1*MyJneGikWZb6hWP0ItEg9A.png 786w, https://miro.medium.com/v2/resize:fit:828/1*MyJneGikWZb6hWP0ItEg9A.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*MyJneGikWZb6hWP0ItEg9A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*MyJneGikWZb6hWP0ItEg9A.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*MyJneGikWZb6hWP0ItEg9A.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*kQKy4x8p2irIhTNzWoS5BQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*kQKy4x8p2irIhTNzWoS5BQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*kQKy4x8p2irIhTNzWoS5BQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*kQKy4x8p2irIhTNzWoS5BQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*kQKy4x8p2irIhTNzWoS5BQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*kQKy4x8p2irIhTNzWoS5BQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*kQKy4x8p2irIhTNzWoS5BQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*kQKy4x8p2irIhTNzWoS5BQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*kQKy4x8p2irIhTNzWoS5BQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*kQKy4x8p2irIhTNzWoS5BQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*kQKy4x8p2irIhTNzWoS5BQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*kQKy4x8p2irIhTNzWoS5BQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*kQKy4x8p2irIhTNzWoS5BQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*kQKy4x8p2irIhTNzWoS5BQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*kQKy4x8p2irIhTNzWoS5BQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Dyam I didn't know that</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, as you can see the results are coming very accurate. Go try it yourself!!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><a href="https://medium.com/@eeman.majumder" target="_self">If you liked this article a follow on medium helps me alot.</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For The Code Go Here:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://github.com/Eeman1113/Study_For_Me_AI"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">GitHub - Eeman1113/Study_For_Me_AI</h2></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For my day to day AIML updates follow me on twitter:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:80%;"><iframe  scrolling="auto" width="500.0" height="281.0" frameborder="0" src="https://cdn.embedly.com/widgets/media.html?type=text%2Fhtml&key=a19fcc184b9711e1b4764040d3dc5c07&schema=twitter&url=https%3A//twitter.com/eemanmajumder/status/1584485241716367360&image=https%3A//i.embed.ly/1/image%3Furl%3Dhttps%253A%252F%252Fabs.twimg.com%252Ferrors%252Flogo46x38.png%26key%3Da19fcc184b9711e1b4764040d3dc5c07" allowfullscreen=""></iframe></div><br><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thanks for reading 😁, See you guys next week 👋🏼.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>