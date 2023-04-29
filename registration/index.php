<?php
	session_start();

    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "register";
    
    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
    $fetchData= fetch_data($conn);
    // fetch query
    function fetch_data($conn){
    $query="SELECT * from articles";
    $exec=mysqli_query($conn, $query);
    if(mysqli_num_rows($exec)>0){
        $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;  
            
    }else{
        return $row=[];
    }


    }
    $items = array();
    if(count($fetchData)>0){
       
        foreach($fetchData as $data){ 
            $items[] = $data['art_status'];
       }
    
    }

?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v5.7.8, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/mbr.png" type="image/x-icon">
        <meta name="description" content="">
        <title>autoencoder</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css" rel="stylesheet"/>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/template/elements.css" rel="stylesheet"/>
  <link href="assets/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet"/>
  <link href="assets/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet"/>
  <link href="assets/animatecss/animate.css" rel="stylesheet"/>
  <link href="assets/dropdown/css/style.css" rel="stylesheet"/>
  <link href="assets/socicon/css/styles.css" rel="stylesheet"/>
  <link href="assets/theme/css/style.css" rel="stylesheet"/>
  <link as="style" href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
  <noscript>
   <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet"/>
  </noscript>
  <link as="style" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
  <noscript>
   <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet"/>
  </noscript>
  <link as="style" href="https://fonts.googleapis.com/css?family=Zen+Antique+Soft:400&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
  <noscript>
   <link href="https://fonts.googleapis.com/css?family=Zen+Antique+Soft:400&amp;display=swap" rel="stylesheet"/>
  </noscript>
  <link as="style" href="assets/mobirise/css/mbr-additional.css" rel="preload"/>
  <link href="assets/mobirise/css/mbr-additional.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
  </script>
  <script src="assets/template/my_js.js">
  </script>
  <style>
   * {
            box-sizing: border-box;
        }

        .is-hidden {
            display: none;
        }

        .search-box {
            width: fit-content;
            height: fit-content;
            position: relative;
        }

        .input-search {
            height: 50px;
            width: 50px;
            border-style: none;
            padding: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            outline: none;
            border-radius: 25px;
            transition: all .5s ease-in-out;
            background-color: #22a6b3;
            padding-right: 40px;
            color: rgb(22, 1, 1);
        }

        .input-search::placeholder {
            color: hsl(0, 0%, 0%);
            font-size: 18px;
            letter-spacing: 2px;
            font-weight: 100;
        }

        .btn-search {
            width: 50px;
            height: 50px;
            border-style: none;
            font-size: 20px;
            font-weight: bold;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            color: #4507b8;
            background-color: transparent;
            pointer-events: painted;
        }

        .btn-search:focus~.input-search {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(5, 49, 243, 0.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

        .input-search:focus {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(238, 7, 7, 0.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }
  </style>
  <style>
   .center_mode {
            margin: auto;
            width: 60%;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .hideform {
            display: none;
        }

        .filterDiv {
            float: left;
            background-color: #2196F3;
            color: #ffffff;
            width: 100px;
            line-height: 100px;
            text-align: center;
            margin: 2px;
            display: none;
        }

        .show {
            display: block;
        }
  </style>
  <style>
   .center_mode {
            background-color: #104068;
        }

        .cat {
            margin: 4px;
            background-color: #c8d3db;
            border-radius: 4px;
            border: 1px solid rgb(29, 29, 29);
            overflow: auto;
            width: fit-content;
            height: fit-content;
            color: #104068;
            float: left;
        }

        .cat label {
            float: left;

        }

        .cat label span {
            text-align: center;
            color: #104068;
            padding: 1.0em 0;
            display: block;
            padding-left: 20px;
            padding-right: 20px;
        }

        .cat label input {
            position: relative;
            display: none;
            color: rgb(37, 35, 35) !important;
        }

        /* selects all of the text within the input element and changes the color of the text */
        .cat label input+span {
            color: rgb(21, 5, 90);
        }


        /* This will declare how a selected input will look giving generic properties */
        .cat input:checked+span {
            color: #ffffff;
            text-shadow: 0 0 6px rgba(173, 168, 168, 0.8);
        }


        /*
        This following statements selects each category individually that contains an input element that is a checkbox and is checked (or selected) and chabges the background color of the span element.
        */

        .action input:checked+span {
            background-color: #F75A1B;
        }

        .comedy input:checked+span {
            background-color: #1BB8F7;
        }

        .crime input:checked+span {
            background-color: #D9D65D;
        }

        .history input:checked+span {
            background-color: #82D44E;
        }

        .reality input:checked+span {
            background-color: #F3A4CF;
        }

        .news input:checked+span {
            background-color: #8C1B1B;
        }

        .scifi input:checked+span {
            background-color: #AC9BD1;
        }

        .sports input:checked+span {
            background-color: #214A09;
        }
  </style>
  <style>
   .hr5 {
            border: 0;
            border-top: medium double rgb(75, 69, 69);
            height: 1px;
            overflow: visible;
            padding: 5 5 5 5;
            color: rgb(78, 73, 73);
            text-align: center;
        }

        .hr5::after {
            content: "¶";
            display: inline-block;
            position: relative;
            top: -0.7em;
            font-size: 1.4em;
            padding: 0 0.3em;
            background: white;
        }
  </style>
  <style>
   #button {
            position: relative;
            /*display:block;*/
            height: 45px;
            width: 150px;
            margin: 10px 7px;
            padding: 5px 5px;
            font-weight: 700;
            font-size: 15px;
            letter-spacing: 2px;
            color: #383736;
            border: 2px #383736 solid;
            border-radius: 4px;
            text-transform: uppercase;
            outline: 0;
            overflow: hidden;
            background: none;
            z-index: 1;
            cursor: pointer;
            transition: 0.08s ease-in;
            -o-transition: 0.08s ease-in;
            -ms-transition: 0.08s ease-in;
            -moz-transition: 0.08s ease-in;
            -webkit-transition: 0.08s ease-in;
        }

        .slide:after {
            content: "View Story";
            margin-top: 17px;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            text-align: center;
            -webkit-transition: all 400ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide:before {
            content: "Read it →";
            margin-top: 17px;
            height: 100%;
            width: 100%;
            position: absolute;
            color: #383736;
            left: -100%;
            opacity: 0;
            -webkit-transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide:hover {
            background: #383736;
        }

        .slide:hover:before {
            left: 0;
            opacity: 1;
            color: rgb(79, 7, 194);
        }

        .slide:hover:after {
            left: 100%;
            opacity: 0;
        }

        .slide.left:hover {
            background: none;
        }

        .slide.left:before {
            left: 100%;
            color: #383736;
            -webkit-transition: all 425ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide.left:hover:before {
            left: 0;
        }


        .slide1:after {
            content: "Check Read";
            margin-top: 17px;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            text-align: center;
            -webkit-transition: all 400ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide1:before {
            content: "Mark it!";
            margin-top: 17px;
            height: 100%;
            width: 100%;
            position: absolute;
            color: #383736;
            left: -100%;
            opacity: 0;
            -webkit-transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide1:hover {
            background: #383736;
        }

        .slide1:hover:before {
            left: 0;
            opacity: 1;
            color: rgb(79, 7, 194);
        }

        .slide1:hover:after {
            left: 100%;
            opacity: 0;
        }

        .slide1.left:hover {
            background: none;
        }

        .slide1.left:before {
            left: 100%;
            color: #383736;
            -webkit-transition: all 425ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide1.left:hover:before {
            left: 0;
        }
  </style>
  <style>
   div {
            cursor: auto;
        }

        body {
            background-color: rgb(159, 219, 248);
        }

        section {
            padding-top: 0px;
            padding-bottom: 0px;
        }
  </style>
  <style>
   @font-face {
            font-family: ff3;
            src: url('data:application/font-woff;base64,d09GRgABAAAAABK8AA0AAAAAHAQAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAASoAAAABoAAAAc2FjywkdERUYAABKEAAAAHAAAAB4AJwA0T1MvMgAAAaAAAABEAAAAVlXk/r1jbWFwAAAChAAAAOMAAAHSBHftaGdhc3AAABJ8AAAACAAAAAj//wADZ2x5ZgAAA8gAAA1lAAAU1CD0b7xoZWFkAAABMAAAAC0AAAA2WyKj2WhoZWEAAAFgAAAAIAAAACQGqQKvaG10eAAAAeQAAACeAAAAtlcyBYJsb2NhAAADaAAAAF4AAABea9hmum1heHAAAAGAAAAAHgAAACAAdABhbmFtZQAAETAAAADlAAABzj7Auphwb3N0AAASGAAAAGEAAAB+BeYFrnicY2BkAANTtWXH4vltvjJwM78A8WtUNzQg6P/szDuZ3gK5HAxMIFEALb4KuwAAAHicY2BkYGB6+5+dgYH5EAPD/x3MOxmAIihAFwCCXgVdeJxjYGRgYNBjiGNgYQABJiBmZACJOYD5DAAQnQDWAAB4nGNgZPzJOIGBlYGBqYtpDwMDQw+EZnzAYMjIBBRlYGVmAIMGoCADEghIc00BUgoKskxv/7MDVb5l+MkAVQMAE7oL7HicHY4xCsJQEERnJxiwEqIWv7BJDEj4IaW1hQiCKFiJYuFJbLyDnaW9R9AreAjtbQQV52fh7QzD7rLcoy6bqT2lSyyEM49YzO2FqfDBs40ej2hwDR914XlDRWDADTrRFa3g7YuSI+0/UHCI0n5ih5Qx+lwpL3Qjq9VFB+VbkWtngoylZs9I7YLKxmgqc/YG+BHhyTsSOyFH8gfSihj5AAB4nJWPy0pCYRSFv2OmdjdNyzrmn900Nahh0KBB0KxBQcNoGD1A9FbdZhE4iqCQZmE0EHqQ1T4XghqdFqx949uwNzBEZB+PQK/WeWGf5tpyA2dVzmKTNptss8Mue+xzwCHHnHDKOZdcuYqrSrbhbCcgt36RRyF5xkVI+pK+9KkP9fWuN/X0omc9qatHPehed7rVzaAwyMdXJZKX4Qf3UhZSf4Ho1UDpYciQhdxIPBmFMUvj5gmYjIZT5vw0FGKoyEypPDtXmV/wqS7W3FJ9eWV1bb3RZCP5nf9Tu0MrOf0Nxug0qgAAAAAAAAAAAAAAACoAVACGAKIAyAEOATwBUgF4AaoB7gJQAqYC0AMAAxADhgPWBBwEagS6BQIFfgXEBf4GMgZWBtIHIAdeB7YIDAhOCKQI1AkKCSoJWgmUCcIKFgpqAAB4nJVYeYwb53Wfb3jtci6Sc3GGHM5JzpBDcndnODPLXa20u9JKq93soVuuVrIjy3KQAHYsW0IRt41rG7FSWw5qO0EcN4Bz/JM2QRo1TdAGCRAUBey6TvtHZKRHUDRpA7WyGycCXMeAuf3mWO4qttJ2qCXn0Lz3vt/7vd97MwiKrG/Ogin0dYRBWAShe4EPP2Y2ly3wHB80TPjxXiQJTZkRP+zC7cPiLlUjSMAdm927dOA4f/bSxcF/Xbx0lj+6uLR39jgCNxQRoM3U0CaTg+ZyPDRcgOZyHDTMsX9GUqqyS/yI47rOR8QZWaWgzdXFhcX9x/l7HrwIShcfvIe/Yx88sRLbzG4qyDXkUaSCVBEk6JlRaLqWy7IMz8lgy0Xge9dS6TRLUIRcoEbzdL1kmi7Z7bZqklQslYlSJkuXRKbEElLfqItasa57venYx9rmTeTH0AeBkAjCO77XG3pwPyO1WlKNZRi2RsCdFsvINYaN71tCEPBd9OlkvWxQZOA9WTbHqp7ZmAHFwMwdexyAK+DBp9E0+QP0jiY2+Czh4ISLlw2j7IjLQPtU3otstaGtv0WfRexwz1U9NVpUsBt4vXi98MO5jr8H+IHjuw7HRvhSgJ0ALwy+YdENbKnbMtqduyY6bUnKFjVWxOiRUrqQ8uf1xmJdXTncKBnYAd892j44MV4s6Kqv1BoLKAoWd0/N7ltu6Ctz4bpSMR7gDYhHhDp9CyL0bfHZ3gNntqEafHoHbClEQl4Gb4G/gXs5ZARB6p7Khn8qeGtggn8I/17u91/q98M4MhCYK+gXITolhIb40HrK9czA5SOEU3oqxwLv3Muv/PvZyevBWVBYvrbn2lHUGbw2eLtJfOnLeLM5in703eeIZowv2kc/j6iIBlfEc1KKgdipgZ7TYapc3vXgnteDxl1TZdsbKLqBZnN9bhN9juh2yWfRG1w/NyDRh7Dj9u9PPNo+ijWvPnK4c+XM63f+Xuv4x7+x5eM69DGGjMNooQ+ger09AC5v6C8ihsoO91PxdfCDDXTwXfTU4GehYyCeQsHe8Dc8GvwMOj3cfOR3Wsfzzea2+2Yeuv9kN9zbcTLEbWzzF+hz6Fch1jPIbgRJO0FcIWH1dEFCpih9YbFrcU15sQZAavFxqcb1m9VB47e9wLZFUazY9n39ab/fggeC0LEnH/DqhlDGMQwvC4bpOqYh8PCI4ASj3qP4cqczP3/o6N65tt0tC3ZnbvbIibl5u81XBcFu+c7MtOO1bQFudnOy3/P7fRMexbVlbf4C/AiuIUAmw5rcin8MJKG6jgzcoLFVGywDxSCJWtfC/6fnasC9caDn1eSWdc7ya5JpTbYb7ExWbrXH9vTcmnRm1ZyF3GwuqmWRZXZnjfN9iudb9vT+8a5FQUKPBZLEPPAYVyB53mpOrZypFSAKY1OKnM3hl57ia3GsDPxahHmPq8UN3J3ZTiWcyjFT3PMoeh50z6Po89zUyLv/PAJuPHKy9WiSuSiJj9nHH7l6FdqkNn+V+gtos4wIIZcwEIQ0Sn5otwJcOvB0Fn3t1Mc/fc/gzXOffXhj8OaRb9pf+pr9laM/RR8iBg74O1gB+MAHr4RkefdTaPbdd9D78ZAjIb7fAz+Kqj0N8YV6w1rgTwfr8/PzsQZ0Nm+C/wbXIfqryBqCZJykP4TgzoAtTYKKtCVIId1JsE0tN7yjBsxeomPwi40JBS144MUqzReZ0ZFRojiab1gry36PTNt1imZGM4W0w3GWpc7XDZIwG/1OrdbKjr+VzXJ0J1vN0UpBpUm8YLB8HiOqHJbJEoR67YxlaWq/OT6XBqAsLAp5HCuXy4Ig7VZkhm7qrU+SpQJdoNHRVG70eZzDU+liIaoXYfMmyqA/hcrgIC5UXz7govhj8U2W6kE1Z2HI2VDhgTNkmlkMi6b2mRHF0Izp7pgvCna7ZzaNRpp8/jAAy0AKFi3TkyRFgkrI5/c1KUpWLqx+oO/JEl1oXX16pKPnBwexnuLjBHjy/J13jXcJQgIlHcMjfrVgLv4a5iLqDbdkIq4EPuY+jHjYHZMcAGz/+DgjCJrePtDuNFuzIyWCKqUJXDRzWaFsWvZMz1OVmV0fIlRthmjQtOOcuctxUJCZZ0mioSlVuliTpoL1i3N7t3iBmhCrItS4ibAjDzWjGMXUyASeWYywYm+JJWEE/wRdUpR6uVpVq6KgzqyCzAuH0uQfHVMUTd014YhVQey294wrSjV3Y6HV4liY4sENhSA2nskbOCpFaP3EoEhF9ydXl/3JmkyX9IUtzr4KcaJgZA6sGifWsawNImWjdyJnqr1EEW/Bi5DLfIEq69/KMmy1Ji6MjVfLoqqMH7Q7AOzJoILYtN3dnifLM9P3gr+kSLEscbVpTS8UBn1Z9mlItfGx0yjH4NPtVplXtGBy9aG5uSiPsPOAP0bfiPuDG6kDCvtOI4i6egLQMKCoubvs1kxhAPS30Mt/kCKJShbNVg2jWqDQEVFSNV1XGlQhe+wIAGsG1aus/9A77HtiFk1zNQJnJJzAMbUx4S9j7R+SHhH+M2A8acTYLIKfQ7wIZB45jpyA2RxSKoQt50QIwZabG/Z7PkZqZ41HKNogvpVLhYTgplFnW4u9N8YEoVIZ6/b87qrb489SD4yvrfZchjVMkpoPOHZi7P4jflCpmtbhx3QcE5S10VEWH2Ev9gTebh2Z1vWXNKUfaPq+Hqyllr3mNfbkTdNurXmqzjT4Cj9VqlQriq9qQrlp2bt0DcdYRcEG7wgsx6E8rzRliWWcZE6FX9OQwxFLpkGUh90glrC4vlk3Otl7n9Jna9cX0MZ83WZoAA5e34/Ozo5POEZS7AbpKKtX9JpY3XssLmgjOnX6gydF0fp+Uur58EqYhHAeQgCGvgZ1vo40htFEDiGAw4Dg1JVobgi7Dt2mqM+towC6vFSxGLoq0XCTIl+PX87P6KNWaaRDjcWeUMeYLMENfm2tX4frV+A0lHgEAZyAzBQcRnSWzxVvWbDw9jo6/7nL81++78x/LP0JrFW40HWDbPFz+942cJB5gDTN0lVwOlkc4VUjhkV+QBH6ocMOmfh5r+mhwV51HTycGCE90SMjmsZ1k/oQ5OkGcnqIUKI670lYr+Hd5lJSV1v1NQZ2QByXmAUzq2my1qZhapcgxgDUVa3W4pj4UFNnnO54nZTkTnesa4xQT62FGViKUH+mViAr0lyUdYxMsp4pjhTSGkUKwsKJnRfuPWU3y+UubHOiYB2K0lWE6RrHelQhZkaybnQWrjuagf6Xdf+mNdVVVbWZZBGzs21n4tdjl6GQJYwdxv7Bk4Jorr9/bLHWvg1j4yBrzaQrbespCWLJD3b0qEgOQGkKNhxNU3yvP+X15lXN9abmNU3T52YNXTdmiUplsn9ofXpSkqTqhcNHgr5Y6bjO+Xs8zwvuPtdzoW99s4iK0HcTmUKmo+klxOA9PXuIBjvs2vyvtW0dgFOorMn1qHGLLds/tD+bQLMOFK+uW9ZktSKJhlLjf65TfuXQWp0k5dqFlQ/0J2u15bkhPoOfEIHokyT6cM+7865uBydEIED9jbAqom0YbynO5Ht6ptmIBlw2Sen20+PWsJ70z7h1ipWaVhMFfcY0L7R1TQZgAwaLpgr79H361MREpRJ10P9caLVZFidqg5s6SXY7z9HF1gbhV32C0nXSrx4CF57IL5g1RZvsryx7sI0Oe9SLW7PGNueCuIF771s9UdStm4dRnKVlnCKp4vQowzOW1eSxBMxFg3KUleWWKvMYkc0eLGB5zZi6tJNdkVhGMYxBbj25xfv/y+zP7xz+4egfBfvS3qbNcYq8LMMmygsd1Sj00qqqm4Fl0YyqBt1uma9W+uMqHaQbmt4iGEbRjW7dqGKlUkFTinRx/TyNYQxXkxuuotLFAsPIKscWTtzHjI7GNToKY92L3g11vBbFOpzMirCzB3rSwiFKMKJXV5plliRLIkldfiK7S7zjCJAln/BEMpsrlhrA9y5/Amu/jimZ+nSluvVO5SZaB/+KyFCtYyz44YCVSqbx6CCXhR7+ZazdtfJP7kvl//BAauFAk2Yy+WcPpFBD201w/MQdIwYJhKfypEEO/nFOFOdfCPepX52zrNAXsvkOeBP8E0LCCSp55tDDh43oSQM4h+7/2Mlf+t+yvxh8D3yTHHwfzBKmmR+sg6/B3+R+9Jfw/h3PLDq7bWb4zDK9dPrC0o+XPnrv6r/1v1B//NH6M/63Q4t/DyagJXzwKnDx2PLdg88n1mP7ORSB9qNn+O34omFpOMgx4VuSIA555sTDv3vyzeDP0yTHqhm6VKJ5hkn7jd0b7hf8vwLfxgdfBcfydWNkEOCmVa9m6PwohrM149InwFcwI+xhJfAd5OtwZhMQMXxPdtu3T18ncZIiqlRhZJSTCnxFoeuKTNPoM7qRz2QoSmILJVq0REmolFXNsptQF+rgO+BKZNtFeuEbs60pOWb71is5mNnbXmHrJEbixcRvkaMtWteUEv3K+59GOUvGMmmyIJXoMByBUyucoVpm53bnQ62HGICP7YjztigE/298Xtl5usjB0w35N8J2Wzj/BxXXZN4AAAB4nJWPQWrDMBBFnxwnJbTJsovQhbYt2NjqLssGfIAssvdCGEOwQUmukvP0ID1BT9GvRCl0U1rBoDejP39GwANnDPEYFjwlzrhjnXjC87cml+Yj8ZR7kyWesTAvUpp8rsrq0hU5Y8mtPmHLW+JcmvfEUx75TDxjZZZsaOkJjDSKgSMFTlHBpu3D2IzDsXCF0i2ejhN7dQSlvjvtW8GtL95BCo+VQykHq3/ZXyZc3+tLdo1K8SpLDW3G0Hnrysqu7Y9NlNdO4Con6d/332mzwEHqqItz447sfDj042DrsvqH2xffq0MYAAAAeJxty7sKggAAQNGTjQUR2Cg0NARCQ0NCY2TZg57aCz8z6fNKnDtwxyvQ+Fam/pnUtQTaOrp6+kIDkaGRsbi+ZhJzC0uplbXMxtbO3sHRydnFVa5wc/fw9FL6eKt+Sv4NlAAAAAAAAAH//wACeJxjYGRgYOABYjEgZmJgBEJdIGYB8xgABY0AXHicY2BgYGQAgge8Ew+C6BrVDQ0wGgBAtQXjAAA=')format("woff");
        }

        .ff3 {
            font-family: ff3;
            font-size: 20px;
            word-break: break-word;
            line-height: inherit;
            word-spacing: 1px;
            letter-spacing: -0.003em;
            font-style: normal;
            font-weight: normal;
            visibility: visible;
            overflow-wrap: break-word;
            text-rendering: optimizelegibility;
        }
  </style>
  <script>
   function div_show() {
            document.getElementById('abc').style.display = "block";
            document.getElementById('content2-e').style.display = "none";
            //document.getElementById('footer3-d').style.display = 'none';
            document.getElementById('menu3-1').style.display = 'none';
        }
        //Function to Hide Popup
        function div_hide() {
            document.getElementById('abc').style.display = "none";
            document.getElementById('content2-e').style.display = "block";
            //document.getElementById('footer3-d').style.display = 'block';
            document.getElementById('menu3-1').style.display = 'block';
        }
        //Function To Display Popup
        function div_show2() {
            document.getElementById('abc2').style.display = "block";
            var contents = document.getElementsByClassName('content2');
            for (let j = 0; j < contents.length; j++) {
                contents[j].setAttribute('style', 'display:none;padding-top: 0px; padding-bottom: 0px;')
            }
            document.getElementById('features10-j').style.display = 'none';
            document.getElementById('menu3-1').style.display = 'none';

        }
        //Function to Hide Popup
        function div_hide2() {
            document.getElementById('abc2').style.display = "none";
            var contents = document.getElementsByClassName('content2');
            for (let j = 0; j < contents.length; j++) {
                contents[j].setAttribute('style', 'display:block;padding-top: 0px; padding-bottom: 0px;')
            }
            document.getElementById('features10-j').style.display = 'block';
            document.getElementById('menu3-1').style.display = 'block';
        }
        function CheckInclude(orig, check) {
            var flag = false;
            //
            //var check = "ML_DL";
            for (let i = 0; i < orig.length; i++) {
                if (check.includes(orig[i])) {
                    flag = true

                }
            }
            return flag;
        }
  </script>
  <script>
   jQuery(document).ready(function($) {

if (window.history && window.history.pushState) {

  $(window).on('popstate', function() {
    var hashLocation = location.hash;
    var hashSplit = hashLocation.split("#!/");
    var hashName = hashSplit[1];

    if (hashName !== '') {
      var hash = window.location.hash;
      
      if (hash === '') {
        //alert('Back button was pressed.');
          window.location='index.html';
          window.location.reload(); 
          
          return false;
      }
    }
  });

  window.history.pushState('forward', null, 'index.html');
}

});
  </script>
  <script type="text/javascript">
   (function()
    {
      if( window.localStorage )
      {
        if( !localStorage.getItem('firstLoad') )
        {
          localStorage['firstLoad'] = true;
          window.location.reload();
        }  
        else
          localStorage.removeItem('firstLoad');
      }
    })();
  </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
   $(document).ready(function(){
        $(".slide1").click(function(){
            var id = $(this).data("id"); // get the ID value from data attribute

            var par_id = "update-div" + id
            $("#"+par_id).css("background-color", "skyblue");
            $.ajax({
                url:'update.php',
                method:'POST',
                data:{
                    id: id, // add the ID to the data to be sent
                },
                success:function(response){
                }
            });
        });

    });
</script>


 </head>
 <body>
  <section class="menu menu3 cid-sFAA5oUu2Y" data-bs-version="5.1" id="menu3-1" once="menu">
   <nav class="navbar navbar-dropdown navbar-expand-lg" style="background-color:rgba(237, 245, 225, 1.0);position:relative;">
    <div class="container-fluid">
     <div class="navbar-brand">
      <span class="navbar-caption-wrap">
       <a class="navbar-caption text-primary display-5" href="index.html">
        Scrapped
       </a>
      </span>
     </div>
     <button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
      <div class="hamburger">
       <span>
       </span>
       <span>
       </span>
       <span>
       </span>
       <span>
       </span>
      </div>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="icons-menu">
       <div class="search-box">
        <button class="btn-search">
         <i aria-hidden="true" class="fa fa-search">
         </i>
        </button>
        <input class="input-search" id="searchbox" placeholder="Type to Search..." type="search"/>
       </div>
      </div>
      <div class="navbar-buttons mbr-section-btn">
       <button class="btn btn-danger-outline display-4">
        <a href="feed_page.html">
         <i aria-hidden="true" class="fa fa-rss" style="color: rgb(34, 153, 170);">
         </i>
         Feed
        </a>
       </button>
       <button class="btn btn-danger-outline display-4">
        <a href="login.php">
         <i aria-hidden="true" class="fa fa-sign-in" style="color: rgb(34, 153, 170);">
         </i>
         Login
        </a>
       </button>
       <button class="btn btn-danger-outline display-4">
       <a href="logout.php" >
         <i aria-hidden="true" class="fa fa-sign-out" style="color: rgb(34, 153, 170);">
         </i>
         Logout
        </a>
       </button>

       <button class="btn btn-danger-outline display-4" onclick="div_show2()">
        <span class="socicon socicon-mail mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 102, 102);">
        </span>
        Request an article!
       </button>
      </div>
     </div>
     <!--<div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="#">
                                Search</a></div>-->
    </div>
   </nav>
  </section>
  <div id="abc2">
   <!-- Popup Div Starts Here -->
   <div id="popupContact2" style="border-color:#fff">
    <section class="form7 cid-ttAgVU2SaT" data-bs-version="5.1" id="form7-d" style="opacity:.95; background-color:#313131;">
     <div class="container">
      <a onclick="div_hide2()">
       <i aria-hidden="true" class="fa fa-times" style="font-size: 40px;color: #ffffff;">
       </i>
      </a>
      <div class="mbr-section-head">
       <h3 class="mbr-section-title mbr-fonts-style text-white align-center mb-0 display-2">
        <strong>
         Paste the link or
                                title!
        </strong>
       </h3>
      </div>
      <div class="row justify-content-center mt-4">
       <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
        <form action="https://mobirise.eu/" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name" method="POST">
         <input data-form-email="true" name="email" type="hidden" value="hX9tKwR+WmipBz/wChYl/QI7bs+5qU28ivd25x9bXhFy+Oxps+ShOaYBMe8GGOF83nmVijCSVkq8MYkoAxJXmbbRNPeHu1t/q79su/G1/Rb0ioyk81Yi7ZGUEWN2sDBG"/>
         <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
          Please paste the link or
                                    the title of the "Medium/Towards Data Science"
                                    article you want here!I Will update shortly.
         </p>
         <div class="row">
          <div class="alert alert-success col-12" data-form-alert="" hidden="hidden">
           Thanks
                                        for
                                        filling out the form!
          </div>
          <div class="alert alert-danger col-12" data-form-alert-danger="" hidden="hidden">
           Oops...! some problem!
          </div>
         </div>
         <div class="dragArea row">
          <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
           <input class="form-control" data-form-field="name" id="name-form7-d" name="name" placeholder="Name" type="text" value=""/>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
           <input class="form-control" data-form-field="email" id="email-form7-d" name="email" placeholder="Email" type="email" value=""/>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="textarea">
           <textarea class="form-control" data-form-field="textarea" id="textarea-form7-d" name="textarea" placeholder="Message"></textarea>
          </div>
          <div class="col-auto mbr-section-btn align-center">
           <button class="btn btn-primary display-4" type="submit">
            Submit
           </button>
          </div>
          <br/>
          <br/>
          <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
           Or
          </p>
          <div class="col-auto mbr-section-btn align-center">
           <button class="btn btn-secondary display-4" onclick="div_hide2()">
            Cancel
           </button>
          </div>
         </div>
        </form>
       </div>
      </div>
     </div>
    </section>
   </div>
  </div>    <section data-bs-version="5.1" class="features9 cid-tvA5SQ6yVu mbr-parallax-background" id="features10-j">
        <!---->



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(190, 211, 249);">
        </div>
        <div class="container">
            <div class="mbr-section-head">
            <br><br>
                <h3 class="mbr-section-title mbr-fonts-style text-black mb-0 display-2">
                    <strong>Articles related to  <em style="color:red;">"AutoEncoder"</em></strong>
                </h3>
            </div>
            <hr class="hr5">
            <div class="row mt-4">                <div class="card col-12">
                        <div class="card-wrapper" id="update-div1">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of physicochemical properties based on neural network modelling.</strong></h4>
                                    <h7 style="color:blue;"> Advanced drug delivery reviews</h7>
                                    <p class="text-muted"> <em>J. Taskinen and J. Yliruusi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The literature describing neural network modelling to predict physicochemical properties of organic compounds from the molecular structure is reviewed from the perspective of pharmaceutical research, and the standard three-layer, feed-forward neural network is the technique most frequently used.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b78081ce5447f06e4e01e10038c1e075e1af2de4">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "1"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div2">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Predicting aqueous solubility from structure.</strong></h4>
                                    <h7 style="color:blue;"> Drug discovery today</h7>
                                    <p class="text-muted"> <em>J. Delaney</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This review critically surveys a range of methods that can be used to predict the solubility of a compound in water and presents some of the main issues that affect the applicability of different techniques.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/8d730fa0c2612a894faed0a727c9fa99088199b2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "2"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div3">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Radial basis function network-based quantitative structure–property relationship for the prediction of Henry’s law constant</strong></h4>
                                    <h7 style="color:blue;"> Analytica Chimica Acta</h7>
                                    <p class="text-muted"> <em>X. Yao and Mancang Liu and Xiaoyun Zhang and Zhide Hu and B. Fan</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/9efdf0708c49903b2c5b72bfbb5730964ee045bb">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "3"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div4">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Simultaneous prediction of aqueous solubility and octanol/water partition coefficient based on descriptors derived from molecular structure</strong></h4>
                                    <h7 style="color:blue;"> Journal of Computer-Aided Molecular Design</h7>
                                    <p class="text-muted"> <em>D. Livingstone and M. Ford and J. Huuskonen and D. Salt</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: It has been shown that water solubility and octanol/water partition coefficient for a large diverse set of compounds can be predicted simultaneously using molecular descriptors derived solely from a two dimensional representation of molecular structure using multiple linear regression, artificial neural networks and a statistical method known as canonical correlation analysis.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Hsioavejfh.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "4"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div5">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial Neural Network-Based Quantitative Structural Property Relationship for Predicting Boiling Points of Refrigerants</strong></h4>
                                    <h7 style="color:blue;"> Qsar & Combinatorial Science</h7>
                                    <p class="text-muted"> <em>Jahan B. Ghasemi and S. Saaidpour</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Quantitative Structure-Property Relationship (QSPR) model for the estimation of boiling points of organic compounds containing halogens, oxygen, or sulfur without hydrogen bonding were established with the Molecular Modeling Pro Plus (MMPP) software. A QSPR study was performed to develop models that relate the structures of 90 refrigerants compounds to their boiling point temperatures. Molecular descriptors derived solely from structure were used to represent molecular structures. A subset of the calculated descriptors selected using genetic algorithm (GA) was used in the QSPR models development. Artificial neural network (ANN) is utilized to construct the QSPR model. The optimal QSPR model was developed based on a 4-4-1 artificial neural network architecture using molecular descriptors calculated from molecular structure alone. The root mean square errors (RMSE) in normal boiling points predictions were 4.468C for the training set, 3.868C for the validation set and 4.998C for the prediction set. The prediction results are in good agreement with the experimental value.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Wxgwpmhxbk.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "5"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div6">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Estimation of water solubility from atom‐type electrotopological state indices</strong></h4>
                                    <h7 style="color:blue;"> Environmental Toxicology and Chemistry</h7>
                                    <p class="text-muted"> <em>J. Huuskonen</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Based on the atom‐typee ectrotopological state (E‐state) indices, a quantitative structure–property relationship model for the prediction of aqueous solubility for a diverse set of 745 organic compounds is presented. The multiple linear regression analysis was used to build the models. A training set of 674 compounds, containing 349 liquids and 325 solids and having a range of aqueous solubility (log S) values from 2.77 to —11.62, was obtained from the literature. For this set, the squared correlation coefficient and standard deviation for a linear model with 31 atom‐type E‐state indices and three simple correction factors were r2 = 0.94 and s = 0.58 (log units), respectively. The corresponding statistics for the test sets not included in the training set were, for a set of 50 pesticides, r2 = 0.79 and s = 0.81 and, for a set of 21 drug and pesticide compounds, r2 = 0.83 and s = 0.84, respectively. The contribution of melting points was also evaluated. The use of melting point increased the accuracy of the models in the fit of the training set but not in the prediction of the test sets. Hence, the proposed method offers fast and accurate estimation of aqueous solubility of organic compounds using atom‐type E‐state indices without the need of any experimental parameters like the melting points.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Gtaggraito.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "6"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div7">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>In silico prediction of aqueous solubility</strong></h4>
                                    <h7 style="color:blue;"> Expert Opinion on Drug Discovery</h7>
                                    <p class="text-muted"> <em>J. Dearden</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The fundamentals of aqueous solubility, and the factors that affect it, are briefly outlined, followed by a short introduction to quantitative structure–property relationships. Early (pre-1990) work on aqueous solubility prediction is summarised, and a more detailed presentation and critical discussion are given of the results of most, if not all, of those published in silico prediction studies from 1990 onwards that have used diverse training sets. A table is presented of a number of studies that have used a 21-compound test set of drugs and pesticides to validate their aqueous solubility models. Finally, the results are given of a test of 15 commercially available software programs for aqueous solubility prediction, using a test set of 122 drugs with accurately measured aqueous solubilities.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Dtpacwziiu.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "7"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div8">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>In Silico Predictions of Solubility</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>J. Taskinen and U. Norinder</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This chapter gives an overview of modeling in solubility from 1998 to the present, including fragmental and group contribution methods as well as more theoretical techniques.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Lgxehlgjwe.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "8"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div9">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ρ–T–P prediction for ionic liquids using neural networks</strong></h4>
                                    <h7 style="color:blue;"> Journal of The Taiwan Institute of Chemical Engineers</h7>
                                    <p class="text-muted"> <em>J. A. Lazzús</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Mpsfvivwpj.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "9"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div10">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Radial Basis Function Neural Network Based QSPR for the Prediction of Critical Pressures of Substituted Benzenes</strong></h4>
                                    <h7 style="color:blue;"> Computers & chemistry</h7>
                                    <p class="text-muted"> <em>X. Yao and Xiaoyun Zhang and Ruisheng Zhang and Mancang Liu and Zhide Hu and B. Fan</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The Quantitative Structure-Property Relationship method is used to develop the correlation between structures of a great number of substituted benzenes and their critical pressure and the prediction result agrees well with the experimental value of these properties.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/83dd2bbdd64a07dea20107971ae2f546f675c778">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "10"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div11">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Radial Basis Function Neural Networks Based QSPR for the Prediction of log P</strong></h4>
                                    <h7 style="color:blue;"> Chinese Journal of Chemistry</h7>
                                    <p class="text-muted"> <em>X. Yao and Mancang Liu and Xiaoyun Zhang and Ruisheng Zhang and Zhide Hu and B. Fan</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Quantitative structure-property relationship (QSPR) method is used to study the correlation models between the structures of a set of diverse organic compounds and their log P. Molecular descriptors calculated from structure alone are used to describe the molecular structures. A subset of the calculated descriptors, selected using forward stepwise regression, is used in the QSPR models development. Multiple linear regression (MLR) and radial basis function neural networks (RBFNNs) are utilized to construct the linear and non-linear correlation model, respectively. The optimal QSPR model developed is based on a 7-17-1 RBFNNs architecture using seven calculated molecular descriptors. The root mean square errors in predictions for the training, predicting and overall data sets are 0.284, 0.327 and 0.291 log P units, respectively.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Oqzqjwuafj.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "11"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div12">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Contribution of solid-state properties to the aqueous solubility of drugs.</strong></h4>
                                    <h7 style="color:blue;"> European journal of pharmaceutical sciences : official journal of the European Federation for Pharmaceutical Sciences</h7>
                                    <p class="text-muted"> <em>C. Wassvik and A. Holmén and Christel A. S. Bergström and I. Zamora and P. Artursson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The results show that solid-state properties should be considered for improved performance of future models for prediction of drug solubility, and the use of the experimental DeltaS(m) values instead of the constant 56.5 J mol (-1)K(-1) improved the accuracy of the prediction.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ygoygdhwfg.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "12"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div13">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of Aqueous Solubility of Organic Compounds by Topological Descriptors</strong></h4>
                                    <h7 style="color:blue;"> Qsar & Combinatorial Science</h7>
                                    <p class="text-muted"> <em>A. Yan and J. Gasteiger</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Two quantitative models for the prediction of aqueous solubility of 1293 organic compounds were generated by a Multilinear Regression (MLR) analysis, and a Backpropagation (BPG) neural network. The molecules were represented by 18 topological descriptors. The physicochemical relationship between solubility and the descriptors for different individual classes of monofunctional group compounds such as hydrocarbons, ethers, halocarbons, alcohols, aldehydes and ketones, acids, esters, and amines was investigated. The 1293 compounds were divided into a training set of 741 compounds and a test set of 552 compounds based on a Kohonen's self-organizing neural network map. The models obtained show a good predictive power: for the test set, a correlation coefficient of 0.97 and a standard deviation of 0.52 were achieved by the backpropagation neural network approch.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ufjvyfassv.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "13"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div14">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>The present utility and future potential for medicinal chemistry of QSAR/QSPR with whole molecule descriptors.</strong></h4>
                                    <h7 style="color:blue;"> Current topics in medicinal chemistry</h7>
                                    <p class="text-muted"> <em>A. Katritzky and D. Fara and R. Petrukhin and Douglas B. Tatham and U. Maran and A. Lomaka and M. Karelson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Whole-molecule descriptors are obtained computationally from molecular structures using a variety of programs. Their applications are reviewed in the areas of solubility, bioavailability, bio- and nonbio-degradability and toxicity.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Jcmqoqktzx.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "14"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div15">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of drug solubility from Monte Carlo simulations.</strong></h4>
                                    <h7 style="color:blue;"> Bioorganic & medicinal chemistry letters</h7>
                                    <p class="text-muted"> <em>W. L. Jorgensen and E. Duffy</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: Physically significant descriptors such as the solvent-accessible surface area, numbers of hydrogen bonds, and indices for cohesive interactions in solids are correlated with pharmacologically important properties including octanol/water partition coefficient (log P) and aqueous solubility (log S).
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b5ae23a9c7cc47e383c66ab90f4fb584aa36f586">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "15"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div16">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of Aqueous Solubility of Organic Compounds Based on a 3D Structure Representation</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and computer sciences</h7>
                                    <p class="text-muted"> <em>A. Yan and J. Gasteiger</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Two quantitative models for the prediction of aqueous solubility of 1293 organic compounds were developed by a Multilinear Regression (MLR) analysis and a Back-Propagation (BPG) neural network. The molecules were described by a set of 32 values of a Radial Distribution Function (RDF) code representing the 3D structure and eight additional descriptors. The 1293 compounds were divided into a training set of 797 compounds and a test set of 496 compounds based on a Kohonen self-organizing neural network map. The obtained models show a good predictive power: for the test set, a correlation coefficient of 0.96 and a standard deviation of 0.59 were achieved by the back-propagation neural network approach.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Deblazneko.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "16"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div17">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of aqueous solubility for a diverse set of organic compounds based on atom-type electrotopological state indices.</strong></h4>
                                    <h7 style="color:blue;"> European journal of medicinal chemistry</h7>
                                    <p class="text-muted"> <em>J. Huuskonen and J. Rantanen and D. Livingstone</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: Robust methods for estimating the aqueous solubility of a set of 734 organic compounds from different structural classes based on multiple linear regression (MLR) and artificial neural networks (ANN) model are described.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/52b2facfeef60705ea2b918d5e53d94da799502d">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "17"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div18">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>In silico prediction of aqueous solubility, human plasma protein binding and volume of distribution of compounds from calculated pKa and AlogP98 values</strong></h4>
                                    <h7 style="color:blue;"> Molecular Diversity</h7>
                                    <p class="text-muted"> <em>M. Lobell and Vinothini Sivarajah</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The same property descriptors which have been found most relevant for the prediction of aqueous solubility have also proved useful for the Prediction of human plasma protein binding and human volume of distribution at steady state.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ivvujskbjz.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "18"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div19">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Study on the quantitative relationship between the structures and electrophoretic mobilities of flavonoids in micellar electrokinetic capillary chromatography.</strong></h4>
                                    <h7 style="color:blue;"> Journal of chromatography. A</h7>
                                    <p class="text-muted"> <em>Shufang Wang and C. Xue and Xingguo Chen and Mancang Liu and Zhide Hu</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The optimal QSMR model developed was based on a 3-10-1 RBFNNs architecture and the prediction results were in good agreement with the experimental values.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Wbmowcdfmf.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "19"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div20">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Radial basis function neural network-based QSPR for the prediction of critical temperature</strong></h4>
                                    <h7 style="color:blue;"> Chemometrics and Intelligent Laboratory Systems</h7>
                                    <p class="text-muted"> <em>X. Yao and Yawei Wang and Xiaoyun Zhang and Ruisheng Zhang and Mancang Liu and Zhide Hu and B. Fan</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a3c29a1d086aa51ab5459ed6484791e93788a6cb">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "20"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div21">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of n-Octanol/Water Partition Coefficients from PHYSPROP Database Using Artificial Neural Networks and E-State Indices</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and computer sciences</h7>
                                    <p class="text-muted"> <em>I. Tetko and V. Tanchuk and A. Villa</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A new method, ALOGPS v 2.0 (http://www.lnh.unil.ch/~itetko/logp/), for the assessment of n-octanol/water partition coefficient, log P, was developed on the basis of neural network ensemble analysis of 12 908 organic compounds available from PHYSPROP database of Syracuse Research Corporation. The atom and bond-type E-state indices as well as the number of hydrogen and non-hydrogen atoms were used to represent the molecular structures. A preliminary selection of indices was performed by multiple linear regression analysis, and 75 input parameters were chosen. Some of the parameters combined several atom-type or bond-type indices with similar physicochemical properties. The neural network ensemble training was performed by efficient partition algorithm developed by the authors. The ensemble contained 50 neural networks, and each neural network had 10 neurons in one hidden layer. The prediction ability of the developed approach was estimated using both leave-one-out (LOO) technique and training/test protocol. In case of interseries predictions, i.e., when molecules in the test and in the training subsets were selected by chance from the same set of compounds, both approaches provided similar results. ALOGPS performance was significantly better than the results obtained by other tested methods. For a subset of 12 777 molecules the LOO results, namely correlation coefficient r(2)= 0.95, root mean squared error, RMSE = 0.39, and an absolute mean error, MAE = 0.29, were calculated. For two cross-series predictions, i.e., when molecules in the training and in the test sets belong to different series of compounds, all analyzed methods performed less efficiently. The decrease in the performance could be explained by a different diversity of molecules in the training and in the test sets. However, even for such difficult cases the ALOGPS method provided better prediction ability than the other tested methods. We have shown that the diversity of the training sets rather than the design of the methods is the main factor determining their prediction ability for new data. A comparative performance of the methods as well as a dependence on the number of non-hydrogen atoms in a molecule is also presented.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Qtzstoeehq.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "21"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div22">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of the aqueous solubility: comparison of the general solubility equation and the method using an amended solvation energy relationship.</strong></h4>
                                    <h7 style="color:blue;"> Journal of pharmaceutical sciences</h7>
                                    <p class="text-muted"> <em>Gang Yang and Y. Ran and S. Yalkowsky</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                An Amended Solvation Energy Relationship (ASER) was recently reported to successfully predict the aqueous solubilities of a set of 664 organic compounds. The average absolute error and root mean square error are 0.43 and 0.62 log units, respectively. When the General Solubility Equation (GSE) is applied to the same set of compounds, it gives an average absolute error of 0.45 log units and a root mean square error of 0.62 log units. These results are similar to those of the ASER method. The advantages and disadvantages of each method are discussed. It is shown that when the two methods agree with each other, they also agree with the experimentally determined values.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Fdcevhsodc.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "22"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div23">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Network Modeling of Refractive Indexes of Phosphorus-Containing Organic Compounds #</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>BioChem Press and J. Kozio</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Motivation. One of the most intensively explored areas of contemporary computational chemistry is searching for a comprehensive numerical description of chemical structures and for methods that enable to develop efficient and credible QSPR (quantitative structure–property relationships) models. Among these methods artificial neural networks (ANN) turned out to be a very promising methodology in obtaining models converting structural descriptors into different properties of chemicals. Method. Five different models relating structural descriptors to refractive indexes of phosphorus containing organic compounds have been developed using ANN. A newly elaborated set of molecular descriptors is evaluated to determine their usefulness for QSPR studies. Using a data set containing 180 phosphates and diphosphates, ANN trained with the back propagation and conjugated gradient algorithms are able to predict the refractive index with relatively high accuracy. Results. The results obtained show good predictive ability for the ANN models, giving the average prediction error of 0.24% and R 2 cv equal to about 0.99. Conclusions. The QSPR studies described in this paper provide strong evidence that the tested structural descriptors are useful and effective for the ANN modeling of the phosphates refractive index.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/13205b73b0e96193700dc54982413e4baabf716b">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "23"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div24">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of drug solubility from structure.</strong></h4>
                                    <h7 style="color:blue;"> Advanced drug delivery reviews</h7>
                                    <p class="text-muted"> <em>W. L. Jorgensen and E. Duffy</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: Viable methods now exist for predictions with less than 1 log unit uncertainty, which is adequate for prescreening synthetic candidates or design of combinatorial libraries, which would require an experimental database of highly accurate solubilities for a large, diverse collection of drug-like molecules.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/54cc6c15f7ef69de645667424236b9fa7748517c">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "24"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div25">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial Neural Network Modeling of the Environmental Fate and Ecotoxicity of Chemicals</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>J. Devillers</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: In this chapter, an attempt is made to review the main applications of ANNs in ecotoxicology, and to show the diversity of the situations in which these nonlinear tools have proved their interest for modeling the environmental fate and effects of chemicals.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Djebbyhncm.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "25"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div26">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prediction of partition coefficient based on atom-type electrotopological state indices.</strong></h4>
                                    <h7 style="color:blue;"> Journal of pharmaceutical sciences</h7>
                                    <p class="text-muted"> <em>J. Huuskonen and A. Villa and I. Tetko</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The aim of this study was to determine the efficacy of atom-type electrotopological state indices for estimation of the octanol-water partition coefficient (log P) values in a set of 345 drug compounds or related complex chemical structures. Multilinear regression analysis and artificial neural networks were used to construct models based on molecular weights and atom-type electrotopological state indices. Both multilinear regression and artificial neural networks provide reliable log P estimations. For the same set of parameters, application of neural networks provided better prediction ability for training and test sets. The present study indicates that atom-type electrotopological state indices offer valuable parameters for fast evaluation of octanol-water partition coefficients that can be applied to screen large databases of chemical compounds, such as combinatorial libraries.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Pvggltslzf.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "26"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div27">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Estimation of Aqueous Solubility for a Diverse Set of Organic Compounds Based on Molecular Topology.</strong></h4>
                                    <h7 style="color:blue;"> ChemInform</h7>
                                    <p class="text-muted"> <em>J. Huuskonen</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Kozkoqppgb.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "27"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div28">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Estimation of Aqueous Solubility of Chemical Compounds Using E-State Indices</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and computer sciences</h7>
                                    <p class="text-muted"> <em>I. Tetko and V. Tanchuk and T. Kasheva and A. Villa</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The molecular weight and electrotopological E-state indices were used to estimate by Artificial Neural Networks aqueous solubility for a diverse set of 1291 organic compounds. The neural network with 33-4-1 neurons provided highly predictive results with r(2) = 0.91 and RMS = 0.62. The used parameters included several combinations of E-state indices with similar properties. The calculated results were similar to those published for these data by Huuskonen (2000). However, in the current study only E-state indices were used without need of additional indices (the molecular connectivity, shape, flexibility and indicator indices) also considered in the previous study. In addition, the present neural network contained three times less hidden neurons. Smaller neural networks and use of one homogeneous set of parameters provides a more robust model for prediction of aqueous solubility of chemical compounds. Limitations of the developed method for prediction of large compounds are discussed. The developed approach is available online at http://www.lnh.unil.ch/~itetko/logp.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Uxguoodsly.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "28"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div29">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Network Modeling for Estimation of Partition Coefficient Based on Atom-Type Electrotopological State Indices</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and computer sciences</h7>
                                    <p class="text-muted"> <em>J. Huuskonen and D. Livingstone and I. Tetko</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A method for predicting log P values for a diverse set of 1870 organic molecules has been developed based on atom-type electrotopological-state (E-state) indices and neural network modeling. An extended set of E-state indices, which included specific indices with a more detailed description of amino, carbonyl, and hydroxy groups, was used in the current study. For the training set of 1754 molecules the squared correlation coefficient and root-mean-squared error were r2 = 0.90 and RMS(LOO) = 0.46, respectively. Structural parameters which included molecular weight and 38 atom-type E-state indices were used as the inputs in 39-5-1 artificial neural networks. The results from multilinear regression analysis were r2 = 0.87 and RMS(LOO) = 0.55, respectively. For a test set of 35 nucleosides, 12 nucleoside bases, 19 drug compounds, and 50 general organic compounds (n = 116) not included in the training set, a predictive r2 = 0.94 and RMS = 0.41 were calculated by artificial neural networks. The results for the same set by multilinear regression were r2 = 0.86 and RMS = 0.72. The improved prediction ability of artificial neural networks can be attributed to the nonlinear properties of this method that allowed the detection of high-order relationships between E-state indices and the n-octanol/water partition coefficient. The present approach was found to be an accurate and fast method that can be used for the reliable estimation of log P values for even the most complex structures.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f21da143b197ec4fcfd8003ffc3c41e0b4ec7590">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "29"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div30">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>QSAR modeling with the electrotopological state indices: predicting the toxicity of organic chemicals.</strong></h4>
                                    <h7 style="color:blue;"> Chemosphere</h7>
                                    <p class="text-muted"> <em>J. Huuskonen</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The results clearly show that accurate models can be rapidly calculated for the prediction of toxicity for a diverse set of organic chemicals using easily calculated parameters.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/93242e8011c9051d659620ef7c27f04a2cceca52">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "30"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div31">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Network Modeling of Melting Temperatures for Sulfur-Containing Organic Compounds #</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>BioChem Press and J. Kozio</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Motivation. Searching for a comprehensive numerical description of the chemical structure and for methods that enable to develop effective and credible QSPR (quantitative structure–property relationships) models represent significant challenges for the contemporary theoretical chemistry. Among these methods artificial neural networks (ANN) appears to be very promising in obtaining models that convert structural features into different properties of chemical compounds. Method. Two different models relating structural descriptors to melting temperatures of sulfur containing organic compounds are developed using ANN. A new set of molecular descriptors is evaluated to determine their suitability for QSPR studies. Using two data sets containing 150 sulfides and 226 sulfones, ANN trained with the back propagation and conjugated gradient algorithms are able to predict the melting temperatures with good accuracy. Results. The results obtained show a good predictive ability for the ANN models, giving R 2 cv equal to 0.880 and 0.794 for the sulfides and sulfones, respectively. Conclusions. The QSPR studies described in this paper provide strong evidence that the tested structural descriptors are useful and effective for the ANN modeling of the melting temperatures of sulfides and sulfones.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/2bb80c9823c8f449664f580d386e310521763c05">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "31"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div32">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Rule-Based Systems to Predict Lipophilicity</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>I. Tetko and D. Livingstone</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Bxnqcocuka.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "32"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div33">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Structurally diverse quantitative structure--property relationship correlations of technologically relevant physical properties</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and computer sciences</h7>
                                    <p class="text-muted"> <em>Katritzky and Maran and Lobanov and Karelson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/fbb68db837a92366054e27c941e2b08d90b5d19d">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "33"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div34">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Calculation of molecular lipophilicity: state of the art and comparison of methods on more than 96000 compounds</strong></h4>
                                    <h7 style="color:blue;"> Chemistry Central Journal</h7>
                                    <p class="text-muted"> <em>M. Mannhold and GI Poda and C. Ostermann and IV Tetko</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We first review the state-of-the-art in development of log P prediction approaches falling in two major categories: substructure-based and property-based methods. Then, we compare the predictive power of representative methods for one public (N = 266) and two in house datasets from Nycomed (N = 882) and Pfizer (N = 95809). A total of 30 and 18 methods were tested for public and industrial datasets, respectively. Accuracy of models declined with the number of nonhydrogen atoms. The Arithmetic Average Model (AAM), which predicts the same value (the arithmetic mean) for all compounds, was used as a baseline model for comparison. Methods with Root Mean Squared Error (RMSE) greater than RMSE produced by the AAM were considered as unacceptable. The majority of analyzed methods produced reasonable results for the public dataset but only seven methods were successful on the both in house datasets. We proposed a simple equation based on the number of carbon atoms, NC, and the number of hetero atoms, NHET: log P = 1.46(+/-0.02) + 0.11(+/-0.001) NC-0.11(+/-0.001) NHET. This equation outperformed a large number of programs benchmarked in this study. Factors influencing the accuracy of log P predictions were elucidated and discussed.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/632be3226e285e8940075eef2a4899db91be9c15">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "34"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div35">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Development of Quantitative Structure-Property Relationship Models for Early ADME Evaluation in Drug Discovery. 1. Aqueous Solubility</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and computer sciences</h7>
                                    <p class="text-muted"> <em>Ruifeng Liu and S. So</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A simple QSPR model, based on seven 1D and 2D descriptors and artificial neural network, was developed for fast evaluation of aqueous solubility. The model was able to predict the molar solubility of a diverse set of 1312 organic compounds with an overall correlation coefficient of 0.92 and a standard deviation of 0.72 log unit between the calculated and experimental data. Considering the fact that the estimated uncertainty of the experimental data is no less than 0.5 log unit, the results demonstrate that carefully chosen physically meaningful 1D and 2D descriptors encode sufficient molecular information for fast and reasonably reliable prediction of aqueous solubility with a simple neural network. As a comparison, we calculated the solubility of a test set of 258 compounds, ranging from simple hydrocarbons to more complex multifunctional organic molecules, with a commercial program (QMPR+ version 2.0.1 of SimulationPlus Inc.) and compared the results with predictions from our model. Statistical parameters indicate that for small and simple organic compounds, QMPR+ outperforms our model. However for more complex multifunctional molecules, our model is superior.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Radtalgyjy.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "35"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div36">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Network Based Temperature-Dependent Quantitative Structure Property Relations (QSPRs) for Predicting Vapor Pressure of Hydrocarbons</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and computer sciences</h7>
                                    <p class="text-muted"> <em>Denise Yaffe and Y. Cohen</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A neural network based quantitative structure-property relationship (QSPR) was developed for the vapor pressure-temperature behavior of hydrocarbons based on a data set for 274 compounds. The optimal QSPR model was developed based on a 7-29-1 back-propagation neural network architecture using valance molecular connectivity indices (1chi(v), 3chi(v), 4chi(v)), molecular weight, and temperature as input parameters. The average absolute errors in vapor pressure predictions for the test, validation, and overall data sets were 8.2% (0.036 log P units or 23.2 kPA), 9.2% (0.039 log P units or 26.8 kPA), and 10.7% (0.046 log P units or 31.1 kPA), respectively. The performance of the QSPR for temperature-dependent vapor pressure, which was developed from a simple set of molecular descriptors, displayed accuracy of better than or well within the range of other available estimation methods.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ortcrweqwi.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "36"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div37">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>AQUEOUS SOLUBILITY PREDICTION OF ORGANIC COMPOUNDS</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Gang Yang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Aqueous solubility is one of the most important physical properties to consider in drug discovery and development. Drug candidates with poor solubility often have poor bioavailability, which leads to increased developmental cost and efforts. Therefore, there is a strong trend to perform solubility screening of drug candidates as early as possible in the drug discovery and development process. While experimental methods are being developed to increase the throughput of solubility measurement, the development of aqueous solubility prediction methods can be a powerful complementary tool. This dissertation starts by compiling a large collection of aqueous solubility data for organic compounds covering diverse classes of structures. The data set is first used to critically evaluate the General Solubility Equation (Yalkowsky et al., 1980, 1999), one of the most widely used methods for aqueous solubility prediction. The General Solubility Equation performs very well overall as measured by the average absolute error (AAE) of 0.56 log unit. Detailed analyses indicate that it gives better predictions for nonelectrolytes than some classes of weak electrolytes. This method is then compared with a method based on an amended solvation energy relationship, which considers the hydrogen bonding potentials of functional groups. It is shown that averaging the prediction results from the two methods gives better prediction than either method alone. Following the concept of the AQUAFAC model developed by Myrdal et al. (1992, 1993, 1995), an extended version of the original structural fragmentation scheme is developed. The model is trained on the data set and has an value of 0.881 and a standard error of estimation of 0.819 log unit. Group contribution parameters for a set of 104 fragments are obtained. A new group contribution model is developed to suit the needs in the early drug discovery stage, when melting information is generally not available. Calculated octanolwater partition coefficient is included in the model. The model has a standard error of estimation of 0.814 log unit. When evaluated on independent test sets, the new model provides comparable prediction results with the other two models. The independence of the new model of experimental melting information makes it a suitable tool for aqueous solubility screening in early drug discovery.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/fedc5b9dcb9383145653b1c85b779908b47ae066">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "37"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div38">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Estimation of the aqueous solubility of organic compounds using molecular connectivity indices.</strong></h4>
                                    <h7 style="color:blue;"> Journal of pharmaceutical sciences</h7>
                                    <p class="text-muted"> <em>Chongli Zhong and Qinghua Hu</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A correlation for estimation of the aqueous solubility of organic compounds that is based on a training set of 120 chemicals is proposed. The new model proposed is predictive and requires only molecular connectivity indices in the calculations. The calculated results of the new model are comparable to those from the existing general solubility equation (GSE) and the Klopman-Zhu models. The new model was also applied to a testing set of 80 compounds, and the predictions show that the new model is reliable with good predictive accuracy. Because the new model does not require any experimental physicochemical properties in the calculation, it is simple and easy to apply. This work shows again that molecular connectivity indices are useful structural descriptors in quantitative structure-property (QSPR) studies in pharmaceutical research.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Nyhahxmwpx.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "38"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div39">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A QSPR treatment for the thermal stabilities of second-order NLO chromophore molecules</strong></h4>
                                    <h7 style="color:blue;"> Journal of Molecular Modeling</h7>
                                    <p class="text-muted"> <em>Jie Xu and Bin Guo and Biao Chen and Qi-jin Zhang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: A seven-parameter model was developed for the prediction of molar thermal decomposition function Yd (TdM, where M represents the molar weight) with R2 =0.9642 and SEE=14.01 by multilinear regression analysis.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Incaqrozhg.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "39"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div40">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>QSAR study of selective ligands for the thyroid hormone receptor beta.</strong></h4>
                                    <h7 style="color:blue;"> Bioorganic & medicinal chemistry</h7>
                                    <p class="text-muted"> <em>Huanxiang Liu and P. Gramatica</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The built QSAR model can be used to fast and accurately predict the binding affinity of compounds (in the defined applicability domain) to TRbeta1 and identify and provide some insight into what structural features are related to the biological activity of these compounds.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Gzypxbbvhe.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "40"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div41">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A Linear QSPR Model for Prediction of Maximum Absorption Wavelength of Second‐order NLO Chromophores</strong></h4>
                                    <h7 style="color:blue;"> Qsar & Combinatorial Science</h7>
                                    <p class="text-muted"> <em>Jie Xu and Zhi-qiang Zheng and Biao Chen and Qi-jin Zhang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The quantitative structure-property relationship was studied between descriptors representing the molecular structures and λ max for a diverse set of 72 second-order NLO chromophores. A linear ten-parameter model was developed for the prediction of λ max with R 2 =0.9512 and SEE = 22.95 by MLRA. The MRE for the calculation of λ max was 3.90%. The stability of the proposed model was validated using Leav-Five-Out cross-validation and randomization experiments. All descriptors involved in the model were derived solely from the chemical structures of the NLO chromophores. A satisfactory MRE of 5.23% for a test set of 12 chromophores makes the model very useful for the prediction of the unknown chromophores.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Kkdzitimuf.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "41"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div42">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Explaining reaction coordinates of alanine dipeptide isomerization obtained from deep neural networks using Explainable Artificial Intelligence (XAI).</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Takuma Kikutsuji and Yusuke Mori and K. Okazaki and Toshifumi Mori and Kang-Min Kim and N. Matubayasi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A method for obtaining appropriate reaction coordinates is required to identify transition states distinguishing the product and reactant in complex molecular systems. Recently, abundant research has been devoted to obtaining reaction coordinates using artificial neural networks from deep learning literature, where many collective variables are typically utilized in the input layer. However, it is difficult to explain the details of which collective variables contribute to the predicted reaction coordinates owing to the complexity of the nonlinear functions in deep neural networks. To overcome this limitation, we used Explainable Artificial Intelligence (XAI) methods of the Local Interpretable Model-agnostic Explanation (LIME) and the game theory-based framework known as Shapley Additive exPlanations (SHAP). We demonstrated that XAI enables us to obtain the degree of contribution of each collective variable to reaction coordinates that is determined by nonlinear regressions with deep learning for the committor of the alanine dipeptide isomerization in vacuum. In particular, both LIME and SHAP provide important features to the predicted reaction coordinates, which are characterized by appropriate dihedral angles consistent with those previously reported from the committor test analysis. The present study offers an AI-aided framework to explain the appropriate reaction coordinates, which acquires considerable significance when the number of degrees of freedom increases.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a077798a65ab902d84a43acf333da897b69ae4c9">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "42"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div43">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Nonlinear reaction coordinate analysis in the reweighted path ensemble.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>W. Lechner and J. Rogal and J. Juraszek and B. Ensing and P. Bolhuis</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We present a flexible nonlinear reaction coordinate analysis method for the transition path ensemble based on the likelihood maximization approach developed by Peters and Trout [J. Chem. Phys. 125, 054108 (2006)]. By parametrizing the reaction coordinate by a string of images in a collective variable space, we can optimize the likelihood that the string correctly models the committor data obtained from a path sampling simulation. The collective variable space with the maximum likelihood is considered to contain the best description of the reaction. The use of the reweighted path ensemble [J. Rogal et al., J. Chem. Phys. 133, 174109 (2010)] allows a complete reaction coordinate description from the initial to the final state. We illustrate the method on a z-shaped two-dimensional potential. While developed for use with path sampling, this analysis method can also be applied to regular molecular dynamics trajectories.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Wwnqxnyqje.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "43"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div44">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Identification of a multi-dimensional reaction coordinate for crystal nucleation in Ni3Al.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Yanyan Liang and Grisell Díaz Leines and R. Drautz and J. Rogal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Nucleation during solidification in multi-component alloys is a complex process that comprises competition between different crystalline phases as well as chemical composition and ordering. Here, we combine transition interface sampling with an extensive committor analysis to investigate the atomistic mechanisms during the initial stages of nucleation in Ni3Al. The formation and growth of crystalline clusters from the melt are strongly influenced by the interplay between three descriptors: the size, crystallinity, and chemical short-range order of the emerging nuclei. We demonstrate that it is essential to include all three features in a multi-dimensional reaction coordinate to correctly describe the nucleation mechanism, where, in particular, the chemical short-range order plays a crucial role in the stability of small clusters. The necessity of identifying multi-dimensional reaction coordinates is expected to be of key importance for the atomistic characterization of nucleation processes in complex, multi-component systems.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Osnpyluybm.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "44"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div45">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>The overdamped transmission coefficient: Recovering the true mean first passage time from an inaccurate reaction coordinate.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Ryan Yappert and Kartik Kamat and B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                For inertial reaction dynamics, a transition state theory rate constant obtained from an inaccurate reaction coordinate can be a posteriori corrected with reactive flux methods. In contrast, reaction coordinate errors in overdamped mean first passage time calculations cannot be a posteriori corrected. This work develops an overdamped version of the transmission coefficient. The calculation requires information from committor analyses and an estimate of the diffusivity along the committor coordinate. We illustrate the calculation for a simple two-dimensional potential that admits exact solutions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Nukbyrfhnb.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "45"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div46">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Comment on "Toward identification of the reaction coordinate directly from the transition state ensemble using the kernel PCA method".</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                I their recent paper, 1 Antoniou and Schwartz present interesting and potentially powerful ideas for characterizing the transition state ensemble (TSE) by using kernel PCA (kPCA). We agree that kPCA could help summarize the characteristics of transition states in complex reaction mechanisms. We also commend Schwartz and co-workers for combining transition path sampling (TPS) and QM/MM methods. Their combined TPS QM/MM approach has great potential to understand whether conformational dynamics play a role in the chemical steps of enzyme catalysis. However, we are concerned about some aspects of the recent kPCA method and its results. The authors’ interpretations may lead to confusion and misconceptions about reaction coordinates. Of greater concern for some investigators, the results (including those from kPCA and their earlier works) may lead to some confusion about the mechanisms of enzyme catalysis. We begin by clarifying some aspects of the proposed kPCA method. The authors propose kPCA because, in their words, “the reaction coordinate consists of degrees of freedom along which the separatrix is thin”. The proposed definition is reasonable but somewhat restrictive because it requires that reaction coordinates be constructed from components along which distances (i.e., thinness) can be meaningfully compared. (Note that competing methods 7 are more general and also more efficient for reasons that we have given elsewhere. ) The proposed kPCAmethod has two steps: (1) Identify the mode with the largest covariance contribution in the TSE. The authors actually use a generalized covariance (polynomial kernel) to more clearly separate the dominant contributing mode from lesser contributors to the covariance. (2) Choose those residues which are least involved in the dominant mode from kPCA as components of the reaction coordinate. The reasoning behind this second step is that kPCA (step one) actually identified the mode along which the TSE is broadest and not the direction along which the TSE is thinnest. Note that the authors’ strategy identifies those residues which are not involved in the mode of maximum TSE variance as likely components of the reaction coordinate. Their strategy is not equivalent to choosing those residues that are involved in the mode of minimum TSE covariance. To identify the thinnest mode from the kPCA covariance matrix, one should instead diagonalize the kPCAmatrix and pick the eigenmodewith the smallest eigenvalue. Residues with large involvement in the thinnest direction might more reliably indicate components of the reaction coordinate. Among the many bath modes—nearly three per atom— the proposed kPCA method identifies just one bath mode. The residues that the authors select in step two are not involved in the dominant bath mode, but these residues may (and likely will) be involved in other unidentified bath modes. The reaction coordinate should be orthogonal to all of the bath modes and cannot be extracted from any one bath mode. We expect the TSE to be scattered along many important bath modes. The use of a polynomial (d = 2) kernel to isolate one dominant bath mode in the kPCA method therefore lacks a theoretical justification. However, examining the TSE with standard linear PCA could reveal the mode that contributes the most to the activation entropy (cf. eq 3.18 in the review by Hanggi et al. and see Van Kampen, chapter I.6, to connect the covariance matrix from PCA with d = 1 to the Hessian matrix). Linear PCA for the TSE might therefore help summarize diversity in the TSE, estimate kinetic prefactors in enzymatic reactions, or identify conformational motions that might be suppressed to narrow the reaction channel and thereby reduce the reaction rate. Thus, while the authors claim that linear PCA failed, further work in that direction may be very useful. Additionally, we emphasize that the kPCA method cannot describe the reaction coordinate at finer resolution than residue motions if only residue positions are used to construct the kPCA covariance matrix. This limitation is potentially important when the reaction coordinate varies between different stages of the reaction. As we have recently shown, the rate-promoting vibrations (RPV) model of enzymatic proton transfer by Antoniou and Schwartz shows exactly this behavior for low promoting vibrational mode frequencies. A preorganization step brings the donor and acceptor residues together by motion along the promoting vibrational mode. Then, the chemical step occurs, followed by a reorganization step where donor and acceptor residues separate. If the transition state corresponds to the chemical step, then kPCA based on residue positions alone will not identify the relevant chemical bonds in the chemical step. However, the chemical step is essential in the reaction coordinate if this step is the dynamical bottleneck. Without the chemical step, the preorganized donor and acceptor would just relax back to their typical distances with no reaction. One might interpret from the authors’ results on the lactate dehydrogenase (LDH) example that the chemical step is not important and therefore that the chemical step is not the dynamical bottleneck. Indeed, the authors appear to obtain sharply peaked histograms without constraining any coordinate corresponding to the chemical step. However, in the paper from
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Pvqaiunfyw.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "46"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div47">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Common features of extraordinary rate theories.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We examine the capabilities and foundations of three landmark rate theories: harmonic transition state theory, classical nucleation theory, and the Marcus theory of electron transfer. Each of the three classic rate theories is widely used to predict rates and trends. They are also used "in reverse" to interpret experimental data with no computation at all. Their common foundations include a quasi-equilibrium assumption and dimensionality reduction to a physically meaningful, one-dimensional, and broadly applicable reaction coordinate. Many applications lie beyond the scope of the classic theories, so rare events research has pursued trajectory-based methods that efficiently predict accurate rate constants even when the reaction coordinate and mechanistic details are unknown. Trajectory based rare events methods achieved these ambitious goals, but (by construction) they provide rates rather than mechanistic understanding. We briefly discuss recent efforts to identify reaction coordinates, including methods which provide abstract statistically defined coordinates and those which identify physical collective variables. Finally, we note some natural synergies between existing simulation methods which might help discover simple and powerful quasi-equilibrium theories for the many applications that fall beyond the scope of the classic rate theories.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Yqoqrbtids.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "47"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div48">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Maximum Likelihood Analysis of Reaction Coordinates during Solidification in Ni.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Grisell Díaz Leines and J. Rogal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Understanding the underlying mechanism of crystal nucleation is a fundamental aspect in the prediction and control of materials properties. Classical nucleation theory (CNT) assumes that homogeneous nucleation occurs via random fluctuations within the supercooled liquid, that the structure of the growing clusters resembles the most stable bulk phase, and that the nucleus size is the sole reaction coordinate (RC) of the process. Many materials are, however, known to exhibit multiple steps during crystallization, forming different polymorphs. As a consequence, more complex RCs are often required to capture all relevant information about the process. Here, we employ transition path sampling together with a maximum likelihood analysis of candidate order parameters to identify suitable RCs for the nucleation mechanism during solidification in Ni. In contrast to CNT, the analysis of the reweighted path ensemble shows that a prestructured liquid region that surrounds the crystal cluster is a relevant order parameter that enhances the RC and therefore plays a key role in the description of the nucleus and the interfacial free energy. We demonstrate that prestructured liquid clusters that emerge within the liquid act as precursors of the crystallization in a nonclassical two-step mechanism, which predetermines the coordination of the selected polymorphs.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Hdxwkejhxx.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "48"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div49">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Learning reaction coordinates via cross-entropy minimization: Application to alanine dipeptide.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Y. Mori and K. Okazaki and Toshifumi Mori and Kang-Min Kim and N. Matubayasi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We propose a cross-entropy minimization method for finding the reaction coordinate from a large number of collective variables in complex molecular systems. This method is an extension of the likelihood maximization approach describing the committor function with a sigmoid. By design, the reaction coordinate as a function of various collective variables is optimized such that the distribution of the committor pB * values generated from molecular dynamics simulations can be described in a sigmoidal manner. We also introduce the L2-norm regularization used in the machine learning field to prevent overfitting when the number of considered collective variables is large. The current method is applied to study the isomerization of alanine dipeptide in vacuum, where 45 dihedral angles are used as candidate variables. The regularization parameter is determined by cross-validation using training and test datasets. It is demonstrated that the optimal reaction coordinate involves important dihedral angles, which are consistent with the previously reported results. Furthermore, the points with pB *∼0.5 clearly indicate a separatrix distinguishing reactant and product states on the potential of mean force using the extracted dihedral angles.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Tyfyphhtne.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "49"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div50">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimal reaction coordinates and kinetic rates from the projected dynamics of transition paths</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Line Mouaffac and Karen Palacio-Rodríguez and F. Pietrucci</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Finding optimal reaction coordinates and predicting accurate kinetic rates for activated processes are two of the foremost challenges of molecular simulations. We introduce an algorithm that tackles the two problems at once: starting from a limited number of reactive molecular dynamics trajectories (transition paths), we automatically generate with a Monte Carlo approach a sequence of different reaction coordinates that progressively reduce the kinetic rate of their projected effective dynamics. Based on a variational principle, the minimal rate accurately approximates the exact one, and it corresponds to the optimal reaction coordinate. After benchmarking the method on an analytic double-well system, we apply it to complex atomistic systems: the interaction of carbon nanoparticles of different sizes in water.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/8398fe0946df066193b382497450d704fd892f9b">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "50"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div51">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Transition Path Sampling as Markov Chain Monte Carlo of Trajectories: Recent Algorithms, Software, Applications, and Future Outlook</strong></h4>
                                    <h7 style="color:blue;"> Advanced Theory and Simulations</h7>
                                    <p class="text-muted"> <em>P. Bolhuis and David W. H. Swenson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The development of enhanced sampling methods to investigate rare but important events has always been a focal point in the molecular simulation field. Such methods often rely on prior knowledge of the reaction coordinate. However, the search for this reaction coordinate is at the heart of the rare event problem. Transition path sampling (TPS) circumvents this problem by generating an ensemble of dynamical trajectories undergoing the activated event. The reaction coordinate is extracted from the resulting path ensemble using variants of machine learning, making it an output of the method instead of an input. Over the last 20 years, since its inception, many extensions of TPS have been developed. Perhaps surprisingly, large‐scale TPS simulations on complex molecular systems have become possible only recently. Other important developments include the transition interface sampling (TIS) methodology to compute rate constants, the application to multiple states, and adaptive path sampling. The development of OpenPathSampling and PyRETIS has enabled easy and flexible use and implementation of these and other novel path sampling algorithms. In this progress report, a brief overview of recent developments, novel algorithms, and software is given. In addition, several application areas are discussed, and a future outlook for the next decade is given.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Thsuwrsilq.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "51"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div52">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction coordinates in complex systems-a perspective</strong></h4>
                                    <h7 style="color:blue;"> The European Physical Journal B</h7>
                                    <p class="text-muted"> <em>J. Rogal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This perspective highlights central aspects in the identification and evaluation of reaction coordinate and discusses recent ideas regarding automated computational frameworks to combine the optimization of reaction coordinates and enhanced sampling.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/84c2c52b4a9cbb48b5a04b55356615bb588ed216">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "52"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div53">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Kinetic energy flows in activated dynamics of biomolecules.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Huiyu Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Protein conformational changes are activated processes essential for protein functions. Activation in a protein differs from activation in a small molecule in that it involves directed and systematic energy flows through preferred channels encoded in the protein structure. Understanding the nature of these energy flow channels and how energy flows through them during activation is critical for understanding protein conformational changes. We recently [W. Li and A. Ma, J. Chem. Phys. 144, 114103 (2016)] developed a rigorous statistical mechanical framework for understanding potential energy flows. Here, we complete this theoretical framework with a rigorous theory for kinetic energy flows: potential and kinetic energies interconvert when impressed forces oppose inertial forces, whereas kinetic energy transfers directly from one coordinate to another when inertial forces oppose each other. This theory is applied to analyzing a prototypic system for biomolecular conformational dynamics: the isomerization of an alanine dipeptide. Among the two essential energy flow channels for this process, dihedral ϕ confronts the activation barrier, whereas dihedral θ1 receives energy from potential energy flows. Intriguingly, θ1 helps ϕ to cross the activation barrier by transferring to ϕ via direct kinetic energy flow all the energy it received-an increase in θ̇1 caused by potential energy flow converts into an increase in ϕ̇. As a compensation, θ1 receives kinetic energy from bond angle α via a direct mechanism and bond angle β via an indirect mechanism.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ltfsmaawyc.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "53"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div54">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>p(TP|q) peak maximization: Necessary but not sufficient for reaction coordinate accuracy</strong></h4>
                                    <h7 style="color:blue;"> Chemical Physics Letters</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Rufyjzupes.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "54"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div55">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction coordinates and mechanisms</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/65d9bda6c909bbc291d8c57479e36818a8f8f7c5">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "55"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div56">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reducing the cost of evaluating the committor by a fitting procedure.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Correct identification of reaction coordinates in complex systems is essential for understanding the mechanisms of their reaction dynamics. Existing methods for identifying reaction coordinates typically require knowledge of the committor--the probability of a given configuration to reach the product basin. The high computational cost of evaluating committors has limited applications of methods for identifying reaction coordinates. We proposed a fitting procedure that can reduce the cost of evaluating committors by an order of magnitude or more. The method only requires evaluating the committors of a few configurations in a transition path by the standard and costly shooting procedure. The committors of the other configurations are then estimated with great accuracy by a sigmoid function derived from fitting the few numerically evaluated committors. The method has been systematically tested on a model system of a Brownian particle moving in a one-dimensional double-well potential, and a small biomolecular system--the isomerization of alanine dipeptide in vacuum and in explicit water.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Iyjysoikab.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "56"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div57">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Approximating free energy and committor landscapes in standard transition path sampling using virtual interface exchange.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Z. F. Brotzakis and P. Bolhuis</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Transition path sampling is a powerful technique for investigating rare transitions, especially when the mechanism is unknown and one does not have access to the reaction coordinate. Straightforward application of transition path sampling does not directly provide the free energy landscape nor the kinetics. This drawback has motivated the development of path sampling extensions able to simultaneously access both kinetics and thermodynamics, such as transition interface sampling, and the reweighted path ensemble. However, performing transition interface sampling is more involved than standard two-state transition path sampling and still requires (some) insight into the reaction to define interfaces. While packages that can efficiently compute path ensembles for transition interface sampling are now available, it would be useful to directly compute the free energy from a single standard transition path sampling simulation. To achieve this, we present here an approximate method, denoted virtual interface exchange transition path sampling, that makes use of the rejected pathways in a form of waste recycling. The method yields an approximate reweighted path ensemble that allows an immediate view of the free energy landscape from a standard single transition path sampling simulation, as well as enables a committor analysis.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Akbauwerrg.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "57"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div58">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Extensions to the likelihood maximization approach for finding reaction coordinates.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>B. Peters and G. Beckham and B. Trout</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                This paper extends our previous work on obtaining reaction coordinates from aimless shooting and likelihood maximization. We introduce a simplified version of aimless shooting and a half-trajectory likelihood score based on the committor probability. Additionally, we analyze and compare the absolute log-likelihood score for perfect and approximate reaction coordinates. We also compare the aimless shooting and likelihood maximization approach to the earlier genetic neural network (GNN) approach of Ma and Dinner [J. Phys. Chem. B 109, 6769 (2005)]. For a fixed number of total trajectories in the GNN approach, the accuracy of the transition state ensemble decreases as the number of trajectories per committor probability estimate increases. This quantitatively demonstrates the benefit of individual committor probability realizations over committor probability estimates. Furthermore, when the least squares score of the GNN approach is applied to individual committor probability realizations, the likelihood score still provides a better approximation to the true transition state surface. Finally, the polymorph transition in terephthalic acid demonstrates that the new half-trajectory likelihood scheme estimates the transition state location more accurately than likelihood schemes based on the probability of being on a transition path.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/4d6c02e7e76ecee6c47591df7f70fbbd36784c2e">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "58"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div59">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A benchmark for reaction coordinates in the transition path ensemble.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The molecular mechanism of a reaction is embedded in its transition path ensemble, the complete collection of reactive trajectories. Utilizing the information in the transition path ensemble alone, we developed a novel metric, which we termed the emergent potential energy, for distinguishing reaction coordinates from the bath modes. The emergent potential energy can be understood as the average energy cost for making a displacement of a coordinate in the transition path ensemble. Where displacing a bath mode invokes essentially no cost, it costs significantly to move the reaction coordinate. Based on some general assumptions of the behaviors of reaction and bath coordinates in the transition path ensemble, we proved theoretically with statistical mechanics that the emergent potential energy could serve as a benchmark of reaction coordinates and demonstrated its effectiveness by applying it to a prototypical system of biomolecular dynamics. Using the emergent potential energy as guidance, we developed a committor-free and intuition-independent method for identifying reaction coordinates in complex systems. We expect this method to be applicable to a wide range of reaction processes in complex biomolecular systems.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a60db477f11309d143a52479051cd0d414cc4d0a">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "59"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div60">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimizing Nucleus Size Metrics for Liquid-Solid Nucleation from Transition Paths of Near-Nanosecond Duration.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry letters</h7>
                                    <p class="text-muted"> <em>G. Beckham and B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We determine the mechanism for the liquid-solid phase transition in the Lennard-Jones fluid close to coexistence with aimless shooting and likelihood maximization. The reaction coordinate for this process is a product of a structural descriptor and the size of the nascent solid nucleus and is quantitatively verified with the committor probability histogram test. This study identifies the first accurate scalar reaction coordinate for the liquid-solid nucleation process in Lennard-Jonesium, which will likely extend to nucleation processes in other spherically symmetric fluids. On the basis of our results, we propose a structural correction factor for the commonly cited nucleus size reaction coordinate from classical nucleation theory that enables connection of simulation data to stochastic models of nucleation kinetics. In addition, we show that aimless shooting is able to obtain reasonable acceptance rates for transitions with highly diffusive characteristics, which has been problematic for transition path sampling methods for diffusive processes such as nucleation and macromolecular transitions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f1c7aaac7bb320c64216f4aa86874449f97294b4">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "60"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div61">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A maximum caliber approach for continuum path ensembles</strong></h4>
                                    <h7 style="color:blue;"> The European Physical Journal B</h7>
                                    <p class="text-muted"> <em>P. Bolhuis and Z. F. Brotzakis and M. Vendruscolo</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This review describes how this approach recently used a framework, called here the continuum path ensemble maximum caliber (CoPE-MaxCal) method, to impose kinetic constraints in molecular simulations, for instance to include experimental information about transition rates.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/846e7b6c4209df22fd83542db3ad76a22b8913e2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "61"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div62">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimal reaction coordinates</strong></h4>
                                    <h7 style="color:blue;"> Wiley Interdisciplinary Reviews: Computational Molecular Science</h7>
                                    <p class="text-muted"> <em>P. Banushkina and S. Krivov</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The dynamic behavior of complex systems with many degrees of freedom is often analyzed by projection onto one or a few reaction coordinates. The dynamics is then described in a simple and intuitive way as diffusion on the associated free‐energy profile. In order to use such a picture for a quantitative description of the dynamics one needs to select the coordinate in an optimal way so as to minimize non‐Markovian effects due to the projection. For equilibrium dynamics between two boundary states (e.g., a reaction), the optimal coordinate is known as the committor or the pfold coordinate in protein folding studies. While the dynamics projected on the committor is not Markovian, many important quantities of the original multidimensional dynamics on an arbitrarily complex landscape can be computed exactly. In this study, we summarize the derivation of this result, discuss different approaches to determine and validate the committor coordinate, and present three illustrative applications: protein folding, the game of chess, and patient recovery dynamics after kidney transplant. WIREs Comput Mol Sci 2016, 6:748–763. doi: 10.1002/wcms.1276
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ygfklgtggo.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "62"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div63">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Transmission Coefficients, Committors, and Solvent Coordinates in Ion-Pair Dissociation.</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical theory and computation</h7>
                                    <p class="text-muted"> <em>R. Mullen and J. Shea and B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                From a hypothetical perfect dividing surface, all trajectories commit to opposite basins in forward and backward time without recrossing, transition state theory is exact, the transmission coefficient is one, and the committor distribution is perfectly focused at 1/2. However, chemical reactions in solution and other real systems often have dynamical trajectories that recross the dividing surface. To separate true dynamical effects from effects of a nonoptimal dividing surface, the dividing surface and/or reaction coordinate should be optimized before computing transmission coefficients. For NaCl dissociation in TIP3P water, we show that recrossing persists even when the 1/2-committor surface itself is used as the dividing surface, providing evidence that recrossing cannot be fully eliminated from the dynamics for any configurational coordinate. Consistent with this finding, inertial likelihood maximization finds a combination of ion-pair distance and two solvent coordinates that improves the committor distribution and increases the transmission coefficient relative to those for ion-pair distance alone, but recrossing is not entirely eliminated. Free energy surfaces for the coordinates identified by inertial likelihood maximization show that the intrinsic recrossing stems from anharmonicity and shallow intermediates that remain after dimensionality reduction to the dynamically important variables.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Gzuohlkvdx.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "63"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div64">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Equipartition terms in transition path ensemble: Insights from molecular dynamics simulations of alanine dipeptide.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Transition path ensemble consists of reactive trajectories and possesses all the information necessary for the understanding of the mechanism and dynamics of important condensed phase processes. However, quantitative description of the properties of the transition path ensemble is far from being established. Here, with numerical calculations on a model system, the equipartition terms defined in thermal equilibrium were for the first time estimated in the transition path ensemble. It was not surprising to observe that the energy was not equally distributed among all the coordinates. However, the energies distributed on a pair of conjugated coordinates remained equal. Higher energies were observed to be distributed on several coordinates, which are highly coupled to the reaction coordinate, while the rest were almost equally distributed. In addition, the ensemble-averaged energy on each coordinate as a function of time was also quantified. These quantitative analyses on energy distributions provided new insights into the transition path ensemble.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Gmqqilfjkc.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "64"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div65">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Inertial likelihood maximization for reaction coordinates with high transmission coefficients</strong></h4>
                                    <h7 style="color:blue;"> Chemical Physics Letters</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Mbpzbsjydk.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "65"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div66">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Hopping of water in a glassy polymer studied via transition path sampling and likelihood maximization.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>L. Xi and Manas Shah and B. Trout</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Diffusion of small molecules in amorphous polymers is known to follow a form of so-called hopping motion: penetrant molecules are trapped in microscopic cavities for extended time periods; diffusion is made possible by rare but fast jumps between neighboring cavities. Existing understanding of the hopping mechanism is based on the inspection of molecular images during individual molecular-dynamics trajectories. We focus on the diffusion of water molecules in a hydrophilic polymer below its glass transition temperature. The transition path ensemble of one hopping event is sampled with aimless shooting, a type of transition path sampling technique. In these trajectories, configurations of both the penetrant and the polymer change during the transition. Statistical analysis of the ensemble using likelihood maximization leads to a reaction coordinate of the transition, whose key components include the penetrant configuration and distances between penetrant-host atom pairs that have strong electrostatic interactions. Polymer motions do not contribute directly to the reaction coordinate. This result points toward a transition mechanism dominated by the penetrant movement. Molecular insights from this study can benefit the development of computational tools that better predict material transport properties, facilitating the design of new materials, including polymers with engineered drying properties.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Htyjqlwyde.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "66"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div67">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction coordinates, one-dimensional Smoluchowski equations, and a test for dynamical self-consistency.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>B. Peters and P. Bolhuis and R. Mullen and J. Shea</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We propose a method for identifying accurate reaction coordinates among a set of trial coordinates. The method applies to special cases where motion along the reaction coordinate follows a one-dimensional Smoluchowski equation. In these cases the reaction coordinate can predict its own short-time dynamical evolution, i.e., the dynamics projected from multiple dimensions onto the reaction coordinate depend only on the reaction coordinate itself. To test whether this property holds, we project an ensemble of short trajectory swarms onto trial coordinates and compare projections of individual swarms to projections of the ensemble of swarms. The comparison, quantified by the Kullback-Leibler divergence, is numerically performed for each isosurface of each trial coordinate. The ensemble of short dynamical trajectories is generated only once by sampling along an initial order parameter. The initial order parameter should separate the reactants and products with a free energy barrier, and distributions on isosurfaces of the initial parameter should be unimodal. The method is illustrated for three model free energy landscapes with anisotropic diffusion. Where exact coordinates can be obtained from Kramers-Langer-Berezhkovskii-Szabo theory, results from the new method agree with the exact results. We also examine characteristics of systems where the proposed method fails. We show how dynamical self-consistency is related (through the Chapman-Kolmogorov equation) to the earlier isocommittor criterion, which is based on longer paths.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Sfmmzjkdyo.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "67"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div68">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction mechanism and reaction coordinates from the viewpoint of energy flow.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Reaction coordinates are of central importance for correct understanding of reaction dynamics in complex systems, but their counter-intuitive nature made it a daunting challenge to identify them. Starting from an energetic view of a reaction process as stochastic energy flows biased towards preferred channels, which we deemed the reaction coordinates, we developed a rigorous scheme for decomposing energy changes of a system, both potential and kinetic, into pairwise components. The pairwise energy flows between different coordinates provide a concrete statistical mechanical language for depicting reaction mechanisms. Application of this scheme to the C7eq → C7ax transition of the alanine dipeptide in vacuum revealed novel and intriguing mechanisms that eluded previous investigations of this well studied prototype system for biomolecular conformational dynamics. Using a cost function developed from the energy decomposition components by proper averaging over the transition path ensemble, we were able to identify signatures of the reaction coordinates of this system without requiring any input from human intuition.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Jlgzmvrznk.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "68"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div69">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Potential Energy Weighted Reactive Flux and Total Rate of Change of Potential Energy: Theory and Illustrative Applications</strong></h4>
                                    <h7 style="color:blue;"> bioRxiv</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Reactive flux can be largely non-zero in a nonequilibrium ensemble of trajectories and provide insightful information for reactive transitions from the reactant state to the product state. Based on the reactive flux, a theoretical framework is proposed here for two quantities, the potential energy weighted reactive flux and the total rate of change of potential energy, which are useful for the identification of mechanism from a nonequilibrium ensemble. From such quantities, two multidimensional free energy analogues can be derived in the subspace of collective variables and they are equivalent in the regions where the reactive flux is divergence-free. These free energy analogues are assumed to be closely related to the free energy in the subspace of collective variables and they are reduced in the one-dimensional case to be the ensemble average of the potential energy weighted with reactive flux intensity, which was proposed recently and could be decomposed into energy components at the per-coordinate level. In the subspace of collective variables, the decomposition of the multidimensional free energy analogues at the per-coordinate level is theoretically possible and is numerically difficult to be calculated. Interestingly, the total rate of change of potential energy is able to identify the location of the transition state ensemble or the stochastic separatrix, in addition to the locations of the reactant and product states. The total rate of change of potential energy can be decomposed at the per-coordinate level and its components can quantify the contribution of a coordinate to the reactive transition in the subspace of collective variables. We then illustrated the main insights and objects that can be provided by the approach in the application to the alanine peptide in vacuum in various nonequilibrium ensembles of short trajectories and the results from these ensembles were found to be consistent.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/44737437f3f3b32d7ebfb3743103f0e4f353c970">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "69"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div70">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Determination of the Reaction Coordinate for a Key Conformational Fluctuation in Human Carbonic Anhydrase II.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Sanjib Paul and S. Taraphder</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                During the reversible hydration of carbon dioxide into bicarbonate by the enzyme human carbonic anhydrase II, the rate-determining step of proton transfer across the active site has been suggested to involve side chain rotation of the residue His-64 shuttling an excess proton in and out of the active site. In the present article, we have determined the reaction coordinate for this catalytically important conformational transition starting from a set of 32 order parameters (or candidate collective variables). Following the original work by Peters and Trout (J. Chem. Phys. 2006, 125, 054108), unbiased dynamical transition paths connecting the two major side chain conformations are harvested using an aimless shooting algorithm, and the reaction coordinate is determined using the method of forward-trajectory likelihood maximization. Several different models are tested involving a single order parameter or linear combinations of several of them chosen from the preselected set. An optimum reaction coordinate, identified using a Bayesian information criterion, is found to be a linear combination of 4 order parameters. This reaction coordinate is subsequently utilized to explore the associated free energy profile and diffusive barrier crossing dynamics. To the best of our knowledge, previous instances of this calculation include only alanine dipeptide and photoactive yellow protein (125 residues) in explicit water solvent. The present work is the first report of a quantitative determination of the reaction coordinate for conformational transition in a protein having as many as 259 residues in the presence of explicit water and sampled near the free energy barrier for about 1 μs.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Crlebsapxr.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "70"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div71">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Committor-Consistent Variational String Method.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry letters</h7>
                                    <p class="text-muted"> <em>Ziwei He and C. Chipot and Benoı T Roux</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The treatment of slow and rare transitions in the simulation of complex systems poses a great computational challenge. A powerful approach to tackle this challenge is the string method, which represents the transition path as a one-dimensional curve in a multidimensional space of collective variables. Commonly used strategies for pathway optimization include aligning the tangent of the string to the local mean force or to the mean drift determined from swarms of short trajectories. Here, a novel strategy is proposed, allowing the string to be optimized based on a variational principle involving the unidirectional reactive flux expressed in terms of the time-correlation function of the committor. The method is illustrated with model systems and then probed with the alanine dipeptide and a coarse-grained model of the barstar-barnase protein complex. Successive iterations variationally refine the string toward an optimal transition pathway following the gradient of the committor between two metastable states.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Xfjvyxznlu.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "71"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div72">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Atomistic insight into the kinetic pathways for Watson–Crick to Hoogsteen transitions in DNA</strong></h4>
                                    <h7 style="color:blue;"> Nucleic Acids Research</h7>
                                    <p class="text-muted"> <em>J. Vreede and A. Pérez de Alba Ortíz and P. Bolhuis and David W. H. Swenson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Abstract DNA predominantly contains Watson–Crick (WC) base pairs, but a non-negligible fraction of base pairs are in the Hoogsteen (HG) hydrogen bonding motif at any time. In HG, the purine is rotated ∼180° relative to the WC motif. The transitions between WC and HG may play a role in recognition and replication, but are difficult to investigate experimentally because they occur quickly, but only rarely. To gain insight into the mechanisms for this process, we performed transition path sampling simulations on a model nucleotide sequence in which an AT pair changes from WC to HG. This transition can occur in two ways, both starting with loss of hydrogen bonds in the base pair, followed by rotation around the glycosidic bond. In one route the adenine base converts from WC to HG geometry while remaining entirely within the double helix. The other route involves the adenine leaving the confines of the double helix and interacting with water. Our results indicate that this outside route is more probable. We used transition interface sampling to compute rate constants and relative free energies for the transitions between WC and HG. Our results agree with experiments, and provide highly detailed insights into the mechanisms of this important process.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Maltmxanez.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "72"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div73">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>On the Relation Between Projections of the Reweighted Path Ensemble</strong></h4>
                                    <h7 style="color:blue;"> Journal of Statistical Physics</h7>
                                    <p class="text-muted"> <em>P. Bolhuis and W. Lechner</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This work derives several distribution functions for the recently introduced reweighted path ensemble, the configurational and path densities, the reactive current, and the generalized committors for the different path types, and derives the path sampling shooting point distributions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Obkcmujxlr.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "73"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div74">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Nonlinear Reaction Coordinate of an Enzyme Catalyzed Proton Transfer Reaction.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>T. Paul and S. Taraphder</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We present an in-depth study on the theoretical calculation of an optimum reaction coordinate as a linear or nonlinear combination of important collective variables (CVs) sampled from an ensemble of reactive transition paths for an intramolecular proton transfer reaction catalyzed by the enzyme human carbonic anhydrase (HCA) II. The linear models are optimized by likelihood maximization for a given number of CVs. The nonlinear models are based on an artificial neural network with the same number of CVs and optimized by minimizing the root-mean-square error in comparison to a training set of committor estimators generated for the given transition. The nonlinear reaction coordinate thus obtained yields the free energy of activation and rate constant as 9.46 kcal mol-1 and 1.25 × 106 s-1, respectively. These estimates are found to be in quantitative agreement with the known experimental results. We have also used an extended autoencoder model to show that a similar analysis can be carried out using a single CV only. The resultant free energies and kinetics of the reaction slightly overestimate the experimental data. The implications of these results are discussed using a detailed microkinetic scheme of the proton transfer reaction catalyzed by HCA II.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/c04a717195612e5f598cb819013bcccf5719d6d6">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "74"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div75">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Energy Decomposition along the Reaction Coordinate: Theory and Applications to Nonequilibrium Ensembles of Trajectories.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. A</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A theoretical framework is proposed for an energy decomposition scheme along the reaction coordinate, in which the ensemble average of the potential energy weighted with reactive flux intensity is decomposed into energy components at the per-coordinate level. The decomposed energy quantity is demonstrated to be closely related to the free energy along the reaction coordinate, and its connection to the emergent potential energy is provided. In the application to alanine dipeptide under vacuum, illustrative calculations were performed in three nonequilibrium ensembles of trajectories: (1) transition path ensemble sampled with transition path sampling; (2) ensemble of short trajectories initiated from configurations around the transition-state region; and (3) ensemble of short trajectories shooting from configurations in several transition paths. The energy components on each coordinate were found to be consistent among the three ensembles of trajectories, indicating a broad applicability of the approach in biomolecular studies. In addition, the free energies along an optimized reaction coordinate obtained with these nonequilibrium ensembles were largely overlapped with a reference free energy calculated from a long equilibrium trajectory.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Bthxqmoumi.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "75"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div76">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Recent developments in methods for identifying reaction coordinates</strong></h4>
                                    <h7 style="color:blue;"> Molecular Simulation</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                In the study of rare events in complex systems with many degrees of freedom, a key element is to identify the reaction coordinates of a given process. Over recent years, a number of methods and protocols have been developed to extract the reaction coordinates based on limited information from molecular dynamics simulations. In this review, we provide a brief survey over a number of major methods developed in the past decade, some of which are discussed in greater detail, to provide an overview of the problems that are partially solved and challenges that still remain. A particular emphasis has been placed on methods for identifying reaction coordinates that are related to the committor.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/77aba42e70cdf136d7a75c14e69ee0c6db84e4aa">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "76"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div77">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Computer simulations of homogeneous nucleation of benzene from the melt.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Manas Shah and E. Santiso and B. Trout</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Nucleation is the key step in crystallization by which the molecules (or atoms or ions) aggregate together, find the right relative orientations, and start to grow to form the final crystal structure. Since nucleation is an activated step involving a large gap in time scales between molecular motions and the nucleation event itself, nucleation must be studied using rare events methods. We employ a technique developed previously in our group known as aimless shooting [Peters, B.; Trout, B. L. J. Chem. Phys., 2006, 125, 054108], which is based on transition path sampling, to generate reactive trajectories between the disordered and ordered phases of benzene. Using the likelihood maximization algorithm, we analyze the aimless shooting trajectories to identify the key order parameters or collective variables to describe the reaction coordinate for the nucleation of benzene from the melt. We find that the local bond orientation and local relative orientation order parameters are the most important collective variables in describing the reaction coordinate for homogeneous nucleation from the melt, as compared to cluster size and space-averaged order parameters. This study also demonstrates the utility of recently developed order parameters for molecular crystals [Santiso, E. E.; Trout, B. L. J. Chem. Phys., 2011, 134, 064109].
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Vimswljwim.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "77"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div78">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction Coordinates and Mechanistic Hypothesis Tests.</strong></h4>
                                    <h7 style="color:blue;"> Annual review of physical chemistry</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Reaction coordinates are integral to several classic rate theories that can (a) predict kinetic trends across conditions and homologous reactions, (b) extract activation parameters with a clear physical interpretation from experimental rates, and (c) enable efficient calculations of free energy barriers and rates. New trajectory-based rare events methods can provide rates directly from dynamical trajectories without a reaction coordinate. Trajectory-based frameworks can also generate ideal (but abstract) reaction coordinates such as committors and eigenfunctions of the master equation. However, rates and mechanistic insights obtained from trajectory-based methods and abstract coordinates are not readily generalized across simulation conditions or reaction families. We discuss methods for identifying physically meaningful reaction coordinates, including committor analysis, variational transition state theory, Kramers-Langer-Berezhkovskii-Szabo theory, and statistical inference methods that can use path sampling data to screen, mix, and optimize thousands of trial coordinates. Special focus is given to likelihood maximization and inertial likelihood maximization approaches.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Hkbylgkxhk.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "78"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div79">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Characterization of a dynamic string method for the construction of transition pathways in molecular reactions.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Margaret E. Johnson and G. Hummer</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We explore the theoretical foundation of different string methods used to find dominant reaction pathways in high-dimensional configuration spaces. Pathways are assessed by the amount of reactive flux they carry and by their orientation relative to the committor function. By examining the effects of transforming between different collective coordinates that span the same underlying space, we unmask artificial coordinate dependences in strings optimized to follow the free energy gradient. In contrast, strings optimized to follow the drift vector produce reaction pathways that are significantly less sensitive to reparameterizations of the collective coordinates. The differences in these paths arise because the drift vector depends on both the free energy gradient and the diffusion tensor of the coarse collective variables. Anisotropy and position dependence of diffusion tensors arise commonly in spaces of coarse variables, whose generally slow dynamics are obtained by nonlinear projections of the strongly coupled atomic motions. We show here that transition paths constructed to account for dynamics by following the drift vector will (to a close approximation) carry the maximum reactive flux both in systems with isotropic position dependent diffusion and in systems with constant but anisotropic diffusion. We derive a simple method for calculating the committor function along paths that follow the reactive flux. Lastly, we provide guidance for the practical implementation of the dynamic string method.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/2506858575e1dee7c6430225de243adb34b25e28">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "79"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div80">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Time-lagged Flux in the Transition Path Ensemble: Flux Maximization and Relation to Transition Path Theory</strong></h4>
                                    <h7 style="color:blue;"> bioRxiv</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Transition path ensemble is of special interest in reaction coordinate identification as it consists of reactive trajectories that start from the reactant state and end in the product one. As a theoretical framework for describing the transition path ensemble, the transition path theory has been introduced more than ten years ago and so far its applications have been only illustrated in several low-dimensional systems. Given the transition path ensemble, expressions for calculating flux, current (a vector field), and principal curve are derived here in the space of collective variables from the transition path theory and they are applicable to time-series obtained from molecular dynamics simulations of high-dimensional systems, i.e., the position coordinates as a function of time in the transition path ensemble. The connection of the transition path theory is made to a density-weighted average flux, a quantity proposed in a previous work to appraise the relevance of a coordinate to the reaction coordinate [W. Li, J. Chem. Phys. 156, 054117 (2022)]. Most importantly, as an extension of the existing quantities, time-lagged quantities such as flux and current are also proposed. The main insights and objects provided by these time-lagged quantities are illustrated in the application to the alanine peptide in vacuum.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/2eb68c28f8c64cf8c6b35275488d416457120e8c">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "80"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div81">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Information Thermodynamics of the Transition-Path Ensemble.</strong></h4>
                                    <h7 style="color:blue;"> Physical review letters</h7>
                                    <p class="text-muted"> <em>Miranda D. Louwerse and David A. Sivak</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The reaction coordinate describing a transition between reactant and product is a fundamental concept in the theory of chemical reactions. Within transition-path theory, a quantitative definition of the reaction coordinate is found in the committor, which is the probability that a trajectory initiated from a given microstate first reaches the product before the reactant. Here we develop an information-theoretic origin for the committor and show how selecting transition paths from a long ergodic equilibrium trajectory induces entropy production which exactly equals the information that system dynamics provide about the reactivity of trajectories. This equality of entropy production and dynamical information generation also holds at the level of arbitrary individual coordinates, providing parallel measures of the coordinate's relevance to the reaction, each of which is maximized by the committor.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f064a55030acb244299480c56f5456e14370a075">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "81"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div82">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimizing reaction coordinate by flux maximization in the transition path ensemble.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The transition path ensemble is a collection of reactive trajectories, all of which largely keep going forward along the transition channel from the reactant state to the product one, and is believed to possess the information necessary for the identification of reaction coordinates. Previously, the full coordinates (both position and momentum) of the snapshots in the transition path ensemble were utilized to obtain the reaction coordinate [W. Li and A. Ma, J. Chem. Phys. 144, 114103 (2016) and W. Li, J. Chem. Phys. 148, 084105 (2018)]. Here, with the conformational (or position) coordinates alone, it is suggested that a meaningful one-dimensional representation of the reaction coordinate can be obtained by maximizing the flux (the net number of transitions through the dividing surface) of a given coordinate in the transition path ensemble. In the application to alanine dipeptide in vacuum, dihedral angles ϕ and θ were identified to be the two best reaction coordinates, which was consistent with the results in the existing studies. A linear combination of these two coordinates gave a better reaction coordinate, which is highly correlated with the committor. Most importantly, the method obtained a linear combination of pairwise distances between heavy atoms, which was highly correlated with the committor as well. The standard deviation of the committor at the transition region defined by the optimized reaction coordinate is as small as 0.08. In addition, the effects of practical factors, such as the choice of transition path sub-ensembles and saving interval between frames in transition paths, on reaction coordinate optimization were also considered.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a3765aa73d5c61454cc73831299039bf1fc17547">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "82"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div83">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Chemically Interpretable Graph Interaction Network for Prediction of Pharmacokinetic Properties of Drug-Like Molecules</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Yashaswi Pathak and Siddhartha Laghuvarapu and Sarvesh Mehta and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Solubility of drug molecules is related to pharmacokinetic properties such as absorption and distribution, which affects the amount of drug that is available in the body for its action. Computational or experimental evaluation of solvation free energies of drug-like molecules/solute that quantify solubilities is an arduous task and hence development of reliable computationally tractable models is sought after in drug discovery tasks in pharmaceutical industry. Here, we report a novel method based on graph neural network to predict solvation free energies. Previous studies considered only the solute for solvation free energy prediction and ignored the nature of the solvent, limiting their practical applicability. The proposed model is an end-to-end framework comprising three phases namely, message passing, interaction and prediction phases. In the first phase, message passing neural network was used to compute inter-atomic interaction within both solute and solvent molecules represented as molecular graphs. In the interaction phase, features from the preceding step is used to calculate a solute-solvent interaction map, since the solvation free energy depends on how (un)favorable the solute and solvent molecules interact with each other. The calculated interaction map that captures the solute-solvent interactions along with the features from the message passing phase is used to predict the solvation free energies in the final phase. The model predicts solvation free energies involving a large number of solvents with high accuracy. We also show that the interaction map captures the electronic and steric factors that govern the solubility of drug-like molecules and hence is chemically interpretable.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/cb84c2e0530922476a638a4c4b208e7428936e9b">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "83"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div84">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>MoleculeKit: Machine Learning Methods for Molecular Property Prediction and Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Zhengyang Wang and Meng Liu and Youzhi Luo and Zhao Xu and Yaochen Xie and Limei Wang and Lei Cai and Shuiwang Ji</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Properties of molecules are indicative of their functions and thus are useful in many applications. As a cost-effective alternative to experimental approaches, computational methods for predicting molecular properties are gaining increasing momentum and success. However, there lacks a comprehensive collection of tools and methods for this task currently. Here we develop the MoleculeKit, a suite of comprehensive machine learning tools spanning different computational models and molecular representations for molecular property prediction and drug discovery. Specifically, MoleculeKit represents molecules as both graphs and sequences. Built on these representations, MoleculeKit includes both deep learning and traditional machine learning methods for graph and sequence data. Noticeably, we propose and develop novel deep models for learning from molecular graphs and sequences. Therefore, MoleculeKit not only serves as a comprehensive tool, but also contributes towards developing novel and advanced graph and sequence learning methodologies. Results on both online and offline antibiotics discovery and molecular property prediction tasks show that MoleculeKit achieves consistent improvements over prior methods.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b9dac216cf4a17e16e6ae06548bac803e90bcdd6">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "84"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div85">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ANI-1: A data set of 20M off-equilibrium DFT calculations for organic molecules</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Justin S. Smith and O. Isayev and A. Roitberg</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                One of the grand challenges in modern theoretical chemistry is designing and implementing approximations that expedite ab initio methods without loss of accuracy. Machine learning (ML), in particular neural networks, are emerging as a powerful approach to constructing various forms of transferable atomistic potentials. They have been successfully applied in a variety of applications in chemistry, biology, catalysis, and solid-state physics. However, these models are heavily dependent on the quality and quantity of data used in their fitting. Fitting highly flexible ML potentials comes at a cost: a vast amount of reference data is required to properly train these models. We address this need by providing access to a large computational DFT database, which consists of 20M conformations for 57,454 small organic molecules. We believe it will become a new standard benchmark for comparison of current and future methods in the ML potential community.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/1bdd37102e9907ee66c2729a6b050298bb46e00a">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "85"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div86">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Learning Multimodal Graph-to-Graph Translation for Molecular Optimization</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Wengong Jin and Kevin Yang and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We view molecular optimization as a graph-to-graph translation problem. The goal is to learn to map from one molecular graph to another with better properties based on an available corpus of paired molecules. Since molecules can be optimized in different ways, there are multiple viable translations for each input graph. A key challenge is therefore to model diverse translation outputs. Our primary contributions include a junction tree encoder-decoder for learning diverse graph translations along with a novel adversarial training method for aligning distributions of molecules. Diverse output distributions in our model are explicitly realized by low-dimensional latent vectors that modulate the translation process. We evaluate our model on multiple molecular optimization tasks and show that our model outperforms previous state-of-the-art baselines.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/8ee3ba29ad49c2ded00e88ee0dad1de17cc2b309">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "86"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div87">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>All SMILES Variational Autoencoder</strong></h4>
                                    <h7 style="color:blue;"> arXiv: Learning</h7>
                                    <p class="text-muted"> <em>Zaccary Alperstein and A. Cherkasov and J. Rolfe</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Variational autoencoders (VAEs) defined over SMILES string and graph-based representations of molecules promise to improve the optimization of molecular properties, thereby revolutionizing the pharmaceuticals and materials industries. However, these VAEs are hindered by the non-unique nature of SMILES strings and the computational cost of graph convolutions. To efficiently pass messages along all paths through the molecular graph, we encode multiple SMILES strings of a single molecule using a set of stacked recurrent neural networks, pooling hidden representations of each atom between SMILES representations, and use attentional pooling to build a final fixed-length latent representation. By then decoding to a disjoint set of SMILES strings of the molecule, our All SMILES VAE learns an almost bijective mapping between molecules and latent representations near the high-probability-mass subspace of the prior. Our SMILES-derived but molecule-based latent representations significantly surpass the state-of-the-art in a variety of fully- and semi-supervised property regression and molecular property optimization tasks.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/bdff01cb2ebc3643c48eaf2193d80d5f16e25d17">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "87"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div88">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Enhanced Deep‐Learning Prediction of Molecular Properties via Augmentation of Bond Topology</strong></h4>
                                    <h7 style="color:blue;"> ChemMedChem</h7>
                                    <p class="text-muted"> <em>Hyeoncheol Cho and I. Choi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: While outperforming state‐of‐the‐art deep‐learning models in the prediction of chemical and biological properties, 3DGCN has the ability to both generalize and distinguish molecular rotations in 3D, beyond 2D, which has great impact on drug discovery and development, not to mention the design of chemical reactions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Tywmwbtayv.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "88"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div89">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Hierarchical Graph-to-Graph Translation for Molecules</strong></h4>
                                    <h7 style="color:blue;"> arXiv: Chemical Physics</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The problem of accelerating drug discovery relies heavily on automatic tools to optimize precursor molecules to afford them with better biochemical properties. Our work in this paper substantially extends prior state-of-the-art on graph-to-graph translation methods for molecular optimization. In particular, we realize coherent multi-resolution representations by interweaving the encoding of substructure components with the atom-level encoding of the original molecular graph. Moreover, our graph decoder is fully autoregressive, and interleaves each step of adding a new substructure with the process of resolving its attachment to the emerging molecule. We evaluate our model on multiple molecular optimization tasks and show that our model significantly outperforms previous state-of-the-art baselines.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b4303019c36d799b193b2b3214546601a9874baa">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "89"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div90">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A LL SMILES V ARIATIONAL A UTOENCODER FOR M OLECULAR P ROPERTY P REDICTION AND O PTIMIZATION</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em></em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Variational autoencoders (VAEs) defined over SMILES string and graph-based representations of molecules promise to improve the optimization of molecular properties, thereby revolutionizing the pharmaceuticals and materials industries. However, these VAEs are hindered by the non-unique nature of SMILES strings and the computational cost of graph convolutions. To efficiently pass messages along all paths through the molecular graph, we encode multiple SMILES strings of a single molecule using a set of stacked recurrent neural networks, harmonizing hidden representations of each atom between SMILES representations, and use attentional pooling to build a final fixed-length latent representation. By then decoding to a disjoint set of SMILES strings of the molecule, our All SMILES VAE learns an almost bijective mapping between molecules and latent representations near the high-probability-mass subspace of the prior. Our SMILES-derived but moleculebased latent representations significantly surpass the state-of-the-art in a variety of fullyand semi-supervised property regression and molecular property optimization tasks.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/96fadf8a78514d77e3251c8e8281f78faa13ed29">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "90"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div91">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Message Passing with Edge Updates for Predicting Properties of Molecules and Materials</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>P. B. Jørgensen and K. Jacobsen and Mikkel N. Schmidt</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Neural message passing on molecular graphs is one of the most promising methods for predicting formation energy and other properties of molecules and materials. In this work we extend the neural message passing model with an edge update network which allows the information exchanged between atoms to depend on the hidden state of the receiving atom. We benchmark the proposed model on three publicly available datasets (QM9, The Materials Project and OQMD) and show that the proposed model yields superior prediction of formation energies and other properties on all three datasets in comparison with the best published results. Furthermore we investigate different methods for constructing the graph used to represent crystalline structures and we find that using a graph based on K-nearest neighbors achieves better prediction accuracy than using maximum distance cutoff or the Voronoi tessellation graph.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/57986bf176c164cdd22c664ed2a75db3a0b3dbe0">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "91"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div92">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Delfos: deep learning model for prediction of solvation free energies in generic organic solvents</strong></h4>
                                    <h7 style="color:blue;"> Chemical Science</h7>
                                    <p class="text-muted"> <em>Hyuntae Lim and YounJoon Jung</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We introduce Delfos, a novel, machine-learning-based QSPR method which predicts solvation free energies for generic organic solutions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Uvlqqmiyja.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "92"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div93">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>BAND NN: A Deep Learning Framework for Energy Prediction and Geometry Optimization of Organic Small Molecules</strong></h4>
                                    <h7 style="color:blue;"> Journal of Computational Chemistry</h7>
                                    <p class="text-muted"> <em>Siddhartha Laghuvarapu and Yashaswi Pathak and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Recent advances in artificial intelligence along with the development of large data sets of energies calculated using quantum mechanical (QM)/density functional theory (DFT) methods have enabled prediction of accurate molecular energies at reasonably low computational cost. However, machine learning models that have been reported so far require the atomic positions obtained from geometry optimizations using high‐level QM/DFT methods as input in order to predict the energies and do not allow for geometry optimization. In this study, a transferable and molecule size‐independent machine learning model bonds (B), angles (A), nonbonded (N) interactions, and dihedrals (D) neural network (BAND NN) based on a chemically intuitive representation inspired by molecular mechanics force fields is presented. The model predicts the atomization energies of equilibrium and nonequilibrium structures as sum of energy contributions from bonds (B), angles (A), nonbonds (N), and dihedrals (D) at remarkable accuracy. The robustness of the proposed model is further validated by calculations that span over the conformational, configurational, and reaction space. The transferability of this model on systems larger than the ones in the data set is demonstrated by performing calculations on selected large molecules. Importantly, employing the BAND NN model, it is possible to perform geometry optimizations starting from nonequilibrium structures along with predicting their energies. © 2019 Wiley Periodicals, Inc.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Oprhoopsnc.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "93"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div94">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Hierarchical Generation of Molecular Graphs using Structural Motifs</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph generation techniques are increasingly being adopted for drug discovery. Previous graph generation approaches have utilized relatively small molecular building blocks such as atoms or simple cycles, limiting their effectiveness to smaller molecules. Indeed, as we demonstrate, their performance degrades significantly for larger molecules. In this paper, we propose a new hierarchical graph encoder-decoder that employs significantly larger and more flexible graph motifs as basic building blocks. Our encoder produces a multi-resolution representation for each molecule in a fine-to-coarse fashion, from atoms to connected motifs. Each level integrates the encoding of constituents below with the graph at that level. Our autoregressive coarse-to-fine decoder adds one motif at a time, interleaving the decision of selecting a new motif with the process of resolving its attachments to the emerging molecule. We evaluate our model on multiple molecule generation tasks, including polymers, and show that our model significantly outperforms previous state-of-the-art baselines.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/dc7307f6e49f0ad2432be4eea92ae7f854c3cebb">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "94"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div95">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ElemNet: Deep Learning the Chemistry of Materials From Only Elemental Composition</strong></h4>
                                    <h7 style="color:blue;"> Scientific Reports</h7>
                                    <p class="text-muted"> <em>Dipendra Jha and Logan T. Ward and Arindam Paul and W. Liao and A. Choudhary and C. Wolverton and Ankit Agrawal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The design and implementation of a deep neural network model referred to as ElemNet is presented; it automatically captures the physical and chemical interactions and similarities between different elements using artificial intelligence which allows it to predict the materials properties with better accuracy and speed.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Srnfyxrrhf.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "95"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div96">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>All SMILES VAE</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Zaccary Alperstein and A. Cherkasov and J. Rolfe</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Variational autoencoders (VAEs) defined over SMILES string and graph-based representations of molecules promise to improve the optimization of molecular properties, thereby revolutionizing the pharmaceuticals and materials industries. However, these VAEs are hindered by the non-unique nature of SMILES strings and the computational cost of graph convolutions. To efficiently pass messages along all paths through the molecular graph, we encode multiple SMILES strings of a single molecule using a set of stacked recurrent neural networks, pooling hidden representations of each atom between SMILES representations, and use attentional pooling to build a final fixed-length latent representation. By then decoding to a disjoint set of SMILES strings of the molecule, our All SMILES VAE learns an almost bijective mapping between molecules and latent representations near the high-probability-mass subspace of the prior. Our SMILES-derived but molecule-based latent representations significantly surpass the state-of-the-art in a variety of fully- and semi-supervised property regression and molecular property optimization tasks.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/5851fcd9ef3106957b0e12698cdd00e8c3c73e03">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "96"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div97">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>MLSolvA: solvation free energy prediction from pairwise atomistic interactions by machine learning</strong></h4>
                                    <h7 style="color:blue;"> Journal of Cheminformatics</h7>
                                    <p class="text-muted"> <em>Hyuntae Lim and YounJoon Jung</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: A novel ML-based solvation model, which calculates the solvation energy from pairwise atomistic interactions, which indicates that the model provides not only predictions of target properties but also more detailed physicochemical insights.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Hsvpuadapk.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "97"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div98">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Analyzing Learned Molecular Representations for Property Prediction</strong></h4>
                                    <h7 style="color:blue;"> Journal of Chemical Information and Modeling</h7>
                                    <p class="text-muted"> <em>Kevin Yang and Kyle Swanson and Wengong Jin and Connor W. Coley and Philipp Eiden and Hua Gao and A. Guzman-Perez and Timothy Hopper and Brian Kelley and M. Mathea and Andrew Palmer and Volker Settels and T. Jaakkola and K. Jensen and R. Barzilay</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Advancements in neural machinery have led to a wide range of algorithmic solutions for molecular property prediction. Two classes of models in particular have yielded promising results: neural networks applied to computed molecular fingerprints or expert-crafted descriptors and graph convolutional neural networks that construct a learned molecular representation by operating on the graph structure of the molecule. However, recent literature has yet to clearly determine which of these two methods is superior when generalizing to new chemical space. Furthermore, prior research has rarely examined these new models in industry research settings in comparison to existing employed models. In this paper, we benchmark models extensively on 19 public and 16 proprietary industrial data sets spanning a wide variety of chemical end points. In addition, we introduce a graph convolutional model that consistently matches or outperforms models using fixed molecular descriptors as well as previous graph neural architectures on both public and proprietary data sets. Our empirical findings indicate that while approaches based on these representations have yet to reach the level of experimental reproducibility, our proposed model nevertheless offers significant improvements over models currently used in industrial workflows.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/573506b96ed380044f33b30b66de10e25959b0fd">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "98"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div99">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Enhancing materials property prediction by leveraging computational and experimental data using deep transfer learning</strong></h4>
                                    <h7 style="color:blue;"> Nature Communications</h7>
                                    <p class="text-muted"> <em>Dipendra Jha and K. Choudhary and F. Tavazza and W. Liao and A. Choudhary and C. Campbell and Ankit Agrawal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: A highly accurate model for predicting formation energy of materials from their compositions with high accuracy is built, which is significantly better than existing machine learning (ML) prediction modeling based on DFT computations and is comparable to the MAE of DFT-computation itself.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/08a68192cedf80f36d802584e58923926e9041dc">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "99"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div100">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Message Passing on High Order Paths</strong></h4>
                                    <h7 style="color:blue;"> Mach. Learn. Sci. Technol.</h7>
                                    <p class="text-muted"> <em>Daniel Flam-Shepherd and Tony C Wu and Pascal Friederich and Alán Aspuru-Guzik</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph neural network have achieved impressive results in predicting molecular properties, but they do not directly account for local and hidden structures in the graph such as functional groups and molecular geometry. At each propagation step, GNNs aggregate only over first order neighbours, ignoring important information contained in subsequent neighbours as well as the relationships between those higher order connections. In this work, we generalize graph neural nets to pass messages and aggregate across higher order paths. This allows for information to propagate over various levels and substructures of the graph. We demonstrate our model on a few tasks in molecular property prediction.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f7b550cba2d61b3fb676e72c92c245134363fda1">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "100"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div101">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Application of Artificial Intelligence for the Prediction of Solvation Free Energies for Covid-19 Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> Journal of Student Research</h7>
                                    <p class="text-muted"> <em>Sampreeth Immidisetty and Deepak Agrawal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Solvation free energy is a key indicator of the effectiveness of a drug molecule. There are several applications of predicting the solvation free energies of chemical compounds using quantum mechanical methods. However, these methods take a long time and are costly. For that reason, the application of recently developed artificial intelligence techniques for the prediction of solvation free energies is becoming increasingly valuable in drug discovery to address time and the high-cost issues with traditional quantum mechanical approaches. In this paper, we present application of two different artificial intelligence models for predicting solute-solvent free solvation energy for Covid-19 drug design. The research involves building, training, evaluating and comparing the performances of the two models on a large dataset, then predicting solvation free energies for 138 known APIs and 28 organic solvents that could potentially be used as a Covid-19 medicine. The potential repurposing of 138 drugs for Covid-19 from solubility perspective is novel. We demonstrate the application of the AI models and derive several conclusions regarding suitability of the APIs and their efficacy. We conclude our research by providing insights on how our work can be put to future use towards drug development.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/911a8c40e3ab18e00a156e01378cc87aeb9049ec">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "101"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div102">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ANI-1: an extensible neural network potential with DFT accuracy at force field computational cost† †Electronic supplementary information (ESI) available. See DOI: 10.1039/c6sc05720a Click here for additional data file.</strong></h4>
                                    <h7 style="color:blue;"> Chemical Science</h7>
                                    <p class="text-muted"> <em>J. S. Smith and O. Isayev and A. Roitberg</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We demonstrate how a deep neural network (NN) trained on a data set of quantum mechanical (QM) DFT calculated energies can learn an accurate and transferable atomistic potential for organic molecules containing H, C, N, and O atoms.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/eac3e315d1137e3999e4fc355e32b9f2e373cbba">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "102"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div103">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Multi-resolution Autoregressive Graph-to-Graph Translation for Molecules</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The problem of accelerating drug discovery relies heavily on automatic tools to optimize precursor molecules to afford them with better biochemical properties. Our work in this paper substantially extends prior state-of-the-art on graph-to-graph translation methods for molecular optimization. In particular, we realize coherent multi-resolution representations by interweaving trees over substructures with the atom-level encoding of the original molecular graph. Moreover, our graph decoder is fully autoregressive, and interleaves each step of adding a new substructure with the process of resolving its connectivity to the emerging molecule. We evaluate our model on multiple molecular optimization tasks and show that our model outperforms previous state-of-the-art baselines by a large margin.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/3921efa210a7f413cefa1d6bb6d37764e2c9ef04">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "103"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div104">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Meta-Learning Initializations for Low-Resource Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Cuong Q. Nguyen and Constantine Kreatsoulas and K. Branson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Building in silico models to predict chemical properties and activities is a crucial step in drug discovery. However, drug discovery projects are often characterized by limited labeled data, hindering the applications of deep learning in
this setting. Meanwhile advances in meta-learning have enabled state-of-the-art
performances in few-shot learning benchmarks, naturally prompting the question: Can meta-learning improve deep learning performance in low-resource
drug discovery projects? In this work, we assess the efficiency of the Model-Agnostic Meta-Learning (MAML) algorithm – along with its variants FO-MAML
and ANIL – at learning to predict chemical properties and activities. Using the
ChEMBL20 dataset to emulate low-resource settings, our benchmark shows that
meta-initializations perform comparably to or outperform multi-task pre-training
baselines on 16 out of 20 in-distribution tasks and on all out-of-distribution tasks,
providing an average improvement in AUPRC of 7.2% and 14.9% respectively.
Finally, we observe that meta-initializations consistently result in the best performing models across fine-tuning sets with k ∈ {16, 32, 64, 128, 256} instances.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/918f6d965c7e45d15802eb3173058cfa8360e979">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "104"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div105">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Graph Convolutional Networks (GCNs) for Molecular Property Prediction in Drug Development Undergraduate Research Thesis</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Yifan Song and Xia Ning</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Molecular property prediction is key to drug development. The rising of deep learning techniques provides new possibilities to learn the molecular properties directly from chemical data. In particular, graph convolutional networks have been introduced into the field and made significant enhancements compared to traditional methods. The first part of this paper serves as a study to explore and evaluate this emerging method while the second part demonstrates that graph convolution networks can be further improved by incorporating attention mechanism, another influential deep learning idea.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/4be7300f9f81fa3d012e32d200b922a6a9e921b3">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "105"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div106">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Symmetry-adapted generation of 3d point sets for the targeted discovery of molecules</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>N. Gebauer and M. Gastegger and Kristof T. Schütt</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Deep learning has proven to yield fast and accurate predictions of quantum-chemical properties to accelerate the discovery of novel molecules and materials. As an exhaustive exploration of the vast chemical space is still infeasible, we require generative models that guide our search towards systems with desired properties. While graph-based models have previously been proposed, they are restricted by a lack of spatial information such that they are unable to recognize spatial isomerism and non-bonded interactions. Here, we introduce a generative neural network for 3d point sets that respects the rotational invariance of the targeted structures. We apply it to the generation of molecules and demonstrate its ability to approximate the distribution of equilibrium structures using spatial metrics as well as established measures from chemoinformatics. As our model is able to capture the complex relationship between 3d geometry and electronic properties, we bias the distribution of the generator towards molecules with a small HOMO-LUMO gap - an important property for the design of organic solar cells.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a1b0f1c32cb978da696cea6d8eb6da8b6973d590">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "106"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div107">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Generating equilibrium molecules with deep neural networks</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>N. Gebauer and M. Gastegger and Kristof T. Schütt</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Discovery of atomistic systems with desirable properties is a major challenge in chemistry and material science. Here we introduce a novel, autoregressive, convolutional deep neural network architecture that generates molecular equilibrium structures by sequentially placing atoms in three-dimensional space. The model estimates the joint probability over molecular configurations with tractable conditional probabilities which only depend on distances between atoms and their nuclear charges. It combines concepts from state-of-the-art atomistic neural networks with auto-regressive generative models for images and speech. We demonstrate that the architecture is capable of generating molecules close to equilibrium for constitutional isomers of C$_7$O$_2$H$_{10}$.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b30ae2f01fdef352ba3fdeb2ce2817e3ba171e8d">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "107"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div108">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Scale-Aware Graph-Based Machine Learning for Accurate Molecular Property Prediction</strong></h4>
                                    <h7 style="color:blue;"> 2020 IEEE International Conference on Big Data (Big Data)</h7>
                                    <p class="text-muted"> <em>Gyoung S. Na and Hyun Woo Kim and Hyunju Chang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                With great growth in the volume of chemical databases, machine learning receives significant attention from various scientific communities for efficient high-throughput screening of molecular properties and drug discovery on the millions of chemical compounds. In particular, graph neural networks (GNNs) have been widely studied in chemistry-related fields because a molecule is natively represented as a mathematical graph. In GNNs for the graph-level analysis, a global operation called readout is applied after node embedding to generate a graph-level embedding that represents characteristics of the whole graph. However, commonly used readouts frequently distort scale information of the graph and consequently degrade the prediction accuracy of GNNs. This problem becomes more serious in molecular machine learning because molecules have many important scale information (e.g., molecular weight and total energy). In this paper, we investigate this scale distortion problem in GNNs caused by the readouts for the first time and propose an efficient solution with a new attention-based readout. In the experiments, the proposed readout outperformed commonly used readouts on various GNN architectures.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Cayakfegvw.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "108"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div109">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Benchmark study on deep neural network potentials for small organic molecules</strong></h4>
                                    <h7 style="color:blue;"> Journal of Computational Chemistry</h7>
                                    <p class="text-muted"> <em>Rohit Modee and Siddhartha Laghuvarapu and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                There has been tremendous advancement in machine learning (ML) applications in computational chemistry, particularly in neural network potentials (NNP). NNPs can approximate potential energy surface (PES) as a high dimensional function by learning from existing reference data, thereby circumventing the need to solve the electronic Schrödinger equation explicitly. As a result, ML accelerates chemical space exploration and property prediction compared to quantum mechanical methods. Novel ML methods have the potential to provide efficient means for predicting the properties of molecules. However, this potential has been limited by the lack of standard comparative evaluations. In this work, we compare four selected models, that is, ANI, PhysNet, SchNet, and BAND‐NN, developed to represent the PES of small organic molecules. We evaluate these models for their accuracy and transferability on two different test sets (i) Small organic molecules of up to eight‐heavy atoms on which ANI and SchNet achieve root mean square error (RMSE) of 0.55 and 0.60 kcal/mol, respectively. (ii) On random selection of molecules from the GDB‐11 database with 10‐heavy atoms, ANI achieves RMSE of 1.17 kcal/mol and SchNet achieves RMSE of 1.89 kcal/mol. We examine their ability to produce smooth meaningful surface by performing PES scans for bond stretch, angle bend, and dihedral rotations on relatively large molecules to assess their possible application in molecular dynamics simulations. We also evaluate their performance for yielding minimum energy structures via geometry optimization using various minimization algorithms. All these models were also able to accurately differentiate different isomers of the same empirical formula C10H20 . ANI and PhysNet achieve an RMSE of 0.29 and 0.52 kcal/mol, respectively, on C10H20 isomers.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Lmdwcqrtgf.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "109"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div110">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ANI-1, A data set of 20 million calculated off-equilibrium conformations for organic molecules</strong></h4>
                                    <h7 style="color:blue;"> Scientific Data</h7>
                                    <p class="text-muted"> <em>Justin S. Smith and O. Isayev and A. Roitberg</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This work provides access to a large computational DFT database, which consists of more than 20 M off equilibrium conformations for 57,462 small organic molecules, and believes it will become a new standard benchmark for comparison of current and future methods in the ML potential community.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Iwhupsqsec.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "110"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div111">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A Generative Model for Molecular Distance Geometry</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>G. Simm and José Miguel Hernández-Lobato</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Great computational effort is invested in generating equilibrium states for molecular systems using, for example, Markov chain Monte Carlo. We present a probabilistic model that generates statistically independent samples for molecules from their graph representations. Our model learns a low-dimensional manifold that preserves the geometry of local atomic neighborhoods through a principled learning representation that is based on Euclidean distance geometry. In a new benchmark for molecular conformation generation, we show experimentally that our generative model achieves state-of-the-art accuracy. Finally, we show how to use our model as a proposal distribution in an importance sampling scheme to compute molecular properties.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/c21d2d07cda6d8cb113de40fae726582d677ab3c">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "111"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div112">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep Learning in Chemistry</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and modeling</h7>
                                    <p class="text-muted"> <em>Adam C. Mater and M. Coote</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Machine learning enables computers to address problems by learning from data. Deep learning is a type of machine learning that uses a hierarchical recombination of features to extract pertinent information and then learn the patterns represented in the data. Over the last eight years, its abilities have increasingly been applied to a wide variety of chemical challenges, from improving computational chemistry to drug and materials design and even synthesis planning. This review aims to explain the concepts of deep learning to chemists from any background and follows this with an overview of the diverse applications demonstrated in the literature. We hope that this will empower the broader chemical community to engage with this burgeoning field and foster the growing movement of deep learning accelerated chemistry.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Burjnbxwxa.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "112"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div113">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Junction Tree Variational Autoencoder for Molecular Graph Generation</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We seek to automate the design of molecules based on specific chemical properties. In computational terms, this task involves continuous embedding and generation of molecular graphs. Our primary contribution is the direct realization of molecular graphs, a task previously approached by generating linear SMILES strings instead of graphs. Our junction tree variational autoencoder generates molecular graphs in two phases, by first generating a tree-structured scaffold over chemical substructures, and then combining them into a molecule with a graph message passing network. This approach allows us to incrementally expand molecules while maintaining chemical validity at every step. We evaluate our model on multiple tasks ranging from molecular generation to optimization. Across these tasks, our model outperforms previous state-of-the-art baselines by a significant margin.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/fd17bd9a5dc24a081ad9743570f50dd6750f54b2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "113"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div114">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep learning Enabled Molecule Design</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Deva Priyakumar and Sarvesh Mehta</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The advent of modern machine learning and deep learning methods have revolutionized various fields such as computer vision, natural language processing, speech recognition, etc. In the the past decade these methods have made a profound impact in the field of natural science. Particularly, the computations involved in the field of molecular science have been greatly transformed with the advent of machine learning. These changes have resulted in tremendous reduction of time and cost involved in tasks such as molecular generation and property prediction, which are two crucial steps involved in the process of molecular design. In this thesis, two studies on in each of these is reported. First part of the thesis presents a deep learning based inorganic material generator (DING) framework consisting of a generator module and a predictor module. The generator module is developed based upon conditional variational autoencoders (CVAE) and the predictor module consists of three deep neural networks trained for predicting enthalpy of formation, volume per atom and energy per atom chosen to demonstrate the proposed method. The predictor and generator modules have been developed using a one-hot key representation of the material composition. A series of tests were done to examine the robustness of the predictor models, to demonstrate the continuity of the latent material space, and its ability to generate materials exhibiting target property values. The DING architecture proposed in this paper can be extended to other properties based on which the chemical space can be efficiently explored for interesting materials/molecules. Second part of the thesis presents an interpretable deep learning method based on graph networks that accurately predict solvation free energies of small organic molecules. The proposed model CIGIN, comprising of three phases, namely message passing, interaction and prediction is able to predict solvation free energies in any generic organic solvent with a mean absolute error of 0.16 kcal/mol. In terms of the accuracy, the CIGIN model outperforms all the proposed machine learning
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/c385fa8e470159bca06404955b91fe52a1804aa8">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "114"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div115">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>MEMES: Machine learning framework for Enhanced MolEcular Screening</strong></h4>
                                    <h7 style="color:blue;"> Chemical Science</h7>
                                    <p class="text-muted"> <em>Sarvesh Mehta and Siddhartha Laghuvarapu and Yashaswi Pathak and Aaftaab Sethi and Mallika Alvala and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                In drug discovery applications, high throughput virtual screening exercises are routinely performed to determine an initial set of candidate molecules referred to as “hits”. In such an experiment, each molecule from a large small-molecule drug library is evaluated in terms of physical properties such as the docking score against a target receptor. In real-life drug discovery experiments, drug libraries are extremely large but still there is only a minor representation of the essentially infinite chemical space, and evaluation of physical properties for each molecule in the library is not computationally feasible. In the current study, a novel Machine learning framework for Enhanced MolEcular Screening (MEMES) based on Bayesian optimization is proposed for efficient sampling of the chemical space. The proposed framework is demonstrated to identify 90% of the top-1000 molecules from a molecular library of size about 100 million, while calculating the docking score only for about 6% of the complete library. We believe that such a framework would tremendously help to reduce the computational effort in not only drug-discovery but also areas that require such high-throughput experiments.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Rxwrxtyefd.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "115"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div116">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Learning Atomic Interactions through Solvation Free Energy Prediction Using Graph Neural Networks</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and modeling</h7>
                                    <p class="text-muted"> <em>Yashaswi Pathak and Sarvesh Mehta and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Solvation free energy is a fundamental property that influences various chemical and biological processes, such as reaction rates, protein folding, drug binding, and bioavailability of drugs. In this work, we present a deep learning method based on graph networks to accurately predict solvation free energies of small organic molecules. The proposed model, comprising three phases, namely, message passing, interaction, and prediction, is able to predict solvation free energies in any generic organic solvent with a mean absolute error of 0.16 kcal/mol. In terms of accuracy, the current model outperforms all of the proposed machine learning-based models so far. The atomic interactions predicted in an unsupervised manner are able to explain the trends of free energies consistent with chemical wisdom. Further, the robustness of the machine learning-based model has been tested thoroughly, and its capability to interpret the predictions has been verified with several examples.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/ad155a500dc2891374945b26f8e90a8097ba409f">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "116"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div117">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep learning enabled inorganic material generator.</strong></h4>
                                    <h7 style="color:blue;"> Physical chemistry chemical physics : PCCP</h7>
                                    <p class="text-muted"> <em>Yashaswi Pathak and K. Juneja and Girish Varma and M. Ehara and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Recent years have witnessed utilization of modern machine learning approaches for predicting the properties of materials using available datasets. However, to identify potential candidates for material discovery, one has to systematically scan through a large chemical space and subsequently calculate the properties of all such samples. On the other hand, generative methods are capable of efficiently sampling the chemical space and can generate molecules/materials with desired properties. In this study, we report a deep learning based inorganic material generator (DING) framework consisting of a generator module and a predictor module. The generator module is developed based on conditional variational autoencoders (CVAEs) and the predictor module consists of three deep neural networks trained for predicting the enthalpy of formation, volume per atom and energy per atom chosen to demonstrate the proposed method. The predictor and generator modules have been developed using a one-hot key representation of the material composition. A series of tests were done to examine the robustness of the predictor models, to demonstrate the continuity of the latent material space, and its ability to generate materials exhibiting target property values. The DING architecture proposed in this paper can be extended to other properties based on which the chemical space can be efficiently explored for interesting materials/molecules.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/7cf4b1a630deed93d55188a96583bddaeaeb4b8a">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "117"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div118">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Graph Networks as a Universal Machine Learning Framework for Molecules and Crystals</strong></h4>
                                    <h7 style="color:blue;"> Chemistry of Materials</h7>
                                    <p class="text-muted"> <em>Chi Chen and Weike Ye and Yunxing Zuo and Chen Zheng and S. Ong</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph networks are a new machine learning (ML) paradigm that supports both relational reasoning and combinatorial generalization. Here, we develop, for the first time, universal MatErials Graph Network (MEGNet) models for accurate property prediction in both molecules and crystals. We demonstrate that our MEGNet models significantly outperform prior ML models in 11 out of 13 properties of the QM9 molecule data set. Furthermore, a single-task unified MEGNet model can accurately predict the internal energy at 0 K and room temperature, enthalpy and Gibbs free energy, with temperature, pressure and entropy being global state inputs. Similarly, we show that MEGNet models trained on $\sim 60,000$ crystals in the Materials Project substantially outperform prior ML models in the prediction of the formation energies, band gaps and elastic moduli of crystals, achieving better than DFT accuracy over a much larger data set. Such MEGNet models are highly interpretable, and well-established periodic chemical trends can be extracted from the elemental embeddings. Finally, we demonstrate the transfer learning of elemental embeddings from a property model trained on a larger data set (formation energies) to accelerate the training of property models with smaller amounts of data (band gaps and elastic moduli)
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ugrfezskfn.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "118"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div119">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Solvent-Specific Featurization for Predicting Free Energies of Solvation through Machine Learning</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and modeling</h7>
                                    <p class="text-muted"> <em>Samuel T Hutchinson and R. Kobayashi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A featurization algorithm based on functional class fingerprints has been implemented within the DeepChem machine learning framework. It is based on descriptors more appropriate for solvation, taking into account intermolecular properties, and has been used in the prediction of free energies of solvation. Tests carried out on solvents with a range of polarity from the FreeSolv and MNSol data sets have shown slightly better accuracy than the commonly used topology-based extended connectivity fingerprint algorithm for hydration free energies. However, improvement was not as significant as hoped and less clear for less polar solvents suggesting that further solvent-specific descriptors may need to be taken into consideration.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Urfopsahcv.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "119"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div120">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Machine Learning for Accurate Force Calculations in Molecular Dynamics Simulations.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. A</h7>
                                    <p class="text-muted"> <em>Punyaslok Pattnaik and Shampa Raghunathan and Tarun Kalluri and P. Bhimalapuram and C. V. Jawahar and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The computationally expensive nature of ab initio molecular dynamics simulations severely limits its ability to simulate large system sizes and long time scales, both of which are necessary to imitate experimental conditions. In this work, we explore an approach to make use of the data obtained using the quantum mechanical density functional theory (DFT) on small systems and use deep learning to subsequently simulate large systems by taking liquid argon as a test case. A suitable vector representation was chosen to represent the surrounding environment of each Ar atom, and a ΔNetFF machine learning model where, the neural network was trained to predict the difference in resultant forces obtained by DFT and classical force fields was introduced. Molecular dynamics simulations were then performed using forces from the neural network for various system sizes and time scales depending on the properties we calculated. A comparison of properties obtained from the classical force field and the neural network model was presented alongside available experimental data to validate the proposed method.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/06f302b4dbba24a5d55368d461f8cd3b441b588f">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "120"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div121">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Message Passing for Quantum Chemistry</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>J. Gilmer and S. Schoenholz and Patrick F. Riley and Oriol Vinyals and George E. Dahl</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Supervised learning on molecules has incredible potential to be useful in chemistry, drug discovery, and materials science. Luckily, several promising and closely related neural network models invariant to molecular symmetries have already been described in the literature. These models learn a message passing algorithm and aggregation procedure to compute a function of their entire input graph. At this point, the next step is to find a particularly effective variant of this general approach and apply it to chemical prediction benchmarks until we either solve them or reach the limits of the approach. In this paper, we reformulate existing models into a single common framework we call Message Passing Neural Networks (MPNNs) and explore additional novel variations within this framework. Using MPNNs we demonstrate state of the art results on an important molecular property prediction benchmark; these results are strong enough that we believe future work should focus on datasets with larger molecules or more accurate ground truth labels.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/e24cdf73b3e7e590c2fe5ecac9ae8aa983801367">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "121"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div122">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Evaluation of Thermochemical Machine Learning for Potential Energy Curves and Geometry Optimization.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. A</h7>
                                    <p class="text-muted"> <em>Dakota Folmsbee and D. Koes and G. Hutchison</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                While many machine learning (ML) methods, particularly deep neural networks, have been trained for density functional and quantum chemical energies and properties, the vast majority of these methods focus on single-point energies. In principle, such ML methods, once trained, offer thermochemical accuracy on par with density functional and wave function methods but at speeds comparable to traditional force fields or approximate semiempirical methods. So far, most efforts have focused on optimized equilibrium single-point energies and properties. In this work, we evaluate the accuracy of several leading ML methods across a range of bond potential energy curves and torsional potentials. The methods were trained on the existing ANI-1 training set, calculated using the ωB97X/6-31G(d) single points at nonequilibrium geometries. We find that across a range of small molecules, several methods offer both qualitative accuracy (e.g., correct minima, both repulsive and attractive bond regions, anharmonic shape, and single minima) and quantitative accuracy in terms of the mean absolute percent error near the minima. At the moment, ANI-2x, FCHL, and a new libmolgrid-based convolutional neural net, the Colorful CNN, show good performance.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/cc87ca324fee19f58bb85a0ad5d9b965c5ad6014">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "122"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div123">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Molecule Property Prediction and Classification with Graph Hypernetworks</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Eliya Nachmani and Lior Wolf</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph neural networks are currently leading the performance charts in learning-based molecule property prediction and classification. Computational chemistry has, therefore, become the a prominent testbed for generic graph neural networks, as well as for specialized message passing methods. In this work, we demonstrate that the replacement of the underlying networks with hypernetworks leads to a boost in performance, obtaining state of the art results in various benchmarks. A major difficulty in the application of hypernetworks is their lack of stability. We tackle this by combining the current message and the first message. A recent work has tackled the training instability of hypernetworks in the context of error correcting codes, by replacing the activation function of the message passing network with a low-order Taylor approximation of it. We demonstrate that our generic solution can replace this domain-specific solution.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/3b07e81adf4e0cd6e9d202b299bc162b892e6fcf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "123"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div124">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A review on machine learning approaches and trends in drug discovery</strong></h4>
                                    <h7 style="color:blue;"> Computational and Structural Biotechnology Journal</h7>
                                    <p class="text-muted"> <em>Paula Carracedo-Reboredo and J. Liñares-Blanco and Nereida Rodriguez-Fernandez and F. Cedrón and F. Nóvoa and A. Carballal and V. Maojo and A. Pazos and C. Fernandez-Lozano</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Qeedzgfmze.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "124"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div125">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Molecular graph convolutions: moving beyond fingerprints</strong></h4>
                                    <h7 style="color:blue;"> Journal of Computer-Aided Molecular Design</h7>
                                    <p class="text-muted"> <em>S. Kearnes and Kevin McCloskey and Marc Berndl and V. Pande and Patrick F. Riley</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: Molecular graph convolutions are described, a machine learning architecture for learning from undirected graphs, specifically small molecules, that represent a new paradigm in ligand-based virtual screening with exciting opportunities for future improvement.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Bvpwzpwcsx.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "125"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div126">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial Intelligence and Machine Learning Technology Driven Modern Drug Discovery and Development</strong></h4>
                                    <h7 style="color:blue;"> International Journal of Molecular Sciences</h7>
                                    <p class="text-muted"> <em>C. Sarkar and B. Das and V. Rawat and J. Wahlang and A. Nongpiur and I. Tiewsoh and N. Lyngdoh and Debasmita Das and Manjunath Bidarolli and Hannah Theresa Sony</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The discovery and advances of medicines may be considered as the ultimate relevant translational science effort that adds to human invulnerability and happiness. But advancing a fresh medication is a quite convoluted, costly, and protracted operation, normally costing USD ~2.6 billion and consuming a mean time span of 12 years. Methods to cut back expenditure and hasten new drug discovery have prompted an arduous and compelling brainstorming exercise in the pharmaceutical industry. The engagement of Artificial Intelligence (AI), including the deep-learning (DL) component in particular, has been facilitated by the employment of classified big data, in concert with strikingly reinforced computing prowess and cloud storage, across all fields. AI has energized computer-facilitated drug discovery. An unrestricted espousing of machine learning (ML), especially DL, in many scientific specialties, and the technological refinements in computing hardware and software, in concert with various aspects of the problem, sustain this progress. ML algorithms have been extensively engaged for computer-facilitated drug discovery. DL methods, such as artificial neural networks (ANNs) comprising multiple buried processing layers, have of late seen a resurgence due to their capability to power automatic attribute elicitations from the input data, coupled with their ability to obtain nonlinear input-output pertinencies. Such features of DL methods augment classical ML techniques which bank on human-contrived molecular descriptors. A major part of the early reluctance concerning utility of AI in pharmaceutical discovery has begun to melt, thereby advancing medicinal chemistry. AI, along with modern experimental technical knowledge, is anticipated to invigorate the quest for new and improved pharmaceuticals in an expeditious, economical, and increasingly compelling manner. DL-facilitated methods have just initiated kickstarting for some integral issues in drug discovery. Many technological advances, such as “message-passing paradigms”, “spatial-symmetry-preserving networks”, “hybrid de novo design”, and other ingenious ML exemplars, will definitely come to be pervasively widespread and help dissect many of the biggest, and most intriguing inquiries. Open data allocation and model augmentation will exert a decisive hold during the progress of drug discovery employing AI. This review will address the impending utilizations of AI to refine and bolster the drug discovery operation.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/857e2a687bea7e985287118f68cc2f702eb7f75a">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "126"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div127">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Concepts of Artificial Intelligence for Computer-Assisted Drug Discovery.</strong></h4>
                                    <h7 style="color:blue;"> Chemical reviews</h7>
                                    <p class="text-muted"> <em>Xin Yang and Yifei Wang and R. Byrne and G. Schneider and Sheng-yong Yang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Artificial intelligence (AI), and, in particular, deep learning as a subcategory of AI, provides opportunities for the discovery and development of innovative drugs. Various machine learning approaches have recently (re)emerged, some of which may be considered instances of domain-specific AI which have been successfully employed for drug discovery and design. This review provides a comprehensive portrayal of these machine learning techniques and of their applications in medicinal chemistry. After introducing the basic principles, alongside some application notes, of the various machine learning algorithms, the current state-of-the art of AI-assisted pharmaceutical discovery is discussed, including applications in structure- and ligand-based virtual screening, de novo drug design, physicochemical and pharmacokinetic property prediction, drug repurposing, and related aspects. Finally, several challenges and limitations of the current methods are summarized, with a view to potential future directions for AI-assisted drug discovery and design.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f8b012720a2322dcf4ed9ac4d61d6be11d9ebd10">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "127"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div128">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Machine Learning Methods in Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> Molecules</h7>
                                    <p class="text-muted"> <em>Lauv Patel and T. Shukla and Xiuzhen Huang and D. Ussery and Shanzhi Wang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The advancements of information technology and related processing techniques have created a fertile base for progress in many scientific fields and industries. In the fields of drug discovery and development, machine learning techniques have been used for the development of novel drug candidates. The methods for designing drug targets and novel drug discovery now routinely combine machine learning and deep learning algorithms to enhance the efficiency, efficacy, and quality of developed outputs. The generation and incorporation of big data, through technologies such as high-throughput screening and high through-put computational analysis of databases used for both lead and target discovery, has increased the reliability of the machine learning and deep learning incorporated techniques. The use of these virtual screening and encompassing online information has also been highlighted in developing lead synthesis pathways. In this review, machine learning and deep learning algorithms utilized in drug discovery and associated techniques will be discussed. The applications that produce promising results and methods will be reviewed.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Acgrommwtj.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "128"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div129">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Advancing Drug Discovery via Artificial Intelligence.</strong></h4>
                                    <h7 style="color:blue;"> Trends in pharmacological sciences</h7>
                                    <p class="text-muted"> <em>H. C. S. Chan and Hanbin Shan and T. Dahoun and H. Vogel and Shuguang Yuan</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: Emerging applications of AI to improve the drug discovery process are discussed here to make the hunt for new pharmaceuticals quicker, cheaper, and more effective.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Apdkiwvkbk.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "129"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div130">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Machine Learning in Drug Discovery: A Review</strong></h4>
                                    <h7 style="color:blue;"> Artificial Intelligence Review</h7>
                                    <p class="text-muted"> <em>Suresh Dara and Swetha Dhamercherla and S. S. Jadav and Christy M Babu and M. Ahsan</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This review provides the feasible literature on drug discovery through ML tools and techniques that are enforced in every phase of drug development to accelerate the research process and deduce the risk and expenditure in clinical trials.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/3a191f45f6c0e8ecc598dc349022b253a652b7f2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "130"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div131">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A Systematic Literature Review of the Current Status and Future Prospects of Machine Learning Methods and Techniques Applied to Novel Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> International Journal of Organizational and Collective Intelligence</h7>
                                    <p class="text-muted"> <em>Ali Abdelkrim and Abdelkrim Bouramoul and Imene Zenbout</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Drug development is the hardest phase for the pharmaceutical industry because it is extremely costly and time consuming. Though, due to the growing demand to produce safe and innovative medicines faster and more cost-effectively, the scientific community changed its objective into enhancing the lead identification and the lead optimization at the early discovery phase. This could be achieved using recent intelligent technologies that allow virtual screening as well as quantitative structure-activity relationship (QSAR) modeling to define the possible relationships between chemical compounds and biological activities. Among recent technologies, artificial intelligence (AI) has been introduced as a powerful solution to address problems related to drug discovery and development. In particular, machine learning (ML) has been meaningfully instrumental in the production of new drug candidates. In this work, we review the fundamental principles of machine learning algorithms, study and discuss their application and current issues in drug development.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/3bd804628d152c06ad7005cbcf2fb8e084793ab4">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "131"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div132">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial intelligence facilitates drug design in the big data era</strong></h4>
                                    <h7 style="color:blue;"> Chemometrics and Intelligent Laboratory Systems</h7>
                                    <p class="text-muted"> <em>Liang-Liang Wang and Jun-Jie Ding and Li Pan and Dongsheng Cao and Hui Jiang and Xiao-Qin Ding</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The application progress of AI technology in drug design process is summarized, analyses and compares its advantages over traditional methods, and the challenges faced by AI technology and its application prospects in the field of drug design are discussed.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Kgdhbxsjbh.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "132"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div133">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep learning in drug discovery: opportunities, challenges and future prospects.</strong></h4>
                                    <h7 style="color:blue;"> Drug discovery today</h7>
                                    <p class="text-muted"> <em>A. Lavecchia</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This work analyzes several relevant DL applications and case studies, providing a detailed view of the current state-of-the-art in drug discovery and highlighting not only the problematic issues, but also the successes and opportunities for further advances.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/e110138a24e9e5a4d4c9ce177c38a9abb624caf3">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "133"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div134">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>An overview of neural networks for drug discovery and the inputs used</strong></h4>
                                    <h7 style="color:blue;"> Expert Opinion on Drug Discovery</h7>
                                    <p class="text-muted"> <em>Yinqiu Xu and Hequan Yao and Kejiang Lin</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                ABSTRACT Introduction: Artificial intelligence systems based on neural networks (NNs) find rules for drug discovery according to training molecules, but first, the molecules need to be represented in certain ways. Molecular descriptors and fingerprints have been used as inputs for artificial neural networks (ANNs) for a long time, while other ways for describing molecules are used only for storing and presenting molecules. With the development of deep learning, variants of ANNs are now able to use different kinds of inputs, which provide researchers with more choices for drug discovery. Areas covered: The authors provide a brief overview of the applications of NNs in drug discovery. Combined with the characteristics of different ways for describing molecules, corresponding methods based on NNs provide new choices for drug discovery, including de novo drug design, ligand-based drug design, and receptor-based drug design. Expert opinion: Various ways for describing molecules can be inputs of NN-based models, and these models achieve satisfactory results in metrics. Although most of the models have not been widely applied and tested in practice, they can be the basis for automatic drug discovery in the future.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Facphrypwm.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "134"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div135">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>KekuleScope: prediction of cancer cell line sensitivity and compound potency using convolutional neural networks trained on compound images</strong></h4>
                                    <h7 style="color:blue;"> Journal of Cheminformatics</h7>
                                    <p class="text-muted"> <em>I. Cortés-Ciriano and A. Bender</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This work presents a set of ConvNet architectures for the prediction of compound activity from their Kekulé structure representations with state-of-the-art performance, that require no generation of compound descriptors or use of sophisticated image processing techniques.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Nezfqylrra.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "135"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div136">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial intelligence and machine learning‐aided drug discovery in central nervous system diseases: State‐of‐the‐arts and future directions</strong></h4>
                                    <h7 style="color:blue;"> Medicinal Research Reviews</h7>
                                    <p class="text-muted"> <em>Sezen Vatansever and A. Schlessinger and Daniel Wacker and H. Kaniskan and Jian Jin and Ming-Ming Zhou and Bin Zhang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Neurological disorders significantly outnumber diseases in other therapeutic areas. However, developing drugs for central nervous system (CNS) disorders remains the most challenging area in drug discovery, accompanied with the long timelines and high attrition rates. With the rapid growth of biomedical data enabled by advanced experimental technologies, artificial intelligence (AI) and machine learning (ML) have emerged as an indispensable tool to draw meaningful insights and improve decision making in drug discovery. Thanks to the advancements in AI and ML algorithms, now the AI/ML‐driven solutions have an unprecedented potential to accelerate the process of CNS drug discovery with better success rate. In this review, we comprehensively summarize AI/ML‐powered pharmaceutical discovery efforts and their implementations in the CNS area. After introducing the AI/ML models as well as the conceptualization and data preparation, we outline the applications of AI/ML technologies to several key procedures in drug discovery, including target identification, compound screening, hit/lead generation and optimization, drug response and synergy prediction, de novo drug design, and drug repurposing. We review the current state‐of‐the‐art of AI/ML‐guided CNS drug discovery, focusing on blood–brain barrier permeability prediction and implementation into therapeutic discovery for neurological diseases. Finally, we discuss the major challenges and limitations of current approaches and possible future directions that may provide resolutions to these difficulties.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Btgyoecvrw.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "136"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div137">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep Learning for Drug Design: an Artificial Intelligence Paradigm for Drug Discovery in the Big Data Era</strong></h4>
                                    <h7 style="color:blue;"> The AAPS Journal</h7>
                                    <p class="text-muted"> <em>Yankang Jing and Yuemin Bian and Ziheng Hu and Lirong Wang and X. Xie</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: Several most powerful and mainstream architectures, including the convolutional neural network, recurrent neural network (RNN), and deep auto-encoder networks (DAENs), for supervised learning and nonsupervised learning are discussed.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Rbtzyunjkt.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "137"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div138">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep Learning Based-Virtual Screening Using 2D Pharmacophore Fingerprint in Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> Neural Processing Letters</h7>
                                    <p class="text-muted"> <em>Seloua Hadiby and Y. M. B. Ali</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: A virtual screening procedure based on deep learning that aims to classify a set of chemical compounds as regards their biological activity on a particular receptor and shows that the proposed models are efficient and comparable with some widely used machine learning methods in drug discovery.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Hamzqxpyto.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "138"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div139">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Relevant Applications of Generative Adversarial Networks in Drug Design and Discovery: Molecular De Novo Design, Dimensionality Reduction, and De Novo Peptide and Protein Design</strong></h4>
                                    <h7 style="color:blue;"> Molecules</h7>
                                    <p class="text-muted"> <em>E. Lin and Chieh-Hsin Lin and H. Lane</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A growing body of evidence now suggests that artificial intelligence and machine learning techniques can serve as an indispensable foundation for the process of drug design and discovery. In light of latest advancements in computing technologies, deep learning algorithms are being created during the development of clinically useful drugs for treatment of a number of diseases. In this review, we focus on the latest developments for three particular arenas in drug design and discovery research using deep learning approaches, such as generative adversarial network (GAN) frameworks. Firstly, we review drug design and discovery studies that leverage various GAN techniques to assess one main application such as molecular de novo design in drug design and discovery. In addition, we describe various GAN models to fulfill the dimension reduction task of single-cell data in the preclinical stage of the drug development pipeline. Furthermore, we depict several studies in de novo peptide and protein design using GAN frameworks. Moreover, we outline the limitations in regard to the previous drug design and discovery studies using GAN models. Finally, we present a discussion of directions and challenges for future research.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ddsnrcyjqn.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "139"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div140">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Applications of artificial intelligence to drug design and discovery in the big data era: a comprehensive review</strong></h4>
                                    <h7 style="color:blue;"> Molecular Diversity</h7>
                                    <p class="text-muted"> <em>N. Tripathi and Manoj Kumar Goshisht and S. Sahu and C. Arora</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This review mainly summarizes the application progression of AI technology in the drug discovery process, and explores and compares its advantages over conventional methods.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Pdmfbemvit.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "140"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div141">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial Intelligence in Drug Design</strong></h4>
                                    <h7 style="color:blue;"> Molecules : A Journal of Synthetic Chemistry and Natural Product Chemistry</h7>
                                    <p class="text-muted"> <em>G. Hessler and K. Baringhaus</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Artificial Intelligence (AI) plays a pivotal role in drug discovery. In particular artificial neural networks such as deep neural networks or recurrent networks drive this area. Numerous applications in property or activity predictions like physicochemical and ADMET properties have recently appeared and underpin the strength of this technology in quantitative structure-property relationships (QSPR) or quantitative structure-activity relationships (QSAR). Artificial intelligence in de novo design drives the generation of meaningful new biologically active molecules towards desired properties. Several examples establish the strength of artificial intelligence in this field. Combination with synthesis planning and ease of synthesis is feasible and more and more automated drug discovery by computers is expected in the near future.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/9de90994a2bdde3d50926d966e5bac0bac690037">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "141"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div142">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Recent applications of deep learning and machine intelligence on in silico drug discovery: methods, tools and databases</strong></h4>
                                    <h7 style="color:blue;"> Briefings in Bioinformatics</h7>
                                    <p class="text-muted"> <em>A. Rifaioglu and Heval Atas and M. Martin and R. Cetin-Atalay and V. Atalay and Tunca Dogan</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Abstract The identification of interactions between drugs/compounds and their targets is crucial for the development of new drugs. In vitro screening experiments (i.e. bioassays) are frequently used for this purpose; however, experimental approaches are insufficient to explore novel drug-target interactions, mainly because of feasibility problems, as they are labour intensive, costly and time consuming. A computational field known as ‘virtual screening’ (VS) has emerged in the past decades to aid experimental drug discovery studies by statistically estimating unknown bio-interactions between compounds and biological targets. These methods use the physico-chemical and structural properties of compounds and/or target proteins along with the experimentally verified bio-interaction information to generate predictive models. Lately, sophisticated machine learning techniques are applied in VS to elevate the predictive performance. The objective of this study is to examine and discuss the recent applications of machine learning techniques in VS, including deep learning, which became highly popular after giving rise to epochal developments in the fields of computer vision and natural language processing. The past 3 years have witnessed an unprecedented amount of research studies considering the application of deep learning in biomedicine, including computational drug discovery. In this review, we first describe the main instruments of VS methods, including compound and protein features (i.e. representations and descriptors), frequently used libraries and toolkits for VS, bioactivity databases and gold-standard data sets for system training and benchmarking. We subsequently review recent VS studies with a strong emphasis on deep learning applications. Finally, we discuss the present state of the field, including the current challenges and suggest future directions. We believe that this survey will provide insight to the researchers working in the field of computational drug discovery in terms of comprehending and developing novel bio-prediction methods.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Zvzmjhkotu.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "142"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div143">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial intelligence in drug design</strong></h4>
                                    <h7 style="color:blue;"> Science China Life Sciences</h7>
                                    <p class="text-muted"> <em>Feisheng Zhong and Jing Xing and Xutong Li and Xiaohong Liu and Zunyun Fu and Zhaoping Xiong and D. Lu and Xiaolong Wu and Jihui Zhao and Xiaoqin Tan and Fei Li and Xiaomin Luo and Zhaojun Li and Kaixian Chen and Mingyue Zheng and Hualiang Jiang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: Recently, due to the strong generalization ability and powerful feature extraction capability, deep learning methods have been employed in predicting the molecular properties as well as generating the desired molecules, which will further promote the application of AI technologies in the field of drug design.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Hssfxzofuo.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "143"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div144">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Implementation of deep learning in drug design</strong></h4>
                                    <h7 style="color:blue;"> MedComm – Future Medicine</h7>
                                    <p class="text-muted"> <em>Bo Yang and Kan Li and Xiuqin Zhong and Jun Zou</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Qecreudydx.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "144"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div145">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Applications of machine learning in drug discovery and development</strong></h4>
                                    <h7 style="color:blue;"> Nature Reviews Drug Discovery</h7>
                                    <p class="text-muted"> <em>J. Vamathevan and Dominic Clark and Paul Czodrowski and I. Dunham and Edgardo Ferran and George Lee and Bin Li and A. Madabhushi and P. Shah and M. Spitzer and Shanrong Zhao</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The most useful techniques and how machine learning can promote data-driven decision making in drug discovery and development are discussed and major hurdles in the field are highlighted.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ymvkzyvxqn.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "145"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div146">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Learning continuous and data-driven molecular descriptors by translating equivalent chemical representations† †Electronic supplementary information (ESI) available: Detailed information regarding the final model architecture, hyperparameter grid, results and computation time. See DOI: 10.1039/c8sc04</strong></h4>
                                    <h7 style="color:blue;"> Chemical Science</h7>
                                    <p class="text-muted"> <em>R. Winter and F. Montanari and F. Noé and Djork-Arné Clevert</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Translation between semantically equivalent but syntactically different line notations of molecular structures compresses meaningful information into a continuous molecular descriptor.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Ogcihbwvxw.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "146"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div147">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>The rise of deep learning in drug discovery.</strong></h4>
                                    <h7 style="color:blue;"> Drug discovery today</h7>
                                    <p class="text-muted"> <em>Hongming Chen and O. Engkvist and Yinhai Wang and Marcus Olivecrona and T. Blaschke</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The first wave of applications of deep learning in pharmaceutical research has emerged in recent years, and its utility has gone beyond bioactivity predictions and has shown promise in addressing diverse problems in drug discovery.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Wcqydqlevw.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "147"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div148">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Virtual Screening Meets Deep Learning.</strong></h4>
                                    <h7 style="color:blue;"> Current computer-aided drug design</h7>
                                    <p class="text-muted"> <em>Javier Pérez-Sianes and H. Pérez‐Sánchez and Fernando Díaz</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                BACKGROUND
Automated compound testing is currently the de facto standard method for drug screening, but it has not brought the great increase in the number of new drugs that was expected. Computer- aided compounds search, known as Virtual Screening, has shown the benefits to this field as a complement or even alternative to the robotic drug discovery. There are different methods and approaches to address this problem and most of them are often included in one of the main screening strategies. Machine learning, however, has established itself as a virtual screening methodology in its own right and it may grow in popularity with the new trends on artificial intelligence.


OBJECTIVE
This paper will attempt to provide a comprehensive and structured review that collects the most important proposals made so far in this area of research. Particular attention is given to some recent developments carried out in the machine learning field: the deep learning approach, which is pointed out as a future key player in the virtual screening landscape.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f7907dd13a5be6b9ec85215a59ab018711843045">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "148"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div149">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Recent applications of machine learning in medicinal chemistry.</strong></h4>
                                    <h7 style="color:blue;"> Bioorganic & medicinal chemistry letters</h7>
                                    <p class="text-muted"> <em>J. Panteleev and Hua Gao and Lei Jia</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: In this review, examples of recent developments in machine learning application are described, which have the potential to impact different parts of the drug discovery and development flow scheme.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/8d652d9c4211b95ddec94012529b37714a980896">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "149"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div150">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Using Rule-Based Labels for Weak Supervised Learning: A ChemNet for Transferable Chemical Property Prediction</strong></h4>
                                    <h7 style="color:blue;"> Proceedings of the 24th ACM SIGKDD International Conference on Knowledge Discovery & Data Mining</h7>
                                    <p class="text-muted"> <em>Garrett B. Goh and C. Siegel and A. Vishnu and Nathan Oken Hodas</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                With access to large datasets, deep neural networks (DNN) have achieved human-level accuracy in image and speech recognition tasks. However, in chemistry data is inherently small and fragmented. In this work, we develop an approach of using rule-based knowledge for training ChemNet, a transferable and generalizable deep neural network for chemical property prediction that learns in a weak-supervised manner from large unlabeled chemical databases. When coupled with transfer learning approaches to predict other smaller datasets for chemical properties that it was not originally trained on, we show that ChemNet's accuracy outperforms contemporary DNN models that were trained using conventional supervised learning. Furthermore, we demonstrate that the ChemNet pre-training approach is equally effective on both CNN (Chemception) and RNN (SMILES2vec) models, indicating that this approach is network architecture agnostic and is effective across multiple data modalities. Our results indicate a pre-trained ChemNet that incorporates chemistry domain knowledge and enables the development of generalizable neural networks for more accurate prediction of novel chemical properties.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/cd5f2b71d97a8fc3cc2720e6f3ab5a16e47cba44">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "150"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div151">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep Learning in Chemistry</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and modeling</h7>
                                    <p class="text-muted"> <em>Adam C. Mater and M. Coote</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Machine learning enables computers to address problems by learning from data. Deep learning is a type of machine learning that uses a hierarchical recombination of features to extract pertinent information and then learn the patterns represented in the data. Over the last eight years, its abilities have increasingly been applied to a wide variety of chemical challenges, from improving computational chemistry to drug and materials design and even synthesis planning. This review aims to explain the concepts of deep learning to chemists from any background and follows this with an overview of the diverse applications demonstrated in the literature. We hope that this will empower the broader chemical community to engage with this burgeoning field and foster the growing movement of deep learning accelerated chemistry.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Papzwhqdug.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "151"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div152">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Application of In Silico Methods in Pharmacokinetic Studies During Drug Development</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>A. Hamidović and Ena Hasković and Sumeja Muhić and Matej Planinić and Naida Omerović and Selma Škrbo</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The aim of this study is to provide a theoretical overview of the application of computer-aided methods in pharmacokinetic studies during drug development, as they are cost-effective and time-saving, with good prediction accuracy.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/31bd7f0cc136ecd742bde935a2c7a2a117a79bab">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "152"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div153">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Applications of Machine Learning in Drug Discovery I: Target Discovery and Small Molecule Drug Design</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>J. Cassidy</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Drug discovery and development are long and arduous processes; recent figures point to 10 years and $2 billion USD to take a new chemical agent from discovery through to market. Moreover, though an approved blockbuster drug can be lucrative for the controlling pharmaceutical company, new therapeutic agents suffer from a 90% attrition during development, making the chances of success in the drug development process relatively low. Machine learning (ML) has re-emerged in the last several years as a powerful set of tools for unlocking value from large datasets. ML has shown great promise in improving efficiencies across numerous industries with high quality, vast, datasets. In an age of increasing access to highly curated rich sources of biological data, ML shows promise in reversing some of the negative trends shown in drug discovery and development. In this first part of our analysis of the application of ML to the drug discovery and development process, we discuss recent advances in the use of computational techniques in drug target discovery and lead molecule optimisation. We focus our analysis on oncology, though make reference to the wider field of human health and disease.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Eouldftzgs.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "153"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div154">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep Learning for Ligand-Based Virtual Screening in Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> 2018 3rd International Conference on Pattern Analysis and Intelligent Systems (PAIS)</h7>
                                    <p class="text-muted"> <em>Meriem Bahi and M. Batouche</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Due to the time and cost problems with traditional drug discovery, new methods must be found to increase the declining efficiency of traditional approaches. Virtual Screening (VS) is one possible solution to solve this problem. VS of databases has become an attractive method for pharmaceutical research. It plays a crucial role in the early stage of the drug discovery and development process. It aims to reduce the enormous search space of chemical compounds. As the number of ligands in the databases is increasing rapidly, this step should be both fast and effective in order to distinguish between active and inactive ligands. Deep learning algorithms can be used for screening big databases of molecules and classifying the ligands as drug-like and non-druglike against a particular protein target and therefore speed up the VS process. In this paper, we propose a fast compound classification method based on a deep neural network for Virtual Screening called (DNN-VS) using the Spark-H2O platform in order to label small molecules from huge databases. Experimental results have shown that the proposed approach outperforms state-of-the-art machine learning techniques with an overall accuracy more than 99%.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/278373eaaae4fefe867e713c9958b57a73a3b860">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "154"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div155">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>FNN Based-Virtual Screening Using 2D Pharmacophore Fingerprint for Activity Prediction in Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> Int. J. Comput. Intell. Appl.</h7>
                                    <p class="text-muted"> <em>Seloua Hadiby and Y. M. B. Ali</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Drug discovery remains a hard field that faces from the beginning of its process to the end many difficulties and challenges in order to discover a new potential drug. The use of technology has helped a lot in achieving many goals at the lowest cost and in the shortest possible time. Machine learning methods have proven for many years their performance although their limitations in some cases. The use of deep learning for virtual screening in drug discovery allows to process efficiently the huge amount of data and gives more precise results. In this paper, we propose a procedure for virtual screening (VS) based on Feedforward Neural Network in order to predict the biological activity of a set of chemical compounds on a given receptor. we have proposed a distance interval and it divisions to describe the chemical compound by the 2D pharmacophore fingerprint. Our model was trained on a dataset of active and inactive chemical compounds on cyclin A kinase1 receptor (CDK1), a very important protein family which has a role in the regulation of the cell cycle and cancer development. The results have proven that the proposed model is efficient and comparable with some widely used machine learning methods in drug discovery.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f330ce57988eaef7a26967c3785f77ee0c20fe75">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "155"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div156">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Development and evaluation of a deep learning model for protein–ligand binding affinity prediction</strong></h4>
                                    <h7 style="color:blue;"> Bioinformatics</h7>
                                    <p class="text-muted"> <em>Marta M. Stepniewska-Dziubinska and P. Zielenkiewicz and P. Siedlecki</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: A novel deep neural network is developed estimating the binding affinity of ligand‐receptor complexes by utilizing a 3D convolution to produce a feature map of this representation, treating the atoms of both proteins and ligands in the same manner.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Skjzqtqazw.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "156"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div157">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>The power of deep learning to ligand-based novel drug discovery</strong></h4>
                                    <h7 style="color:blue;"> Expert Opinion on Drug Discovery</h7>
                                    <p class="text-muted"> <em>I. Baskin</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                ABSTRACT Introduction Deep discriminative and generative neural-network models are becoming an integral part of the modern approach to ligand-based novel drug discovery. The variety of different architectures of neural networks, the methods of their training, and the procedures of generating new molecules require expert knowledge to choose the most suitable approach. Areas covered Three different approaches to deep learning use in ligand-based drug discovery are considered: virtual screening, neural generative models, and mutation-based structure generation. Several architectures of neural networks for building either discriminative or generative models are considered in this paper, including deep multilayer neural networks, different kinds of convolutional neural networks, recurrent neural networks, and several types of autoencoders. Several kinds of learning frameworks are also considered, including adversarial learning and reinforcement learning. Different types of representations for generating molecules, including SMILES, graphs, and several alternative string representations are also considered. Expert opinion Two kinds of problem should be solved in order to make the models built using deep neural networks, especially generative models, a valuable option in ligand-based drug discovery: the issue of interpretability and explainability of deep-learning models and the issue of synthetic accessibility of novel compounds designed by deep-learning algorithms.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/e70bf05fe991b631e6ac6cd8a269ca00498b6860">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "157"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div158">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Machine Learning for Antimicrobial Resistance Research and Drug Development</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>S. Shankarnarayan and Joshua Guthrie and Daniel A. Charlebois</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Machine learning is a subfield of artificial intelligence which combines sophisticated algorithms and data to develop predictive models with minimal human interference. This chapter focuses on research that trains machine learning models to study antimicrobial resistance and to discover antimicrobial drugs. An emphasis is placed on applying machine learning models to detect drug resistance among bacterial and fungal pathogens. The role of machine learning in antibacterial and antifungal drug discovery and design is explored. Finally, the challenges and prospects of applying machine learning to advance basic research on and treatment of antimicrobial resistance are discussed. Overall, machine learning promises to advance antimicrobial resistance research and to facilitate the development of antibacterial and antifungal drugs.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/d6be558dcef0100752434c1e8cd54ccc93d2e1ac">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "158"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div159">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Artificial Intelligence: A New Era in Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> Asian Journal of Pharmaceutical Research and Development</h7>
                                    <p class="text-muted"> <em>D. Mishra and Himani Awasthi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Artificial intelligence (AI) is a simulation of the process of human intelligence through computers. The process involves obtaining information, developing rules for using information, making possible or accurate conclusions, and self-correcting. The development of new drug residues begins when basic scientists learn about biological targets (receptor, enzyme, protein, and gene). These targets involve the biological processes that occur in patients with a disease. Drug discovery can be through target identification, target verification, lead identification, and effectiveness of lead. AI can offer revolutionary insights into medicine, through data from genetics, proteomics and other life sciences that advance the process of discovery and development. Artificial Intelligence (AI) has recently been developed as a fiery element in the medical care industry. AI has exciting potential for prosperity in the field of biopharmaceutical. The biopharmaceutical industry makes efforts to approach AI to improve drug discovery, reduce research and development costs, reduce the time and cost of early drug discovery, and support predicting potential risks/side effects in late trials that can be very useful in avoiding traumatic events in clinical trials and ultimately clinical trials. Usually, drug development takes five years to go to trial, but the AI drug takes just 12 months. The rapid growth in life sciences and machine learning algorithms has led to enormous statistical access to the growth of AI-based startups focused on drug innovation in recent years. 


                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a173f01ef753f798e22279cbd84b7f6c04275ca0">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "159"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div160">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Applications of Machine Learning in Drug Discovery II: Biomarker Discovery, Patient Stratification and Pharmacoeconomics</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>J. Cassidy</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Cancer remains a leading cause of morbidity and mortality around the world. Despite significant advances in our understanding of the pathology of the disease, and the substantial public and private investment into treatment development, late-stage patients often exhaust therapeutic options. Indeed, in the US alone, there were >1.7 million new cancer diagnoses and >600,000 cancerassociated deaths in 2019. As biology in general and cancer research in particular become ever richer in data, we explore the role of machine learning (ML) in changing the cancer drug development landscape. In the first part of this analysis, we focussed on ML for target identification and drug design. We discussed the growing need for ML-based analysis as we enter an age of clinical -omic data and provided a primer to ML-based techniques for the non-statistician/ mathematician. In this chapter, we will explore the problem of tumour heterogeneity together with the role of ML in the discovery and development of cancer biomarkers and for clinical trial design. We end with a brief consideration of the economics of personalised cancer treatment.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Csmwblwaax.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "160"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div161">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Prototype-Based Compound Discovery Using Deep Generative Models.</strong></h4>
                                    <h7 style="color:blue;"> Molecular pharmaceutics</h7>
                                    <p class="text-muted"> <em>Shahar Harel and Kira Radinsky</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Designing a new drug is a lengthy and expensive process. As the space of potential molecules is very large ( Polishchuk , P. G. ; Madzhidov , T. I. ; Varnek , A. Estimation of the size of drug-like chemical space based on GDB-17 data . J. Comput.-Aided Mol. Des. 2013 , 27 , 675 -679 10.1007/s10822-013-9672-4 ), a common technique during drug discovery is to start from a molecule which already has some of the desired properties. An interdisciplinary team of scientists generates hypothesis about the required changes to the prototype. In this work, we develop a deep-learning unsupervised-approach that automatically generates potential drug molecules given a prototype drug. We show that the molecules generated by the system are valid molecules and significantly different from the prototype drug. Out of the compounds generated by the system, we identified 35 known FDA-approved drugs. As an example, our system generated isoniazid, one of the main drugs for tuberculosis. We suggest several ranking functions for the generated molecules and present results that the top ten generated molecules per prototype drug contained in our retrospective experiments 23 known FDA-approved drugs.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Jqlhtslsty.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "161"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div162">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Internet Addiction Predictor: Applying Machine Learning in Psychology</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>S. Suma and P. Nataraja and M. Sharma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The paper aims to pursue the possibilities of predicting Internet addiction based on a set of predictor variables such that there exists a strong relationship between the parameters considered to have an influence toward problematic Internet usage.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/6db8df523e00fdf34afd332191615bca42fd38ac">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "162"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div163">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>The Impact of Partial Balance of Imbalanced Dataset on Classification Performance</strong></h4>
                                    <h7 style="color:blue;"> Electronics</h7>
                                    <p class="text-muted"> <em>Qing Li and Chang Zhao and Xintai He and Kung-Hao Chen and Runze Wang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The imbalance of network data seriously affects the classification performance of algorithms. Most studies have only used a rough description of data imbalance with less exploration of the specific factors affecting classification performance, which has resulted in difficulty putting forward targeted solutions. In this paper, we find that the impact of medium categories on classification performance cannot be ignored, and therefore propose the concept of partial balance, consisting of Class Number of Partial Balance (β) and Balance Degree of Partial Samples (μ). Combined with Global Slope (α), a parameterized model is established to describe the difference of imbalanced datasets. Experiments are performed on the Moore Dataset and CICIDS 2017 Dataset. The experiment’s results on Random Forest, Decision Tree and Deep Neural Network show increasing α is a conducive step in the performance improvement of minority classes and overall classes. When β of dominant categories increases, that of inferior classes decreases, which results in a decrease in the average performance of minority classes. The lower μ is, the closer the sample size of medium classes is to the minority classes, and the better the average performance is. Based on the conclusions, we propose and verify some basic strategies by various classical algorithms.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/9a77a1df4c603f9c0684696d0489f377f95e0923">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "163"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div164">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Medication Revelation Utilizing Neural Network</strong></h4>
                                    <h7 style="color:blue;"> Learning and Analytics in Intelligent Systems</h7>
                                    <p class="text-muted"> <em>V. S. Kushwah and Ashish Solanki and Bhavya Manoj Votavat and Aman Jain</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/Rafcefrmdk.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "164"></a>';}?>
        
                            </div>
                        </div>
                    </div></div>
            </div>
        </div>
    </section>        
<script>
  
  // Access the array elements
  var passedArray = 
      <?php echo json_encode($items); ?>;
  // Display the array elements
  for(var i = 0; i < passedArray.length; i++){
    var div_id = "update-div".concat(i+1);
    elem = document.getElementById(div_id);
    if (passedArray[i] == 1){
        elem.setAttribute("style", "background-color:skyblue");}
  }
  </script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js">
  </script>
  <script src="assets/smoothscroll/smooth-scroll.js">
  </script>
  <script src="assets/ytplayer/index.js">
  </script>
  <script src="assets/dropdown/js/navbar-dropdown.js">
  </script>
  <script src="assets/mbr-tabs/mbr-tabs.js">
  </script>
  <script src="assets/theme/js/script.js">
  </script>
  <script src="assets/formoid/formoid.min.js">
  </script>
  <script src="main.js">
  </script>
  <div class="scrollToTop mbr-arrow-up" id="scrollToTop">
   <a style="text-align: center;">
    <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up">
    </i>
   </a>
  </div>
 </body>
</html>