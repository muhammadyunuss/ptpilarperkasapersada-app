<div class="w-100 pt-70 pb-20 bg-color1 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                <div class="logo">
                                <h1 class="mb-0"><a href="index.html" title="Home"><img style="width:50%" class="img-fluid" src="{{ asset('front') }}/assets/images/logofix-footer.png" srcset="{{ asset('front') }}/assets/images/logofix-footer.png" alt="Logo 2"></a></h1>
                             </div><!-- Logo -->
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="second">
                        <h4> Menu</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="third">
                        <h4> Contact</h4>
                        <ul>
                            <li>Andreea Mihaela Bunget </li>
                            <li></li>


                          <li><i class="far fa-envelope"></i> andreea@andreeabunget.co.uk</li>
                            <li><i class="far fa-envelope"></i> email@yahoo.com</li>


                          <li><i class="fas fa-map-marker-alt"></i> London, UK </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                    <div class="second2">
                        <a href="https://codepen.io/AndreeaBunget" target="_blank"> <i class="fab fa-codepen fa-2x margin"></i></a>
                        <a href="https://github.com/WebDeveloperCodeRep" target="_blank"> <i class="fab fa-github fa-2x margin"></i></a>
                        <a href="https://www.linkedin.com/in/andreea-mihaela-bunget-a4248812b/" target="_blank"> <i class="fab fa-linkedin fa-2x margin"></i></a>
                        <a href="https://www.youtube.com/channel/UCX674BUbomzBCakbb75lhfA?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x margin" ></i></a>

                    </div>

                </div>
            </div>
            </div>
    </div>

    <style scoped>* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.footer {
    background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("http://andreeabunget.co.uk/Img/footer.jpg");
    background-size: cover;
    
}



.first {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
}

    .first h4 {
        font-size: 20px;
        letter-spacing: 3px;
        position: relative;
        margin-bottom: 20px;
        font-size: 1.6em;
        color: #fff;
        padding-bottom: 0.5em;
    }

        .first h4::after {
            content: '';
            background: #66c83d;
            width: 20%;
            height: 2px;
            position: absolute;
            bottom: 0;
            left: 0;
        }

    .first p {
        font-size: 14px;
    }

.second {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.second2 {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.second h4 {
    font-size: 20px;
    letter-spacing: 3px;
    position: relative;
    margin-bottom: 20px;
    font-size: 1.6em;
    color: #fff;
    padding-bottom: 0.5em;
}


.second li {
    list-style: none;
    padding-bottom: 30px;
}

.second a, .second2 a {
    color: rgb(206, 206, 206);
    text-decoration: none;
    letter-spacing: 3px;
    font-weight: bold;
    font-size: 14px;
    transition: 0.2s;
}



.third {
    margin-top: 40px;
    margin-bottom: 50px;
    color: rgb(206,206,206);
    font-family: 'Poppins', sans-serif;
    text-align: right;
}


    .third h4 {
        font-size: 20px;
        letter-spacing: 3px;
        position: relative;
        margin-bottom: 20px;
        font-size: 1.6em;
        color: #fff;
        padding-bottom: 0.5em;
    }


        .third h4::after {
            content: '';
            background: #66c83d;
            width: 20%;
            height: 2px;
            position: absolute;
            bottom: 0;
            left: 80%;
        }



    .third li {
        list-style: none;
        padding-bottom: 15px;
    }


    .third a {
        color: rgb(206, 206, 206);
        text-decoration: none;
        letter-spacing: 3px;
        font-weight: bold;
        font-size: 14px;
        transition: 0.2s;
    }


        .third a:hover {
            color: #fff;
            transition: 0.2s;
            text-shadow: 1px 1px 20px rgba(0,0,0,1);
        }


@media screen and (max-width:1000px) {
    .first {
        text-align: center;
    }

        .first h4::after {
            left: 40%;
        }
}

@media screen and (max-width:1000px) {
    .third {
        text-align: center;
    }

        .third h4::after {
            left: 40% !important;
        }
}

.margin {
    margin-left: 20px;
}

.line {
    height:2px;
    background-color:rgb(206,206,206);
    width:100%;
}

.container h1{
    text-align:center;
    margin-top:100px;
    margin-bottom:100px;
}</style>