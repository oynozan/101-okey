<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>101 Okey</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/oyun.css">
</head>
<body>
    <div class="container-fluid max-width-1920">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-12 col-xl-8">
                <div class="row">
                    <div class="header">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="rgb(0, 46, 105)" fill-opacity="1" d="M0,256L48,224C96,192,192,128,288,112C384,96,480,128,576,154.7C672,181,768,203,864,224C960,245,1056,267,1152,266.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>

                        <div class="header-top">
                            <div class="profile">
                                <div>
                                    <p><span>Lorem I.</span></p>
                                    <img src="images/pp.png">
                                </div>

                                <div class="coin">
                                    <div>
                                        <span>4000</span>
                                        <img src="images/coins.png">
                                    </div>
                                    <div class="progress">
                                        <img src="images/star.png">
                                        <span>3</span>
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="logo">
                                <img src="images/logo.png">
                            </div>
                            <div class="settings">
                                <button><img src="images/profile.png"></button>
                                <button class="chat-button"><img src="images/chat.png"></button>
                                <button><img src="images/settings.png"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-1 side-menu-container">
                        <div class="side-menu left-menu">
                            <button><img src="images/plus.png"></button>
                            <button><img src="images/friends.png"></button>
                            <button><img src="images/chat2.png"></button>
                            <button><img src="images/wheel.png"></button>
                            <button><img src="images/trophy.png"></button>
                            <button><img src="images/treasure.png"></button>

                            <button class="hide-button hide-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9 main-container">
                        <div class="main">
                            <div class="create-game">
                                <button class="hide-button hide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                                    </svg>
                                </button>
                                <div>
                                    <button class="room-name">ODA: Lorem Ipsum</button>
                                    <button>Masadan Kalk</button>
                                </div>
                                <button class="hide-button hide-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                                        <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="announcement">
                                <marquee scrollamount="14">Lorem ipsum dolor sit amet consectetur adipisicing elit.</marquee>
                            </div>

                            <div class="tables">
                                <div class="background"></div>
                                <div class="game-container">

                                    <div class="other-players">
                                        <div class="okey-container"></div>
                                        <div class="okey-container"></div>
                                        <div class="okey-container"></div>
                                        <div class="okey-container"></div>

                                        <div class="other-player first-player">
                                            <img src="images/pp.png">
                                            <div>
                                                <span>Lorem Ipsum</span>
                                                <span class="score">600</span>
                                            </div>
                                        </div>
                                        <div class="other-player second-player">
                                            <img src="images/pp.png">
                                            <div>
                                                <span>Lorem Ipsum</span>
                                                <span class="score">600</span>
                                            </div>
                                        </div>
                                        <div class="other-player third-player">
                                            <img src="images/pp.png">
                                            <div>
                                                <span>Lorem Ipsum</span>
                                                <span class="score">600</span>
                                            </div>
                                        </div>
                                        <div class="other-player fourth-player">
                                            <img src="images/pp.png">
                                            <div>
                                                <span>Lorem Ipsum</span>
                                                <span class="score">600</span>
                                            </div>
                                        </div>

                                        <div class="middle-okey-container">
                                            <div class="middle-okey">
                                                <img src="images/game/ki9.png">
                                            </div>
                                            <div class="middle-okey">
                                                <img src="images/game/tasbg.png">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="player">
                                        <img src="images/game/istaka.png">
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-menu">
                                <button class="chat-button"><img src="images/chat.png"></button>
                                <button class="players-button"><img src="images/players-table.png"></button>
                                <button class="chat-fullscreen-button"><img src="images/fullscreen.png"></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-2 side-menu-container">
                        <div class="side-menu right-menu">
                            <div class="title-container">
                                <h6>Salondakiler</h6>
                            </div>
                            <div class="users">
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>300</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>5213</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>231</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>52334</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>23</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>2</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>23523</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>3432</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullanıcı Adı</p>
                                        <span>300</span><img src="images/coins.png">
                                    </div>
                                </div>
                            </div>

                            <button class="hide-button hide-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                    <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row chat">
                    <div class="col-8 chat-container">
                        <div class="messages">
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullanıcı Adı</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullanıcı Adı</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullanıcı Adı</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullanıcı Adı</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullanıcı Adı</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullanıcı Adı</p>
                                <span>Merhaba!</span>
                            </div>
                        </div>
                        <div class="text-container">
                            <input class="chat-input">
                            <img src="images/send.png" class="send-message">
                        </div>
                    </div>
                    <div class="col-4 players-in-game">
                        <h4>Masadakiler</h4>
                        <div class="ingame-list">
                            <div class="user">
                                <img src="images/pp.png">
                                <div>
                                    <p>Lorem Ipsum</p>
                                    <p>600</p>
                                </div>
                            </div>
                            <div class="user">
                                <img src="images/pp.png">
                                <div>
                                    <p>Lorem Ipsum</p>
                                    <p>600</p>
                                </div>
                            </div>
                            <div class="user">
                                <img src="images/pp.png">
                                <div>
                                    <p>Lorem Ipsum</p>
                                    <p>600</p>
                                </div>
                            </div>
                            <div class="user">
                                <img src="images/pp.png">
                                <div>
                                    <p>Lorem Ipsum</p>
                                    <p>600</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/buttons.js"></script>
    <script src="js/hide-menu.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/resolution.js"></script>
</body>
</html>