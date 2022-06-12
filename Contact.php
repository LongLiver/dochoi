<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style type="text/css">
        .qq {
            background-color: gray;
            margin: auto;
        }

        .wrapper {
            width: 1200px;
            margin: auto;
        }

        .header {
            height: 500px;
            border: 1px solid dashed;
            background-color: darkseagreen;
        }

            .header img {
                float: left;
            }

        #form-search {
            margin-top: 35px;
        }

            #form-search input[type=text] {
                width: 300px;
                height: 30px;
            }

        .menu {
            height: 60px;
            background-color: darkseagreen;
        }

            .menu ul li {
                list-style: none;
                text-align: center;
                display: inline-table;
                color: white;
            }

                .menu ul li a {
                    text-decoration: none;
                    font-size: 20px;
                    margin: 30px;
                    padding: 5px;
                    text-transform: uppercase;
                }

        .content {
            height: 800px;
        }

        .left {
            width: 20%;
            background-color: red;
            float: left;
            height: 800px;
        }

            .left > p {
                background-color: white;
                font-size: 22px;
                font-family: Arial;
                text-align: center;
            }

        .category ul li {
            list-style: none;
        }

            .category ul li a {
                color: white;
                font-size: 20px;
                text-decoration: none;
                font-family: 'Comic Sans MS';
            }

        .category a:hover {
            text-decoration: underline;
        }



        .brand ul li {
            list-style: none;
        }

            .brand ul li a {
                color: white;
                font-size: 20px;
                text-decoration: none;
                font-family: 'Comic Sans MS';
            }

        .brand a:hover {
            text-decoration: underline;
        }

        .right {
            width: 100%;
            background-color: darkseagreen;
            height: 800px;
        }

            .right > p {
                text-align: center;
                font-size: 20px;
            }

        .single-product {
            float: left;
            margin-left: 30px;
        }

            .single-product img {
                border: 2px solid;
            }

        .footer {
            height: 480px;
            border: 1px solid none;
            background-color: white;
        }

        ::placeholder {
            color: black;
        }

        .footercontent {
            color: gray;
            text-align: center;
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="qq">
        <div class="wrapper">
            <div class="header">
                <img style="height:120px;width:120px" src="https://upload.wikimedia.org/wikipedia/vi/thumb/0/0c/Liverpool_FC.svg/175px-Liverpool_FC.svg.png" />
                <p style="font-size:60px;font-family:'Comic Sans MS';text-align:center;"><b>Liverpool Sportswear</b></p>
                <div class="img header">
                    <img style=" height: 400px; width: 1200px;" src="https://backend.liverpoolfc.com/sites/default/files/styles/xl/public/acquiadam/2021-11/atletico-highlights-03112021.jpg?itok=k0a4QCff&width=1680" />
                </div>
            </div>

            <div class="menu">
                <ul style="font-family:'Comic Sans MS';font-size:30px;color:black;text-align:center;">
                    <li><a href=""> Home </a></li>
                    <li><a href=""> Introduce </a></li>
                    <li><a href=""> Contact </a></li>
                    <li><a href="file:///C:/Users/admin/Downloads/login.html" target="_blank"> Login </a></li>
                    <li><a href="file:///C:/Users/admin/Downloads/resgiter.html?Account=&email=&tel=&url=&info=&info=" target="_blank"> Register </a></li>
                    <li>
                        <select style="background-color:blueviolet;color: black;border-left: none;border-right: none;border-top: none;border-bottom: 2px solid darkred;width: 130px;">
                            <option>Menu</option>
                            <option>Sports clothing</option>
                            <option>Types of soccer balls</option>
                            <option>Adidas sports shoes</option>
                            <option>Nike sports shoes</option>
                            <option>Puma sports shoes</option>
                            <option>Goalkeeper gloves</option>
                            <option>Types of soft nets</option>
                        </select>
                    </li>
                </ul>
            </div>

            <div class="right">
                <p style="font-family:'Comic Sans MS';font-size:30px;"><b>CONTACT</b></p>
                <p style="font-family:'Comic Sans MS';font-size:20px;"><b>Address:</b> No. 1 Tran Duy Hung Street, Hanoi City.</p></br>
                <p  style="font-family:'Comic Sans MS';font-size:20px;"><b><a href="https://www.facebook.com/long.tank.39"> Personal facebook page</a></b>  </p></br>
  <p style="font-family:'Comic Sans MS';font-size:20px;"><b>Phone number:</b>   0972177499</p>
            <img style="height:400px;width:1200px;" src="https://backend.liverpoolfc.com/sites/default/files/styles/xl/public/acquiadam/2021-11/GettyImages-1351159326.jpg?itok=nTqC_lZo&width=1680"/>
        </div>

        <div class="footer">

            <div class="footercontent">
                <p style="font-family: 'Comic Sans MS'; font-size: 30px;"><b>Register Now to become a member of Liverpool Sportswear  You will receive special offers on every purchase </b></p>
                <input type="text" name="" placeholder="EMAIL ADDRESS *" style="background-color:greenyellow; border-color: darkred;border-top: none;border-left: none;border-right: none;width: 300px;">
                <select style="background-color:greenyellow;color: black;border-left: none;border-right: none;border-top: none;border-bottom: 2px solid darkred;width: 300px;">
                    <option>SELECT YOUR COUNTRY *</option>
                    <option>VIETNAM</option>
                    <option>UNITED STATE</option>
                    <option>UNITED KINGDOM</option>
                    <option>DENMARK</option>
                    <option>ITALIA</option>
                    <option>BELGIUM</option>
                    <option>FRANCE</option>
                </select>
                <p style="font-family:'Comic Sans MS';font-size: 18px;">We will reply you as soon as possible!!</p>
                <input type="submit" name="" style="background-color:black;color: rgb(255, 228, 225);border: none; width: 150px;height: 60px;">
            </div>
        </div>


    </div>
    </div>
</body>
</html>