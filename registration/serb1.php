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
  </div>
    <section data-bs-version="5.1" class="features9 cid-tvA5SQ6yVu mbr-parallax-background" id="features10-j">
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
                                <a class="slide btn text-center" id="button" target="_blank" href="taskinen2003.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="delaney2005.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yao2002.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="livingstone2001.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="ghasemi2009.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="huuskonen2001.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="dearden2006.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="taskinen2007.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="10.1016@J.JTICE.2008.08.001.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yao2002.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yao2010.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="wassvik2006.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yan2003.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="katritzky2002.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="jorgensen2000.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yan2003.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="huuskonen2000.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="lobell2003.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="wang2004.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yao2002.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="tetko2001.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yang2002.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="jorgensen2002.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="devillers2009.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="huuskonen1999.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="huuskonen2010.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="tetko2001.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="huuskonen2000.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="huuskonen2003.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="tetko2007.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="katritzky2000.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="mannhold2009.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="liu2001.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="yaffe2001.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="zhong2003.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="xu2005.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="liu2007.pdf">&nbsp;
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
                                <a class="slide btn text-center" id="button" target="_blank" href="xu2006.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "41"></a>';}?>
        
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