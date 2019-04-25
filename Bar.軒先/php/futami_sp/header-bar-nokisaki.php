<!-- CSSを記述 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Bar.軒先</title>   
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="responsive.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
    
      /*フェードイン設定*/

      .fadein {
        opacity : 0;
        transform : translate(0, 50px);
        transition:all 1s;
      }
      .fadein.scrollin {
        opacity : 1;
        transform : translate(0, 0);
      }
      ul {
        list-style-type: none;
      }

      /* ここまでフェードイン */

      a{
          text-decoration: none;
      }

      body{
          text-align: center;
          font-family: 'M PLUS 1p', sans-serif;
      }

      .hazimete{
          padding: 50px 0 0 0;
      }

      .hazimete p{
          font-size: 30px;
      }

      .info{
          font-size:30px;
      }

      .info1{
          font-weight: bold;
          padding-top: 50px;
      }

      .time{
          font-size: 25px;
      }

      .menu{
          padding:50px 0 50px 0;
      }

      header img{
          height: 300px;
      }
      
      .clear{
          clear: both;
      }

      /* アイコン */
      .icons{
          padding-top: 50px;
      }

      .icon{
          float: left;
          width:50%;
      }
      .icon img{
          width: 95%;
      }
      
      .icon p{
          font-size: 12px;
          font-weight: bold;
          padding-top: 10px;
          padding-bottom:100px;
          margin: 0;
          height:50px;
      }

      .sns{
          font-size:30px;
          padding: 50px 0px 50px 0px;
      }

      footer{
          padding-top:80px;
          padding-bottom: 50px;
      }
      
     .minimap{
         display: block;
     }

     .atension{
        padding-bottom:0;
     }
    
    </style>
</head>
<body>
<header>
    <img src="image/bar-logo.jpg" alt="Bar軒先">
</header>