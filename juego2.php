<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="batalla2.css" type="text/css" />
        <title>REALIZADO POR JUAN PABLO</title>
    </head>
    <body background="CIAN">
        <table bgcolor="black">
            <tr>
                <td>
        <div class="container">
            <span id="span2" style="--l: '¡B';">¡B</span>
            <span id="span2" style="--l: 'A';">A</span>
            <span id="span2" style="--l: 'T';">T</span>
            <span id="span2" style="--l: 'T';">T</span>
            <span id="span2" style="--l: 'L';">L</span>
            <span id="span2" style="--l: 'E';">E</span>
            <span id="span2" style="--l: 'S';">S</span>
            <span id="span2" style="--l: 'H';">H</span>
            <span id="span2" style="--l: 'I';">I</span>
            <span id="span2" style="--l: 'P!';">P!</span>
            <span id="span2" style="--l: 'E';"> - </span>
            <span id="span2" style="--l: 'S';">2</span>
            <span id="span2" style="--l: 'H';"> </span>
            <span id="span2" style="--l: 'I';">J</span>
            <span id="span2" style="--l: 'P!';">U</span>
            <span id="span2" style="--l: 'P!';">G</span>
            <span id="span2" style="--l: 'E';">A</span>
            <span id="span2" style="--l: 'S';">D</span>
            <span id="span2" style="--l: 'H';">O</span>
            <span id="span2" style="--l: 'I';">R</span>
            <span id="span2" style="--l: 'P!';">E</span>
            <span id="span2" style="--l: 'P!';">S</span>
        </div>
            <img src="SPDR.gif" width="150px" height="150px"><br>
            <audio controls src="Rise.mp3"></audio>
                <br><br>
            </td>
            </tr>
            </table>
            </header>
            <marquee bgcolor="WHITE">SELECCIONA LAS POSICIONES DE TUS NAVES</marquee>
                <br><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="board">
                        </div>
                    </div>
                <div class="col">
                    <div id="boardAttack">
                    </div>
                </div>
            </div>
                <br><br><br><br><br><br><br><br><br>
            <h4>TUS NAVES JUGADOR 1</h4>
            <div id="ships" class="row">
                <div class="col"> 
                    <div>
                        <span>PORTA-AVIONES</span></br>
                        <span>Tamaño: 5</span>
                        <span>TIENES: 1</span>
                    </div>
                    <div class="position"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Acorazado</span></br>
                        <span>Tamaño: 4</span>
                        <span>TIENES: 1</span>
                    </div>
                    <div class="position"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Submarino</span></br>
                        <span>Tamaño: 3</span>
                        <span>TIENES: 1</span>
                    </div>
                    <div class="position"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Destructor</span></br>
                        <span>Tamaño: 2</span>
                        <span>TIENES: 2</span>
                    </div>
                    <div class="position"></div>
                </div>           
            </div>
        </div>
            <br>
            <marquee bgcolor="white">SELECCIONA LAS POSICIONES DE TUS NAVES JUGADOR 2</marquee>
            <br><br>
        <div class="container">
            <div class="row2">
                <div class="col">
                    <div id="board2">
                    </div>
                </div>
                <div class="col">
                    <div id="boardAttack2">
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br>
            <h4 bgcolor="black">TUS NAVES JUGADOR 2</h4>
            <div id="ships2" class="row">
                <div class="col"> 
                    <div>
                        <span>PORTA-AVIONES</span></br>
                        <span>Tamaño: 5</span>
                        <span>TIENES: 1</span>
                    </div>
                    <div class="position2"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Acorazado</span></br>
                        <span>Tamaño: 4</span>
                        <span>TIENES: 1</span>
                    </div>
                    <div class="position2"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Submarino</span></br>
                        <span>Tamaño: 3</span>
                        <span>TIENES: 1</span>
                    </div>
                    <div class="position2"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Destructor</span></br>
                        <span>Tamaño: 2</span>
                        <span>TIENES: 2</span>
                    </div>
                    <div class="position2"></div>
                </div>           
            </div>
        </div>
            <br>                
            <center>
                <button class="btn-neon" id="button" onclick="startGame()">Empezar juego</button>
            </center>
        </div>
        <script type="text/javascript" src="batalla2.js"></script>
        <center>
            <a href="PROGRAMA.php" class="btn-neon">
                <span id="span1"></span>
                <span id="span5"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                VOLVER 
            </a><br>
        </center>
    </body>
</html>