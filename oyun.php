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
    <div class="background"></div>
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

                        <div class="header-bottom">
                            <button class="oda-sec-button">ODA SE??</button>
                            <button>ARKADA??LAR</button>
                            <button class="middle-button">MASA OLU??TUR</button>
                            <button>SATIN AL</button>
                            <button>EN ??Y??LER</button>
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
                            <div class="create-game ingame-create-game">
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
                                <div class="game-container">

                                    <div class="coin-container">
                                        <img src="images/game/puanicon2.png">
                                        <span>900</span>
                                    </div>
                                    <div class="canak-container">
                                        <span>0</span>
                                        <img src="images/game/canakicon.png">
                                    </div>

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

                                        <img src="images/game/cift-git.png" class="cifte-git">
                                        <img src="images/game/seri-git.png" class="seri-git">

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

                            <div class="oda-container">
                                <div class="oda-sec-container">
                                    <div class="oda oda-title">
                                        <h3>Oda</h3>
                                        <h3>Oynayan</h3>
                                        <h3>Min. Giri??</h3>
                                        <h3>Bahis Aral??????</h3>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                    <div class="oda">
                                        <h3>YEN?? BA??LAYANLAR</h3>
                                        <p>5 <img src="images/users.png"></p>
                                        <p>40.000</p>
                                        <p>750-4.999 ????P</p>
                                    </div>
                                </div>
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
                                        <p>Kullan??c?? Ad??</p>
                                        <span>300</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
                                        <span>5213</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
                                        <span>231</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
                                        <span>52334</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
                                        <span>23</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
                                        <span>2</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
                                        <span>23523</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
                                        <span>3432</span><img src="images/coins.png">
                                    </div>
                                </div>
                                <div class="user">
                                    <img src="images/pp.png">
                                    <div>
                                        <p>Kullan??c?? Ad??</p>
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
                                <p>Kullan??c?? Ad??</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullan??c?? Ad??</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullan??c?? Ad??</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullan??c?? Ad??</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullan??c?? Ad??</p>
                                <span>Merhaba!</span>
                            </div>
                            <div class="message">
                                <img src="images/pp.png">
                                <p>Kullan??c?? Ad??</p>
                                <span>Merhaba!</span>
                            </div>
                        </div>
                        <div class="text-container">
                            <input class="chat-input">
                            <img src="images/emoji.png" class="emoji-menu">
                            <img src="images/send.png" class="send-message">
                        </div>
                    </div>
                    <div class="col-4 players-in-game">
                        <button class="sistemden-cikis-yap">??</button>
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
    
    <!--Masa Olu??turma-->
    <div class="modal" tabindex="-1" id="create-lobby">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="images/banner.png" class="banner">
                    <h4>Yeni Masa Olu??tur</h4>

                    <div class="row first-selection-container">
                        <div class="col-6">
                            <label>Oyunlar: </label>
                            <select id="oyunlar" class="form-control selection-input">
                                <option>Okey</option>
                                <option>??anak</option>
                                <option>101</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Oyuncu Say??s??: </label>
                            <select id="oyuncu-sayisi" class="form-control selection-input">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Masa ??smi">
                    </div>
                    <div class="row second-selection-container">
                        <div class="col-6">
                            <label>Chip Miktar??: </label>
                            <select id="chip-miktari" class="form-control selection-input">
                                <option>100</option>
                                <option>250</option>
                                <option>500</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Bekleme S??resi: </label>
                            <select id="bekleme-suresi" class="form-control selection-input">
                                <option>20</option>
                                <option>40</option>
                                <option>60</option>
                                <option>80</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Ayarlar:</p>
                            <input type="checkbox"><span>Masa sohbeti kapal??</span><br>
                            <input type="checkbox"><span>??zleyici sohbeti kapal??</span><br>
                            <input type="checkbox"><span>Masaya izleyici alma</span><br>
                            <input type="checkbox"><span>E??li Oyun</span><br>
                            <input type="checkbox"><span>??anakl??</span><br>
                            <input type="checkbox"><span>G??stergeli</span><br>
                            <input type="checkbox"><span>Renkli</span><br>
                        </div>
                        <div class="col-6">
                            <p>D??????lecek Puan:</p>
                            <input type="radio" name="puan"><span>Tek El</span><br>
                            <input type="radio" name="puan"><span>8</span><br>
                            <input type="radio" name="puan"><span>16</span><br>
                            <input type="radio" name="puan"><span>24</span><br>
                            <input type="radio" name="puan"><span>32</span><br>
                            <input type="radio" name="puan"><span>40</span><br>
                        </div>
                    </div>
                    <div class="row buttons-container">
                        <input value="OLU??TUR" type="button">
                        <input value="VAZGE??" type="button" onclick="javascript: m.hide()">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--???????????? Profil Modal ????????????-->
    <!--?????? buttons.js'de p de??i??keninde tan??ml??. Butona ba??lamak i??in onclick event'i olarak p.show() atamal??s??n ??????-->
    <div class="modal" tabindex="-1" id="profilim">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="images/banner2.png" class="banner">
                    <h4>Lorem Ipsum</h4><br><br>

                    <div class="profil-container">
                        <div class="profile-info">
                            <div class="top-profile-info">
                                <img src="images/pp.png">
                                <img src="images/star.png" class="level">
                                <span>0</span>
                                <div class="profile-buttons">
                                    <button class="engelle">
                                        <img src="images/block.png">
                                    </button>
                                    <button class="mesaj-gonder">
                                        <img src="images/message.png">
                                    </button>
                                    <button class="hediye-gonder">
                                        <img src="images/gift.png">
                                    </button>
                                </div>
                            </div>
                            <div class="bottom-profile-info">
                                <img src="images/puan.png" class="puan">
                                <p>30.000</p>
                            </div>
                        </div>
                        <div class="profile-stats">
                            <table cellpadding="10">
                                <tr>
                                    <td><img src="images/i1.png">Toplam oyun say??s??</td>
                                    <td><span>2</span></td>
                                </tr>
                                <tr>
                                    <td><img src="images/i2.png">Kazand?????? oyun say??s??</td>
                                    <td><span>1</span></td>
                                </tr>
                                <tr>
                                    <td><img src="images/i3.png">Kaybetti??i oyun say??s??</td>
                                    <td><span>1</span></td>
                                </tr>
                                <tr>
                                    <td><img src="images/i4.png">Galibiyet y??zdesi</td>
                                    <td><span>%50</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <img class="close-button" src="images/pencerekapat.png" onclick="javascript: p.hide()">
                </div>
            </div>
        </div>
    </div>

    <!--???????????? Radyo Modal ????????????-->
    <!--?????? buttons.js'de r de??i??keninde tan??ml??. Butona ba??lamak i??in onclick event'i olarak r.show() atamal??s??n ??????-->
    <div class="modal" tabindex="-1" id="radio">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="images/radyo.png" class="radio-image">
                    <div class="radio-content">
                        <p>L??tfen a??a????dan ??ark?? se??iniz ????</p>
                        <div class="music-list">
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                            <div>Lorem Ipsum <img src="images/playicon.png"></div>
                        </div>
                    </div>

                    <div class="button-menu">
                        <button class="close-button" onclick="javascript: r.hide()">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--???????????? Chip Modal ????????????-->
    <!--?????? buttons.js'de c de??i??keninde tan??ml??. Butona ba??lamak i??in onclick event'i olarak c.show() atamal??s??n ??????-->
    <div class="modal" tabindex="-1" id="chip">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="chip-shop-content">
                        <table>
                            <thead>
                                <tr>
                                    <td>
                                        <p>CO??N M??KTARI</p>
                                    </td>
                                    <td>
                                        <p>F??YAT</p>
                                    </td>
                                    <td>
                                        <p>SATIN AL</p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p><img src="images/coins.png">10000</p>
                                    </td>
                                    <td>
                                        <p class="fiyat">5 TL</p>
                                    </td>
                                    <td>
                                        <button class="buy-button">SATIN AL</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><img src="images/coins.png">10000</p>
                                    </td>
                                    <td>
                                        <p class="fiyat">5 TL</p>
                                    </td>
                                    <td>
                                        <button class="buy-button">SATIN AL</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><img src="images/coins.png">10000</p>
                                    </td>
                                    <td>
                                        <p class="fiyat">5 TL</p>
                                    </td>
                                    <td>
                                        <button class="buy-button">SATIN AL</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><img src="images/coins.png">10000</p>
                                    </td>
                                    <td>
                                        <p class="fiyat">5 TL</p>
                                    </td>
                                    <td>
                                        <button class="buy-button">SATIN AL</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><img src="images/coins.png">10000</p>
                                    </td>
                                    <td>
                                        <p class="fiyat">5 TL</p>
                                    </td>
                                    <td>
                                        <button class="buy-button">SATIN AL</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><img src="images/coins.png">10000</p>
                                    </td>
                                    <td>
                                        <p class="fiyat">5 TL</p>
                                    </td>
                                    <td>
                                        <button class="buy-button">SATIN AL</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--???????????? Davet Modal ????????????-->
    <!--?????? buttons.js'de d de??i??keninde tan??ml??. Butona ba??lamak i??in onclick event'i olarak d.show() atamal??s??n ??????-->
    <div class="modal" tabindex="-1" id="davet">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="images/banner2.png" class="banner">
                    <h4>Oyun Haz??r</h4>

                    <div class="invite-content">
                        <div class="start-game-text">
                            <p>Oyunu ba??latabilirsiniz.</p>
                            <small>Yandaki men??den arkada??lar??n??z?? davet edin!</small>
                            <div class="button-menu">
                                <button class="start-game-button"><img src="images/aktif.png"></button>
                                <button class="close-game-button" onclick="javascript: d.hide();"><img src="images/penceredenkalk.png"></button>
                            </div>
                        </div>
                        <p class="mobile-text">Oyunu ba??latabilirsiniz.</p>
                        <div class="invite-menu">
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                            <div class="user-invite">
                                <img src="images/pp.png">
                                <span>Lorem I.</span>
                                <img src="images/ekle.png">
                            </div>
                        </div>
                        <div class="button-menu-mobile">
                            <button class="start-game-button"><img src="images/aktif.png"></button>
                            <button class="close-game-button" onclick="javascript: d.hide();"><img src="images/penceredenkalk.png"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
    <script src="js/buttons-game.js"></script>
    <script src="js/hide-menu.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/emoji.js"></script>
</body>
</html>